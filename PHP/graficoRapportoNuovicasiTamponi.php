<canvas id="RapportoCasiTamponi" class="Grafici"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<?php
$lenDate = count($date);
?>
<script>
function graficoRapportoNuovicasiTamponi()
{

    var ctx = document.getElementById('RapportoCasiTamponi').getContext('2d');

    

    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels:
            [
                <?php echo json_encode(substr($date[count($date) - 10], 0,10) );?>,
                <?php echo json_encode(substr($date[count($date) - 9], 0,10) );?>,
                <?php echo json_encode(substr($date[count($date) - 8], 0,10) );?>,
                <?php echo json_encode(substr($date[count($date) - 7], 0,10) );?>,
                <?php echo json_encode(substr($date[count($date) - 6], 0,10) );?>,
                <?php echo json_encode(substr($date[count($date) - 5], 0,10) );?>,
                <?php echo json_encode(substr($date[count($date) - 4], 0,10) );?>,
                <?php echo json_encode(substr($date[count($date) - 3], 0,10) );?>,
                <?php echo json_encode(substr($date[count($date) - 2], 0,10) );?>,
                <?php echo json_encode(substr($date[count($date) - 1], 0,10) );?>
            ],
        
            datasets: [{
                label: 'Rapporto casi/tamponi',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(0, 0, 0)',
                data: 
                [
                    <?php echo json_encode($nuovi_positivi[count($nuovi_positivi) - 10]/$tamponi[count($tamponi) - 10]);?>,
                    <?php echo json_encode($nuovi_positivi[count($nuovi_positivi) - 9]/$tamponi[count($tamponi) - 9]);?>,
                    <?php echo json_encode($nuovi_positivi[count($nuovi_positivi) - 8]/$tamponi[count($tamponi) - 8]);?>,
                    <?php echo json_encode($nuovi_positivi[count($nuovi_positivi) - 7]/$tamponi[count($tamponi) - 7]);?>,
                    <?php echo json_encode($nuovi_positivi[count($nuovi_positivi) - 6]/$tamponi[count($tamponi) - 6]);?>,
                    <?php echo json_encode($nuovi_positivi[count($nuovi_positivi) - 5]/$tamponi[count($tamponi) - 5]);?>,
                    <?php echo json_encode($nuovi_positivi[count($nuovi_positivi) - 4]/$tamponi[count($tamponi) - 4]);?>,
                    <?php echo json_encode($nuovi_positivi[count($nuovi_positivi) - 3]/$tamponi[count($tamponi) - 3]);?>,
                    <?php echo json_encode($nuovi_positivi[count($nuovi_positivi) - 2]/$tamponi[count($tamponi) - 2]);?>,
                    <?php echo json_encode($nuovi_positivi[count($nuovi_positivi) - 1]/$tamponi[count($tamponi) - 1]);?>
                ]
            }]
        },

        

        // Configuration options go here
        options: {
            responsive: true,
        }
        
    
});


clear('RapportoCasiTamponi');
}


</script>