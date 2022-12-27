SELECT
	dosen.id_dosen,
	dosen.nama_dosen AS dosen,
	mataKuliah.nama_mataKuliah AS matkul,
	mahasiswa.nama_mahasiswa AS mahasiswa
FROM
	dosen
	INNER JOIN 
	mataKuliah, mahasiswa
WHERE 
	dosen.ref_to_mataKuliah = mataKuliah.id_mataKuliah AND dosen.ref_to_mahasiswa = mahasiswa.id_mahasiswa 