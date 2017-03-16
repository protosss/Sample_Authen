</div>
<!--<div id="site-wrapper">-->
<br>
<br>
<div class="navbar navbar-fixed-bottom">Copyright &copy; 2016 <?php echo $this->config->item('title_bar'); ?></div>

    
	<!--Basic Scripts-->
    <script src="<?php echo base_url('assets_dashboard/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets_dashboard/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets_dashboard/js/slimscroll/jquery.slimscroll.min.js'); ?>"></script>

    <!--Beyond Scripts-->
    <script src="<?php echo base_url('assets_dashboard/js/beyond.js'); ?>"></script>


    <!--Page Related Scripts-->
    <!--Sparkline Charts Needed Scripts-->
    <script src="<?php echo base_url('assets_dashboard/js/charts/sparkline/jquery.sparkline.js'); ?>"></script>
    <script src="<?php echo base_url('assets_dashboard/js/charts/sparkline/sparkline-init.js'); ?>"></script>

    <!--Easy Pie Charts Needed Scripts-->
    <script src="<?php echo base_url('assets_dashboard/js/charts/easypiechart/jquery.easypiechart.js'); ?>"></script>
    <script src="<?php echo base_url('assets_dashboard/js/charts/easypiechart/easypiechart-init.js'); ?>"></script>

    <!--Flot Charts Needed Scripts-->
    <script src="<?php echo base_url('assets_dashboard/js/charts/flot/jquery.flot.js'); ?>"></script>
    <script src="<?php echo base_url('assets_dashboard/js/charts/flot/jquery.flot.resize.js'); ?>"></script>
    <script src="<?php echo base_url('assets_dashboard/js/charts/flot/jquery.flot.pie.js'); ?>"></script>
    <script src="<?php echo base_url('assets_dashboard/js/charts/flot/jquery.flot.tooltip.js'); ?>"></script>
    <script src="<?php echo base_url('assets_dashboard/js/charts/flot/jquery.flot.orderBars.js'); ?>"></script>

    <script>
        // If you want to draw your charts with Theme colors you must run initiating charts after that current skin is loaded
        $(window).bind("load", function () {

            /*Sets Themed Colors Based on Themes*/
            themeprimary = getThemeColorFromCss('themeprimary');
            themesecondary = getThemeColorFromCss('themesecondary');
            themethirdcolor = getThemeColorFromCss('themethirdcolor');
            themefourthcolor = getThemeColorFromCss('themefourthcolor');
            themefifthcolor = getThemeColorFromCss('themefifthcolor');

            //Sets The Hidden Chart Width
			/*
            $('#dashboard-bandwidth-chart')
                .data('width', $('.box-tabbs')
                    .width() - 20);
			*/
            //-------------------------Visitor Sources Pie Chart----------------------------------------//
            var data = [
                {
                    data: [[1, 21]],
                    color: '#fb6e52'
                },
                {
                    data: [[1, 12]],
                    color: '#e75b8d'
                },
                {
                    data: [[1, 11]],
                    color: '#a0d468'
                },
                {
                    data: [[1, 10]],
                    color: '#ffce55'
                },
                {
                    data: [[1, 46]],
                    color: '#5db2ff'
                }
            ];
            var placeholder = $("#dashboard-pie-chart-sources");
            placeholder.unbind();

            $.plot(placeholder, data, {
                series: {
                    pie: {
                        innerRadius: 0.45,
                        show: true,
                        stroke: {
                            width: 4
                        }
                    }
                }
            });

            //------------------------------Visit Chart------------------------------------------------//
            var data2 = [
				
                {
                    color: themeprimary,
                    label: "งบประมาณจัดซื้อจัดจ้าง",
                    data: [[1, 1223556], [2, 1209456], [3, 1609887], [4, 1334554], [5, 1334678], [6, 1400987], [7, 1477879], [8, 1177456], [9, 1322456], [10, 1766554],
                    [11, 1400897], [12, 1254332]],
                    bars: {
                        order: 1,
                        show: true,
                        borderWidth: 0,
                        barWidth: 0.4,
                        lineWidth: .5,
                        fillColor: {
                            colors: [{
                                opacity: 0.4
                            }, {
                                opacity: 1
                            }]
                        }
                    }
                },
				{
                    color: themethirdcolor,
                    label: "งบประมาณการเบิกจ่าย",
                    data: [[1, 699808], [2, 1188966], [3, 1000988], [4, 999665], [5, 555678], [6, 824566]/*, [7, 5], [8, 6], [9, 4], [10, 7],[11, 3], [12, 4]*/],
                    lines: {
                        show: true,
                        fill: false,
                        fillColor: {
                            colors: [{
                                opacity: 0.3
                            }, {
                                opacity: 0
                            }]
                        }
                    },
                    points: {
                        show: true
                    }
                }
				/*{
					color: themesecondary,
					label: "Direct Visits",
					data: [[10, 2], [11, 5], [12, 4], [1, 11], [2, 12], [3, 11], [4, 8], [5, 14], [6, 12], [7, 16], 
					[8, 10], [9, 14]],
	
					lines: {
						show: true,
						fill: true,
						lineWidth: .1,
						fillColor: {
							colors: [{
								opacity: 0
							}, {
								opacity: 0.4
							}]
						}
					},
					points: {
						show: false
					},
					shadowSize: 0
				}*/
            ];
            var options = {
                legend: {
                    show: false
                },
                xaxis: {
                    tickDecimals: 0,
                    color: '#f3f3f3',
					tickFormatter: function (val, axis) {
						var show_xaxis = "";
						switch(val){
							case 1 : {show_xaxis = "ต.ค. 2559";	break;}
							case 2 : {show_xaxis = "พ.ย. 2559";	break;}
							case 3 : {show_xaxis = "ธ.ค. 2559";	break;}
							case 4 : {show_xaxis = "ม.ค. 2560";	break;}
							case 5 : {show_xaxis = "ก.พ. 2560";	break;}
							case 6 : {show_xaxis = "มี.ค. 2560";	break;}
							case 7 : {show_xaxis = "เม.ย. 2560";	break;}
							case 8 : {show_xaxis = "พ.ค. 2560";	break;}
							case 9 : {show_xaxis = "มิ.ย. 2560";	break;}
							case 10 : {show_xaxis = "ก.ค. 2560";	break;}
							case 11 : {show_xaxis = "ส.ค. 2560";	break;}
							case 12 : {show_xaxis = "ก.ย. 2560";	break;}

						};
                        return show_xaxis;
                    },
                },
                yaxis: {
                    min: 0,
                    color: '#f3f3f3',
                    tickFormatter: function (val, axis) {
                        return "";
                    },
                },
                grid: {
                    hoverable: true,
                    clickable: false,
                    borderWidth: 0,
                    aboveData: false,
                    color: '#fbfbfb'

                },
                tooltip: true,
                tooltipOpts: {
                    defaultTheme: false,
                    content: "<b>%s</b> : <span>%y.2</span> บาท",
                }
            };
            var placeholder = $("#dashboard-chart-visits");
            var plot = $.plot(placeholder, data2, options);

            //------------------------------Real-Time Chart-------------------------------------------//
            /*var realTimedata = [],
                realTimedata2 = [],
                totalPoints = 300;*/

            /*var getSeriesObj = function () {
                return [
                {
                    data: getRandomData(),
                    lines: {
                        show: true,
                        lineWidth: 1,
                        fill: true,
                        fillColor: {
                            colors: [
                                {
                                    opacity: 0
                                }, {
                                    opacity: 1
                                }
                            ]
                        },
                        steps: false
                    },
                    shadowSize: 0
                }, {
                    data: getRandomData2(),
                    lines: {
                        lineWidth: 0,
                        fill: true,
                        fillColor: {
                            colors: [
                                {
                                    opacity: .5
                                }, {
                                    opacity: 1
                                }
                            ]
                        },
                        steps: false
                    },
                    shadowSize: 0
                }
                ];
            };*/
			/*
            function getRandomData() {
                if (realTimedata.length > 0)
                    realTimedata = realTimedata.slice(1);

                // Do a random walk

                while (realTimedata.length < totalPoints) {

                    var prev = realTimedata.length > 0 ? realTimedata[realTimedata.length - 1] : 50,
                        y = prev + Math.random() * 10 - 5;

                    if (y < 0) {
                        y = 0;
                    } else if (y > 100) {
                        y = 100;
                    }
                    realTimedata.push(y);
                }

                // Zip the generated y values with the x values

                var res = [];
                for (var i = 0; i < realTimedata.length; ++i) {
                    res.push([i, realTimedata[i]]);
                }

                return res;
            }*/
			/*
            function getRandomData2() {
                if (realTimedata2.length > 0)
                    realTimedata2 = realTimedata2.slice(1);

                // Do a random walk

                while (realTimedata2.length < totalPoints) {

                    var prev = realTimedata2.length > 0 ? realTimedata[realTimedata2.length] : 50,
                        y = prev - 25;

                    if (y < 0) {
                        y = 0;
                    } else if (y > 100) {
                        y = 100;
                    }
                    realTimedata2.push(y);
                }


                var res = [];
                for (var i = 0; i < realTimedata2.length; ++i) {
                    res.push([i, realTimedata2[i]]);
                }

                return res;
            }
            // Set up the control widget
            var updateInterval = 500;
            var plot = $.plot("#dashboard-chart-realtime", getSeriesObj(), {
                yaxis: {
                    color: '#f3f3f3',
                    min: 0,
                    max: 100,
                    tickFormatter: function (val, axis) {
                        return "";
                    }
                },
                xaxis: {
                    color: '#f3f3f3',
                    min: 0,
                    max: 100,
                    tickFormatter: function (val, axis) {
                        return "";
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: false,
                    borderWidth: 0,
                    aboveData: false
                },
                colors: ['#eee', themeprimary],
            });*/

           /* function update() {

                plot.setData(getSeriesObj());

                plot.draw();
                setTimeout(update, updateInterval);
            }
            update();*/


            //-------------------------Initiates Easy Pie Chart instances in page--------------------//
            InitiateEasyPieChart.init();

            //-------------------------Initiates Sparkline Chart instances in page------------------//
            InitiateSparklineCharts.init();
        });

    </script>


</body>
</html>