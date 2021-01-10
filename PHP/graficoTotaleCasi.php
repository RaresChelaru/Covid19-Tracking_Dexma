<canvas id="totale_casi" class="Grafici"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<?php
$lenDate = count($date);
?>
<script>
function graficoTotaleCasi()
{

    var ctx = document.getElementById('totale_casi').getContext('2d');

    

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
                label: 'Totale casi',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(0, 0, 0)',
                data: 
                [
                    <?php echo json_encode($totale_casi[count($totale_casi) - 10]);?>,
                    <?php echo json_encode($totale_casi[count($totale_casi) - 9]);?>,
                    <?php echo json_encode($totale_casi[count($totale_casi) - 8]);?>,
                    <?php echo json_encode($totale_casi[count($totale_casi) - 7]);?>,
                    <?php echo json_encode($totale_casi[count($totale_casi) - 6]);?>,
                    <?php echo json_encode($totale_casi[count($totale_casi) - 5]);?>,
                    <?php echo json_encode($totale_casi[count($totale_casi) - 4]);?>,
                    <?php echo json_encode($totale_casi[count($totale_casi) - 3]);?>,
                    <?php echo json_encode($totale_casi[count($totale_casi) - 2]);?>,
                    <?php echo json_encode($totale_casi[count($totale_casi) - 1]);?>
                ]
            }]
        },

        

        // Configuration options go here
        options: {
            responsive: true,
        }
});



clear('totale_casi');
}


</script>