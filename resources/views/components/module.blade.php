
<div class="mlr-page mt20">
	<div class="autocol mlr-min10">
		<div class="module-col-right boxshadow brd-radius10">
			<div class="head-gambaran difle-c">
				<div class="headmodule-icon difle-c"><svg viewBox="0 0 24 24"><path d="M19,3H18V1H16V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H10V19H5V8H19V9H21V5A2,2 0 0,0 19,3M21.7,13.35L20.7,14.35L18.65,12.35L19.65,11.35C19.85,11.14 20.19,11.13 20.42,11.35L21.7,12.63C21.89,12.83 21.89,13.15 21.7,13.35M12,18.94L18.07,12.88L20.12,14.88L14.06,21H12V18.94Z" /></svg></div>
				<h1 class="gradient-text">Gambaran Umum</h1>
			</div>
			<div class="rel-hid pt5 plr-15 pb15">
			<div class="autocol mlr-min10">
				<div class="col-desa">
					<div class="head-geo difle-c to-center" style="color:var(--color1);">DAFTAR DESA</div>
					<div class="desa-box brd-radius7">
						<div class="desa-box-inner">
							<div class="scrollbar" id="style-3">
							<div class="rel-hid p10">
							<div id="desa-list-container">
								<ul>
									<li><i class="fa fa-spinner fa-spin"></i> Loading...</li>
								</ul>
							</div>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-wilayah batas-wilayah wilayahhome displaygrid">
					<div class="aligntop">
						<div class="head-geo difle-c to-center" style="color:var(--color1);">BATAS WILAYAH</div>
						@include('pages.profil.geo')
					</div>
					<div class="alignbottom geobot mt15">
						<div class="autocol mlr-min5">
							<div class="geo-bot1 to-center brd-radius5">
							<div class="difle-c pt10 pb10 plr-5">
								<p>Ketinggian :</p><p>{{ $profil?->dataumum?->ketinggian ?? '...' }} MDPL</p>
							</div>
							</div>
							<div class="geo-bot1 to-center brd-radius5">
							<div class="difle-c pt10 pb10 plr-5">
								<p>Luas Wilayah :</p><p>{{ number_format($profil?->dataumum?->luas_wilayah_value ?? 0) }} km<sup>2</sup></p>
							</div>
							</div>
						</div>
						<div class="geo-bot2 to-center brd-radius5 mt10">
							<div class="pt10 pb10 plr-5">
								<p>Tipologi :</p><p>{{ strip_tags($profil?->dataumum?->tipologi ?? '') ?: '...' }}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-gambaran">
				@include('components.map_home')
				</div>
				
			</div>
			</div>
		</div>
	</div>
</div>

@if ($widgetAktif)
	@foreach ($widgetAktif as $widget)
		@php
			$namaWidget = $widget['isi'];
			$bolehTampil = true;
		@endphp

		@if ($bolehTampil)
			@if ($widget['isi'] == 'komplain' || $widget['isi'] == 'sinergi_program')
				<div class="widgets-item">
					@includeIf("widgets.{$namaWidget}", ['judul' => $widget['judul']])
				</div>
			@endif
		@endif
	@endforeach
@endif

