$(function() {

		// We use an inline data source in the example, usually data would
		// be fetched from a server

		var data = [],
			totalPoints = 300;

		function getRandomData() {

			if (data.length > 0)
				data = data.slice(1);

			// Do a random walk

			while (data.length < totalPoints) {

				var prev = data.length > 0 ? data[data.length - 1] : 50,
					y = prev + Math.random() * 10 - 5;

				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}

				data.push(y);
			}

			var res = [];
			for (var i = 0; i < data.length; ++i) {
				res.push([i, data[i]])
			}

			return res;
		}

		var updateInterval = 30;
		$("#updateInterval").val(updateInterval).change(function () {
			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				if (updateInterval < 1) {
					updateInterval = 1;
				} else if (updateInterval > 2000) {
					updateInterval = 2000;
				}
				$(this).val("" + updateInterval);
			}
		});

		var plot = $.plot("#placeholder4", [ getRandomData() ], {
			series: {
				shadowSize: 0	// Drawing is faster without shadows
			},
			grid: {
				borderColor: "rgba(167, 180, 201,.1)",
			},
			colors: ["#ff2b88"],
			yaxis: {
				min: 0,
				max: 100,
				tickLength: 0
			},
			xaxis: {
				tickLength: 0,
				show: false
			}
		});

		function update() {
			plot.setData([getRandomData()]);
			plot.draw();
			setTimeout(update, updateInterval);
		}

		update();

});



! function($) {
	"use strict";

	var VectorMap = function() {
	};

	VectorMap.prototype.init = function() {
		//various examples
		$('#world-map-markers').vectorMap({
			map : 'world_en',
			scaleColors : ['#5d61bf', '#f47b25'],
			normalizeFunction : 'polynomial',
			hoverOpacity : 0.7,
			hoverColor : false,
			regionStyle : {
				initial : {
					fill : '#ff2b88'
				}
			},
			 markerStyle: {
                initial: {
                    r: 9,
                    'fill': '#ad59ff',
                    'fill-opacity': 0.9,
                    'stroke': '#fff',
                    'stroke-width' : 9,
                    'stroke-opacity': 0.2
                },

                hover: {
                    'stroke': '#fff',
                    'fill-opacity': 1,
                    'stroke-width': 1.5
                }
            },
			backgroundColor : 'transparent',
			markers : [{
				latLng : [41.90, 12.45],
				name : 'Vatican City'
			}, {
				latLng : [43.73, 7.41],
				name : 'Monaco'
			}, {
				latLng : [-0.52, 166.93],
				name : 'Nauru'
			}, {
				latLng : [-8.51, 179.21],
				name : 'Tuvalu'
			}, {
				latLng : [43.93, 12.46],
				name : 'San Marino'
			}, {
				latLng : [47.14, 9.52],
				name : 'Liechtenstein'
			}, {
				latLng : [7.11, 171.06],
				name : 'Marshall Islands'
			}, {
				latLng : [17.3, -62.73],
				name : 'Saint Kitts and Nevis'
			}, {
				latLng : [3.2, 73.22],
				name : 'Maldives'
			}, {
				latLng : [35.88, 14.5],
				name : 'Malta'
			}, {
				latLng : [12.05, -61.75],
				name : 'Grenada'
			}, {
				latLng : [13.16, -61.23],
				name : 'Saint Vincent and the Grenadines'
			}, {
				latLng : [13.16, -59.55],
				name : 'Barbados'
			}, {
				latLng : [17.11, -61.85],
				name : 'Antigua and Barbuda'
			}, {
				latLng : [-4.61, 55.45],
				name : 'Seychelles'
			}, {
				latLng : [7.35, 134.46],
				name : 'Palau'
			}, {
				latLng : [42.5, 1.51],
				name : 'Andorra'
			}, {
				latLng : [14.01, -60.98],
				name : 'Saint Lucia'
			}, {
				latLng : [6.91, 158.18],
				name : 'Federated States of Micronesia'
			}, {
				latLng : [1.3, 103.8],
				name : 'Singapore'
			}, {
				latLng : [1.46, 173.03],
				name : 'Kiribati'
			}, {
				latLng : [-21.13, -175.2],
				name : 'Tonga'
			}, {
				latLng : [15.3, -61.38],
				name : 'Dominica'
			}, {
				latLng : [-20.2, 57.5],
				name : 'Mauritius'
			}, {
				latLng : [26.02, 50.55],
				name : 'Bahrain'
			}, {
				latLng : [0.33, 6.73],
				name : 'São Tomé and Príncipe'
			}]
		});

	},
	//init
	$.VectorMap = new VectorMap, $.VectorMap.Constructor =
	VectorMap;
	$.VectorMap.init();
}(window.jQuery);

$(function(e){
  
  var chartdata3 = [
    {
      name: 'Good',
      type: 'bar',
      stack: 'Stack',
      data: [20, 56, 18, 75, 65, 74, 78, 67, 84]
    },
    {
      name: 'Bad',
      type: 'bar',
      stack: 'Stack',
      data: [12, 14, 15, 50, 24, 24, 10, 20 ,30]
    }
  ];

  var option5 = {
    grid: {
      top: '6',
      right: '0',
      bottom: '17',
      left: '25',
    },
	tooltip: {
		show: true,
		showContent: true,
		alwaysShowContent: true,
		triggerOn: 'mousemove',
		trigger: 'axis',
		axisPointer:
			{
				label: {
					show: false,
				}
			}

	},
    xAxis: {
      data: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat'],
      axisLine: {
        lineStyle: {
          color: 'rgba(227, 237, 252,0.5)'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#a7b4c9'
      }
    },
    yAxis: {
      splitLine: {
        lineStyle: {
          color: 'rgba(227, 237, 252,0.5)'
        }
      },
      axisLine: {
        lineStyle: {
          color: 'rgba(227, 237, 252,0.5)'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#a7b4c9'
      }
    },
    series: chartdata3,
	color:[ '#ff2b88', '#6963ff']
  };

  var chart5 = document.getElementById('echart5');
  var barChart5 = echarts.init(chart5);
  barChart5.setOption(option5);
});
