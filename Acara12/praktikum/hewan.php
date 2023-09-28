<?php
// Abstract class
abstract class Tanaman
{
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    abstract public function warna();
}

// Interface
interface Makanan
{
    public function jenisMakanan();
}

class Bunga extends Tanaman implements Makanan
{
    public function warna()
    {
        return "Memiliki warna yang indah.";
    }

    public function jenisMakanan()
    {
        return "Bunga memperoleh nutrisi dari tanah dan air.";
    }
}

class Pohon extends Tanaman implements Makanan
{
    public function warna()
    {
        return "Memiliki batang dan dedaunan berwarna hijau.";
    }

    public function jenisMakanan()
    {
        return "Pohon memperoleh nutrisi dari tanah dan fotosintesis.";
    }
}

class Rumput extends Tanaman implements Makanan
{
    public function warna()
    {
        return "Memiliki warna hijau.";
    }

    public function jenisMakanan()
    {
        return "Rumput memperoleh nutrisi dari tanah dan fotosintesis.";
    }
}

$bunga = new Bunga("Bunga Matahari");
$pohon = new Pohon("Pohon Oak");
$rumput = new Rumput("Rumput Hijau");

$tanaman = array($bunga, $pohon, $rumput);

foreach ($tanaman as $t) {
    echo $t->nama . " " . $t->warna() . "<br>";
    echo "Jenis Makanan : " . $t->jenisMakanan() . "<br>";
    echo "<br>";
}
