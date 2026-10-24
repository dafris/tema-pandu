@php
    // Gunakan nama key cache baru agar langsung ter-refresh dengan data link
    $feedTerbaru = Cache::remember('home_berita_desa_dengan_link', now()->addMinutes(15), function() {
        $allFeeds = [];
        $listDesa = \App\Models\DataDesa::whereNotNull('website')->get();

        foreach ($listDesa as $desa) {
            $feedInfo = $desa->website_url_feed; 
            $ctx = stream_context_create(['http' => ['timeout' => 3]]); 
            
            try {
                $xmlString = @file_get_contents($feedInfo['website'], false, $ctx);
                
                if ($xmlString) {
                    $xml = simplexml_load_string($xmlString);
                    
                    if ($xml && isset($xml->channel->item)) {
                        foreach ($xml->channel->item as $xmlItem) {
                            $image = '';
                            
                            if (isset($xmlItem->enclosure)) {
                                $image = (string)$xmlItem->enclosure['url'];
                            } elseif (isset($xmlItem->image)) {
                                $image = (string)$xmlItem->image;
                            }

                            if (empty($image) && isset($xmlItem->description)) {
                                $descriptionText = (string)$xmlItem->description;
                                preg_match('/<img.+src=["\']([^"\']+)["\']/i', $descriptionText, $matches);
                                if (isset($matches[1])) {
                                    $image = $matches[1];
                                }
                            }

                            $allFeeds[] = [
                                'title'       => (string)$xmlItem->title,
                                'link'        => (string)$xmlItem->link, // <-- KITA AMBIL LINK DI SINI
                                'image'       => $image ?: 'https://images.placeholders.dev/?width=150&height=100&text=No+Image', 
                                'date'        => \Carbon\Carbon::parse((string)$xmlItem->pubDate),
                                'nama_desa'   => $feedInfo['nama'],
                            ];
                        }
                    }
                }
            } catch (\Exception $e) {
                continue; 
            }
        }

        return collect($allFeeds)->sortByDesc('date')->take(6);
    });
@endphp

@if($feedTerbaru->count() > 0)
    <div id="feeds">
		<div class="feedhome mt20 brd-radius10">
		<div class="feedhome-head difle-c"><h1>Berita & Artikel {{ config('setting.sebutan_desa') }}</h1><a href="{{ url('berita-desa') }}"><svg viewBox="0 0 24 24"><path d="M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" /></svg></a></div>
		<div class="feedhome-area">
		<div class="scrollbar" id="style-3">
		<div class="autocol mlr-min10">
        @foreach($feedTerbaru as $item)
            <div class="feedhome-col">
				<a href="{{ $item['link'] }}" target="_blank" rel="noopener noreferrer">
				<div class="autocol mlr-min5">
					<div class="feedhome-image">
						<div class="image-feed imagefull brd-radius5"><img src="{{ $item['image'] }}" alt="{{ $item['title'] }}"></div>
					</div>
					<div class="feedhome-content">
						<p>{{ $item['date']->translatedFormat('d F Y') }}</p>
						<h2>{{ $item['title'] }}</h2>
						<h3>{{ $item['nama_desa'] }}</h3>
					</div>
				</div>
				</a>
            </div>
        @endforeach
		</div>
		</div>
		</div>
		</div>
    </div>
@endif