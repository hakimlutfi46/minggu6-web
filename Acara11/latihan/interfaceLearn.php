<?php
// Interface Kendaraan
interface Kendaraan
{
    public function start();
    public function stop();
}

// Class Mobil yang mengimplementasikan interface Kendaraan
class Mobil implements Kendaraan
{
    public function start()
    {
        echo "Mobil dihidupkan.";
    }

    public function stop()
    {
        echo "Mobil dimatikan.";
    }
}

// Class Sepeda yang juga mengimplementasikan interface Kendaraan
class Sepeda implements Kendaraan
{
    public function start()
    {
        echo "Sepeda digerakkan.";
    }

    public function stop()
    {
        echo "Sepeda dihentikan.";
    }
}

// Function untuk mengoperasikan kendaraan
function operasikanKendaraan(Kendaraan $kendaraan)
{
    $kendaraan->start();
    echo "<br>";
    $kendaraan->stop();
}

// Membuat objek Mobil
$mobil = new Mobil();
// Membuat objek Sepeda
$sepeda = new Sepeda();

// Mengoperasikan kendaraan menggunakan function
operasikanKendaraan($mobil);  // Output: Mobil dihidupkan. Mobil dimatikan.
echo "<br>";
operasikanKendaraan($sepeda); // Output: Sepeda digerakkan. Sepeda dihentikan.
