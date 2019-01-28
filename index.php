<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <title>ChartboolPhpJs</title>
  </head>
  <body>

    <div class="container">
      <canvas class="line-chart"></canvas>

    </div>


    <script src="main.js"></script>

    <?php

    <script>
    var mesi = ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Agosto','Settembre','Ottobre','Novembre','Dicembre'];

    var data = [1000,1322,1123,2301,3288,988,502,2300,5332,2300,1233,2322];

    <?php include 'database.php'; ?>

    var databaseFromPhp = "<?php echo json_encode($database); ?>";
    var database = JSON.parse(databaseFromPhp);

    $(document).ready(function() {


       var ctx = $('.line-chart');
       var myChart = new Chart(ctx, {
           type: 'bar',
           data: {
               labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
               datasets: [{
                   label: 'Andamento vendite',
                   backgroundColor: 'lightcoral',
                   borderColor: 'darkgrey',
                   data: database,
                   }]
               }
           }
       });


    </script>

    ?>

  </body>
</html>
