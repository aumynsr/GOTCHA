<html>
<html lang="en">
<?
include("admin_head.php")
?>

<body>

  <?
  include("admin_header.php")
  ?>
<head>
    <meta charset="utf-8">
    <title>รายงานในแบบกราฟ</title>
</head>
<?php
$con= mysqli_connect("localhost","root","12345678","gotcha") or die("Error: " . mysqli_error($con));
 
mysqli_query($con, "SET NAMES 'utf8' ");
 
$query = "
SELECT `name_pro`,`total` FROM `product`

";
$result = mysqli_query($con, $query);
$resultchart = mysqli_query($con, $query);  
 
 
 //for chart
$name_pro = array();
$total = array();

while($rs = mysqli_fetch_array($resultchart)){ 
  $name_pro[] = "\"".$rs['name_pro']."\""; 
  $total[] = "\"".$rs['total']."\""; 
}
$name_pro[] = implode(",", $name_pro); 
$total[] = implode(",", $total);


?>
 
<h3 align="center">รายงานในแบบกราฟ</h3>
<table width="200" border="1" cellpadding="0"  cellspacing="0" align="center">
  <thead>
  <tr>
    <th width="20%">สินค้า</th>
    <th width="20%">จำนวนคงเหลือ</th>
  </tr>
  </thead>
  
  <?php while($row = mysqli_fetch_array($result)) 
{ ?>
    <tr>
      <td align="center"><?php echo $row['name_pro'];?></td>
      <td align="right"><?php echo number_format($row['total']);?></td> 
    </tr>
    <?php } ?>

 
</table>

 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
<hr>

<p align="center">
 
 <!--devbanban.com-->
 
<canvas id="myChart" width="800px" height="300px"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php while ($row = mysqli_fetch_array($result)) { echo $row['name_pro']; }?>],
        datasets: [{
            label: 'รายงานยอดคงเหลือ (ชิ้น)',
            data: [<?php echo $total; ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>  




</p> 
  <!--devbanban.com-->
</html>