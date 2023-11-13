<?php

class Deret{
    public $bilangan;
    function set_isi(){
        $this->bilangan = array(1,3,5,6);
    }

    function tampilkan_isi(){
        foreach ($this->bilangan as $key => $data) {
            echo $data;
            echo '<br/>';
        }
    }
}

$bilangan = new Deret;
$bilangan->set_isi();
$bilangan->tampilkan_isi();
?>