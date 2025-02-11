
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="CSS/style.css" />

  <title>10 Giorni di dati sul Covid-19</title>
  <!-- https://github.com/pcm-dpc/COVID-19/tree/master/dati-andamento-nazionale -->

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;500&display=swap" rel="stylesheet">

</head>

<body onload="graficoTotalePositivi()">

  <header><h1>10 Giorni di dati sul Covid-19</h1></header>

  <div class="container">

      <button onclick="graficoTotalePositivi()">Positivi</button>
      <button onclick=" graficoTerapiaIntensiva()" >Terapia Intensiva</button>
      <button onclick="graficoRicoveratiConSintomi()">Ricoverati con sintomi</button>
      <button onclick="graficoTamponi()">Tamponi</button>
      <button onclick="graficoIsolamentiDomiciliari()">Isolamenti domiciliari</button>
      <button onclick="graficoTotaleCasi()">Totale Casi</button>
      <button onclick="graficoRapportoNuovicasiTamponi()()">Rapporto Nuovi casi/Tamponi</button>


    <div class="grafico" id="chartContainer">
      
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

      <?php

        require 'PHP/data.php'; 
        require 'PHP/graficoTerapiaIntensiva.php';
        require 'PHP/graficoRicoveratiConSintomi.php';
        require 'PHP/graficoTamponi.php';
        require 'PHP/graficoIsolamentoDomiciliare.php';
        require 'PHP/graficoTotalePositivi.php';
        require 'PHP/graficoTotaleCasi.php';
        require 'PHP/graficoRapportoNuovicasiTamponi.php';
             
      ?>

    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="JS/clear.js"></script>
  
</body>

</html>