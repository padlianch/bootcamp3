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
            echo $key;
            echo '. ';
            echo $data['nama'];
            echo '<br/>';
        }
    }

    function tambah_siswa($tambahan){
        // $this->siswa[]['nama']=$var_nama;
        // $this->siswa[]['alamat']=$var_alamat;

        $tambahan=[['nama'=>$tambahan['nama'], 'alamat'=>$tambahan['alamat']]];
        $this->siswa = array_merge($this->siswa, $tambahan);
    }

    function tambah_siswa2($var_nama, $var_alamat){
        // $this->siswa[]['nama']=$var_nama;
        // $this->siswa[]['alamat']=$var_alamat;

        $tambahan=[['nama'=>$var_nama, 'alamat'=>$var_alamat]];
        $this->siswa = array_merge($this->siswa, $tambahan);
    }

    function ubah_siswa($index, $nama_baru){
        $this->siswa[$index]['nama']=$nama_baru;
    }

    function pencarian_siswa($nama_cari){

        foreach ($this->siswa as $key => $data) {
            if($data['nama'] == $nama_cari){
                return 'data ditemukan pada index = '.$key;
            }
        }
        return 'data tidak ditemukan';
    }

    // tugas:
    // buat fungsi untuk menambahkan daftar_siswa
    // tampilkan semua siswa
    // buat fungsi untuk merubah nama siswa
    // ubah nama seorang siswa

}

$smp1 = new Sekolah;
$smp1->set_isi();
$tambahan = ['nama'=>'tambahan baru', 'alamat'=>'baru'];
$smp1->tambah_siswa($tambahan);
$smp1->tambah_siswa2('tes', 'coba');
$smp1->daftar_siswa();
$cari = $smp1->pencarian_siswa('eko');
echo $cari;
echo '<br/>';
echo '<br/>';
$smp1->ubah_siswa(2, 'oke');
$smp1->daftar_siswa();
?>