<?php
    echo(" Hoe veel activiteiten wil je toevoegen?".PHP_EOL);
    $aantal = readline();
    $i = 1;
    $bucketlist = 1;
    if (!is_numeric($aantal)){
        exit($aantal." is geen getal");
    }
    $array = array();
    for($i = 1; $i <= $aantal; $i++){
    echo("Wat wil je toevoegen aan jouw bucket list?".PHP_EOL);
    $bucketlist = readline();
    array_push($array, $bucketlist);
}   
    print_r($array);
?>