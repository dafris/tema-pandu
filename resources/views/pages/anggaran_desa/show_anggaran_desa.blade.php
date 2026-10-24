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
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">PERSENTASE ANGGARAN DESA</marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">PERSENTASE ANGGARAN DESA</h1></div>
					<div class="mt40">
						<form class="form-three">
							<div class="autocol mlr-min10">
								<div class="form3">
									<div class="difle-l">
										<label for="list_desa">{{ config('setting.sebutan_desa') }}</label>
										<input type="hidden" id="profil_id" value="{{ $profil->id }}">
										<select class="form-control" id="list_desa" style="width:100%;">
											<option value="Semua">Semua Desa</option>
										</select>
									</div>
								</div>
								<div class="form3">
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
								<div class="form3">
									<div class="difle-l">
										<label for="list_year">Tahun</label>
										<select class="form-control" id="list_year" style="width:100%;">
											<option value="Semua">Semua</option>
										</select>
									</div>
								</div>
							</div>		
						</form>
						<div class="mt30">
							<div id="chartdiv" class="chart-anggaran" style="width:100%;overflow:hidden;text-align: left;"></div>	
						</div>
						<div class="mt30">
							<div id="detail_anggaran"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    @endsection @include('partials.asset_amcharts') @include('partials.asset_select2') @push('scripts')
    <script>
        $(function() {            
            $('#list_months').select2();
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
            
            $('#list_year').select2();
            // Change Dashboard when Lsit Desa changed
            $('#list_desa,#list_year,#list_months').on('change', function(e) {
                var did = $('#list_desa').find(":selected").val();
                var year = $('#list_year').find(":selected").text();
                var mid = $('#list_months').find(":selected").val();
                das_chart_anggaran(mid, did, year);
            });            
            $('#list_year').trigger('change');
        });

        function das_chart_anggaran(mid, did, year) {

            $.ajax('{!! route('api.statistik.chart-anggaran-desa') !!}', {
                beforeSend: function() {
                    $('#chartdiv').html(
                        '<div class="text-center"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>');
                },
                data: {
                    mid: mid,
                    did: did,
                    y: year
                }
            }).done(function(data) {
                if (data.grafik.length == 0) {
                    $('#chartdiv').html('<div class="text-center"><h4>Data Tidak Ditemukan</h4></div>');
                    return;
                } else {
                    create_chart_anggaran(data.grafik);
                }
                $('#detail_anggaran').html(data.detail);
            });

        }


        function create_chart_anggaran(data) {

            /**
             * Create the chart
             */
            /*AmCharts.addInitHandler( function ( chart ) {

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
                if (!chart.legend || !chart.legend.enabled || !chart.legend.generateFromData) {
                    return;
                }

                var categoryField = chart.categoryField;
                var colorField = chart.graphs.lineColorField || chart.graphs.fillColorsField || chart.graphs.colorField;
                var legendData =  chart.dataProvider.map(function(data, idx) {
                    var markerData = {
                        "title": data[categoryField] + ":as " + data[chart.graphs.valueField],
                        "color": data[colorField],
                        "marginRight":20,
                        "autoMargins":false,
                        "dataIdx": idx //store a copy of the index of where this appears in the dataProvider array for ease of removal/re-insertion
                    };
                    if (!markerData.color) {
                        markerData.color = chart.graphs.lineColor;
                    }
                    data.dataIdx = idx; //also store it in the dataProvider object itself
                    return markerData;
                });

                chart.legend.data = legendData;

                //make the markers toggleable
                chart.legend.switchable = true;
                chart.legend.addListener("clickMarker", handleCustomMarkerToggle);

            }, ['pie'] );*/

            var chart = AmCharts.makeChart("chartdiv", {
                "hideCredits": true,
                "type": "pie",
                "theme": "light",
                "dataProvider": data,
                "valueField": "jumlah",
                "titleField": "anggaran",
                "outlineAlpha": 0.4,
                "depth3D": 15,
                "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                "angle": 30,
                "export": {
                    "enabled": true,
                    "pageOrigin": false,
                    "fileName": "Persentase Anggaran Desa (APBDes)",
                },
                "allLabels": [{
                    "text": "Persentase Anggaran Desa (APBDes)",
                    "align": "center",
                    "bold": true,
                    "size": 20,
                    "y": 10
                }],
                /*"legend": {
                    "generateFromData": true //custom property for the plugin
                },*/
                "legend": {
                    "position": "bottom",
                    "marginRight": 20,
                    "marginLeft": 100,
                    "autoMargins": true,
                    "valueWidth": 90
                },
                "marginTop": 50,
                "numberFormatter": {
                    "precision": -1,
                    "decimalSeparator": ",",
                    "thousandsSeparator": "."
                }
            });

            chart.addListener("init", handleInit);

            chart.addListener("rollOverSlice", function(e) {
                handleRollOver(e);
            });

            function handleInit() {
                chart.legend.addListener("rollOverItem", handleRollOver);
            }

            function handleRollOver(e) {
                var wedge = e.dataItem.wedge.node;
                wedge.parentNode.appendChild(wedge);
            }
        }
    </script>
@endpush
