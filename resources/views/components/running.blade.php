<div class="running-text">
	<div class="running-inner difle-l">
		<div class="running-head difle-c">
		INFO
		</div>
		<marquee onmouseover="this.stop()" onmouseout="this.start()">
			<div class="run-isi difle-l">
			@if ($widgetAktif)
				@php
					$infoDitemukan = false;
					$daftarJudulBoleh = ['Info1', 'Info2', 'Info3', 'Info4'];
				@endphp

				@foreach ($widgetAktif as $widget)
					@php
						$namaWidget = $widget['isi'];
						$judulBersih = trim(strip_tags($widget['judul']));
						$bolehTampil = in_array($judulBersih, $daftarJudulBoleh) && ($widget['jenis_widget'] == 3);
					@endphp

					@if ($bolehTampil)
						@php
							$infoDitemukan = true;
						@endphp
						<p>{!! html_entity_decode($widget['isi']) !!}</p>
					@endif	
				@endforeach

				@if (!$infoDitemukan)
					<p>{{ ucwords(strtolower($sebutan_wilayah . ' ' . $profil->nama_kecamatan)) }}</p>
					<p>
					Kantor Kecamatan : 
					@if(!empty($profil->alamat))
						{{ ucwords(strtolower($profil->alamat)) }}
					@else
						Data alamat belum tersedia
					@endif
					</p>
					<p>
					Email : 
					@if(!empty($profil->email))
						{{ ucwords(strtolower($profil->email)) }}
					@else
						Data Email belum tersedia
					@endif
					</p>
					<p>Ketinggian : {{ $profil?->dataumum?->ketinggian ?? '...' }} MDPL, Luas Wilayah : {{ number_format($profil?->dataumum?->luas_wilayah_value ?? 0) }} km<sup>2</sup>, Tipologi : {{ strip_tags($profil?->dataumum?->tipologi ?? '') ?: '...' }}</p>
				@endif
			@else
				<p>{{ ucwords(strtolower($sebutan_wilayah . ' ' . $profil->nama_kecamatan)) }}</p>
					<p>
					Kantor Kecamatan : 
					@if(!empty($profil->alamat))
						{{ ucwords(strtolower($profil->alamat)) }}
					@else
						Data alamat belum tersedia
					@endif
					</p>
					<p>
					Email : 
					@if(!empty($profil->email))
						{{ ucwords(strtolower($profil->email)) }}
					@else
						Data Email belum tersedia
					@endif
					</p>
					<p>Ketinggian : {{ $profil?->dataumum?->ketinggian ?? '...' }} MDPL, Luas Wilayah : {{ number_format($profil?->dataumum?->luas_wilayah_value ?? 0) }} km<sup>2</sup>, Tipologi : {{ strip_tags($profil?->dataumum?->tipologi ?? '') ?: '...' }}</p>
			@endif
			</div>
		</marquee>
	</div>
</div>
