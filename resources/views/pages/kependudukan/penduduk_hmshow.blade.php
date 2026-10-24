@php
    // Disimpan di Cache selama 12 jam agar database tidak tersentuh di setiap refresh halaman
    $statistikHome = Cache::remember('statistik_penduduk_home_final', now()->addHours(12), function() {
        
        // 1. Eksekusi SATU query tunggal langsung di database (Sangat ringan & cepat)
        $data = \DB::table('das_penduduk')
            ->selectRaw("
                COUNT(*) as total,
                SUM(CASE WHEN sex = 1 OR sex = 'L' OR sex = 'Laki-Laki' THEN 1 ELSE 0 END) as laki,
                SUM(CASE WHEN sex = 2 OR sex = 'P' OR sex = 'Perempuan' THEN 1 ELSE 0 END) as wanita
            ")
            // 2. Proteksi otomatis jika kolom status_dasar belum dimigrasi di database
            ->when(\Schema::hasColumn('das_penduduk', 'status_dasar'), function($query) {
                return $query->where('status_dasar', 1); // Hanya menghitung yang statusnya hidup
            })
            ->first();

        // 3. Konversi hasil akhir menjadi angka murni (integer)
        return [
            'total' => (int) ($data->total ?? 0),
            'laki'  => (int) ($data->laki ?? 0),
            'wanita'=> (int) ($data->wanita ?? 0)
        ];
    });
@endphp

<div class="mlr-page mt20">
<div class="populasi-show brd-radius10 boxshadow mt20">
	<div class="rel-hid p15">  
	<div class="headmodule difle-c to-center mb15">
		<div class="headmodule-icon difle-c"><svg viewBox="0 0 24 24"><path d="M20 17C21.1 17 22 16.1 22 15V4C22 2.9 21.1 2 20 2H9.5C9.8 2.6 10 3.3 10 4H20V15H11V17M15 7V9H9V22H7V16H5V22H3V14H1.5V9C1.5 7.9 2.4 7 3.5 7H15M8 4C8 5.1 7.1 6 6 6S4 5.1 4 4 4.9 2 6 2 8 2.9 8 4M17 6H19V14H17V6M14 10H16V14H14V10M11 10H13V14H11V10Z" /></svg></div>
		<h1 class="gradient-text">Statistik Penduduk</h1>
	</div>
    <div class="autocol mlr-min10">
        <div class="population-box brd-radius7">
			<div class="rel-hid population-inner brd-radius7">
			<div class="autocol po-total">
				<div class="population-icon brd-radius7 difle-c">
					<svg viewBox="0 0 24 24"><path d="M5 6C3.9 6 3 6.9 3 8S3.9 10 5 10 7 9.11 7 8 6.11 6 5 6M12 4C10.9 4 10 4.89 10 6S10.9 8 12 8 14 7.11 14 6 13.11 4 12 4M19 2C17.9 2 17 2.9 17 4S17.9 6 19 6 21 5.11 21 4 20.11 2 19 2M3.5 11C2.67 11 2 11.67 2 12.5V17H3V22H7V17H8V12.5C8 11.67 7.33 11 6.5 11H3.5M10.5 9C9.67 9 9 9.67 9 10.5V15H10V20H14V15H15V10.5C15 9.67 14.33 9 13.5 9H10.5M17.5 7C16.67 7 16 7.67 16 8.5V13H17V18H21V13H22V8.5C22 7.67 21.33 7 20.5 7H17.5Z" /></svg>
				</div>
				<div class="population-content difle-l">
					<h3>Total Penduduk</h3>
					<div class="population-right difle-r">
					<h2>{{ number_format($statistikHome['total'], 0, ',', '.') }}</h2>
					<p>Jiwa</p>
					</div>
				</div>
			</div>
			</div>
        </div>
		<div class="population-box brd-radius7">
			<div class="rel-hid population-inner brd-radius7">
			<div class="autocol po-male">
				<div class="population-icon brd-radius7 difle-c">
					<svg viewBox="0 0 24 24"><path d="M7.5,2A2,2 0 0,1 9.5,4A2,2 0 0,1 7.5,6A2,2 0 0,1 5.5,4A2,2 0 0,1 7.5,2M6,7H9A2,2 0 0,1 11,9V14.5H9.5V22H5.5V14.5H4V9A2,2 0 0,1 6,7M16.5,2A2,2 0 0,1 18.5,4A2,2 0 0,1 16.5,6A2,2 0 0,1 14.5,4A2,2 0 0,1 16.5,2M15,7H18A2,2 0 0,1 20,9V14.5H18.5V22H14.5V14.5H13V9A2,2 0 0,1 15,7Z" /></svg>
				</div>
				<div class="population-content difle-l">
					<h3>Penduduk Laki-laki</h3>
					<div class="population-right difle-r">
					<h2>{{ number_format($statistikHome['laki'], 0, ',', '.') }}</h2>
					<p>Jiwa</p>
					</div>
				</div>
			</div>
			</div>
        </div>
		<div class="population-box brd-radius7">
			<div class="rel-hid population-inner brd-radius7">
			<div class="autocol po-female">
				<div class="population-icon brd-radius7 difle-c">
					<svg viewBox="0 0 24 24"><path d="M7.5,2A2,2 0 0,1 9.5,4A2,2 0 0,1 7.5,6A2,2 0 0,1 5.5,4A2,2 0 0,1 7.5,2M6,22V16H3L5.6,8.4C5.9,7.6 6.6,7 7.5,7C8.4,7 9.2,7.6 9.4,8.4L12,16L14.6,8.4C14.9,7.6 15.6,7 16.5,7C17.4,7 18.2,7.6 18.4,8.4L21,16H18V22H15V16H12L9,16V22H6M16.5,2A2,2 0 0,1 18.5,4A2,2 0 0,1 16.5,6A2,2 0 0,1 14.5,4A2,2 0 0,1 16.5,2Z" /></svg>
				</div>
				<div class="population-content difle-l">
					<h3>Penduduk Perempuan</h3>
					<div class="population-right difle-r">
					<h2>{{ number_format($statistikHome['wanita'], 0, ',', '.') }}</h2>
					<p>Jiwa</p>
					</div>
				</div>
			</div>
			</div>
        </div>
    </div>
	<div class="difle-c">
	<a href="{{ url('statistik/kependudukan') }}" class="more-item brdgrey-1 difle-c mt15" target="_blank" style="line-height:1;">Selengkapnya</a></div>
	</div>
</div>
</div>