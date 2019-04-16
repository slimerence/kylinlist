( function ( $ ) {
	"use strict";
   /*---- morrisBar3----*/
	new Morris.Area({
	  element: 'morrisBar3',
	  behaveLikeLine: true,
	  data: [
		{x: '2015', y: 66, z: 39},
		{x: '2016', y: 77, z: 27},
		{x: '2017 ', y: 58, z: 15},
		{x: '2018', y: 68, z: 23}
	  ],
	  xkey: 'x',
	  ykeys: ['y', 'z'],
	  lineColors: ['#6963ff','#ff2b88'],
	  labels: ['Profits', 'Lose']
	});
} )( jQuery );

