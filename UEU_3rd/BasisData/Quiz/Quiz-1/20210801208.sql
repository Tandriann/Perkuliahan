CREATE TABLE mahasiswa(
	id_mahasiswa INT AUTO_INCREMENT,
	name_mahasiswa VARCHAR(100),
	ref_to_fakultas INT,
	ref_to_akreditasi INT,
	ref_to_dosen INT,
	PRIMARY KEY (id_mahasiswa)
);

CREATE TABLE dosen(
	id_dosen INT AUTO_INCREMENT,
	nama_dosen VARCHAR(100),
	ref_to_mhs INT,
	ref_to_fakultas INT,
	ref_to_akreditasi INT,
	PRIMARY KEY (id_dosen)
);

CREATE TABLE akreditasi(
	id_akreditasi INT AUTO_INCREMENT,
	nama_akreditasi VARCHAR(100),
	ref_to_fakultas INT,
	PRIMARY KEY (id_akreditasi)
);

CREATE TABLE fakultas(
	id_fakultas INT AUTO_INCREMENT,
	nama_fakultas VARCHAR(100),
	ref_to_dosen INT,
	ref_to_mhs INT,
	ref_to_akreditasi INT,
	PRIMARY KEY (id_fakultas)
);

CREATE TABLE mata_kuliah(
	id_matkul INT AUTO_INCREMENT,
	nama_matakuliah VARCHAR(100),
	ref_to_mhs INT,
	ref_to_fakultas INT,
	ref_to_dosen INT,
	PRIMARY KEY (id_matkul)
);

-- JAWABAN 1 --

INSERT INTO mahasiswa(name_mahasiswa) VALUES('John'),('Adi'),('Ani'),('Ucup');

INSERT INTO dosen(nama_dosen) VALUES('Rudi'),('Budi');

INSERT INTO mata_kuliah(nama_matakuliah) VALUES('basis data'),('pbo');

INSERT INTO akreditasi(nama_akreditasi) VALUES('B'),('A');

INSERT INTO fakultas(nama_fakultas) VALUES('SI'),('TI');

-- JAWABAN 1 --

SELECT * FROM mahasiswa

SELECT * FROM dosen

SELECT * FROM mata_kuliah

SELECT * FROM akreditasi

SELECT * FROM fakultas

-- AKHIR JAWABAN 1 --

-- JAWABAN 2 --

SELECT
	mahasiswa.id_mahasiswa,
	mahasiswa.name_mahasiswa AS mahasiswa,
	fakultas.nama_fakultas AS fakultas
FROM
	mahasiswa
	INNER JOIN 
	fakultas
WHERE 
	mahasiswa.ref_to_fakultas = fakultas.id_fakultas

-- AKHIR JAWABAN 2 --
	
-- 	JAWABAN 3 --

SELECT
	mahasiswa.id_mahasiswa,
	mahasiswa.name_mahasiswa AS mahasiswa,
	fakultas.nama_fakultas AS fakultas,
	akreditasi.nama_akreditasi AS akreditasi
FROM
	mahasiswa
	INNER JOIN
	fakultas, akreditasi
WHERE
	mahasiswa.ref_to_fakultas = fakultas.id_fakultas AND mahasiswa.ref_to_akreditasi =  akreditasi.id_akreditasi

-- AKHIR JAWABAN 3 --
	
-- JAWABAN 4 --

SELECT 
	dosen.id_dosen, 
	dosen.nama_dosen AS dosen, 
	mahasiswa.name_mahasiswa AS mahasiswa
FROM 
	dosen 
	INNER JOIN 
	mahasiswa
WHERE 
	dosen.ref_to_mhs = mahasiswa.id_mahasiswa

-- AKHIR JAWABAN 4 --

-- JAWABAN 5 --

SELECT 
	dosen.id_dosen, 
	dosen.nama_dosen AS Dosen, 
	fakultas.nama_fakultas AS Fakultas,
	akreditasi.nama_akreditasi AS Akreditasi
FROM 
	dosen 
	INNER JOIN 
	fakultas, akreditasi
WHERE 
	dosen.ref_to_fakultas = fakultas.id_fakultas AND dosen.ref_to_akreditasi =  akreditasi.id_akreditasi
	
-- AKHIR JAWABAN 5 --
