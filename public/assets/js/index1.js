$(function(e){
  'use strict'
  

  var areaData2 = [
    {
      name: 'Total Ads',
      type: 'line',
      smooth: true,
      data: [50, 40, 65, 76, 68, 95, 78, 25, 78, 56, 46, 82, 74],
	  symbolSize:10,
	   lineStyle: {
			normal: { width: 3,

			}
		},

    },
    {
      name: 'Sales Price',
      type: 'line',
      smooth: true,
       data: [10, 10, 95, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15],
      symbolSize:10,
	   lineStyle: {
			normal: { width: 3,

			}
		},
    }
  ];

  var optionArea2 = {
    grid: {
      top: '6',
      right: '12',
      bottom: '17',
      left: '25',
    },
    xAxis: {
      data: [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      boundaryGap: false,
      axisLine: {
        lineStyle: { color: '#f5f5f7' }
      },
      axisLabel: {
        fontSize: 12,
        color: '#a7b4c9',
		display:'false'
      },
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
    yAxis: {
      splitLine: {
        lineStyle: { color: '#f5f5f7' },
		display:false
      },
      axisLine: {
        lineStyle: { color: '#f5f5f7' },
		display:false
      },
      axisLabel: {
        fontSize: 12,
        color: '#a7b4c9'
      }
    },
    series: areaData2,
    color:[ '#6963ff','#ff2b88']
  };

  var chartArea2 = document.getElementById('echart2');
  var areaChart2 = echarts.init(chartArea2);
  areaChart2.setOption(optionArea2);


  });

