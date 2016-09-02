
<!--<h3 class="blue-text center">STATISTICS</h3>-->


<?php

	$conn = mysql_connect('localhost','reservation','hospital');
  
           if(!$conn){
                echo "failure to connect";
                die('connection error');
              }
  
        	$db = mysql_select_db("ReservationSys");

        	$query = "SELECT COUNT(*) AS 'count' FROM  contact_form  WHERE contact_form.subject = 'Appreciation'";
        	$query1 = "SELECT COUNT(*) AS count1 FROM  contact_form  WHERE contact_form.subject = 'request'";
        	$query2 = "SELECT COUNT(*) AS count2 FROM  contact_form  WHERE contact_form.subject = 'complain'";
        	$query3 = "SELECT COUNT(*) AS count3  FROM contact_form  WHERE contact_form.subject = 'Recommendation'";

        	$query4 = "SELECT COUNT(*) AS count4 FROM appointment_form WHERE appointment_form.status = 'Approved'";
        	$query5 = "SELECT COUNT(*) AS count5 FROM appointment_form  WHERE appointment_form.status = 'Pending' && 																   appointment_form.status = '' ";
        	$query6 = "SELECT COUNT(*) AS count6 FROM appointment_form  WHERE appointment_form.status = 'Rejected'";


        	$result = mysql_query($query);
        	$row    = mysql_fetch_assoc($result);
        	$count  = $row["count"];

        	$result1 = mysql_query($query1);
        	$row     = mysql_fetch_assoc($result1);
        	$value1  = $row['count1'];

        	$result2 = mysql_query($query2);
        	$row     = mysql_fetch_assoc($result2);
        	$value2  = $row['count2'];

        	$result3 = mysql_query($query3);
        	$row     = mysql_fetch_assoc($result3);
        	$value3  = $row['count3'];

        	$result4 = mysql_query($query4);
        	$row     = mysql_fetch_assoc($result4);
        	$value4  = $row['count4'];

        	$result5 = mysql_query($query5);
        	$row     = mysql_fetch_assoc($result5);
        	$value5  = $row['count5'];

        	$result6 = mysql_query($query6);
        	$row     = mysql_fetch_assoc($result6);
        	$value6  = $row['count6'];

        	

        	
       ?>
        	

       <?php ob_start(); ?>
      
     <script type='text/javascript'>

window.onload = function () {

//Better to construct options first and then pass it as a parameter
   var options = {
      title: {
         text: 'Appointment Statistics'
      },
                animationEnabled: true,
      data: [
      {
         type: 'pie', //change it to line, area, bar, pie, etc
         dataPoints: [
         	{ label: 'Approved', y: <?php echo $value4;?>  },
         	{ label: 'Rejected', y: <?php echo $value6;?>  },
            { label: 'Pending',  y: <?php echo $value5;?>  }
           
            
         ]
      }
      ]
   };
    var options1 = {
      title: {
         text: 'Feedback Statistics'
      },
                animationEnabled: true,
      data: [
      {
         type: 'pie', //change it to line, area, bar, pie, etc
         dataPoints: [
         	{ label: 'appreciation', y:<?php echo $count;?>},
            { label: 'Complains', y: <?php echo $value2;?>  },
            { label: 'recomendations', y:<?php echo $value3;?> },
             { label: 'requests',  y: <?php echo $value1;?>  }
            
            
         ]
      }
      ]
   };
   
	var chart = {
		title: {
				text: 'Doctors Performance'
				},
		 animationEnabled: true,
		legend: {
				cursor: 'pointer',
					itemclick: function (e) {
						if (typeof (e.dataSeries.visible) === 'undefined' || e.dataSeries.visible) {
							e.dataSeries.visible = false;
						} else {
							e.dataSeries.visible = true;
						}

						e.chart.render();
					}
				},
		data: [{
				name: 'Doctor1',
				 color: 'LightSeaGreen',
				showInLegend: true,
				type: 'spline',
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
				name: 'Doctor2',
				 color: 'LightGreen',
				showInLegend: true,
				type: 'spline',
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
				name: 'Doctor3',
				 color: 'Red',
				showInLegend: true,
				type: 'spline',
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

			 $('#chartContainer').CanvasJSChart(options);
  			 $('#chartContainer1').CanvasJSChart(options1);
  			 $('#chartContainer2').CanvasJSChart(chart);
 

		}
	</script>
	
<?php

mysql_close($conn);
?>


<br/><br/>
<!--<script type="text/javascript" src="scripts/sub.js"></script>-->


<div id="chartContainer1" style="height: 300px; width: 50%; float:left;"></div>
<div id="chartContainer" style="height: 300px; width: 50%;"></div>
<br/><br/>
<div class="row" id="performance">
<div class="col-s12" id="chartContainer2" style="height: 400px; width: 100%;"> </div>
</div>