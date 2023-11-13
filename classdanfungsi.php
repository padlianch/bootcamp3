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
}

$objek = new Persegipanjang(20, 10);
// $objek->set_panjang(10);
// $objek->set_lebar(5);
$objek->lihat_panjang();
$objek->lihat_lebar();
$objek->luas();
?>