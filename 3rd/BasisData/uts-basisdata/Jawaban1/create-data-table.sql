CREATE TABLE mahasiswa(
	id_mahasiswa INT AUTO_INCREMENT,
	nama_mahasiswa VARCHAR(100),
	ref_to_mataKuliah INT,
	ref_to_dosen INT,
	PRIMARY KEY (id_mahasiswa)
);
				
CREATE TABLE dosen(
	id_dosen INT AUTO_INCREMENT,
	nama_dosen VARCHAR(100),
	ref_to_mataKuliah INT,
	ref_to_mahasiswa INT,
	PRIMARY KEY (id_dosen)
);

CREATE TABLE mataKuliah(
	id_mataKuliah INT AUTO_INCREMENT,
	nama_mataKuliah VARCHAR(100),
	ref_to_mahasiswa INT,
	ref_to_dosen INT,
	PRIMARY KEY (id_mataKuliah)
);