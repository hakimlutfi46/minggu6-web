<?php
interface bangunDatar
{
    public function hitungLuas();
}

class Persegi implements bangunDatar
{

    private $sisi;

    public function __construct($s)
    {
        $this->sisi = $s;
    }
    public function hitungLuas()
    {
        $luas = $this->sisi * $this->sisi;
        return "Luas Persegi : " . $luas;
    }
}

class Lingkaran implements bangunDatar
{
    private $r;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function hitungLuas()
    {
        $luas = pi() * $this->r * $this->r;
        return "Luas Lingkaran : " . $luas;
    }
}

class Segitiga implements bangunDatar
{
    private $alas;
    private $tinggi;

    public function __construct($a, $t)
    {
        $this->alas = $a;
        $this->tinggi = $t;
    }

    public function hitungLuas()
    {
        $luas = 0.5 * $this->alas * $this->tinggi;
        return "Luas Segitiga : " . $luas;
    }
}

$segitiga = new Segitiga(5, 8);
$persegi = new Persegi(20);
$lingkaran = new Lingkaran(7);

$bangun = array($segitiga, $persegi, $lingkaran);

foreach ($bangun as $b) {
    echo $b->hitungLuas() . " cm <br>";
}
