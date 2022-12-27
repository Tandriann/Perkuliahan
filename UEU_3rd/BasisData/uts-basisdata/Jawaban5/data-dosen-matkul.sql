SELECT
	dosen.id_dosen,
	dosen.nama_dosen AS dosen,
	mataKuliah.nama_mataKuliah AS matkul
FROM
	dosen
	INNER JOIN 
	mataKuliah
WHERE 
	dosen.ref_to_mataKuliah = mataKuliah.id_mataKuliah