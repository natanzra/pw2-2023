<?php
    require_once 'data_Lingkaran.php';
    echo 'Nilai PHI = ' . Lingkaran::PHI;

    $lingkar1 = new Lingkaran(8);
    $lingkar2 = new Lingkaran(27);

    echo '<br><br>';
    echo '<br> Luas Lingkaran 1 adalah = ' . $lingkar1->getLuas() . 'cm';
    echo '<br> Luas Lingkaran 2 adalah = ' . $lingkar2->getLuas() . 'cm';
    echo '<br><br>';
    echo '<br> Luas Lingkaran 1 adalah = ' . $lingkar1->getKeliling() . 'cm';
    echo '<br> Luas Lingkaran 2 adalah = ' . $lingkar2->getKeliling() . 'cm';

?>