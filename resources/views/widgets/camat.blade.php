
<div class="relhid leader">
	<div class="autocol mlr-min5">
		<div class="colsambutan-camat">
			<div class="box-camat brd-radius7">
			<div class="image-camat">
				<div class="imagefull">
					@if ($camat)<img src="@if (isset($camat->foto)) {{ asset($camat->foto) }} @else {{ asset('img/no-profile.png') }} @endif">
					@endif	
				</div>
			</div>	
			</div>				
		</div>
		<div class="colsambutan-text">
			<div class="relhid sambutan">
				<div class="quote-left"><svg viewBox="0 0 300.000000 254.000000"><g transform="translate(0.000000,254.000000) scale(0.100000,-0.100000)"><path d="m1200 2499c-425-176-700-372-902-639-85-113-181-295-222-420-102-311-98-685 11-944 40-97 126-217 214-300 275-259 682-263 937-8 141 140 197 272 197 457 0 137-26 226-97 332-130 193-325 285-539 255-79-11-143-36-238-91-70-41-97 10-88 172 22 423 342 841 780 1018l57 23v93c0 51-3 93-7 92-5 0-51-18-103-40zm1575 5c-226-88-488-236-656-372-196-158-366-389-454-617-135-348-137-761-5-1042 191-409 614-582 980-401 109 53 226 167 283 275 131 250 92 529-103 723-86 86-164 132-266 156-126 30-285 3-396-66-73-44-93-44-114 5-18 44-18 150 1 256 67 386 361 739 748 900l77 32v93c0 52-1 94-2 94-2-1-43-16-93-36z"/></g></svg></div>
				<div class="quote-right"><svg viewBox="0 0 300.000000 254.000000"><g transform="translate(0.000000,254.000000) scale(0.100000,-0.100000)"><path d="M510 2524 c-229 -49 -430 -246 -490 -480 -54 -209 5 -419 160 -574 86 -86 164 -132 266 -156 126 -30 285 -3 396 66 73 44 93 44 114 -5 18 -44 18 -150 -1 -256 -67 -386 -361 -739 -747 -900 l-78 -32 0 -93 0 -94 68 26 c201 75 420 191 594 314 111 78 274 236 351 340 218 295 323 662 289 1013 -28 293 -115 485 -296 654 -170 159 -404 225 -626 177z M2070 2524 c-214 -46 -414 -232 -483 -449 -32 -102 -31 -261 3 -364 67 -207 253 -372 452 -403 136 -20 250 6 397 91 70 41 97 -10 88 -172 -22 -423 -342 -841 -779 -1018 l-58 -23 0 -93 c0 -51 1 -93 3 -93 12 0 203 82 302 129 308 147 537 326 707 551 85 113 181 295 222 420 102 311 98 685 -11 944 -40 97 -126 217 -214 300 -173 163 -403 229 -629 180z"/></g></svg></div>
				<h1 class="mb10">Sambutan {{ $sebutan_kepala_wilayah }}</h1>
				@php
					$sambutanMentah = $profil?->sambutan ?? '';
					$teksBersih = ucwords(strtolower(strip_tags($sambutanMentah)));
				@endphp

				<p>
				@if(!empty($teksBersih))
					{{ Str::limit($teksBersih, 330, '...') }}
					@if(strlen($teksBersih) > 330)
						<a href="#" data-toggle="modal" data-target="#modalSambutan" class="text-primary" style="text-decoration: none;">Selengkapnya</a>
					@endif
				@else
					<span class="text-muted" style="font-style: italic;">Untuk sementara data Sambutan Camat belum tersedia</span>
				@endif
				</p>
			</div>
		</div>
	</div>
	<div class="leader-title">
	@if ($camat)
		<h3>{{ $camat->namaGelar }}</h3>
		<h2>{{ $sebutan_kepala_wilayah }} {{ $profil->nama_kecamatan }}</h2>
	@else
		<h2>Belum Ada Data</h2>	
	@endif	
	</div>	
</div>

<!-- Struktur Modal Sambutan (Bootstrap 3) -->
<div class="modal centercustom fade" id="modalSambutan" tabindex="-1" role="dialog" aria-labelledby="modalSambutanLabel" style="position: fixed;margin: auto;width: 100%;top:0;bottom:0;left:0;z-index:9999999 !important;">
    <div class="modal-dialog modal-lg" role="document">
		<div class="topmodal difle-l">
			<h1 style="text-transform:uppercase;">Sambutan {{ $sebutan_kepala_wilayah }}</h1>
			<div class="closemodal difle-c" data-dismiss="modal"><svg viewBox="0 0 24 24"><path d="M13.46,12L19,17.54V19H17.54L12,13.46L6.46,19H5V17.54L10.54,12L5,6.46V5H6.46L12,10.54L17.54,5H19V6.46L13.46,12Z" /></svg></div>
		</div>
		<div class="inner-modal">
			<div class="inner-modal-box">
				<div class="scrollbar" id="style-3">
				<div class="rel-hid mt15 mb25 plr-15">
                {!! $profil->sambutan !!}
				</div>
				</div>
			</div>
		</div>
    </div>
</div>