
@extends('layouts.app')
@section('title', 'Struktur Pemerintahan')
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
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">APARATUR PEMERINTAHAN {{ strtoupper(config('profil.sebutan_wilayah')) }} <span id="nama-kecamatan"></span></marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">APARATUR PEMERINTAHAN {{ strtoupper(config('profil.sebutan_wilayah')) }} <span id="nama-kecamatan"></span></h1></div>
					<div class="mt40">
						<div class="aparaturpage">
							<!--img id="struktur-organisasi-img" style="width:97%;" src="" class="hidden" -->
							<div class="autocol mlr-min10" id="pengurus-container"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
    @include('forms.image-modal')
    <script>
        $(function(){
            $(document).on('websiteDataLoaded', function(event, websiteData) {
                var profile = null;
                let pengurus = null, pengurusHtml = '';
                if (websiteData.profile) {
                    profile = websiteData.profile;
                    $('#nama-kecamatan').text(profile.nama_kecamatan ? profile.nama_kecamatan.toUpperCase() : '');
                    
                    // Set the structure organization image
                    if(profile.file_struktur_organisasi_path) {
                        $('#struktur-organisasi-img').attr('src', profile.file_struktur_organisasi_path).removeClass('hidden');
                    }
                }
                
                if (websiteData.pengurus) {
                    pengurus = websiteData.pengurus;
                    
                    pengurus.forEach(function(item) {
                        const fotoPath = item.foto ? (item.foto.startsWith('http') ? item.foto : '{{ asset("") }}' + item.foto) : '{{ asset("img/no-profile.png") }}';
                        const jabatanNama = item.jabatan && typeof item.jabatan === 'object' ? item.jabatan.nama : (item.jabatan_nama || '');
                        
                        pengurusHtml += '<div class="aparaturpage-col brd-radius7">' +
                            '<div class="pad aparaturpage-box to-center">' +
							'<div class="image-aparaturpage imagefull">' +
                                '<img id="myImg" src="' + fotoPath + '">' +
								'<div class="title-absolute to-center">' +
								'<h2>' + (item.namaGelar || item.nama || '') + '</h2>' +
								'</div>' +
                            '</div>' +
							'<h3>' + jabatanNama + '</h3>' +
							'</div>' +
                        '</div>';
                    });
                }
                
                $('#pengurus-container').html(pengurusHtml);
            });
        })
    </script>
@endpush
