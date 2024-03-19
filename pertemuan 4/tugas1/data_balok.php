<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		// code..
?>

<?php 
    require_once 'class_balok.php';
    
    $balok1 = new Balok(29, 16, 7);
    $balok2 = new Balok(6, 3, 5);
    $balok3 = new Balok(9, 5, 12);
    $balok4 = new Balok(35, 10, 15);

    // tampilin informasi luas, keliling, dan volume 
    echo "Balok 1:";
    echo "<br/>";
    echo "<br/> Luas Balok adalah : " . $balok1->getLuas()  ;
    echo "<br/> Keliling Balok adalah : : " . $balok1->getKeliling()  ;
    echo "<br/> Volume Balok adalah : " . $balok1->getVolume()  ;

    echo "<br/>";
    echo "<br/>";

    echo "Balok 2:";
    echo "<br/>";

    echo "<br/> Luas Balok kedua adalah :  " . $balok2->getLuas() ;
    echo "<br/> Keliling Balok kedua adalah :  " . $balok2->getKeliling() ;
    echo "<br/> Volume Balok kedua adalah : " . $balok2->getVolume() ;

    echo "<br/>";
    echo "<br/>";

    echo "Balok 3:";
    echo "<br/>";

    echo "<br/> Luas Balok ketiga adalah :  " . $balok3->getLuas() ;
    echo "<br/> Keliling Balok ketiga adalah :  " . $balok3->getKeliling() ;
    echo "<br/> Volume Balok ketiga adalah :  " . $balok3->getVolume() ;

    echo "<br/>";
    echo "<br/>";

    echo "Balok 4:";
    echo "<br/>";

    echo "<br/> Luas Balok keempat adalah :  " . $balok4->getLuas() ;
    echo "<br/> Keliling Balok keempat adalah :  " . $balok4->getKeliling() ;
    echo "<br/> Volume Balok keempat adalah :  " . $balok4->getVolume() ;
?>


