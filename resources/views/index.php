<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSFR token for ajax call -->
    <!--<meta name="_token" content="{{ csrf_token() }}"/>-->
    <!--<meta id="token" name="token" content="{ { csrf_token() } }">-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Highmaps Example</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://cloud.github.com/downloads/lafeber/world-flags-sprite/flags32.css" />
	<style>   
		.highcharts-tooltip>span {
            background-color: rgba(255, 255, 255, 0.5);
            padding: 3px;
            text-align: center;
            border: 1px solid #000;
            white-space: normal !important;
            min-width: 250px;
        }
        .highcharts-tooltip>span>img {
            text-align: center;
        }

        .f32 .flag {
            vertical-align: -12px; !important;
        }
	</style>
</head>
<body>
	<div id="container" style="height: 500px; min-width: 310px; max-width: 800px; margin: 0 auto"></div>
	
	<script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
	
	<script>
        /*$.ajaxSetup({
           headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });*/
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
	
	<script>
		$(function () {
			//var chart = $('#container1');
		    //var data = Highcharts.geojson(Highcharts.maps['countries/us/us-all']),
		    var data = Highcharts.geojson(Highcharts.maps['custom/europe']),
		        // Some responsiveness
		        small = $('#container').width() < 400;

		    var country_pop = <?php echo json_encode($country_pop); ?>;
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
		        
		        //this.value = i;
		        //this.key = this.properties['hc-key'];
		        //this.value = country_pop; // Non-random bogus data
		        //console.log(i);
		        //console.log(country_pop[i]);
		        /*data1.push({
                    code: country_pop[i].code,
                    value: country_pop[i].population,
                    name: country_pop[i].name
                });*/
                
                //this.population = country_pop[i].population;
                //this.value = this.population;
                this.code = this.properties['hc-key'];
                //console.log(country_pop[this.code]);
                this.value = country_pop[this.code];
                this.id = country_id[this.code];
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

		                            data = Highcharts.geojson(Highcharts.maps[mapKey]);
		                            /*var drillMapData = Highcharts.maps[mapKey],
                                    drillMyData = Highcharts.geojson(Highcharts.maps[mapKey]),*/

		                            // Set a non-random bogus value
		                            /*$.each(data, function (i) {
		                                this.value = i+1;
		                            });*/
									//console.log(id);
		                        	function ajax(){
                                        return $.ajax({
                                            type: 'POST',
                                            url: 'abc',
                                            data: {country_id: id},
                                            success: function(response) {
                                                console.log('success');
                                                //console.log(id);
                                                //console.log(response);
                                                var regions = response;
                                                console.log(regions);
                                                //region_pop = regions;
                                            },
                                            error: function (jqXHR, textStatus, errorThrown) {
                                                console.log('failure');
                                            }
                                        });
                                    };
		                            // Hide loading and add series
		                            /*chart.hideLoading();
		                            clearTimeout(fail);
		                            chart.addSeriesAsDrilldown(e.point, {
		                                name: e.point.name,
		                                data: data,
		                                dataLabels: {
		                                    enabled: true,
		                                    format: '{point.name}'
		                                }
		                            });*/
									ajax().done(function(result) {
										chart.hideLoading();
			                            clearTimeout(fail);
			                            chart.addSeriesAsDrilldown(e.point, {
			                                name: e.point.name,
			                                data: data,
			                                dataLabels: {
			                                    enabled: true,
			                                    format: '{point.name}'
			                                }
			                            });
                                        /*chart.hideLoading();
                                        clearTimeout(fail);
                                        chart.addSeriesAsDrilldown(e.point, {
                                            //name: e.point.name,
                                            name: e.point.name,
                                            data: data,
                                            mapData: Highcharts.maps[mapKey],
                                            nullColor: '#BADA55',
                                            //nullColor: country_color,
                                            joinBy: 'hc-key',
                                            dataLabels: {
                                                //enabled: false,
                                                enabled: true,
                                                //enabled: true,
                                                format: '{point.name}'
                                                //format: '{point.stade_name}'
                                            },
                                            legend: '',
                                        });*/
                                    });
									$.each(data, function (i) {
		                                this.value = i+1;
		                            });
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
		            text : 'Highcharts Map Drilldown'
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

		        colorAxis: {
		        	//type: 'logarithmic',
		            min: 0,
		            minColor: '#E6E7E8',
		            maxColor: '#005645'
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
	                //backgroundColor: 'white',
	                //borderWidth: 0,
	                //shadow: false,
	                useHTML: true,
	                //padding: 0,
	                pointFormat: '<span>Pop.&nbsp{point.name}: <b>{point.value}</b><span>',
	                /*positioner: function () {
	                    return { x: 0, y: 250 };
	                }*/
	                /*positioner: function (labelWidth, labelHeight, point) {
	                    var tooltipX, tooltipY;
	                    //var plotWidth = abc.plotWidth;
	                    var plotWidth = 800;
	                    var plotHeight = 500;
	                    //console.log(plotWidth);
	                    //console.log(plotHeight);
	                    //check width
	                    if (point.plotX + labelWidth > plotWidth) {
	                        // tooltip too wide
	                        tooltipX = point.plotX  - labelWidth - 10;
	                    } else {
	                        tooltipX = point.plotX + 10;
	                    }
	                    //tooltipY = point.plotY - 20;
	                    //check height
	                    if (point.plotY + labelHeight > plotHeight) {
	                        //tooltip too tall
	                        tooltipY = point.plotY  - labelHeight - 10;
	                    } else {
	                        tooltipY = point.plotY - 10;
	                    }
	                    return {
	                        x: tooltipX,
	                        y: tooltipY
	                    };
	                }*/
	            },

		        series : [{
		            data : data,
		            //mapData: Highcharts.maps['custom/europe'],
		            //joinBy: ['hc-key', 'code'],
		            //name: 'USA',
		            name: 'Europe',
		            dataLabels: {
		                enabled: false,
		                //format: '{point.properties.postal-code}'
		            },

		            tooltip: {
	                    headerFormat: '',
	                    //backgroundColor: 'none',
	                    //borderWidth: 0,
	                    //shadow: false,
	                    useHTML: true,
	                    //padding: 0,
	                    pointFormat: '<span class="f32"><span class="flag {point.flag}"></span></span>'
	                        + '&nbsp&nbspPop.&nbsp{point.name}: <b>{point.value}</b>',
	                    /*positioner: function () {
	                        return { x: 0, y: 250 };
	                    }*/
	                },
		        }],

		        drilldown: {
		            //series: drilldownSeries,
		            /*enabledLabels: false,
               		enabledLegend: false,*/
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
		        }
		    });
		});
	</script>

</body>
</html>




