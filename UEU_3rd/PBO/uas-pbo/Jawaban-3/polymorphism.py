class Plant(object):

    def __init__(self, Jumlah_Air, Jumlah_Pupuk, Status_Tumbuh):
        self.Jumlah_Air = Jumlah_Air
        self.Jumlah_Pupuk = Jumlah_Pupuk
        self.Status_Tumbuh = Status_Tumbuh

    def tumbuh(self):
        if self.Status_Tumbuh < 4:
            self.Jumlah_Air -= 3
            self.Jumlah_Pupuk -= 1
            self.Status_Tumbuh += 1

    def cek_kondisi_tumbuh(self):
        if self.Jumlah_Air >= 3 and self.Jumlah_Pupuk >= 1:
            Plant.tumbuh()

    def Beri_Air(self):
        self.Jumlah_Air += 1
        Plant.cek_kondisi_tumbuh()

    def Beri_Pupuk(self):
        self.Jumlah_Pupuk += 1
        Plant.cek_kondisi_tumbuh()

    def getstatustumbuhText(self):
        if self.Status_Tumbuh == 0:
            print("Benih")
        elif self.Status_Tumbuh == 1:
            print("Tunas")
        elif self.Status_Tumbuh == 2:
            print("Tanaman Kecil")
        elif self.Status_Tumbuh == 3:
            print("Tanaman Dewasa")
        else:
            print("berbunga")

    def DisplyPlant(self):
        # print(plany.getStatusTumbuhText)
        print("Jumlah_Air \t: {} \nJumlah_Pupuk \t: {}".format(
            self.Jumlah_Air, self.Jumlah_Pupuk))

    def getJumlah_Air(self):
        return self.Jumlah_Air

    def setJumlahAir(self, n):
        self.Jumlah_Air = n

    def getJumlah_Pupuk(self):
        return self.Jumlah_Pupuk

    def setJumlahPupuk(self, n):
        self.Jumlah_Pupuk = n

    def getStatusTumbuh(self):
        return self.Status_Tumbuh

    def statustumbuh(self, n):
        self.Status_Tumbuh = n

# child class


class Anggrek(Plant):
    def __init__(self, Jumlah_Air, Jumlah_Pupuk, Status_Tumbuh, Jenis):
        self.jenis = Jenis
        Plant.__init__(self, Jumlah_Air, Jumlah_Pupuk, Status_Tumbuh)

    def anggrektumbuh(self):
        if self.Status_Tumbuh < 4:
            self.Jumlah_Air -= 3
            self.Jumlah_Pupuk -= 1
            self.Status_Tumbuh += 1

    def cek_kondisitumbuh(self):
        if self.Jumlah_Air >= 3 and self.Jumlah_Pupuk >= 2:
            Anggrek.anggrektumbuh()

    def getJenis(self):
        return self.jenis

# child class


class Mawar(Plant):
    def __init__(self, Jumlah_Air, Jumlah_Pupuk, Status_Tumbuh, Jenis):
        self.jenis = Jenis
        Plant.__init__(self, Jumlah_Air, Jumlah_Pupuk, Status_Tumbuh)

    def mawartumbuh(self):
        if self.Status_Tumbuh < 8:
            self.Jumlah_Air -= 6
            self.Jumlah_Pupuk -= 3
            self.Status_Tumbuh += 3

    def cek_kondisitumbuh(self):
        if self.Jumlah_Air >= 3 and self.Jumlah_Pupuk >= 2:
            Mawar.mawartumbuh()

    def getJenis(self):
        return self.jenis


class Melati(Plant):
    def __init__(self, Jumlah_Air, Jumlah_Pupuk, Status_Tumbuh, Jenis):
        self.jenis = Jenis
        Plant.__init__(self, Jumlah_Air, Jumlah_Pupuk, Status_Tumbuh)

    def melatitumbuh(self):
        if self.Status_Tumbuh < 4:
            self.Jumlah_Air -= 3
            self.Jumlah_Pupuk -= 1
            self.Status_Tumbuh += 1

    def cek_kondisitumbuh(self):
        if self.Jumlah_Air >= 3 and self.Jumlah_Pupuk >= 2:
            Melati.melatitumbuh()

    def getJenis(self):
        return self.jenis


Tanaman1 = Anggrek(2, 3, 4, 'Anggrek')
print("Jenis Tanaman \t: {}".format(Tanaman1.jenis))
Tanaman1.getstatustumbuhText()
Tanaman1.DisplyPlant()

Tanaman2 = Mawar(1, 4, 2, 'Mawar')
print("Jenis Tanaman \t: {}".format(Tanaman2.jenis))
Tanaman2.getstatustumbuhText()
Tanaman2.DisplyPlant()

Tanaman3 = Melati(3, 1, 1, 'Melati')
print("Jenis Tanaman \t: {}".format(Tanaman3.jenis))
Tanaman3.getstatustumbuhText()
Tanaman3.DisplyPlant()
