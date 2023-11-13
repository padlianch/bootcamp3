<?php

class Matematika{
    function tambah($a,$b){
        return $a+$b;
    }

    function kali($a,$b){
        return $a*$b;
    }
}

class Persegipanjang extends Matematika{
    public $panjang;
    public $lebar;

    public function __construct($var1, $var2)
    {
        $this->panjang = $var1;
        $this->lebar = $var2;
    }

    function set_panjang($var){
        $this->panjang = $var;
        echo 'panjang berhasil diatur';
        echo '</br>';
    }

    function set_lebar($var){
        $this->lebar = $var;
        echo 'lebar berhasil diatur';
        echo '</br>';
    }

    function lihat_panjang(){
        echo 'panjang = ';
        echo $this->panjang;
        echo '</br>';
    }

    function lihat_lebar(){
        echo 'lebar = ';
        echo $this->lebar;
        echo '</br>';
    }

    function luas(){
        echo 'luas = ';
        // echo $this->panjang*$this->lebar;
        echo $this->kali($this->panjang, $this->lebar);
        echo '</br>';
    }

    function keliling(){
        $tambah1 = $this->tambah($this->panjang, $this->lebar);
        $tambah2 = $this->tambah($this->panjang, $this->lebar);
        $hasil = $this->tambah($tambah1, $tambah2);

        echo 'keliling = ';
        echo $hasil;
        echo '</br>';
    }

    function keliling2(){
        $tambah = $this->tambah($this->panjang, $this->lebar);
        $hasil = $this->kali($tambah, 2);

        echo 'keliling2 = ';
        echo $hasil;
        echo '</br>';
    }

    function keliling3(){
        $panjangx2 = $this->kali($this->panjang, 2);
        $lebarx2 = $this->kali($this->lebar, 2);
        $hasil = $this->tambah($panjangx2,$lebarx2);

        echo 'keliling3 = ';
        echo $hasil;
        echo '</br>';
    }
}

$objek = new Persegipanjang(20, 10);
// $objek->set_panjang(10);
// $objek->set_lebar(5);
$objek->lihat_panjang();
$objek->lihat_lebar();
$objek->luas();
$objek->keliling();
$objek->keliling2();
$objek->keliling3();
?>