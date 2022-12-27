from time import time


class time():
    def __init__(self, jam):
        self.jam = time.tm_hour(range[0, 23])
        print("Masukkan Jam :", jam)

    def __init__(self, menit):
        self.menit = time.tm_min(range[0, 59])
        print("Masukkan Menit :", menit)

    def __init__(self, detik):
        self.detik = time.strftime(time.tm_sec(range[0, 61]))
        print("Masukkan Detik :", detik)


waktu = time("Sekarang Jam :", 21)
print(waktu)
