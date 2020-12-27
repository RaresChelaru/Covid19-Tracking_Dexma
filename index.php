
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="/CSS/style.css" />

  <title>Document</title>
  <!-- https://github.com/pcm-dpc/COVID-19/tree/master/dati-andamento-nazionale -->

  <?php
    //require "PHP/inputCollector.php";
    require "PHP/data.php";
    require "PHP/visualization/visualization_ricoverati_con_sintomi.php"

  ?>

</head>

<body>
  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <form><input type="button" onclick="Grafico()"></form>
  
</body>

</html>