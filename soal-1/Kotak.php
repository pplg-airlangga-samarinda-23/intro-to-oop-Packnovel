<?php
class PersegiPanjang
{
    // deklarasikan panjang dan lebar
    private $panjang;
    private $lebar;


    // deklarasikan metode konstruktor
    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }


    // deklarasikan metode mutator dan asesor
    public function setPanjang($panjang)
    {
        $this->panjang = $panjang;
    }
    public function setLebar($lebar)
    {
        $this->lebar = $lebar;
    }
    public function getPanjang()
    {
        return $this->panjang;
        
            }        public function getLebar()
    {
        return $this->lebar;
    }

       
       




    public function hitungLuas()
    {
        // lengkapi kode untuk menghitung luas persegi panjang
        return $this->panjang * $this->lebar;

    }

    public function hitungKeliling()
    {
        // lengkapi dengan kode untuk menghitung keliling persegi panjang
        return   ($this->panjang + $this->lebar);

    }
}

$contoh = new PersegiPanjang(12, 20);
echo "Luas Persegi Panjang: " . $contoh->hitungLuas() . "<br>";
echo "Keliling Persegi Panjang: " . $contoh->hitungKeliling() . "<br>";
