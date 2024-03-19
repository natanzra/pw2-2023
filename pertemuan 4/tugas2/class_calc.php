<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */

class Calculator {
    private $bilangan1;
    private $bilangan2;

    public function __construct($b1, $b2) {
        $this -> bilangan1 = $b1;
        $this -> bilangan2 = $b2;
    }

    public function pertambahan() {
        return $this -> bilangan1 + $this -> bilangan2;
    }

    public function pengurangan() {
        return $this -> bilangan1 - $this -> bilangan2;
    }

    public function pembagian() {
        if ($this -> bilangan2 != 0) {
            return $this -> bilangan1 / $this -> bilangan2;
        } else {
            return "Tidak bisa melakukan pembagian dengan angka nol.";
        }
    }

    public function perkalian() {
        return $this -> bilangan1 * $this -> bilangan2;
    }
}

    $calculator1 = new Calculator(7, 6);
    $calculator2 = new Calculator(8, 8);

    echo "Bilangan ke-1 :";
    echo "<br/>";
    echo "<br/> Hasil Pertambahan : " . $calculator1 -> pertambahan();
    echo "<br/> Hasil Pengurangan : " . $calculator1 -> pengurangan();
    echo "<br/> Hasil Pembagian : " . $calculator1 -> pembagian();
    echo "<br/> Hasil Perkalian : " . $calculator1 -> perkalian();

    echo "<br/>";
    echo "<br/>";

    echo "Bilangan ke-2 :";
    echo "<br/>";
    echo "<br/> Hasil Pertambahan : " . $calculator2 -> pertambahan();
    echo "<br/> Hasil Pengurangan : " . $calculator2 -> pengurangan();
    echo "<br/> Hasil Pembagian : " . $calculator2 -> pembagian();
    echo "<br/> Hasil Perkalian : " . $calculator2 -> perkalian();
?>
