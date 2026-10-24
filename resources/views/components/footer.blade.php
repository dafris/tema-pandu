@php defined('THEME_VERSION') or define('THEME_VERSION', 'v1.0') @endphp
<div class="footer-section mt40">
	<div class="mlr-page">
	<div class="relhid footer-inner">
		<div class="autocol">
			<div class="footer-left">
				@include('components.jamkerja')
			</div>
			<div class="footer-center"></div>
			<div class="footer-right">
				@include('widgets.visitor')
			</div>
		</div>
		<div class="footer-absolute displaygrid to-center">
			<div class="aligntop">
				<img src="{{ is_logo($profil->file_logo) }}">
				<h2>{{ strtoupper('PEMERINTAH KAB. ' . $profil->nama_kabupaten) }}</h2>
				<h1>{{ ucwords(strtolower($sebutan_wilayah . ' ' . $profil->nama_kecamatan)) }}</h1>
			</div>
			<div class="alignbottom">
				<div class="footer-address difle-c mt10">
					<svg viewBox="0 0 24 24"><path d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z" /></svg>
					<p>
					@if(!empty($profil->alamat))
						{{ ucwords(strtolower($profil->alamat)) }}
					@else
						Data alamat belum tersedia
					@endif
					</p>
				</div>
				<div class="footer-contact difle-c">
					<div class="contact-inner difle-c">
						<svg viewBox="0 0 24 24"><path d="M21,12.13C20.85,12.14 20.71,12.19 20.61,12.3L19.61,13.3L21.66,15.3L22.66,14.3C22.88,14.09 22.88,13.74 22.66,13.53L21.42,12.3C21.32,12.19 21.18,12.14 21.04,12.13M19.04,13.88L13,19.94V22H15.06L21.12,15.93M20,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H11V19.11L19.24,10.89C19.71,10.4 20.36,10.13 21.04,10.13C21.38,10.13 21.72,10.19 22.04,10.32V6C22.04,4.88 21.12,4 20,4M20,8L12,13L4,8V6L12,11L20,6" /></svg>
						<p>
						@if(!empty($profil->email))
							{{ ucwords(strtolower($profil->email)) }}
						@else
							Data Email belum tersedia
						@endif
						</p>
					</div>
					<div class="contact-inner difle-c">
						<svg viewBox="0 0 24 24"><path d="M6.6 10.8C8 13.6 10.4 15.9 13.2 17.4L15.4 15.2C15.7 14.9 16.1 14.8 16.4 15C17.5 15.4 18.7 15.6 20 15.6C20.6 15.6 21 16 21 16.6V20C21 20.6 20.6 21 20 21C10.6 21 3 13.4 3 4C3 3.4 3.5 3 4 3H7.5C8.1 3 8.5 3.4 8.5 4C8.5 5.2 8.7 6.4 9.1 7.6C9.2 7.9 9.1 8.3 8.9 8.6L6.6 10.8M14 3C13.4 3 13 3.4 13 4S13.4 5 14 5 15 4.6 15 4 14.6 3 14 3M17 3C16.4 3 16 3.4 16 4S16.4 5 17 5 18 4.6 18 4 17.6 3 17 3M20 3C19.4 3 19 3.4 19 4S19.4 5 20 5 21 4.6 21 4 20.6 3 20 3M14 6C13.4 6 13 6.4 13 7S13.4 8 14 8 15 7.6 15 7 14.6 6 14 6M17 6C16.4 6 16 6.4 16 7S16.4 8 17 8 18 7.6 18 7 17.6 6 17 6M20 6C19.4 6 19 6.4 19 7S19.4 8 20 8 21 7.6 21 7 20.6 6 20 6M14 9C13.4 9 13 9.4 13 10S13.4 11 14 11 15 10.6 15 10 14.6 9 14 9M17 9C16.4 9 16 9.4 16 10S16.4 11 17 11 18 10.6 18 10 17.6 9 17 9M20 9C19.4 9 19 9.4 19 10S19.4 11 20 11 21 10.6 21 10 20.6 9 20 9Z" /></svg>
						<p>
						@if(!empty($profil->telepon))
							{{ ucwords(strtolower($profil->telepon)) }}
						@else
							Data Telepon belum tersedia
						@endif
						</p>
					</div>
				</div>
				<div class="footer-social difle-c">
					@include('widgets.media_sosial')
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="graphmod">
		<div class="graphmod1">
			<svg viewBox="0 0 1181.000000 106.000000"><g transform="translate(0.000000,106.000000) scale(0.100000,-0.100000)" stroke="none"><path d="M0 526 l0 -526 5905 0 5905 0 0 526 0 526 -22 -5 c-13 -3 -135 -26 -273 -51 -1160 -211 -2377 -362 -3540 -441 -1181 -80 -2486 -90 -3670 -30 -1190 61 -2363 190 -3555 391 -340 57 -661 115 -727 131 l-23 5 0 -526z"/></g></svg>
		</div>
		<div class="graphmod2">
			<svg viewBox="0 0 1181.000000 106.000000">
			<linearGradient id="footgrad" x1="0%" y1="0%" x2="100%" y2="0%">
				<stop offset="0%" style="stop-color:var(--cblack); stop-opacity:1" />
				<stop offset="50%" style="stop-color:var(--color1); stop-opacity:1" />
				<stop offset="100%" style="stop-color:var(--cblack); stop-opacity:1" />
			</linearGradient>
			<g transform="translate(0.000000,106.000000) scale(0.100000,-0.100000)" stroke="none"><path fill="url(#footgrad)" d="M0 500 l0 -500 5905 0 5905 0 0 500 c0 393 -3 500 -12 500 -7 0 -71 -11 -143 -25 -790 -153 -1956 -316 -2860 -400 -1121 -104 -2027 -141 -3175 -132 -767 7 -1101 18 -1775 63 -1175 77 -2480 241 -3614 454 -118 22 -218 40 -222 40 -5 0 -9 -225 -9 -500z"/></g></svg>
		</div>
	</div>
	<div class="copyright to-center">
		<div class="mlr-page"><p>OpenDK {{ config('app.version') }} - Tema Pandu.{{ THEME_VERSION }}<p></div>
	</div>
</div>

<button id="backToTop" title="Kembali ke atas"><div class="bttop difle-c"><svg viewBox="0 0 24 24"><path d="M15,20H9V12H4.16L12,4.16L19.84,12H15V20Z" /></svg></div></button>

