@extends('layouts.app')

@section('content')
	<div class="content-style">
		<div class="pagetop">
			<div class="mlr-page to-center difle-c">
				<svg viewBox="0 0 24 24"><path d="M20 2V4L4 8V6H2V18H4V16L6 16.5V18.5C6 20.4 7.6 22 9.5 22S13 20.4 13 18.5V18.3L20 20V22H22V2H20M11 18.5C11 19.3 10.3 20 9.5 20S8 19.3 8 18.5V17L11 17.8V18.5Z" /></svg>
				<h1>SIKEMA</h1>
			</div>
		</div>
		<div class="mlr-page relhid page-content">
			<div class="relative statis-content">
				<div class="statis-bg">
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">DAFTAR KELUHAN</marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">DAFTAR KELUHAN</h1></div>
					<div class="mt40">
						@include('partials.flash_message')
						<div class="box" style="margin:0;padding:0;">
							<div class="sikema-area">
								@if (count($komplains) > 0)
									@foreach ($komplains as $item)
										<div class="box-keluhan boxshadow brd-radius10 p15">
											<div class="autocol mlr-min15">
												<div class="list-sikema-left">
													<div class="autocol">
														<div class="pelapor-image">
															{{-- di ambil dari detail_penduduk - api database gabungan --}}
															@if(!empty($item->detail_penduduk))
															<div class="image-usersikema imagefull"><img src="{{ is_user(json_decode($item->detail_penduduk)->foto, json_decode($item->detail_penduduk)->sex) }}" alt="user image"></div>
															@else

															{{-- diambil dari relasi penduduk --}}
															<div class="image-usersikema imagefull"><img src="{{ is_user($item?->penduduk?->foto, $item?->penduduk?->sex) }}" alt="user image"></div>
															@endif
														</div>
														<div class="pelapor-data">
															<div class="pt10">
															<p>{{ auth()->guest() && $item->anonim ? 'Anonim' : $item->nama }}<br/>melaporkan - {{ diff_for_humans($item->created_at) }}</p>
															<a href="{{ route('sistem-komplain.komplain', $item->slug) }}"><h2>{{ $item->judul }}</h2></a>
															<p>Kategori : {{ $item->kategori_komplain->nama }}</p>
															</div>
														</div>
													</div>
												</div>
												<div class="list-sikema-right">
													<p>{!! get_words($item->laporan, 35) !!} ...</p>
													<p style="display:block;margin:10px 0 0;">
													<a href="{{ route('sistem-komplain.komplain', $item->slug) }}" class="link-black text-sm"><i class="fa fa-comments-o"></i> Tindak Lanjut Laporan ({{ count($item->jawabs) }})</a>
													</p>
												 </div>
											</div>
											
										</div>
									@endforeach
								@else
									<div class="difle-c">
										Data tidak tersedia!
									</div>
								@endif
							</div>
							<div class="box-footer clearfix">
								{!! $komplains->links() !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@push('scripts')
    <script type="text/javascript">
        $(function() {
            setTimeout(function() {
                $("#notifikasi").slideUp("slow");
            }, 2000);
        })
    </script>
@endpush
