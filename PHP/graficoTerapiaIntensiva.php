<canvas id="terapia_intensiva" class="Grafici"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<?php
$lenDate = count($date);
?>
<script>

function graficoTerapiaIntensiva()
{

    
    var ctx = document.getElementById('terapia_intensiva').getContext('2d');

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
                label: 'Terapia Intensiva',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(0, 0, 0)',
                data: 
                [
                    <?php echo json_encode($terapia_intensiva[count($terapia_intensiva) - 10]);?>,
                    <?php echo json_encode($terapia_intensiva[count($terapia_intensiva) - 9]);?>,
                    <?php echo json_encode($terapia_intensiva[count($terapia_intensiva) - 8]);?>,
                    <?php echo json_encode($terapia_intensiva[count($terapia_intensiva) - 7]);?>,
                    <?php echo json_encode($terapia_intensiva[count($terapia_intensiva) - 6]);?>,
                    <?php echo json_encode($terapia_intensiva[count($terapia_intensiva) - 5]);?>,
                    <?php echo json_encode($terapia_intensiva[count($terapia_intensiva) - 4]);?>,
                    <?php echo json_encode($terapia_intensiva[count($terapia_intensiva) - 3]);?>,
                    <?php echo json_encode($terapia_intensiva[count($terapia_intensiva) - 2]);?>,
                    <?php echo json_encode($terapia_intensiva[count($terapia_intensiva) - 1]);?>
                ]
            }]
        },

        

        // Configuration options go here
        options: {}
});

clear('terapia_intensiva');
}

</script>