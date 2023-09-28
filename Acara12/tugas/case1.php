<?php
interface Tanah
{
    public function hitungLuas();
}

abstract class Bibit
{
    abstract public function ditanami();
}

// ekstend bibit implement tanah
class Lingkaran extends Bibit implements Tanah
{

    private $jariJari;
    private $pi = 3.14;

    public function __construct($r)
    {
        $this->jariJari = $r;
    }

    // Menghitung luas tanah berbentuk lingkaran
    // implement method dari interface tanah

    public function hitungLuas()
    {
        return $this->jariJari * $this->jariJari * $this->pi;
    }

    public function ditanami()
    {
        return "Ditanami Kopi";
    }
}

class PersegiPanjang extends Bibit implements Tanah
{

    private $panjang;
    private $lebar;

    public function __construct($p, $l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }

    public function hitungLuas()
    {
        return $this->panjang * $this->lebar;
    }

    public function ditanami()
    {
        return "Ditanami Padi";
    }
}

$tanahAgus = new Lingkaran(3);
$tanahChandra = new PersegiPanjang(3, 4);

echo "Tanah Agus seluas " . $tanahAgus->hitungLuas() . " m2.<br>";
echo $tanahAgus->ditanami() . "<br><br>";

echo "Tanah Chandra seluas " . $tanahChandra->hitungLuas() . " m2.<br>";
echo $tanahChandra->ditanami() . "<br><br>";
