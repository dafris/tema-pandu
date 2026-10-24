@extends('layouts.app')

@section('content')
	
	<div class="content-style">
		<div class="pagetop">
			<div class="mlr-page to-center difle-c">
				<svg viewBox="0 0 24 24"><path d="M17 3H7C4.79 3 3 4.79 3 7V17C3 19.21 4.79 21 7 21H19C20.11 21 21 20.11 21 19V9C21 7.9 20.11 7 19 7V5C19 3.9 18.11 3 17 3M17 5V7H7C6.27 7 5.59 7.2 5 7.54V7C5 5.9 5.9 5 7 5M15.5 15.5C14.67 15.5 14 14.83 14 14S14.67 12.5 15.5 12.5 17 13.17 17 14 16.33 15.5 15.5 15.5Z" /></svg>
				<h1>Anggaran</h1>
			</div>
		</div>
		<div class="mlr-page relhid page-content">
			<div class="relative statis-content">
				<div class="statis-bg">
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">REALISASI ANGGARAN</marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">REALISASI ANGGARAN</h1></div>
					<div class="mt40">
						<form class="form-twin">
							<div class="autocol mlr-min15">
								<div class="form2">
									<div class="difle-l">
										<label for="bulan">Bulan</label>
										<select class="form-control" id="list_months" name="m" style="width:100%;">
											<option value="Semua">Semua</option>
											@foreach (months_list() as $key => $month)
												<option value="{{ $key }}">{{ $month }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form2">
									<div class="difle-l">
										<label for="list_year">Tahun</label>
										 <select class="form-control" id="list_year" style="width:100%;">
											<option value="Semua">Semua</option>
											@foreach ($year_list as $year)
												<option value="{{ $year }}">{{ $year }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>		
						</form>
						<div class="anggaran">
							<div class="autocol mlr-min15">
								<div class="col-anggaran">
									<div class="box-info-data">
										<div class="autocol">
											<div class="boxicon difle-c bgcyan">
												<span id="total_belanja_persen">0%</span>
											</div>
											<div class="boxdata boxshadow difle-l">
												<div>
												<h2>Total Belanja</h2>
												<h3 id="total_belanja">Rp 0</h3>
												<div class="progress">
													<div class="progress-bar" style="width: 0%" id="total_belanja_persen_bar"></div>
												</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-anggaran">
									<div class="box-info-data">
										<div class="autocol">
											<div class="boxicon difle-c bgpink">
												<span id="selisih_anggaran_realisasi_persen">0%</span>
											</div>
											<div class="boxdata boxshadow difle-l">
												<div>
												<h2>Selisih Anggaran & Ralisasi</h2>
												<h3 id="selisih_anggaran_realisasi">Rp 0</h3>
												<div class="progress">
													<div class="progress-bar" style="width: 0%" id="selisih_anggaran_realisasi_persen_bar"></div>
												</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-anggaran">
									<div class="box-info-data">
										<div class="autocol">
											<div class="boxicon difle-c bgviola">
												<span id="belanja_pegawai_persen">0%</span>
											</div>
											<div class="boxdata boxshadow difle-l">
												<div>
												<h2>Belanja Pegawai</h2>
												<h3 id="belanja_pegawai">Rp 0</h3>
												<div class="progress">
													<div class="progress-bar" style="width: 0%" id="belanja_pegawai_persen_bar"></div>
												</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-anggaran">
									<div class="box-info-data">
										<div class="autocol">
											<div class="boxicon difle-c bgblue">
												<span id="belanja_barang_jasa_persen">0%</span>
											</div>
											<div class="boxdata boxshadow difle-l">
												<div>
												<h2>Belanja Barang & Jasa</h2>
												<h3 id="belanja_barang_jasa">Rp 0</h3>
												<div class="progress">
													<div class="progress-bar" style="width: 0%" id="belanja_barang_jasa_persen_bar"></div>
												</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-anggaran">
									<div class="box-info-data">
										<div class="autocol">
											<div class="boxicon difle-c bgorange">
												<span id="belanja_modal_persen">0%</span>
											</div>
											<div class="boxdata boxshadow difle-l">
												<div>
												<h2>Belanja Modal</h2>
												<h3 id="belanja_modal">Rp 0</h3>
												<div class="progress">
													<div class="progress-bar" style="width: 0%" id="belanja_modal_persen_bar"></div>
												</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-anggaran">
									<div class="box-info-data">
										<div class="autocol">
											<div class="boxicon difle-c bggreen">
												<span id="belanja_tidak_langsung_persen">0%</span>
											</div>
											<div class="boxdata boxshadow difle-l">
												<div>
												<h2>Belanja Tidak Langsung</h2>
												<h3 id="belanja_tidak_langsung">Rp 0</h3>
												<div class="progress">
													<div class="progress-bar" style="width: 0%" id="belanja_tidak_langsung_persen_bar"></div>
												</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mt30 grafik-anggaran brd-radius10">
							<div id="chartdiv" class="chart-anggaran" style="width:100%;text-align:left;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@include('partials.asset_amcharts')
@include('partials.asset_select2')
@include('partials.asset_numeraljs')
@push('scripts')
    <script>
        $(function() {

            // Select 2 Kecamatan
            $('#list_months').select2();
            $('#list_year').select2();

            var mid = $('#list_months').find(":selected").val();
            var year = $('#list_year').find(":selected").val();

            /*
             Initial Chart Dashboard Pendidikan
             */
            change_das_anggaran(mid, year);
            /*
             End Initial
             */


            // Change div das_kependudukan when Kecamatan changed
            $('#list_months').on('select2:select', function(e) {
                var mid = $('#list_months').find(":selected").val();
                var year = $('#list_year').find(":selected").val();
                change_das_anggaran(mid, year);

            });

            $('#list_year').on('select2:select', function(e) {
                var mid = $('#list_months').find(":selected").val();
                var year = $('#list_year').find(":selected").val();

                change_das_anggaran(mid, year);
            });
        });

        function change_das_anggaran(mid, year) {

            $.ajax('{!! route('statistik.chart-anggaran-realisasi') !!}', {
                data: {
                    mid: mid,
                    y: year
                }
            }).done(function(data) {

                $('#total_belanja').html('Rp ' + numeral(data.sum.total_belanja).format());
                $('#total_belanja_persen').html(numeral(data.sum.total_belanja_persen).format() + '%');
                $('#total_belanja_persen_bar').css('width', data.sum.total_belanja_persen + '%');

                $('#selisih_anggaran_realisasi').html('Rp ' + numeral(data.sum.selisih_anggaran_realisasi).format());
                $('#selisih_anggaran_realisasiPersen').html(numeral(data.sum.selisih_anggaran_realisasi_persen).format() + '%');
                $('#selisih_anggaran_realisasiPersen_bar').css('width', data.sum.selisih_anggaran_realisasi_persen + '%');

                $('#belanja_pegawai').html('Rp ' + numeral(data.sum.belanja_pegawai).format());
                $('#belanja_pegawai_persen').html(numeral(data.sum.belanja_pegawai_persen).format() + '%');
                $('#belanja_pegawai_persen_bar').css('width', data.sum.belanja_pegawai_persen + '%');

                $('#belanja_barang_jasa').html('Rp ' + numeral(data.sum.belanja_barang_jasa).format());
                $('#belanja_barang_jasa_persen').html(numeral(data.sum.belanja_barang_jasa_persen).format() + '%');
                $('#belanja_barang_jasa_persen_bar').css('width', data.sum.belanja_barang_jasa_persen_bar + '%');

                $('#belanja_modal').html('Rp ' + numeral(data.sum.belanja_modal).format());
                $('#belanja_modal_persen').html(numeral(data.sum.belanja_modal_persen).format() + '%');
                $('#belanja_modal_persen_bar').css('width', data.sum.belanja_modal_persen_bar + '%');

                $('#belanja_tidak_langsung').html('Rp ' + numeral(data.sum.belanja_tidak_langsung).format());
                $('#belanja_tidak_langsung_persen').html(numeral(data.sum.belanja_tidak_langsung_persen).format() + '%');
                $('#belanja_tidak_langsung_persen_bar').css('width', data.sum.belanja_tidak_langsung_persen_bar + '%');


                create_chart_anggaran(data.chart);
            });

        }


        function create_chart_anggaran(data) {
            /**
             * Define data for each year
             */
            var chartData = data;

            /**
             * Create the chart
             */
            var chart = AmCharts.makeChart("chartdiv", {
                "hideCredits": true,
                "type": "pie",
                "theme": "light",
                "dataProvider": chartData,
                "valueField": "value",
                "titleField": "anggaran",
                "outlineAlpha": 0.4,
                "depth3D": 15,
                "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                "angle": 30,
                "export": {
                    "enabled": true,
                    "pageOrigin": false,
                    "fileName": "Persentase Anggaran Kecamatan",
                },
                "allLabels": [{
                    "text": "Persentase Anggaran Kecamatan",
                    "align": "center",
                    "bold": true,
                    "size": 20,
                    "y": -4
                }],
                "legend": {
                    "position": "bottom",
                    "marginRight": 20,
                    "autoMargins": false,
                    "valueWidth": 120
                },
                "marginTop": 50,
                "numberFormatter": {
                    "precision": 2,
                    "decimalSeparator": ",",
                    "thousandsSeparator": "."
                }
            });
        }
    </script>
@endpush
