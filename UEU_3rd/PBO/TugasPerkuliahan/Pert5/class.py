from traceback import print_tb


class Abc():
    def __init__(self, jenis, kendaraan):
        self.jenis = jenis
        self.kendaraan = kendaraan

    def __str__(self):
        return f"'mobil',{self.jenis}({self.kendaraan})"


a = Abc('Roda empat', 'mobil')
print(a.__dict__)
