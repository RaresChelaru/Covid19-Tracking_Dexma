<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="/CSS/style.css"/>

   <title>Document</title>
    <!-- https://github.com/pcm-dpc/COVID-19/tree/master/dati-andamento-nazionale -->

</head>
<body>


    <?php 
    
    $file = 'https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-andamento-nazionale/dpc-covid19-ita-andamento-nazionale.csv';

    $csv = array_map('str_getcsv', file($file));
    array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
    });
    array_shift($csv); # remove column header


    echo '<table border="solid">';

    print_r(implode("<br>", $csv[0]));
    
    echo "</tr>\n";
    
    echo "\n</table>";
    
    
    
    ?>
</body>
</html>