<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control: no-store;" content="public">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="msapplication-TileColor" content="#005B94">
    <meta name="theme-color" content="#005B94">
    <title>{{ $page_title ?? config('app.name', 'Laravel') }} | {{ $browser_title }}</title>
    <meta name="description" content="{{ $page_description ?? '' }}.">
	<meta name='designer' content='Dafris' />
    <link rel="canonical" href="{{ Request::url() }}">
    <meta itemprop="name" content="{{ $page_title ?? '' }}">
    <meta itemprop="description" content="{{ $page_description ?? '' }}.">
    <meta itemprop="image" content="{{ is_img($page_image ?? '') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--
    <meta name="user-token" content="{{ Auth::user()->api_token }}" /> --}}
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:site_name" content="{{ \URL::to('') }}">
    <meta property="og:title" content="{{ $page_title ?? '' }}">
    <meta property="og:description" content="{{ $page_description ?? '' }}. ">
    <meta property="og:image" content="{{ is_img($page_image ?? '') }}?auto=format&amp;fit=max&amp;w=1200">
    <meta property="og:image:alt" content="{{ is_img($page_image ?? '') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $page_title ?? '' }}">
    <meta name="twitter:description" content="{{ $page_description ?? '' }}. ">
    <meta name="twitter:image" content="{{ is_img($page_image ?? '') }}?auto=format&amp;fit=max&amp;w=1200">
    <link rel="alternate" href="/feed.xml" type="application/atom+xml" data-title="{{ Request::url() }}">

    <link rel="icon" type="image/png" href="{{ is_logo($profil->file_logo) }}" />
    <link rel="mask-icon" href="{{ is_logo($profil->file_logo) }}" color="#5bbad5">
    <link rel="manifest" href="{{ asset('manifest.webmanifest') }}" />

    <link href="{{ asset('/css/placeholder-loading.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/bower_components/font-awesome/css/font-awesome.min.css') }}">
    @stack('css')
    <link rel="stylesheet" href="{{ asset('/css/slider.css') }}">
    
    <link rel="stylesheet" href="{{ asset('/css/swiper.min.css') }}" />
	@include('components.cssmain')
	@include('components.cssmobile')
    <script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>
</head>

<body>
	<div class="absolute-body">
		@include('components.preloader')
		@include('components.topheader')
		@include('components.header')

			@yield('content')

		@include('components.footer')
	</div>
	
    <button id="backToTop" title="Kembali ke atas"><div class="bttop difle-c"><svg viewBox="0 0 24 24"><path d="M15,20H9V12H4.16L12,4.16L19.84,12H15V20Z" /></svg></div></button>
	
    <script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script>
        setTimeout(function() {
            $('.preloader_bg').fadeToggle();
        }, 500);
    </script>
    <script src="{{ asset('/bower_components/jquery/dist/jquery.socialShare.js') }}"></script>
    <script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/bower_components/admin-lte/dist/js/adminlte.min.js') }}"></script>
    <script async defer src="{{ asset('js/github-buttons/buttons.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
	<script>
		window.onscroll = function() {
			var btn = document.getElementById("backToTop");
			if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
				btn.style.display = "block";
			} else {
				btn.style.display = "none";
			}
		};

		document.getElementById("backToTop").onclick = function() {
			window.scrollTo({top: 0, behavior: 'smooth'});
		};
	</script>
	<script>
		$(window).bind('scroll', function () {
			if ($(window).scrollTop() > 150) {
			$('.absolute-body').addClass('ifscroll');
			} else {
			$('.absolute-body').removeClass('ifscroll');
			}
		});
	</script>
	
    @includeWhen(config('setting.dukungan_disabilitas'), 'partials.sienna_accessibility')
    @include( 'components.website-data')
    @stack('scripts')
	<script>
		var _0xNamaKecamatan = "{!! addslashes(ucwords(strtolower($sebutan_wilayah . ' ' . $profil->nama_kecamatan))) !!}";
	</script>
	@include('components.style')
</body>

</html>