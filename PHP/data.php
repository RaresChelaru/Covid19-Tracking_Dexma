<?php 
    
    $file = 'https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-andamento-nazionale/dpc-covid19-ita-andamento-nazionale.csv';
    
    $array=array();

    $row = 1;

    if (($handle = fopen($file, "r")) !== FALSE) {

      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        array_push($array,$data);     
      }

    fclose($handle);
    }

    $date=array();
    for ($i=1; $i < count($array); $i++) {
        $array[$i][0]=str_replace("-", "/",$array[$i][0]);
        array_push($date, $array[$i][0]);
        
    }
    
    $stato=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($stato, $array[$i][1]);
    }
    
    $ricoverati_con_sintomi=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($ricoverati_con_sintomi, $array[$i][2]);
    }

    $terapia_intensiva=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($terapia_intensiva, $array[$i][3]);
    }

    $totale_ospedalizzati=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($totale_ospedalizzati, $array[$i][4]);
    }

    $isolamento_domiciliare=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($isolamento_domiciliare, $array[$i][5]);
    }

    $totale_positivi=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($totale_positivi, $array[$i][6]);
    }

    $variazione_totale_positivi=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($variazione_totale_positivi, $array[$i][7]);
    }

    $nuovi_positivi=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($nuovi_positivi, $array[$i][8]);
    }

    $dimessi_guariti=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($dimessi_guariti, $array[$i][9]);
    }

    $deceduti=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($deceduti, $array[$i][10]);
    }

    $casi_da_sospetto_diagnostico=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($casi_da_sospetto_diagnostico, $array[$i][11]);
    }

    $casi_da_screening=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($casi_da_screening, $array[$i][12]);
    }

    $totale_casi=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($totale_casi, $array[$i][13]);
    }

    $tamponi=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($tamponi, $array[$i][14]);
    }

    $casi_testati=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($casi_testati, $array[$i][15]);
    }

    $note=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($note, $array[$i][16]);
    }

    $ingressi_terapia_intensiva=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($ingressi_terapia_intensiva, $array[$i][17]);
    }

    $note_test=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($note_test, $array[$i][18]);
    }

    $note_casi=array();
    for ($i=1; $i < count($array); $i++) { 
        array_push($note_casi, $array[$i][19]);
    }

  ?>