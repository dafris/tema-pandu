@extends('layouts.app')

@section('title', 'Letak Geografis')

@section('content')
	
	<div class="content-style">
		<div class="pagetop">
			<div class="mlr-page to-center difle-c">
				<svg viewBox="0 0 24 24"><path d="M21 10V9L15 3H5C3.89 3 3 3.89 3 5V19C3 20.11 3.9 21 5 21H11V19.13L19.39 10.74C19.83 10.3 20.39 10.06 21 10M14 4.5L19.5 10H14V4.5M22.85 14.19L21.87 15.17L19.83 13.13L20.81 12.15C21 11.95 21.33 11.95 21.53 12.15L22.85 13.47C23.05 13.67 23.05 14 22.85 14.19M19.13 13.83L21.17 15.87L15.04 22H13V19.96L19.13 13.83Z" /></svg>
				<h1>Profil</h1>
			</div>
		</div>
		<div class="mlr-page relhid page-content">
			<div class="relative statis-content">
				<div class="statis-bg">
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">LETAK
                        GEOGRAFIS {{ strtoupper($sebutan_wilayah) }} {{ strtoupper($profil->nama_kecamatan) }}</marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">LETAK
                        GEOGRAFIS {{ strtoupper($sebutan_wilayah) }} {{ strtoupper($profil->nama_kecamatan) }}</h1></div>
					<div class="mt40">
					@if (!empty($profil))	
						<form class="geoform">
							<div class="form-group">
								<div class="to-center difle-c">
									<label for="{{ $sebutan_wilayah }}" style="margin-right:15px;">{{ $sebutan_wilayah }}</label>
									<input type="hidden" id="profil_id" value="{{ $profil->id }}">
									<select class="form-control" id="{{ $sebutan_wilayah }}" name="{{ $sebutan_wilayah }}" onchange=""></select>
								</div>
							</div>
						</form>
						<div id="canvas_peta" class="mapgeo"></div>
						<input type="hidden" name="path" id="path">
						<div class="autocol mlr-min15">
							<div class="column-2 mt15">
								<div class="relhid info-geo">
									{{ ucwords(strtolower($sebutan_wilayah . ' ' . $profil->nama_kecamatan . ', Kabupaten ' . $profil->nama_kabupaten . ', Provinsi ' . $profil->nama_provinsi)) }} mempunyai <b> Luas {{ number_format($profil->dataumum->luas_wilayah_value) }} km<sup>2</sup></b> yang mencakup<b> {{ $wilayah_desa->count() }} Desa/Kelurahan</b>, yaitu :
								</div>	
								<div class="geo-desa">
									 @foreach ($wilayah_desa as $desa)
									<p>{{ config('setting.sebutan_desa') }} {{ $desa->nama }}</p>
									@endforeach
								</div>	
							</div>
							<div class="column-2 mt15 batas-wilayah">
								<div class="to-center"><h3>Batas wilayah {{ $sebutan_wilayah }} {{ ucwords(strtolower($profil->nama_kecamatan)) }} meliputi :</h3></div>
								@include('pages.profil.geo')
							</div>
						</div>
					@else
						Data Letak Geografis Belum Tersedia!
					@endif
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
@include('partials.asset_leaflet')
@push('scripts')
    <script type="application/javascript">
   
    var overlayLayers = {};
    function tampil_peta () { 
      // Inisialisasi tampilan peta
      var posisi = [-1.0546279422758742, 116.71875000000001];
      var zoom = 10;
      var peta_wilayah = L.map('canvas_peta', {
        center: posisi,
        zoom: 13
      });

      var path_kec = {!! $data_umum->path ?? '[]' !!};
      // Geolocation IP Route/GPS
      geoLocation(peta_wilayah);
      showPolygon(path_kec, peta_wilayah);
      
      var baseLayers = getBaseLayers(peta_wilayah, '');
      L.control.layers(baseLayers, overlayLayers, {
                position: 'topleft',
                collapsed: true
      }).addTo(peta_wilayah);
    };

    $(function () {
        var marker_desa = new Array();
        var wilayah_desa = {!! $wilayah_desa !!}
        var marker;
        wilayah_desa.forEach(e => {
            if (e.path != null) {
                marker = set_marker(e, 'Peta Wilayah Desa', 'Wilayah Desa ' + e.nama_desa, {'line' : '#de2d26', 'fill' : '#fff'});
                marker_desa =  marker_desa.concat(marker);
            }
        });
        console.log(marker_desa);
        overlayLayers['Peta Wilayah Desa'] =  wilayah_property(marker_desa, false);
        tampil_peta();
    });
</script>
@endpush
