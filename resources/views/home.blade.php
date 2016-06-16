<!DOCTYPE html>
<html>
<head>
	<!--<meta http-equiv="content-type" content="text/html; charset=utf-8" />-->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSFR token for ajax call -->
    <!--<meta name="_token" content="{{ csrf_token() }}"/>-->
    <!--<meta id="token" name="token" content="{ { csrf_token() } }">-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Highmaps Home</title>

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="{{ asset('css/bootstrap3.3.5.min.css') }}">
	<!--<link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">-->
	<link rel ="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<!--<link rel="stylesheet" type="text/css" href="http://cloud.github.com/downloads/lafeber/world-flags-sprite/flags32.css" />-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/flags_countries.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/flags_regions.css') }}" />
	<style>   
		.highcharts-tooltip>span {
            background-color: rgba(255, 255, 255, 0.1);
            /*padding: 3px;*/
            text-align: center;
            /*border: 1px solid #000;*/
            white-space: normal !important;
            min-width: 250px;
        }
        .highcharts-tooltip>span>img {
            text-align: center;
        }

        .f32 .flag {
            vertical-align: -12px; !important;
        }
        .f32r .flag {
            vertical-align: -12px; !important;
        }
	</style>
</head>
<body>
	<div id="container" style="height: 500px; min-width: 310px; max-width: 800px; margin: 0 auto"></div>
	
	<!--<script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>-->
	<script src="{{ asset('js/jquery2.2.0.min.js') }}"></script>
	
	<script>
        $.ajaxSetup({
		  headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});
    </script>

	<script src="https://code.highcharts.com/maps/highmaps.js"></script>
	<script src="https://code.highcharts.com/maps/modules/data.js"></script>
	<script src="https://code.highcharts.com/maps/modules/drilldown.js"></script>

	<script src="https://code.highcharts.com/mapdata/countries/us/us-all.js"></script>
	<script src="http://code.highcharts.com/mapdata/custom/europe.js"></script>

	<!--<script src="{{ asset('js//highmaps.js') }}"></script>
	<script src="{{ asset('js/data.js') }}"></script>
	<script src="{{ asset('js/drilldown.js') }}"></script>
	<script src="{{ asset('js/europe.js') }}"></script>-->
	
	<script>
		$(function () {
		    //var data = Highcharts.geojson(Highcharts.maps['countries/us/us-all']),
		    var data = Highcharts.geojson(Highcharts.maps['custom/europe']),
		        // Some responsiveness
		        small = $('#container').width() < 400;

		    var country_pop = <?php echo json_encode($country_pop); ?>;
		    var country_density = <?php echo json_encode($country_density); ?>
		    //console.log(country_pop);
		    var country_id = <?php echo json_encode($country_id); ?>;
		    //console.log(country_id);

		    // Set drilldown pointers
		    var data1 = [];
		    //console.log(data);
		    $.each(data, function (i) {
		    	//console.log(country_pop);
		        this.drilldown = this.properties['hc-key'];
		        this.flag = this.drilldown.replace('UK', 'GB').toLowerCase();

                //this.code = this.properties['hc-key'];
                //console.log(country_pop[this.code]);

                //this.value = country_pop[this.code];
                this.value = country_density[this.drilldown];
                //console.log(this.value);
                this.id = country_id[this.drilldown];
		    });
		    //console.log(data);

		    // Instanciate the map
		    $('#container').highcharts('Map', {
		        chart : {
		            events: {
		                drilldown: function (e) {

		                    if (!e.seriesOptions) {
		                        var chart = this,
		                        	country = e.point.drilldown + '.json';
		                            //mapKey = 'countries/us/' + e.point.drilldown + '-all',
		                            mapKey = 'countries/' + e.point.drilldown + '/' + e.point.drilldown + '-all',
		                            // Handle error, the timeout is cleared on success
		                            fail = setTimeout(function () {
		                                if (!Highcharts.maps[mapKey]) {
		                                    chart.showLoading('<i class="icon-frown"></i> Failed loading ' + e.point.name);

		                                    fail = setTimeout(function () {
		                                        chart.hideLoading();
		                                    }, 1000);
		                                }
		                            }, 3000);

		                        // Show the spinner
		                        chart.showLoading('<i class="icon-spinner icon-spin icon-3x"></i>'); // Font Awesome spinner
		                        var id = e.point.id; // Get country id
		                        //console.log(id);
		                        // Load the drilldown map
		                        $.getScript('https://code.highcharts.com/mapdata/' + mapKey + '.js', function () {
		                        // If no internet connection
		                        //$.getScript(mapKey + '.js', function() {

		                            data = Highcharts.geojson(Highcharts.maps[mapKey]);

		                        	function ajax(){
                                        return $.ajax({
                                            type: 'POST',
                                            data: {country_id: id},
                                            success: function(response) {
                                                //console.log('success');
                                                //region_pop = response;
                                              	region_density = response;
                                            },
                                            error: function (jqXHR, textStatus, errorThrown) {
                                                console.log('failure');
                                            }
                                        });
                                    };
                                    
									//console.log(region_pop);
									ajax().done(function(result) {
										$.each(data, function (i) {
											//console.log(region_pop);
											this.code = this.properties['hc-key'];

			                                //this.value = region_pop[this.code];
			                                this.value = region_density[this.code];
			                                this.flag = this.code;
			                            });

			                            chart.hideLoading();
			                            clearTimeout(fail);
			                            chart.addSeriesAsDrilldown(e.point, {
			                                name: e.point.name,
			                                data: data,

			                                dataLabels: {
			                                    //enabled: true,
			                                    enabled: false,
			                                    format: '{point.name}'
			                                }
			                            });
									});
									//console.log(region_pop);										
		                        });
		                    }

		                    this.setTitle(null, { text: e.point.name });
		                },
		                drillup: function () {
		                    //this.setTitle(null, { text: 'USA' });
		                    this.setTitle(null, { text: 'Europe' });
		                }
		            }
		        },

		        title : {
		        	//text: 'Population in Europe by country and state'
		            text: 'Population density in Europe (residents/km²)'
		        },

		        subtitle: {
		            //text: 'USA',
		            text: 'Europe',
		            floating: true,
		            align: 'right',
		            y: 50,
		            style: {
		                fontSize: '16px'
		            }
		        },

		        legend: small ? {} : {
		            layout: 'vertical',
		            align: 'right',
		            verticalAlign: 'middle'
		        },

		        /*colorAxis: {
		        	type: 'logarithmic',
		            min: 10,
		            max: 1000,
		            minColor: '#E6E7E8',
		            maxColor: '#005645',
		            stops: [
	                    [0.1, '#E6E7E8'],
	                    //[0.67, '#E6E7E8'],
	                    [0.9, '#005645']
	                ]
		        },*/

		        /*colorAxis: {
		        	min: 1,
		        	//max: 1000,
		        	type: 'logarithmic',
		            minColor: '#E6E7E8',
		            maxColor: '#005645',
		            stops: [
	                    [0.2, '#E6E7E8'],
	                    //[0.67, '#E6E7E8'],
	                    [0.9, '#005645']
	                ]
		        },*/
			    
			    colorAxis: {
		            min: 1,
		            max: 5000,
		            type: 'logarithmic',
		            minColor: '#E6E7E8',
		            maxColor: '#005645',
		            stops: [
	                    [0.2, '#E6E7E8'],
	                    //[0.5, 'rgb(96, 146, 137)'],
	                    [0.8, '#005645']
	                ]
		        },

		        mapNavigation: {
		            enabled: true,
		            buttonOptions: {
		                verticalAlign: 'bottom'
		            }
		        },

		        plotOptions: {
		            map: {
		                states: {
		                    hover: {
		                        color: '#EEDD66'
		                    }
		                }
		            }
		        },

		        tooltip: {
	                headerFormat: '',
	                useHTML: true,
	                //pointFormat: '<span class="f32de"><span class="flag {point.flag}"></span></span>'
	                //        + '&nbsp&nbspPop.&nbsp{point.name}: <b>{point.value}</b>'
	                pointFormat: '<span class="f32r"><span class="flag {point.flag}"></span></span>'
	                        + '&nbsp&nbsp{point.name}: <b>{point.value}/km²</b>'
	            },

		        series : [{
		            data : data,
		            name: 'Europe',
		            dataLabels: {
		                enabled: false,
		                //format: '{point.code}'
		            },

		            tooltip: {
	                    headerFormat: '',
	                    useHTML: true,
	                    //pointFormat: '<span class="f32"><span class="flag {point.flag}"></span></span>'
	                    //    + '&nbsp&nbspPop.&nbsp{point.name}: <b>{point.value}</b>',
	                    pointFormat: '<span class="f32"><span class="flag {point.flag}"></span></span>'
	                        + '&nbsp&nbsp{point.name}: <b>{point.value}/km²</b>',
	                },
		        }],

		        drilldown: {
		            activeDataLabelStyle: {
		                color: '#FFFFFF',
		                textDecoration: 'none',
		                textShadow: '0 0 3px #000000'
		            },
		            drillUpButton: {
		                relativeTo: 'spacingBox',
		                position: {
		                    x: 0,
		                    y: 60
		                }
		            }
		        },

		        credits: {
		        	position: {
		        		//align: 'center'
		        	},
		        	href: 'http://ec.europa.eu/eurostat/web/population-demography-migration-projections/population-data/database',
		        	text: 'Source: eurostat 2014-2015'
		        }
		    });
		});
	</script>

</body>
</html>