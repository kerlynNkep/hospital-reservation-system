window.onload = function () {

//Better to construct options first and then pass it as a parameter
   var options = {
      title: {
         text: "Appointment Statistics"
      },
                animationEnabled: true,
      data: [
      {
         type: "pie", //change it to line, area, bar, pie, etc
         dataPoints: [
            { label: "Pending",  y: 20  },
            { label: "Disapproved", y: 10  },
            { label: "Confirmed", y: 70  }
            
         ]
      }
      ]
   };
    var options1 = {
      title: {
         text: "Feedback Statistics"
      },
                animationEnabled: true,
      data: [
      {
         type: "pie", //change it to line, area, bar, pie, etc
         dataPoints: [
            { label: "requests",  y: 30  },
            { label: "Complains", y: 20  },
            { label: "recomendations", y:20 },
            { label: "appreciation", y: 20  }
            
         ]
      }
      ]
   };
   
	var chart = {
		title: {
				text: "Doctors Performance"
				},
		 animationEnabled: true,
		legend: {
				cursor: "pointer",
					itemclick: function (e) {
						if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
							e.dataSeries.visible = false;
						} else {
							e.dataSeries.visible = true;
						}

						e.chart.render();
					}
				},
		data: [{
				name: "Doctor1",
				 color: "LightSeaGreen",
				showInLegend: true,
				type: "spline",
				dataPoints: [
						{ x: 10, y: 5 },
						{ x: 20, y: 9 },
						{ x: 30, y: 17 },
						{ x: 40, y: 32 },
						{ x: 50, y: 22 },
						{ x: 60, y: 14 },
						{ x: 70, y: 25 },
						{ x: 80, y: 18 },
						{ x: 90, y: 20 }
					]
				}, {
				name: "Doctor2",
				 color: "LightGreen",
				showInLegend: true,
				type: "spline",
				dataPoints: [
						{ x: 10, y: 31 },
						{ x: 20, y: 35 },
						{ x: 30, y: 30 },
						{ x: 40, y: 35 },
						{ x: 50, y: 35 },
						{ x: 60, y: 38 },
						{ x: 70, y: 38 },
						{ x: 80, y: 34 },
						{ x: 90, y: 44 }
					]
				}, {
				name: "Doctor3",
				 color: "Red",
				showInLegend: true,
				type: "spline",
				dataPoints: [
						{ x: 10, y: 25 },
						{ x: 20, y: 30 },
						{ x: 30, y: 20 },
						{ x: 40, y: 45 },
						{ x: 50, y: 30 },
						{ x: 60, y: 10 },
						{ x: 70, y: 15 },
						{ x: 80, y: 18 },
						{ x: 90, y: 20 }
					]
				}]
			};

			 $("#chartContainer").CanvasJSChart(options);
  			 $("#chartContainer1").CanvasJSChart(options1);
  			 $("#chartContainer2").CanvasJSChart(chart);
 

		}
	