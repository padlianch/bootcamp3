<?php

class Deret{
    public $bilangan;
    function set_isi(){
        $this->bilangan = array(1,3,5,6,9);
    }

    function tambah_isi(){
        $this->bilangan[]=10;
    }

    function tampilkan_isi(){
        for ($i=0; $i < count($this->bilangan); $i++) { 
            echo $this->bilangan[$i];
            echo '<br/>';
        }
    }

    function tampilkan_isi2(){
        foreach ($this->bilangan as $key => $data) {
            echo $data;
            echo '<br/>';
        }
    }
}

$bilangan = new Deret;
$bilangan->set_isi();
$bilangan->tambah_isi();
$bilangan->tampilkan_isi();
?>