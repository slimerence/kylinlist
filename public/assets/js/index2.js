$(function(e){
 
 var ctx = document.getElementById( "lineChart1" );
    ctx.height = 200;

    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018"],
            datasets: [
                {
                    label: "New Users",
                    borderColor: "rgb(105, 99, 255)",
                    borderWidth: "5",
                    backgroundColor: "rgb(105, 99, 255, 0.8)",
                    data:[20, 20, 47, 20, 49, 20, 50]
                            },
                {
                    label: "Register Users",
                    borderColor: "rgb(255,43,136)",
                    borderWidth: "5",
                    backgroundColor: "rgba(255,43,136, 0.8)",
                    pointHighlightStroke: "rgba(255,43,136, 1)",
                    data: [26, 46, 30, 71, 20, 35, 20],
                            }
                        ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false,

            },
			tooltips: {

				},
            hover: {
                mode: 'nearest',
                intersect: true
            }

        }
    } );



});

//morris chart
$(function(e){
  'use strict'

	new Morris.Donut({
		  element: 'morrisBar8',
		  data: [
			{value: 95, label: 'Total Sales'},
			{value: 30, label: 'Jobs'},
			{value: 45, label: 'Cars'},
			{value: 20, label: 'Classifieds'},
		  ],
		  colors: [
		'#ff2b88', '#6963ff', '#00e682', '#ff382b'

	  ],
		  formatter: function (x) { return x + "%"}
		}).on('click', function(i, row){
		  console.log(i, row);
	});
});

