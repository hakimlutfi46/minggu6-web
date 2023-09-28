<?php
// Antarmuka Kendaraan
interface Kendaraan
{
    public function start();
    public function stop();
}

// Class Mobil yang mengimplementasikan Kendaraan
class Mobil implements Kendaraan
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function start()
    {
        echo "Mobil {$this->model} dihidupkan.<br>";
    }

    public function stop()
    {
        echo "Mobil {$this->model} dimatikan.<br>";
    }
}

// Class Sepeda yang juga mengimplementasikan Kendaraan
class Sepeda implements Kendaraan
{
    public function start()
    {
        echo "Sepeda digerakkan.<br>";
    }

    public function stop()
    {
        echo "Sepeda dihentikan.<br>";
    }
}

// Membuat objek Mobil dan Sepeda
$mobil1 = new Mobil("Sedan");
$mobil2 = new Mobil("SUV");
$sepeda = new Sepeda();

// Menyimpan objek kendaraan dalam sebuah array
$kendaraan = array($mobil1, $mobil2, $sepeda);

// Mengoperasikan kendaraan menggunakan foreach
foreach ($kendaraan as $k) {
    $k->start();
    $k->stop();
}
