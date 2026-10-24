@extends('layouts.app')

@section('content')
	<div class="content-style">
		<div class="pagetop">
			<div class="mlr-page to-center difle-c">
				<svg viewBox="0 0 24 24"><path d="M6,16.5L3,19.44V11H6M11,14.66L9.43,13.32L8,14.64V7H11M16,13L13,16V3H16M18.81,12.81L17,11H22V16L20.21,14.21L13,21.36L9.53,18.34L5.75,22H3L9.47,15.66L13,18.64" /></svg>
				<h1>Statistik</h1>
			</div>
		</div>
		<div class="mlr-page relhid page-content">
			<div class="relative statis-content">
				<div class="statis-bg">
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">DATA BANTUAN</marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">DATA BANTUAN</h1></div>
					<div class="mt40">
						<form class="form-twin">
							<div class="autocol mlr-min15">
								<div class="form2">
									<div class="difle-l">
										<label for="list_desa">{{ config('setting.sebutan_desa') }}</label>
											<input type="hidden" id="profil_id" value="{{ $profil->id }}">
											<select class="form-control" id="list_desa" style="width:100%;">
											<option value="Semua">Semua {{ config('setting.sebutan_desa') }}</option>
										</select>
									</div>
								</div>
								<div class="form2">
									<div class="difle-l">
										<label for="list_year">Tahun</label>
										<select class="form-control" id="list_year" style="width:100%;">
										</select>
									</div>
								</div>
							</div>		
						</form>

						<div class="mt30">
							<div class="tabs-data">
								<ul class="nav nav-tabs">
									<li class="active"><a class="difle-c" href="#penduduk" data-toggle="tab">Penduduk/Perorangan</a></li>
									<li><a class="difle-c" href="#keluarga" data-toggle="tab">Keluarga/KK</a></li>
								</ul>

								<div class="tab-content">
									<div class="active tab-pane" id="penduduk">
										<div class="row">
											<div class="col-md-12">
												<div id="chart_bantuan_penduduk"
													style="width: 100%; height: 500px; overflow: hidden; text-align: left;"></div>
											</div>
											<div id="tabel_bantuan_penduduk" class="col-md-12">

											</div>
										</div>
									</div>
									<div class="tab-pane" id="keluarga">
										<div class="row">
											<div class="col-md-12">
												<div id="chart_bantuan_keluarga"
													style="width: 100%; height: 500px; overflow: hidden; text-align: left;"></div>
											</div>
											<div id="tabel_bantuan_keluarga" class="col-md-12">

											</div>
										</div>
									</div>

								</div>
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

@push('scripts')
    <script>
        $(function() {
            generateDropdownYear('#list_year')
            $(document).on('websiteDataLoaded', function(event, websiteData) {
                if (websiteData.desa) {
                            var desaSelect = $('#list_desa');                                                                        
                            websiteData.desa.forEach(function(item) {
                                desaSelect.append(`<option value='${item.desa_id}'>${item.nama}</option>`);
                            });
                            
                        desaSelect.select2();
                }
            })


            // Change Dashboard when Lsit Desa changed
            $('#list_desa,#list_year').on('change', function(e) {
                var did = $('#list_desa').find(":selected").val();
                var year = $('#list_year').find(":selected").text();

                change_das_bantuan(did, year);
            });

            $('#list_year').trigger('change')
        });

        function change_das_bantuan(did, year) {
            $.ajax('{!! route('api.statistik.program-bantuan.chart-penduduk') !!}', {
                beforeSend: function() {
                    $('#chart_bantuan_penduduk').html(
                        '<div class="text-center"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>');
                },
                data: {
                    did: did,
                    y: year
                }
            }).done(function(data) {
                if (data.length) {
                    create_chart_bantuan_penduduk(data);
                } else {
                    $('#chart_bantuan_penduduk').html('<div class="text-center">Data Tidak Ditemukan</div>');
                }

            });

            $.ajax('{!! route('api.statistik.program-bantuan.chart-keluarga') !!}', {
                beforeSend: function() {
                    $('#chart_bantuan_keluarga').html(
                        '<div class="text-center"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>');
                },
                data: {
                    did: did,
                    y: year
                }
            }).done(function(data) {
                if (data.length) {
                    create_chart_bantuan_keluarga(data);
                } else {
                    $('#chart_bantuan_keluarga').html('<div class="text-center">Data Tidak Ditemukan</div>');
                }
            });
        }

        function create_chart_bantuan_penduduk(data) {
            var chart_bantuan_penduduk = AmCharts.makeChart("chart_bantuan_penduduk", {
                "hideCredits": true,
                "type": "pie",
                "theme": "light",
                "dataProvider": data,
                "valueField": "value",
                "titleField": "program",
                "outlineAlpha": 0.4,
                "depth3D": 15,
                "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                "angle": 30,
                "export": {
                    "enabled": true,
                    "pageOrigin": false,
                    "fileName": "Peserta Program Bantuan Penduduk/Perorangan",
                },
                "allLabels": [{
                    "text": "Peserta Program Bantuan Penduduk/Perorangan",
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
                    "precision": -1,
                    "decimalSeparator": ",",
                    "thousandsSeparator": "."
                }
            });
        }

        function create_chart_bantuan_keluarga(data) {
            var chart_bantuan_keluarga = AmCharts.makeChart("chart_bantuan_keluarga", {
                "hideCredits": true,
                "type": "pie",
                "theme": "light",
                "dataProvider": data,
                "valueField": "value",
                "titleField": "program",
                "outlineAlpha": 0.4,
                "depth3D": 15,
                "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                "angle": 30,
                "export": {
                    "enabled": true,
                    "pageOrigin": false,
                    "fileName": "Peserta Program Bantuan Keluarga/KK",
                },
                "allLabels": [{
                    "text": "Peserta Program Bantuan Keluarga/KK",
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
                    "precision": -1,
                    "decimalSeparator": ",",
                    "thousandsSeparator": "."
                }
            });
        }
    </script>
@endpush
