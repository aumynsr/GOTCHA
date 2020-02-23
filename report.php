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
SELECT SUM(total) AS totol, DATE_FORMAT(createDate, '%M') AS createDate
FROM orders 
GROUP BY DATE_FORMAT(	createDate, '%M%')
";
$result = mysqli_query($con, $query);
$resultchart = mysqli_query($con, $query);  
 
 
 //for chart
$createDate = array();
$totol = array();
 
while($rs = mysqli_fetch_array($resultchart)){ 
  $createDate[] = "\"".$rs['createDate']."\""; 
  $totol[] = "\"".$rs['totol']."\""; 
}
$createDate = implode(",", $createDate); 
$totol = implode(",", $totol); 
 
?>
 
<h3 align="center">รายงานในแบบกราฟ</h3>
<table width="200" border="1" cellpadding="0"  cellspacing="0" align="center">
  <thead>
  <tr>
    <th width="10%">เดือน</th>
    <th width="10%">ยอดขาย</th>
  </tr>
  </thead>
  
  <?php while($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <td align="center"><?php echo $row['createDate'];?></td>
      <td align="right"><?php echo number_format($row['totol'],2);?></td> 
    </tr>
    <?php } ?>
 
</table>
<?php mysqli_close($con);?>
 
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
        labels: [<?php echo $createDate;?>
    
        ],
        datasets: [{
            label: 'รายงานภาพรวม แยกตามเดือน (บาท)',
            data: [<?php echo $totol;?>
            ],
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
