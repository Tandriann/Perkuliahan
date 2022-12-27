SELECT
	mahasiswa.id_mahasiswa,
	mahasiswa.nama_mahasiswa AS mahasiswa,
	mataKuliah.nama_mataKuliah AS matkul
FROM
	mahasiswa
	INNER JOIN 
	mataKuliah
WHERE 
	mahasiswa.ref_to_mataKuliah = mataKuliah.id_mataKuliah