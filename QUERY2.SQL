-- SELECT nama_kelas FROM kelas;

SELECT 
	kelas.nama_kelas,
	kelas.id_tahun_ajaran,
	ruangan.nama_ruangan
FROM kelas
LEFT JOIN ruangan 
	ON ruangan.id = kelas.id_ruangan;
	
	
tugas:
1. tampilkan informasi terelasi dari seluruh kelas
2. buat query untuk mengisiisi siswa, siswa_kelas_riwayat, guru mata pelajaran, mata_pelajaran, kelas_mata_pelajaran
3. buat qury untuk mengetahui siapa saja siswa pada tahun ajaran '2018-2019'
4. buat query untuk mengetahui seorang siswa pernah berada di kelas berapa saja
5. buat qury untuk mengambil informasi guru-guru yang mengajar pada suatu kelas beserta mata pelajarannya
6. tampilkan seluruh guru yang menjadi wali kelas pada tahun ajaran '2018-2019'