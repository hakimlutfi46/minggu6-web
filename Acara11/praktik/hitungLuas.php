<?php
interface hitungLuas
{
    public function hitungLuasPersegi();
    public function hitungLuasSegitiga();
    public function hitungLuasLingkaran();
}

class Persegi implements hitungLuas
{
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function hitungLuasPersegi()
    {
        return $this->sisi * $this->sisi;
    }

    public function hitungLuasSegitiga()
    {
        return 0;
    }

    public function hitungLuasLingkaran()
    {
        return 0;
    }
}

class Segitiga implements hitungLuas
{
    private $a;
    private $t;

    public function __construct($a, $t)
    {
        $this->a = $a;
        $this->t = $t;
    }

    public function hitungLuasSegitiga()
    {
        return 0.5 * $this->a * $this->t;
    }

    public function hitungLuasPersegi()
    {
        return 0;
    }

    public function hitungLuasLingkaran()
    {
        return 0;
    }
}

class Lingkaran implements hitungLuas
{
    private $jariJari;

    public function __construct($jariJari)
    {
        $this->jariJari = $jariJari;
    }

    public function hitungLuasPersegi()
    {
        return 0;
    }

    public function hitungLuasSegitiga()
    {
        return 0;
    }

    public function hitungLuasLingkaran()
    {
        return pi() * $this->jariJari * $this->jariJari;
    }
}

$segitiga = new Segitiga(5, 8);
$persegi = new Persegi(20);
$lingkaran = new Lingkaran(7);

echo "Luas Persegi: " . $persegi->hitungLuasPersegi() . "<br>";
echo "Luas Segitiga: " . $segitiga->hitungLuasSegitiga() . "<br>";
echo "Luas Lingkaran: " . $lingkaran->hitungLuasLingkaran() . "<br>";
