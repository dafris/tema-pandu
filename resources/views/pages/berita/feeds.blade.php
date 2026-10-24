@php
use Illuminate\Pagination\LengthAwarePaginator;
$listDesaFilter = \App\Models\DataDesa::whereNotNull('website')->get();

$allFeedsCached = Cache::remember('semua_berita_desa_clean_v1', now()->addHours(4), function() {
$allFeeds = [];        
try {
$listDesa = \App\Models\DataDesa::whereNotNull('website')->get();
foreach ($listDesa as $desa) {
if (!isset($desa->website_url_feed) || !is_array($desa->website_url_feed) || empty($desa->website_url_feed['website'])) {
continue;
}
$feedInfo = $desa->website_url_feed; 

$ctx = stream_context_create([
'http' => [
'timeout' => 1.5, 
'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) OpenDK'
]
]); 
try {
$xmlString = @file_get_contents($feedInfo['website'], false, $ctx);
if ($xmlString) {
$xml = @simplexml_load_string(trim($xmlString));
if ($xml && isset($xml->channel->item)) {
$countPerDesa = 0;
foreach ($xml->channel->item as $xmlItem) {
if ($countPerDesa >= 8) break; 
$image = '';
if (isset($xmlItem->enclosure)) {
$image = (string)$xmlItem->enclosure['url'];
} elseif (isset($xmlItem->image)) {
$image = (string)$xmlItem->image;
}
if (empty($image) && isset($xmlItem->description)) {
preg_match('/<img.+src=["\']([^"\']+)["\']/i', (string)$xmlItem->description, $matches);
	if (isset($matches[1])) {
	$image = $matches[1];
	}
	}
	$pubDate = isset($xmlItem->pubDate) ? (string)$xmlItem->pubDate : now();
	$allFeeds[] = [
	'title'       => (string)$xmlItem->title,
	'link'        => (string)$xmlItem->link,
	'image'       => $image ?: 'https://images.placeholders.dev/?width=300&height=200&text=No+Image', 
	'date'        => \Carbon\Carbon::parse($pubDate),
	'nama_desa'   => $feedInfo['nama'] ?? 'Desa',
	];
	
	$countPerDesa++;
	}
	}
	}
	} catch (\Exception $e) {
	continue; 
	}
	}
	} catch (\Exception $e) {
	// Tangkap error model
	}
	return collect($allFeeds)->sortByDesc('date')->take(120);
    });
	
	$selectedDesa = strip_tags(trim(request('filter_desa')));
	if (!empty($selectedDesa)) {
    $allFeedsCached = $allFeedsCached->where('nama_desa', $selectedDesa);
	}
	
    $perPage = 12; 
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $currentItems = $allFeedsCached->slice(($currentPage - 1) * $perPage, $perPage)->values()->all();
    
    $feedTerbaru = new LengthAwarePaginator(
	$currentItems,
	$allFeedsCached->count(),
	$perPage,
	$currentPage,
	['path' => LengthAwarePaginator::resolveCurrentPath(), 'query' => request()->query()]
    );
	@endphp
	
	
	<div class="box">
		<div class="box-body">
			<!-- Form Filter Per Desa -->
			<form method="GET" action="" class="mb20">
				<div class="filterdesa difle-c to-center">
					<div class="form-group" style="margin-bottom: 0;">
						<label for="filter_desa" style="margin-bottom: 5px;">Filter Berdasarkan Desa:</label>
						<select name="filter_desa" id="filter_desa" class="form-control" onchange="this.form.submit()">
							<option value="">-- Semua Desa --</option>
							@foreach($listDesaFilter as $desaItem)
							@php 
							$namaDesaOption = $desaItem->website_url_feed['nama'] ?? $desaItem->nama ?? '';
							@endphp
							@if(!empty($namaDesaOption))
							<option value="{{ $namaDesaOption }}" {{ $selectedDesa == $namaDesaOption ? 'selected' : '' }}>
								{{ $namaDesaOption }}
							</option>
							@endif
							@endforeach
						</select>
					</div>
				</div>
			</form>
			
			@if(isset($feedTerbaru) && $feedTerbaru->count() > 0)
			<div class="autocol mlr-min10">
				@foreach($feedTerbaru as $item)
				<div class="newscol boxshadow brd-radius10 displaygrid">
					<div class="aligntop relhid p10">
						<div class="relhid news-image">
							<a href="{{ $item['link'] }}">
								<div class="image-news"><div class="imagefull"><img src="{{ $item['image'] }}" alt="{{ $item['title'] }}"></div></div>
							</a>
						</div>
						<div class="relhid news-date desktop-only">
							{{ $item['date']->translatedFormat('d F Y') }}
						</div>
						<div class="news-title title-item">
							<div class="mt10"><span>{{ $item['nama_desa'] }}</span></div>
							<a href="${item.link}"><h2 class="mt5">{{ $item['title'] }}</h2></a>
							<div class="info-item difle-l mb5 mt5 mobile-view" style="margin-left:7px;">
								<div class="info-item-icon">
									<svg viewBox="0 0 24 24"><path d="M19 3H18V1H16V3H8V1H6V3H5C3.9 3 3 3.9 3 5V19C3 20.11 3.9 21 5 21H19C20.11 21 21 20.11 21 19V5C21 3.9 20.11 3 19 3M19 19H5V9H19V19M5 7V5H19V7H5M10.56 17.46L16.5 11.53L15.43 10.47L10.56 15.34L8.45 13.23L7.39 14.29L10.56 17.46Z" /></svg>
								</div>
								{{ $item['date']->translatedFormat('d F Y') }}
							</div>
						</div>
					</div>	
				</div>	
				@endforeach
			</div>	
			<div class="difle-c mt20">
                {{ $feedTerbaru->appends(['filter_desa' => $selectedDesa])->links() }}
			</div>
            
			@else
            <div class="alert alert-info text-center" style="margin-top: 15px;">
                <i class="fa fa-info-circle"></i> Tidak ada berita desa yang ditemukan untuk filter tersebut.
			</div>
			@endif
		</div>
	</div>		