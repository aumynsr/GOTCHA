<?php 
$con= mysqli_connect("localhost","root","12345678","gotcha") or die("Error: " . mysqli_error($con));
$get_rp1 = "SELECT name_pro, total FROM product";
$rp1=mysqli_query($con,$get_rp1);
for($i=0; $i<mysqli_num_rows($rp1); $i++)
{
	$rowrp1= mysqli_fetch_assoc($rp1);
	$name_pro	= $rowrp1['name_pro'];
	$total = $rowrp1['total'];

$report1.="['Balance: $name_pro',$total],";
}

?>
<html>
  <head>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['ืProduct', 'Total'],
          <?php echo $report1; ?>
        ]);

        var options = {
          chart: {
            title: 'Balance',
            subtitle: 'Product Total',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    
</head>
  <body>
    <div id="columnchart_material" style="width: 900px; height: 500px;"></div>
  </body>
</html>