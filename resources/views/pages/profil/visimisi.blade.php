@extends('layouts.app')
@section('title', 'Visi dan Misi')
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
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">VISI DAN MISI {{ strtoupper($sebutan_wilayah) }} {{ strtoupper($profil->nama_kecamatan) }}</marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">VISI DAN MISI {{ strtoupper($sebutan_wilayah) }} {{ strtoupper($profil->nama_kecamatan) }}</h1></div>
					<div class="mt40">
						<div id="visimisi-container" class="content-isi"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
@push('scripts')
<script>
    $(function(){
        $(document).on('websiteDataLoaded', function(event, websiteData) {
            var profile = null;            
            if (websiteData.profile) {
                profile = websiteData.profile;                    
            }

            if (!profile) return;            

            $('#visimisi-container').html(`<h3 class="box-title text-bold text-center">VISI</h3>
                <p>${profile.visi}</p>
                <hr>
                <h3 class="box-title text-bold text-center">MISI</h3>
                <p>${profile.misi}</p>`);
        });
    })
</script>
@endpush
