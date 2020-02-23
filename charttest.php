<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
    include ("connect.php");
    $query = "SELECT `name_pro`,`total` FROM product";
    $result = mysqli_query($dbcon, $query);
    
    if ($result->num_rows > 0) {
        while($row = $result -> fetch_assoc()) {
            $row['name_pro'];
            $row['total'];

        }
    } else {
        echo "เกิดข้อผิดพลาด " . mysqli_error($dbcon);
    }
    ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <title>____________________</title>
</head>
<body>
  <div class="container">
    <canvas id="myChart"></canvas>
  </div>


</body>
<script>


  var ctx = document.getElementById('myChart');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: [<?php echo $row['name_pro'];],
          datasets: [{
              label: 'สิ้นค้าที่ 1',
              data: [<?php echo $row['total']; ?>],
              backgroundColor: [
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          },]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
  </script>
</html>
