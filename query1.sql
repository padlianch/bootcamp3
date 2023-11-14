CREATE TABLE tahun(
	id int NOT NULL AUTO_INCREMENT,
	tahun int,
	PRIMARY KEY (id)
);

CREATE TABLE tahun_ajaran(
	id int NOT NULL AUTO_INCREMENT,
	tahun_ajaran varchar(255),
	tahun_mulai int,
	PRIMARY KEY (id)
);

CREATE TABLE ref_tingkat_kelas(
	id int NOT NULL AUTO_INCREMENT,
	tingkat_kelas int,
	PRIMARY KEY (id)
);

CREATE TABLE kelas(
	id int NOT NULL AUTO_INCREMENT,
	id_tingkat_kelas INT,
	id_tahun_ajaran INT,
	id_ruangan INT,
	nama_kelas VARCHAR(255),
	id_wali_kelas INT,
	PRIMARY KEY (id)
);

CREATE TABLE ruangan(
	id int NOT NULL AUTO_INCREMENT,
	nama_ruangan varchar(255),
	PRIMARY KEY (id)
	);

CREATE TABLE siswa_kelas_riwayat(
	id int NOT NULL AUTO_INCREMENT,
	id_siswa INT,
	id_kelas INT,
	PRIMARY KEY (id)
);

CREATE TABLE mata_pelajaran(
	id int NOT NULL AUTO_INCREMENT,
	id_tahun_ajaran INT,
	id_tingkat INT,
	mata_pelajaran VARCHAR(255),
	PRIMARY KEY (id)
);

CREATE TABLE guru_mata_pelajaran(
	id int NOT NULL AUTO_INCREMENT,
	id_guru INT,
	id_mata_pelajaran INT,
	PRIMARY KEY (id)
);

create table siswa (
	 id int primary key AUTO_INCREMENT,
	 nama varchar(255),
	 alamat text,
	 id_kelas int
 )
;

create table guru (
	 id int primary key AUTO_INCREMENT,
	 nama varchar(255),
	 alamat text
 )
 ;

CREATE TABLE kelas_mata_pelajaran(
	id int NOT NULL AUTO_INCREMENT,
	id_kelas INT,
	id_mata_pelajaran VARCHAR(255),
	id_guru INT,
	PRIMARY KEY (id)
);