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
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">DATA KEPENDUDUKAN</marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">DATA KEPENDUDUKAN</h1></div>
					<div class="mt40">
						<form class="form-twin">
							<div class="autocol mlr-min15">
								<div class="form2">
									<div class="difle-l">
										<label for="list_desa">{{ config('setting.sebutan_desa') }}</label>
											<input type="hidden" id="profil_id" value="0">
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
						<div class="relhid mt20">
							<div class="autocol mlr-min5">
								<div class="colpddk difle-l">
									<div class="gender-box pddk-total">
										<div class="gender"></div>
										<div class="gender-inner difle-c">
											<div class="gender-icon">
												<svg viewBox="0 0 24 24"><path d="M5 6C3.9 6 3 6.9 3 8S3.9 10 5 10 7 9.11 7 8 6.11 6 5 6M12 4C10.9 4 10 4.89 10 6S10.9 8 12 8 14 7.11 14 6 13.11 4 12 4M19 2C17.9 2 17 2.9 17 4S17.9 6 19 6 21 5.11 21 4 20.11 2 19 2M3.5 11C2.67 11 2 11.67 2 12.5V17H3V22H7V17H8V12.5C8 11.67 7.33 11 6.5 11H3.5M10.5 9C9.67 9 9 9.67 9 10.5V15H10V20H14V15H15V10.5C15 9.67 14.33 9 13.5 9H10.5M17.5 7C16.67 7 16 7.67 16 8.5V13H17V18H21V13H22V8.5C22 7.67 21.33 7 20.5 7H17.5Z" /></svg>
											</div>
										</div>
									</div>
									<div class="pddk-info">Total</br>Penduduk</div>
									<div class="pddk-number" id="total_penduduk">0</div>
								</div>
								<div class="colpddk difle-l">
									<div class="gender-box pddk-man">
										<div class="gender"></div>
										<div class="gender-inner difle-c">
											<div class="gender-icon">
												<svg viewBox="0 0 24 24"><path d="M7.5,2A2,2 0 0,1 9.5,4A2,2 0 0,1 7.5,6A2,2 0 0,1 5.5,4A2,2 0 0,1 7.5,2M6,7H9A2,2 0 0,1 11,9V14.5H9.5V22H5.5V14.5H4V9A2,2 0 0,1 6,7M16.5,2A2,2 0 0,1 18.5,4A2,2 0 0,1 16.5,6A2,2 0 0,1 14.5,4A2,2 0 0,1 16.5,2M15,7H18A2,2 0 0,1 20,9V14.5H18.5V22H14.5V14.5H13V9A2,2 0 0,1 15,7Z" /></svg>
											</div>
										</div>
									</div>
									<div class="pddk-info">Penduduk</br>Laki-laki</div>
									<div class="pddk-number" id="total_lakilaki">0</div>
								</div>
								<div class="colpddk difle-l">
									<div class="gender-box pddk-woman">
										<div class="gender"></div>
										<div class="gender-inner difle-c">
											<div class="gender-icon">
												<svg viewBox="0 0 24 24"><path d="M7.5,2A2,2 0 0,1 9.5,4A2,2 0 0,1 7.5,6A2,2 0 0,1 5.5,4A2,2 0 0,1 7.5,2M6,22V16H3L5.6,8.4C5.9,7.6 6.6,7 7.5,7C8.4,7 9.2,7.6 9.4,8.4L12,16L14.6,8.4C14.9,7.6 15.6,7 16.5,7C17.4,7 18.2,7.6 18.4,8.4L21,16H18V22H15V16H12L9,16V22H6M16.5,2A2,2 0 0,1 18.5,4A2,2 0 0,1 16.5,6A2,2 0 0,1 14.5,4A2,2 0 0,1 16.5,2Z" /></svg>
											</div>
										</div>
									</div>
									<div class="pddk-info">Penduduk</br>Perempuan</div>
									<div class="pddk-number" id="total_perempuan">0</div>
								</div>
								<div class="colpddk difle-l">
									<div class="gender-box pddk-disab">
										<div class="gender"></div>
										<div class="gender-inner difle-c">
											<div class="gender-icon">
												<svg viewBox="0 0 24 24"><path d="M8.5 4A2 2 0 0 1 6.5 6A2 2 0 0 1 4.5 4A2 2 0 0 1 6.5 2A2 2 0 0 1 8.5 4M5 7C3.89 7 3 7.89 3 9V15H5V22H8.61A7 7 0 0 1 6.5 17A7 7 0 0 1 10 10.95V9C10 7.89 9.11 7 8 7M13 8V16H18.5L21.2 19.6L22.8 18.4L19.5 14H15V8M12 12.23A5 5 0 0 0 8.5 17A5 5 0 0 0 13.5 22A5 5 0 0 0 18.5 17H16.5A3 3 0 0 1 13.5 20A3 3 0 0 1 10.5 17A3 3 0 0 1 12 14.41Z" /></svg>
											</div>
										</div>
									</div>
									<div class="pddk-info">Penduduk</br>Disabilitas</div>
									<div class="pddk-number" id="total_disabilitas">0</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="clearfix visible-sm-block"></div>
						</div>
						<div class="mt30">

							<div class="relhid" style="width:100%;">
								<div id="chart_pertumbuhan_penduduk" class="chart-pertumbuhan" style="width: 100%;text-align: left;"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="tabs-data tabs-penduduk">
									<ul class="nav nav-tabs">
										<li class="active"><a class="difle-c" href="#usia" data-toggle="tab">Usia</a></li>
										<li><a class="difle-c" href="#pendidikan" data-toggle="tab">Pendidikan</a></li>
										<li><a class="difle-c" href="#gol-darah" data-toggle="tab">Golongan Darah</a></li>
										<li><a class="difle-c" href="#perkawinan" data-toggle="tab">Perkawinan</a></li>
										<li><a class="difle-c" href="#agama" data-toggle="tab">Agama</a></li>
										{{-- <li><a class="difle-c" href="#kelamin" data-toggle="tab">Kelamin</a></li> --}}
										{{-- <li><a class="difle-c" href="#status-tinggal" data-toggle="tab">Status Tinggal</a></li> --}}
									</ul>
									<div class="tab-content mb30">
										<div class="active tab-pane" id="usia">
											<div id="chart_usia" class="chart-tabs" style="width:100%; overflow: visible; text-align: left;"></div>
										</div>
										<div class="tab-pane" id="pendidikan">
											<div id="chart_pendidikan" class="chart-tabs" style="width:100%; overflow: visible; text-align: left;"></div>
										</div>
										<div class="tab-pane" id="gol-darah">
											<div id="chart_goldarah" class="chart-tabs" style="width:100%; overflow: visible; text-align: left;"></div>
										</div>
										<div class="tab-pane" id="perkawinan">
											<div id="chart_kawin" class="chart-tabs" style="width:100%;overflow: visible; text-align: left;"></div>
										</div>	
										<div class="tab-pane" id="agama">
											<div id="chart_agama" class="chart-tabs" style="width:100%; overflow: visible; text-align: left;"></div>
										</div>
									</div>
								</div>
								<div class="mt15">
								<div class="box-info-data mt15">
									<div class="autocol">
										<div class="boxicon difle-c bgcyan">
											<svg viewBox="0 0 24 24"><path d="M20,17A2,2 0 0,0 22,15V4A2,2 0 0,0 20,2H9.46C9.81,2.61 10,3.3 10,4H20V15H11V17M15,7V9H9V22H7V16H5V22H3V14H1.5V9A2,2 0 0,1 3.5,7H15M8,4A2,2 0 0,1 6,6A2,2 0 0,1 4,4A2,2 0 0,1 6,2A2,2 0 0,1 8,4Z" /></svg>
										</div>
										<div class="boxdata">
											<h2>KTP</h2>
											<h3 id="data_ktp">0 dari 0 Jiwa Terpenuhi</h3>
											<div class="progress">
												<div id="ktp_persen" class="progress-bar" style="width: 0%"></div>
											</div>
											<p id="ktp_terpenuhi">0% Jiwa Tidak Terpenuhi</p>
										</div>
									</div>
								</div>
								<div class="box-info-data mt15">
									<div class="autocol">
										<div class="boxicon difle-c bgpink">
											<svg viewBox="0 0 24 24"><path d="M6.5 6.08C5.72 6.12 5 6.62 4.72 7.4L3 12.13V22H7V12.84L8.42 8.94L10.7 10H14V8H11.15L7.29 6.2C7.03 6.11 6.76 6.07 6.5 6.08M9 17H21V19H9M10 3.5A2 2 0 0 1 8 5.5A2 2 0 0 1 6 3.5A2 2 0 0 1 8 1.5A2 2 0 0 1 10 3.5M21 14.5A1.5 1.5 0 0 1 19.5 16A1.5 1.5 0 0 1 18 14.5A1.5 1.5 0 0 1 19.5 13A1.5 1.5 0 0 1 21 14.5M9 11V13H11V14C11 15.11 11.89 16 13 16H15C16.11 16 17 15.11 17 14V11H15V13H13V12A1 1 0 0 0 12 11Z" /></svg>
										</div>
										<div class="boxdata">
											<h2>Akta Kelahiran</h2>
											<h3 id="data_akta">0 dari 0 Jiwa Terpenuhi</h3>
											<div class="progress">
												<div id="akta_persen" class="progress-bar" style="width: 0%"></div>
											</div>
											<p id="akta_terpenuhi">0% Jiwa Tidak Terpenuhi</p>
										</div>
									</div>
								</div>
								<div class="box-info-data mt15">
									<div class="autocol">
										<div class="boxicon difle-c bgviola">
											<svg viewBox="0 0 24 24"><path d="M7.5,2A2,2 0 0,1 9.5,4A2,2 0 0,1 7.5,6A2,2 0 0,1 5.5,4A2,2 0 0,1 7.5,2M6,7H9A2,2 0 0,1 11,9V14.5H9.5V22H5.5V14.5H4V9A2,2 0 0,1 6,7M16.5,2A2,2 0 0,1 18.5,4A2,2 0 0,1 16.5,6A2,2 0 0,1 14.5,4A2,2 0 0,1 16.5,2M15,22V16H12L14.59,8.41C14.84,7.59 15.6,7 16.5,7C17.4,7 18.16,7.59 18.41,8.41L21,16H18V22H15Z" /></svg>
										</div>
										<div class="boxdata">
											<h2>Akta Nikah</h2>
											<h3 id="data_nikah">0 dari 0 Jiwa Terpenuhi</h3>
											<div class="progress">
												<div id="nikah_persen" class="progress-bar" style="width: 0%"></div>
											</div>
											<p id="nikah_terpenuhi">0% Jiwa Tidak Terpenuhi</p>
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
@include('partials.asset_datatables')
@include('partials.asset_amcharts')
@include('partials.asset_select2')
@push('scripts')
<script>
    $(function() {
        $(document).on('websiteDataLoaded', function(event, websiteData) {
             if (websiteData.desa) {
                        var desaSelect = $('#list_desa');                                                                        
                        websiteData.desa.forEach(function(item) {
                            desaSelect.append(`<option value='${item.desa_id}'>${item.nama}</option>`);
                        });
                        
                        desaSelect.select2();
                    }
        });       

        // First, load the years list
        function loadYearsList() {
            // Show loading state
            $('#total_penduduk').html('...');
            $('#total_lakilaki').html('...');
            $('#total_perempuan').html('...');
            $('#total_disabilitas').html('...');
            $('#data_ktp').html('Loading...');
            $('#data_akta').html('Loading...');
            $('#data_nikah').html('Loading...');

            // Make API call to get years list
            $.ajax({
                url: '{!! $urlApi !!}/statistik-penduduk/listYear',
                method: 'GET',
                success: function(response) {
                    if (response.data && response.data.length > 0) {
                        // Extract the years array from the attributes
                        var yearList = response.data[0].attributes[0].tahun;

                        // Populate year list
                        populateYearList(yearList, null);                                                
                    } else {
                        console.error('No years data received from API');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error loading years list:', error);
                    $('#total_penduduk').html('Error');
                    $('#total_lakilaki').html('Error');
                    $('#total_perempuan').html('Error');
                    $('#total_disabilitas').html('Error');
                }
            });
        }
        
        // Load years list on page load
        loadYearsList();

        // Change Dashboard when List Year changed
        $('#list_year, #list_desa').on('change', function(e) {
            loadStatistikPenduduk();
        });
    });        

    function loadStatistikPenduduk() {
        let desa = $('#list_desa').val();
        let tahun = $('#list_year').val();
        
        // Show loading state
        $('#total_penduduk').html('...');
        $('#total_lakilaki').html('...');
        $('#total_perempuan').html('...');
        $('#total_disabilitas').html('...');
        $('#data_ktp').html('Loading...');
        $('#data_akta').html('Loading...');
        $('#data_nikah').html('Loading...');
        
        // Make API call to get statistik-penduduk data
        $.ajax({
            url: '{!! $urlApi !!}/statistik-penduduk?desa='+desa+'&tahun='+tahun,
            method: 'GET',
            success: function(response) {
                if (response.data && response.data.length > 0) {
                    statistikPendudukData = response.data[0].attributes;

                    // Update dashboard data with current year data (for now using latest)
                    updateDashboard(statistikPendudukData.dashboard);

                    // Update charts
                    updateCharts(statistikPendudukData.chart);
                } else {
                    console.error('No data received from API');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error loading statistik penduduk:', error);
                $('#total_penduduk').html('Error');
                $('#total_lakilaki').html('Error');
                $('#total_perempuan').html('Error');
                $('#total_disabilitas').html('Error');
            }
        });
    }

    function populateYearList(yearList, selectedYear = null) {
        var yearSelect = $('#list_year');
        yearSelect.empty();

        // Add years in reverse order (newest first)
        yearList.reverse().forEach(function(year) {
            var isSelected = (selectedYear && year == selectedYear) || (!selectedYear && year == yearList[0]);
            yearSelect.append('<option value="' + year + '" ' + (isSelected ? 'selected' : '') + '>' + year + '</option>');
        });

        // Initialize select2 again after updating options
        yearSelect.select2();
        yearSelect.trigger('change')
    }

    function updateDashboard(dashboard) {
        $('#total_penduduk').html(dashboard.total_penduduk || 0);
        $('#total_lakilaki').html(dashboard.total_lakilaki || 0);
        $('#total_perempuan').html(dashboard.total_perempuan || 0);
        $('#total_disabilitas').html(dashboard.total_disabilitas || 0);

        // Update KTP info
        var ktpPercentage = parseFloat(dashboard.ktp_persen_terpenuhi || 0);
        $('#data_ktp').html(dashboard.ktp_terpenuhi + ' dari ' + dashboard.ktp_wajib + ' KTP Wajib Terpenuhi');
        $('#ktp_persen').css('width', ktpPercentage + '%');
        $('#ktp_terpenuhi').html(ktpPercentage + '% KTP Wajib Terpenuhi');

        // Update Akta info
        var aktaPercentage = parseFloat(dashboard.akta_persen_terpenuhi || 0);
        $('#data_akta').html(dashboard.akta_terpenuhi + ' dari ' + dashboard.total_penduduk + ' Jiwa Terpenuhi');
        $('#akta_persen').css('width', aktaPercentage + '%');
        $('#akta_terpenuhi').html(aktaPercentage + '% Jiwa Terpenuhi');

        // Update Akta Nikah info
        var nikahPercentage = parseFloat(dashboard.aktanikah_persen_terpenuhi || 0);
        $('#data_nikah').html(dashboard.aktanikah_terpenuhi + ' dari ' + dashboard.aktanikah_wajib + ' Status Kawin Terpenuhi');
        $('#nikah_persen').css('width', nikahPercentage + '%');
        $('#nikah_terpenuhi').html(nikahPercentage + '% Status Kawin Terpenuhi');
    }

    function updateCharts(chartData) {
        // Update chart for population growth
        if (chartData.penduduk) {
            create_chart_penduduk(chartData.penduduk);
        }

        // Update chart for age groups
        if (chartData['penduduk-usia']) {
            create_chart_usia(chartData['penduduk-usia']);
        }

        // Update chart for education
        if (chartData['penduduk-pendidikan']) {
            create_chart_pendidikan(chartData['penduduk-pendidikan']);
        }

        // Update chart for blood types
        if (chartData['penduduk-golongan-darah']) {
            create_chart_goldarah(chartData['penduduk-golongan-darah']);
        }

        // Update chart for marriage status
        if (chartData['penduduk-kawin']) {
            create_chart_kawin(chartData['penduduk-kawin']);
        }

        // Update chart for religion
        if (chartData['penduduk-agama']) {
            create_chart_agama(chartData['penduduk-agama']);
        }
    }

    // Create Chart Penduduk
    function create_chart_penduduk(data) {
        AmCharts.addInitHandler(function(chart_pertumbuhan_penduduk) {
            // set base values
            /*var categoryWidth = 80;
            // calculate bottom margin based on number of data points
            var chartHeight = categoryWidth * chart_pertumbuhan_penduduk.dataProvider.length;
            // set the value
            chart_pertumbuhan_penduduk.div.style.height = chartHeight + 'px';*/
            //method to handle removing/adding columns when the marker is toggled
            function handleCustomMarkerToggle(legendEvent) {
                var dataProvider = legendEvent.chart.dataProvider;
                var itemIndex; //store the location of the removed item
                //Set a custom flag so that the dataUpdated event doesn't fire infinitely, in case you have
                //a dataUpdated event of your own
                legendEvent.chart.toggleLegend = true;
                // The following toggles the markers on and off.
                // The only way to "hide" a column and reserved space on the axis is to remove it
                // completely from the dataProvider. You'll want to use the hidden flag as a means
                // to store/retrieve the object as needed and then sort it back to its original location
                // on the chart using the dataIdx property in the init handler
                if (undefined !== legendEvent.dataItem.hidden && legendEvent.dataItem.hidden) {
                    legendEvent.dataItem.hidden = false;
                    dataProvider.push(legendEvent.dataItem.storedObj);
                    legendEvent.dataItem.storedObj = undefined;
                    //re-sort the array by dataIdx so it comes back in the right order.
                    dataProvider.sort(function(lhs, rhs) {
                        return lhs.dataIdx - rhs.dataIdx;
                    });
                } else {
                    // toggle the marker off
                    legendEvent.dataItem.hidden = true;
                    //get the index of the data item from the data provider, using the
                    //dataIdx property.
                    for (var i = 0; i < dataProvider.length; ++i) {
                        if (dataProvider[i].dataIdx === legendEvent.dataItem.dataIdx) {
                            itemIndex = i;
                            break;
                        }
                    }
                    //store the object into the dataItem
                    legendEvent.dataItem.storedObj = dataProvider[itemIndex];
                    //remove it
                    dataProvider.splice(itemIndex, 1);
                }
                legendEvent.chart.validateData(); //redraw the chart
            }
            //check if legend is enabled and custom generateFromData property
            //is set before running
            if (!chart_pertumbuhan_penduduk.legend || !chart_pertumbuhan_penduduk.legend.enabled || !
                chart_pertumbuhan_penduduk.legend.generateFromData) {
                return;
            }
            var categoryField = chart_pertumbuhan_penduduk.categoryField;
            var colorField = chart_pertumbuhan_penduduk.graphs[0].lineColorField || chart_pertumbuhan_penduduk
                .graphs[0].fillColorsField || chart_pertumbuhan_penduduk.graphs[0].colorField;
            var legendData = chart_pertumbuhan_penduduk.dataProvider.map(function(data, idx) {
                var markerData = {
                    "title": data[categoryField] + " : " + (data[chart_pertumbuhan_penduduk.graphs[
                        0].valueField] + data[chart_pertumbuhan_penduduk.graphs[0]
                        .valueField]),
                    "color": data[colorField],
                    "dataIdx": idx //store a copy of the index of where this appears in the dataProvider array for ease of removal/re-insertion
                };
                if (!markerData.color) {
                    markerData.color = chart_pertumbuhan_penduduk.graphs[0].lineColor;
                    // markerData.color = '#' + Math.floor(Math.random()*16777215).toString(16);
                }
                data.dataIdx = idx; //also store it in the dataProvider object itself
                return markerData;
            });
            chart_pertumbuhan_penduduk.legend.data = legendData;
            //make the markers toggleable
            chart_pertumbuhan_penduduk.legend.switchable = true;
            chart_pertumbuhan_penduduk.legend.addListener("clickMarker", handleCustomMarkerToggle);
        }, ['serial']);
        // Chart Pertumbuhan Penduduk
        var chart_pertumbuhan_penduduk = AmCharts.makeChart("chart_pertumbuhan_penduduk", {
            "type": "serial",
            "theme": "light",
            "marginTop": 50,
            "marginRight": 80,
            "dataProvider": data,
            "valueAxes": [{
                "position": "left",
                "title": "Jumlah Penduduk",
                "baseValue": 0,
                "minimum": 0,
                "axisAlpha": 0,
            }],
            "allLabels": [{
                "text": "Grafik Pertumbuhan Penduduk Tiap Tahun",
                "align": "center",
                "bold": true,
                "size": 14,
                "y": 10
            }],
            "graphs": [{
                    "id": "g1",
                    "balloonText": "Laki-Laki<br><b><span style='font-size:14px;'>[[value]]</span></b>",
                    "bullet": "round",
                    "bulletSize": 8,
                    "lineColor": "#00c0ef",
                    "lineThickness": 2,
                    "negativeLineColor": "#637bb6",
                    "type": "smoothedLine",
                    "valueField": "value_lk",
                    //"labelText" : "[[value]]",
                    //"labelPosition": "middle"
                },
                {
                    "id": "gp",
                    "balloonText": "Perempuan<br><b><span style='font-size:14px;'>[[value]]</span></b>",
                    "bullet": "round",
                    "bulletSize": 8,
                    "lineColor": "#dd4b39",
                    "lineThickness": 2,
                    "negativeLineColor": "#637bb6",
                    "type": "smoothedLine",
                    "valueField": "value_pr",
                    //"labelText" : "[[value]]",
                    //"labelPosition": "middle"
                }
            ],
            "chartCursor": {
                "categoryBalloonDateFormat": "YYYY",
                "cursorAlpha": 0,
                //"valueLineEnabled": true,
                //"valueLineBalloonEnabled": true,
                "valueLineAlpha": 0.5,
                "fullWidth": false,
                "categoryBalloonEnabled": false,
                "zoomable": false
            },
            "dataDateFormat": "YYYY",
            "categoryField": "year",
            "categoryAxis": {
                "minPeriod": "YYYY",
                "parseDates": true,
                "minorGridAlpha": 0.1,
                "minorGridEnabled": true,
                "title": "Tahun"
            },
            "export": {
                "enabled": true,
                "pageOrigin": false,
                "fileName": "Grafik Pertumbuhan Penduduk Tiap Tahun"
            },
            "hideCredits": true,
            "legend": {
                "generateFromData": true
            },
            "numberFormatter": {
                "precision": -1,
                "decimalSeparator": ",",
                "thousandsSeparator": "."
            }
        });
    }
    // Create Chart Usia
    function create_chart_usia(data) {
        // Chart Perbandingan Usia
        AmCharts.addInitHandler(function(chart_usia) {
            // set base values
            var categoryWidth = 80;
            // calculate bottom margin based on number of data points
            var chartHeight = categoryWidth * chart_usia.dataProvider.length;
            // set the value
            chart_usia.div.style.height = chartHeight + 'px';
            //method to handle removing/adding columns when the marker is toggled
            function handleCustomMarkerToggle(legendEvent) {
                var dataProvider = legendEvent.chart.dataProvider;
                var itemIndex; //store the location of the removed item
                //Set a custom flag so that the dataUpdated event doesn't fire infinitely, in case you have
                //a dataUpdated event of your own
                legendEvent.chart.toggleLegend = true;
                // The following toggles the markers on and off.
                // The only way to "hide" a column and reserved space on the axis is to remove it
                // completely from the dataProvider. You'll want to use the hidden flag as a means
                // to store/retrieve the object as needed and then sort it back to its original location
                // on the chart using the dataIdx property in the init handler
                if (undefined !== legendEvent.dataItem.hidden && legendEvent.dataItem.hidden) {
                    legendEvent.dataItem.hidden = false;
                    dataProvider.push(legendEvent.dataItem.storedObj);
                    legendEvent.dataItem.storedObj = undefined;
                    //re-sort the array by dataIdx so it comes back in the right order.
                    dataProvider.sort(function(lhs, rhs) {
                        return lhs.dataIdx - rhs.dataIdx;
                    });
                } else {
                    // toggle the marker off
                    legendEvent.dataItem.hidden = true;
                    //get the index of the data item from the data provider, using the
                    //dataIdx property.
                    for (var i = 0; i < dataProvider.length; ++i) {
                        if (dataProvider[i].dataIdx === legendEvent.dataItem.dataIdx) {
                            itemIndex = i;
                            break;
                        }
                    }
                    //store the object into the dataItem
                    legendEvent.dataItem.storedObj = dataProvider[itemIndex];
                    //remove it
                    dataProvider.splice(itemIndex, 1);
                }
                legendEvent.chart.validateData(); //redraw the chart
            }
            //check if legend is enabled and custom generateFromData property
            //is set before running
            if (!chart_usia.legend || !chart_usia.legend.enabled || !chart_usia.legend.generateFromData) {
                return;
            }
            var categoryField = chart_usia.categoryField;
            var colorField = chart_usia.graphs[0].lineColorField || chart_usia.graphs[0].fillColorsField ||
                chart_usia.graphs[0].colorField;
            var legendData = chart_usia.dataProvider.map(function(data, idx) {
                var markerData = {
                    "title": data[categoryField] + ": " + data[chart_usia.graphs[0].valueField],
                    "color": data[colorField],
                    "dataIdx": idx //store a copy of the index of where this appears in the dataProvider array for ease of removal/re-insertion
                };
                if (!markerData.color) {
                    markerData.color = chart_usia.graphs[0].lineColor;
                }
                data.dataIdx = idx; //also store it in the dataProvider object itself
                return markerData;
            });
            chart_usia.legend.data = legendData;
            //make the markers toggleable
            chart_usia.legend.switchable = true;
            chart_usia.legend.addListener("clickMarker", handleCustomMarkerToggle);
        }, ['serial']);
        var chart_usia = AmCharts.makeChart("chart_usia", {
            "theme": "light",
            "type": "serial",
            "startDuration": 1,
            "rotate": true,
            "legend": {
                "generateFromData": true //custom property for the plugin
            },
            "dataProvider": data,
            "valueAxes": [{
                "position": "left",
                "title": "Jumlah Penduduk",
                "baseValue": 0,
                "minimum": 0
            }],
            "allLabels": [{
                "text": "Jumlah Penduduk Berdasarkan Kelompok Usia",
                "align": "center",
                "bold": true,
                "size": 14,
                "y": 10
            }],
            "marginTop": 50,
            "graphs": [{
                "balloonText": "[[category]]: <b>[[value]]</b>",
                "fillColorsField": "color",
                "fillAlphas": 1,
                "lineAlpha": 0.1,
                "type": "column",
                "valueField": "value",
                "labelText": "[[value]]",
                "labelPosition": "middle"
            }],
            "depth3D": 5,
            "angle": 10,
            "chartCursor": {
                "categoryBalloonEnabled": false,
                "cursorAlpha": 0,
                "zoomable": false
            },
            "categoryField": "umur",
            "categoryAxis": {
                "gridPosition": "start",
                "title": "Kelompok Usia",
                "labelRotation": 90
            },
            "export": {
                "enabled": true,
                "pageOrigin": false,
                "fileName": "Jumlah Penduduk Berdasarkan Kelompok Usia"
            },
            "hideCredits": true,
            "numberFormatter": {
                "precision": -1,
                "decimalSeparator": ",",
                "thousandsSeparator": "."
            }
        });
    }
    // Create Chart Pendidikan
    function create_chart_pendidikan(data) {
        // Chart Perbandingan Pendidikan
        AmCharts.addInitHandler(function(chart_pendidikan) {
            // set base values
            var categoryWidth = 85;
            // calculate bottom margin based on number of data points
            var chartHeight = categoryWidth * 5;
            // set the value
            chart_pendidikan.div.style.height = chartHeight + 'px';
        }, ['serial']);
        var chart_pendidikan = AmCharts.makeChart("chart_pendidikan", {
            "theme": "light",
            "type": "serial",
            "hideCredits": true,
            "startDuration": 1,
            "rotate": true,
            "dataProvider": data,
            "graphs": [{
                "balloonText": "SD: <b>[[value]]</b>",
                //"fillColorsField": "color",
                "fillColors": "#0491c7",
                "fillAlphas": 1,
                "lineAlpha": 0.1,
                "type": "column",
                "title": "SD",
                "valueField": "SD",
                "labelText": "[[value]]",
                "labelPosition": "middle"
            }, {
                "balloonText": "SLTP/Sederajat: <b>[[value]]</b>",
                //"fillColorsField": "color",
                "fillColors": "#03749f",
                "fillAlphas": 1,
                "lineAlpha": 0.1,
                "type": "column",
                "title": "SLTP/Sederajat",
                "valueField": "SLTP",
                "labelText": "[[value]]",
                "labelPosition": "middle"
            }, {
                "balloonText": "SLTA/Sederajat: <b>[[value]]</b>",
                //"fillColorsField": "color",
                "fillColors": "#025777",
                "fillAlphas": 1,
                "lineAlpha": 0.1,
                "type": "column",
                "title": "SLTA/Sederajat",
                "valueField": "SLTA",
                "labelText": "[[value]]",
                "labelPosition": "middle"
            }, {
                "balloonText": "DIPLOMA: <b>[[value]]</b>",
                //"fillColorsField": "color",
                "fillColors": "#013a4f",
                "fillAlphas": 1,
                "lineAlpha": 0.1,
                "type": "column",
                "title": "DIPLOMA",
                "valueField": "DIPLOMA",
                "labelText": "[[value]]",
                "labelPosition": "middle"
            }, {
                "balloonText": "SARJANA: <b>[[value]]</b>",
                //"fillColorsField": "color",
                "fillColors": "#001d27",
                "fillAlphas": 1,
                "lineAlpha": 0.1,
                "type": "column",
                "title": "SARJANA",
                "valueField": "SARJANA",
                "labelText": "[[value]]",
                "labelPosition": "middle"
            }],
            "depth3D": 5,
            "angle": 10,
            "categoryField": "year",
            "export": {
                "enabled": true,
                "pageOrigin": false,
                "fileName": "Jumlah Penduduk Berdasarkan Tingkat Pendidikan",
            },
            "legend": {
                "enabled": true,
                "useGraphSettings": true
            },
            "valueAxes": [{
                "position": "left",
                "title": "Jumlah Penduduk",
                "baseValue": 0,
                "minimum": 0
            }],
            "categoryAxis": {
                "gridPosition": "start",
                "title": "Tahun",
                "labelRotation": 90
            },
            "allLabels": [{
                "text": "Jumlah Penduduk Berdasarkan Tingkat Pendidikan",
                "align": "center",
                "bold": true,
                "size": 14,
                "y": 10
            }],
            "marginTop": 50,
            "numberFormatter": {
                "precision": -1,
                "decimalSeparator": ",",
                "thousandsSeparator": "."
            }
        });
    }
    // Create Chart Golongan Darah
    function create_chart_goldarah(data) {
        // Chart Perbandingan Pendidikan
        AmCharts.addInitHandler(function(chart_goldarah) {
            // set base values
            var categoryWidth = 80;
            // calculate bottom margin based on number of data points
            var chartHeight = categoryWidth * chart_goldarah.dataProvider.length;
            // set the value
            chart_goldarah.div.style.height = chartHeight + 'px';
            //method to handle removing/adding columns when the marker is toggled
            function handleCustomMarkerToggle(legendEvent) {
                var dataProvider = legendEvent.chart.dataProvider;
                var itemIndex; //store the location of the removed item
                //Set a custom flag so that the dataUpdated event doesn't fire infinitely, in case you have
                //a dataUpdated event of your own
                legendEvent.chart.toggleLegend = true;
                // The following toggles the markers on and off.
                // The only way to "hide" a column and reserved space on the axis is to remove it
                // completely from the dataProvider. You'll want to use the hidden flag as a means
                // to store/retrieve the object as needed and then sort it back to its original location
                // on the chart using the dataIdx property in the init handler
                if (undefined !== legendEvent.dataItem.hidden && legendEvent.dataItem.hidden) {
                    legendEvent.dataItem.hidden = false;
                    dataProvider.push(legendEvent.dataItem.storedObj);
                    legendEvent.dataItem.storedObj = undefined;
                    //re-sort the array by dataIdx so it comes back in the right order.
                    dataProvider.sort(function(lhs, rhs) {
                        return lhs.dataIdx - rhs.dataIdx;
                    });
                } else {
                    // toggle the marker off
                    legendEvent.dataItem.hidden = true;
                    //get the index of the data item from the data provider, using the
                    //dataIdx property.
                    for (var i = 0; i < dataProvider.length; ++i) {
                        if (dataProvider[i].dataIdx === legendEvent.dataItem.dataIdx) {
                            itemIndex = i;
                            break;
                        }
                    }
                    //store the object into the dataItem
                    legendEvent.dataItem.storedObj = dataProvider[itemIndex];
                    //remove it
                    dataProvider.splice(itemIndex, 1);
                }
                legendEvent.chart.validateData(); //redraw the chart
            }
            //check if legend is enabled and custom generateFromData property
            //is set before running
            if (!chart_goldarah.legend || !chart_goldarah.legend.enabled || !chart_goldarah.legend
                .generateFromData) {
                return;
            }
            var categoryField = chart_goldarah.categoryField;
            var colorField = chart_goldarah.graphs[0].lineColorField || chart_goldarah.graphs[0]
                .fillColorsField || chart_goldarah.graphs[0].colorField;
            var legendData = chart_goldarah.dataProvider.map(function(data, idx) {
                var markerData = {
                    "title": data[categoryField] + ": " + data[chart_goldarah.graphs[0].valueField],
                    "color": data[colorField],
                    "dataIdx": idx //store a copy of the index of where this appears in the dataProvider array for ease of removal/re-insertion
                };
                if (!markerData.color) {
                    markerData.color = chart_goldarah.graphs[0].lineColor;
                }
                data.dataIdx = idx; //also store it in the dataProvider object itself
                return markerData;
            });
            chart_goldarah.legend.data = legendData;
            //make the markers toggleable
            chart_goldarah.legend.switchable = true;
            chart_goldarah.legend.addListener("clickMarker", handleCustomMarkerToggle);
        }, ['serial']);
        var chart_goldarah = AmCharts.makeChart("chart_goldarah", {
            "theme": "light",
            "type": "serial",
            "startDuration": 1,
            "rotate": true,
            "legend": {
                "generateFromData": true //custom property for the plugin
            },
            "dataProvider": data,
            "valueAxes": [{
                "position": "left",
                "title": "Jumlah Penduduk",
                "baseValue": 0,
                "minimum": 0
            }],
            "allLabels": [{
                "text": "Jumlah Penduduk Berdasarkan Golongan Darah",
                "align": "center",
                "bold": true,
                "size": 14,
                "y": 10
            }],
            "marginTop": 50,
            "graphs": [{
                "balloonText": "[[category]]: <b>[[value]]</b>",
                "fillColorsField": "color",
                "fillAlphas": 1,
                "lineAlpha": 0.1,
                "type": "column",
                "valueField": "total",
                "labelText": "[[value]]",
                "labelPosition": "middle"
            }],
            "depth3D": 5,
            "angle": 10,
            "chartCursor": {
                "categoryBalloonEnabled": false,
                "cursorAlpha": 0,
                "zoomable": false
            },
            "categoryField": "blod_type",
            "categoryAxis": {
                "gridPosition": "start",
                "title": "Golongan Darah",
                "labelRotation": 90
            },
            "export": {
                "enabled": true,
                "pageOrigin": false,
                "fileName": "Jumlah Penduduk Berdasarkan Golongan Darah",
            },
            "hideCredits": true,
            "numberFormatter": {
                "precision": -1,
                "decimalSeparator": ",",
                "thousandsSeparator": "."
            }
        });
    }
    //Create Chart Status Kawin
    function create_chart_kawin(data) {
        // Chart Perbandingan Status Kawin
        AmCharts.addInitHandler(function(chart_kawin) {
            // set base values
            var categoryWidth = 80;
            // calculate bottom margin based on number of data points
            var chartHeight = categoryWidth * chart_kawin.dataProvider.length;
            // set the value
            chart_kawin.div.style.height = chartHeight + 'px';
            //method to handle removing/adding columns when the marker is toggled
            function handleCustomMarkerToggle(legendEvent) {
                var dataProvider = legendEvent.chart.dataProvider;
                var itemIndex; //store the location of the removed item
                //Set a custom flag so that the dataUpdated event doesn't fire infinitely, in case you have
                //a dataUpdated event of your own
                legendEvent.chart.toggleLegend = true;
                // The following toggles the markers on and off.
                // The only way to "hide" a column and reserved space on the axis is to remove it
                // completely from the dataProvider. You'll want to use the hidden flag as a means
                // to store/retrieve the object as needed and then sort it back to its original location
                // on the chart using the dataIdx property in the init handler
                if (undefined !== legendEvent.dataItem.hidden && legendEvent.dataItem.hidden) {
                    legendEvent.dataItem.hidden = false;
                    dataProvider.push(legendEvent.dataItem.storedObj);
                    legendEvent.dataItem.storedObj = undefined;
                    //re-sort the array by dataIdx so it comes back in the right order.
                    dataProvider.sort(function(lhs, rhs) {
                        return lhs.dataIdx - rhs.dataIdx;
                    });
                } else {
                    // toggle the marker off
                    legendEvent.dataItem.hidden = true;
                    //get the index of the data item from the data provider, using the
                    //dataIdx property.
                    for (var i = 0; i < dataProvider.length; ++i) {
                        if (dataProvider[i].dataIdx === legendEvent.dataItem.dataIdx) {
                            itemIndex = i;
                            break;
                        }
                    }
                    //store the object into the dataItem
                    legendEvent.dataItem.storedObj = dataProvider[itemIndex];
                    //remove it
                    dataProvider.splice(itemIndex, 1);
                }
                legendEvent.chart.validateData(); //redraw the chart
            }
            //check if legend is enabled and custom generateFromData property
            //is set before running
            if (!chart_kawin.legend || !chart_kawin.legend.enabled || !chart_kawin.legend.generateFromData) {
                return;
            }
            var categoryField = chart_kawin.categoryField;
            var colorField = chart_kawin.graphs[0].lineColorField || chart_kawin.graphs[0].fillColorsField ||
                chart_kawin.graphs[0].colorField;
            var legendData = chart_kawin.dataProvider.map(function(data, idx) {
                var markerData = {
                    "title": data[categoryField] + ": " + data[chart_kawin.graphs[0].valueField],
                    "color": data[colorField],
                    "dataIdx": idx //store a copy of the index of where this appears in the dataProvider array for ease of removal/re-insertion
                };
                if (!markerData.color) {
                    markerData.color = chart_kawin.graphs[0].lineColor;
                }
                data.dataIdx = idx; //also store it in the dataProvider object itself
                return markerData;
            });
            chart_kawin.legend.data = legendData;
            //make the markers toggleable
            chart_kawin.legend.switchable = true;
            chart_kawin.legend.addListener("clickMarker", handleCustomMarkerToggle);
        }, ['serial']);
        var chart_kawin = AmCharts.makeChart("chart_kawin", {
            "theme": "light",
            "type": "serial",
            "startDuration": 1,
            "rotate": true,
            "legend": {
                "generateFromData": true //custom property for the plugin
            },
            "dataProvider": data,
            "valueAxes": [{
                "position": "left",
                "title": "Jumlah Penduduk",
                "baseValue": 0,
                "minimum": 0
            }],
            "allLabels": [{
                "text": "Jumlah Penduduk Berdasarkan Status Perkawinan",
                "align": "center",
                "bold": true,
                "size": 14,
                "y": 10
            }],
            "marginTop": 50,
            "graphs": [{
                "balloonText": "[[category]]: <b>[[value]]</b>",
                "fillColorsField": "color",
                "fillAlphas": 1,
                "lineAlpha": 0.1,
                "type": "column",
                "valueField": "total",
                "labelText": "[[value]]",
                "labelPosition": "middle"
            }],
            "depth3D": 5,
            "angle": 10,
            "chartCursor": {
                "categoryBalloonEnabled": false,
                "cursorAlpha": 0,
                "zoomable": false
            },
            "categoryField": "status",
            "categoryAxis": {
                "gridPosition": "start",
                "labelRotation": 90,
                "title": "Status Perkawinan",
            },
            "export": {
                "enabled": true,
                "pageOrigin": false,
                "fileName": "Jumlah Penduduk Berdasarkan Status Perkawinan",
            },
            "hideCredits": true,
            "numberFormatter": {
                "precision": -1,
                "decimalSeparator": ",",
                "thousandsSeparator": "."
            }
        });
    }
    //Create Chart Agama
    function create_chart_agama(data) {
        // Chart Perbandingan Status Kawin
        AmCharts.addInitHandler(function(chart_agama) {
            // set base values
            var categoryWidth = 80;
            // calculate bottom margin based on number of data points
            var chartHeight = categoryWidth * chart_agama.dataProvider.length;
            // set the value
            chart_agama.div.style.height = chartHeight + 'px';
            //method to handle removing/adding columns when the marker is toggled
            function handleCustomMarkerToggle(legendEvent) {
                var dataProvider = legendEvent.chart.dataProvider;
                var itemIndex; //store the location of the removed item
                //Set a custom flag so that the dataUpdated event doesn't fire infinitely, in case you have
                //a dataUpdated event of your own
                legendEvent.chart.toggleLegend = true;
                // The following toggles the markers on and off.
                // The only way to "hide" a column and reserved space on the axis is to remove it
                // completely from the dataProvider. You'll want to use the hidden flag as a means
                // to store/retrieve the object as needed and then sort it back to its original location
                // on the chart using the dataIdx property in the init handler
                if (undefined !== legendEvent.dataItem.hidden && legendEvent.dataItem.hidden) {
                    legendEvent.dataItem.hidden = false;
                    dataProvider.push(legendEvent.dataItem.storedObj);
                    legendEvent.dataItem.storedObj = undefined;
                    //re-sort the array by dataIdx so it comes back in the right order.
                    dataProvider.sort(function(lhs, rhs) {
                        return lhs.dataIdx - rhs.dataIdx;
                    });
                } else {
                    // toggle the marker off
                    legendEvent.dataItem.hidden = true;
                    //get the index of the data item from the data provider, using the
                    //dataIdx property.
                    for (var i = 0; i < dataProvider.length; ++i) {
                        if (dataProvider[i].dataIdx === legendEvent.dataItem.dataIdx) {
                            itemIndex = i;
                            break;
                        }
                    }
                    //store the object into the dataItem
                    legendEvent.dataItem.storedObj = dataProvider[itemIndex];
                    //remove it
                    dataProvider.splice(itemIndex, 1);
                }
                legendEvent.chart.validateData(); //redraw the chart
            }
            //check if legend is enabled and custom generateFromData property
            //is set before running
            if (!chart_agama.legend || !chart_agama.legend.enabled || !chart_agama.legend.generateFromData) {
                return;
            }
            var categoryField = chart_agama.categoryField;
            var colorField = chart_agama.graphs[0].lineColorField || chart_agama.graphs[0].fillColorsField ||
                chart_agama.graphs[0].colorField;
            var legendData = chart_agama.dataProvider.map(function(data, idx) {
                var markerData = {
                    "title": data[categoryField] + ": " + data[chart_agama.graphs[0].valueField],
                    "color": data[colorField],
                    "dataIdx": idx //store a copy of the index of where this appears in the dataProvider array for ease of removal/re-insertion
                };
                if (!markerData.color) {
                    markerData.color = chart_agama.graphs[0].lineColor;
                }
                data.dataIdx = idx; //also store it in the dataProvider object itself
                return markerData;
            });
            chart_agama.legend.data = legendData;
            //make the markers toggleable
            chart_agama.legend.switchable = true;
            chart_agama.legend.addListener("clickMarker", handleCustomMarkerToggle);
        }, ['serial']);
        var chart_agama = AmCharts.makeChart("chart_agama", {
            "theme": "light",
            "type": "serial",
            "startDuration": 1,
            "rotate": true,
            "dataProvider": data,
            "valueAxes": [{
                "position": "left",
                "title": "Jumlah Penduduk",
                "baseValue": 0,
                "minimum": 0
            }],
            "allLabels": [{
                "text": "Jumlah Penduduk Berdasarkan Agama",
                "align": "center",
                "bold": true,
                "size": 14,
                "y": 10
            }],
            "marginTop": 50,
            "graphs": [{
                "balloonText": "[[category]]: <b>[[value]]</b>",
                "fillColorsField": "color",
                "fillAlphas": 1,
                "lineAlpha": 0.1,
                "type": "column",
                "valueField": "total",
                "labelText": "[[value]]",
                "labelPosition": "middle"
            }],
            "depth3D": 5,
            "angle": 10,
            "chartCursor": {
                "categoryBalloonEnabled": false,
                "cursorAlpha": 0,
                "zoomable": false
            },
            "categoryField": "religion",
            "categoryAxis": {
                "gridPosition": "start",
                "labelRotation": 90,
                "title": "Agama"
            },
            "export": {
                "enabled": true,
                "pageOrigin": false,
                "fileName": "Jumlah Penduduk Berdasarkan Agama",
            },
            "hideCredits": true,
            "legend": {
                "generateFromData": true,
            },
            "numberFormatter": {
                "precision": -1,
                "decimalSeparator": ",",
                "thousandsSeparator": "."
            }
        });
    }
</script>
@endpush