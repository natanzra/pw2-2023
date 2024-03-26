<?php

    require_once 'class_skincare.php';

    //object    
    $facialWash = new facialWash ('Facial Wash', 'Centella Asiatiqa', 'Membersihkan wajah');
    $serum = new Serum ('Serum Wajah', 'Niacinamide', 'Mencerahkan wajah');
    $moist = new Moist ('Moisturizer', 'Hyalunoric Acid', 'Melembabkan wajah');
    
    //echo
    echo "Info Facial Wash : <br>";
    echo "<br>";
    $facialWash -> getInfoFacialWash();
    echo "<br>";

    echo "Info Serum : <br>";
    echo "<br>";
    $serum -> getInfoSerum();
    echo "<br>";

    
    echo "Info Moisturizer : <br>";
    echo "<br>";
    $moist -> getInfoMoist();
    echo "<br>";
?>