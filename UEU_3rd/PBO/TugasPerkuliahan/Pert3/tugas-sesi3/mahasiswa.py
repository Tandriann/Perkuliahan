# program Menghitung Nilai Mahasiswa

print('\n<=======>  PROGRAM PYTHON MENGHITUNG NILAI MAHASISWA  <=======>\n')
nim = input('Masukan Nim Anda \t: ')
nama = input('Masukan Nama Anda \t: ')
gender = input('Gender \t\t\t: ')
TanggalInputNilai = input('Tanggal Input Nilai \t: ')
mataKuliah = input('Masukan Mata Kuliah \t: ')
absen = float(input('Masukkan Nilai Absensi \t: '))
tugas = float(input('Masukan Nilai Tugas \t: '))
uts = float(input('Masukan Nilai UTS Anda \t: '))
uas = float(input('Masukan Nilai UAS Anda \t: '))

# Persentase Nilai
R_absen = int(absen * 20/100)
R_tugas = int(tugas * 25/100)
R_uts = int(uts * 25/100)
R_uas = int(uas * 30/100)

nilai_akhir = R_absen + R_tugas + R_uts + R_uas

print('\n<======================>  NILAI AKHIR  <======================>\n')
print('Tanggal Input Nilai\t: '+TanggalInputNilai)
print('Nama \t\t\t: '+nama)
print('Nim \t\t\t: '+nim)
print('Mata Kuliah \t\t: '+mataKuliah)
print('\n<===============>  KETERANGAN NILAI MAHASISWA  <==============>\n')
print('Nilai Akhir \t\t:',int(nilai_akhir))

# penilaian
if nilai_akhir >= 80:
    print('Grade \t\t\t: A')
elif nilai_akhir >= 77:
    print('Grade \t\t\t: A-')
elif nilai_akhir >= 74:
    print('Grade \t\t\t: B+')
elif nilai_akhir >= 71:
    print('Grade \t\t\t: B')
elif nilai_akhir >= 68:
    print('Grade \t\t\t: B-')
elif nilai_akhir >= 64:
    print('Grade \t\t\t: C+')
elif nilai_akhir >= 60:
    print('Grade \t\t\t: C')
elif nilai_akhir >= 50:
    print('Grade \t\t\t: D')
elif nilai_akhir >= 0:
    print('Grade \t\t\t: E')

# Input nilai akhir, Jika nilai kurang dari 60 maka tidak lulus
if nilai_akhir >= 60:
    print('Keterangan \t\t: LULUS')
else:
    print('Keterangan \t\t: TIDAK LULUS')

print('\n<=============================================================>\n')