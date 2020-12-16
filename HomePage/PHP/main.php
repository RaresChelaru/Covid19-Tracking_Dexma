<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="/HomePage/CSS/style.css"/>

   <title>Document</title>
    <!-- https://github.com/pcm-dpc/COVID-19/tree/master/dati-andamento-nazionale -->

</head>
<body>


    <?php 
    
    $filename = 'https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-andamento-nazionale/dpc-covid19-ita-andamento-nazionale.csv';

    $filehandler = fopen($filename, 'r');

    echo '<table border="solid">';
    

    while( $line = fgetcsv($filehandler))
    {
        

        foreach($line as $cell)
        {
            
            echo "<td>".htmlspecialchars($cell)."</td>";
            
        }        

        echo "</tr>\n";

    }
    

    fclose($filehandler);
    echo "\n</table>";
    
    
    
    ?>
</body>
</html>