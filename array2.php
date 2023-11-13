<?php

class Sekolah{
    public $siswa;
    function set_isi(){
        $this->siswa = [
            [
                'nama' => 'Bejo',
                'alamat' => 'jalan itu'
            ],
            [
                'nama' => 'timin',
                'alamat' => 'jalan ini'
            ],
            [
                'nama' => 'eko',
                'alamat' => 'jalan sana'
            ]
        ];
    }

    function daftar_siswa(){
        echo 'Daftar Siswa:';
        echo '<br/>';
        foreach ($this->siswa as $key => $data) {
            echo $data['nama'];
            echo '<br/>';
        }
    }

    tugas:
    buat fungsi untuk menambahkan daftar_siswa
    tampilkan semua siswa
    buat fungsi untuk merubah nama siswa
    ubah nama seorang siswa

}

$smp1 = new Sekolah;
$smp1->set_isi();
$smp1->daftar_siswa();
?>