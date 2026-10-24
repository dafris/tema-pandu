@php
    use App\Models\Komplain;
    
    //$komplains = Komplain::where('status','<>', 'REVIEW')->where('status', '<>', 'DITOLAK')->orderBy('created_at', 'desc')->limit(5)->get();
    
    $komplains = Komplain::leftJoin('das_jawab_komplain', 'das_komplain.komplain_id', '=', 'das_jawab_komplain.komplain_id')
        ->selectRaw('das_komplain.judul, das_komplain.slug, count(das_jawab_komplain.id) as total')
        ->where('status', '<>', 'REVIEW')
        ->where('status', '<>', 'DITOLAK')
        ->where('status', '<>', 'SELESAI')
        ->groupBy('das_komplain.komplain_id', 'das_komplain.id', 'das_komplain.judul', 'das_komplain.slug')
        ->orderBy('total', 'DESC')
        ->limit(5)
        ->get();
@endphp

@if (count($komplains) > 0)
	<div class="tabbox">
		<div class="scrollbar" id="style-3">
			@foreach ($komplains as $item)
			<a href="{{ route('sistem-komplain.komplain', $item->slug) }}">
			<div class="sikema-item mt10">
				<div class="autocol">
					<div class="sikema-item-icon">
						<svg viewBox="0 0 24 24"><path d="M18,8H6V6H18V8M18,11H6V9H18V11M18,14H6V12H18V14M22,4A2,2 0 0,0 20,2H4A2,2 0 0,0 2,4V16A2,2 0 0,0 4,18H18L22,22V4Z" /></svg>
					</div>
					<div class="sikema-item-text">
						<p>{{ $item->judul }}</p>
					</div>
				</div>
			</div>	
			</a>
			@endforeach
			<a href="{{ route('sistem-komplain.komplain-sukses') }}">
				<div class="difle-r">
				<div class="sikema-more difle-l">Lihat Semua</div>	
				</div>	
			</a>
	    </div>
	</div>		
@else
	<div class="tabbox difle-c">
		<div class="data-empty difle-c">
			<svg viewBox="0 0 24 24"><path d="M18,8H6V6H18V8M18,11H6V9H18V11M18,14H6V12H18V14M22,4A2,2 0 0,0 20,2H4A2,2 0 0,0 2,4V16A2,2 0 0,0 4,18H18L22,22V4Z" /></svg>Untuk saat ini belum ada data yang tersedia
		</div>
	</div>	
@endif
