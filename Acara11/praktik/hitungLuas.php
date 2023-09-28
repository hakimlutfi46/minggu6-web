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
    }

    public function hitungLuasLingkaran()
    {
    }
}

class Segitiga implements hitungLuas
{
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function hitungLuasPersegi()
    {
    }

    public function hitungLuasSegitiga()
    {
        return (sqrt(3) / 4) * $this->sisi * $this->sisi;
    }

    public function hitungLuasLingkaran()
    {
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
    }

    public function hitungLuasSegitiga()
    {
    }

    public function hitungLuasLingkaran()
    {
        return pi() * $this->jariJari * $this->jariJari;
    }
}

$persegi = new Persegi(5);
$segitiga = new Segitiga(6);
$lingkaran = new Lingkaran(4);

echo "Luas Persegi: " . $persegi->hitungLuasPersegi() . "<br>";
echo "Luas Segitiga: " . $segitiga->hitungLuasSegitiga() . "<br>";
echo "Luas Lingkaran: " . $lingkaran->hitungLuasLingkaran() . "<br>";
