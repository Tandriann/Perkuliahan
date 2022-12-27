class MoneyCorveter:
    def __init__(self, name):
        self.name = name

    def tampilan(self):
        print(f"Halo {self.name}")
        print("===========================")

    def validate(self, valid):
        if valid > 0 and valid < 4:
            return True
        else:
            return False

    def matauang(self, daftar):
        for key, value in daftar.items():
            index = 1
            print(
                f"{index : <1}{'.' : <2}{key : <15}{':' : <2}{'Rp.' : <1}{value: >1}")
        print("===========================\n")

    def konvers(self, daftar, nilai):
        for key, value in daftar.items():
            has = nilai*value
            print(f"{nilai : <1}{'.' : <2}{key : <15}{':' : <2}{'Rp.' : <1}{has: >1}")
        print("===========================\n")

    def penukaran(self, nama):
        pass

    def formatrupiah(uang):
        list_uang = list(str(uang))
        try:
            # Memisahkan nilai desimal
            tanpa_desimal = list_uang[:list_uang.index('.')]
            desimal = list_uang[list_uang.index('.'):]
        except:
            # Jika tidak ada desimal
            tanpa_desimal = list_uang
            desimal = []

        n = len(tanpa_desimal)-3
        while n > 0:
            tanpa_desimal.insert(n, ',')
            n -= 3
        return ''.join(tanpa_desimal) + ''.join(desimal)


if __name__ == "__main__":
    print('''
    === Money Changer Tel-U ===
    ||                        ||
    ||   1. Pengecekan Kurs   ||
    ||   2. Penukaran uang    ||
    ||   3. Database          ||
    ||   4. Exit              ||
    ||                        ||
    ============================
    ''')
    data = {
        "Dollar": 14288,
        "Euro": 17470,
        "Poundsterling": 20282,
        "Ringgit": 3541,
        "Yen": 13003
    }
    dataKeys = list(data.keys())
    dataValues = list(data.values())2

    print("===========================")
    user = int(input("Masukan Menu      : "))
    nama = input("Masukan Nama Anda : ")
    result = MoneyCorveter(nama)
    result.tampilan()
    if result.validate(user):
        if user == 1:
            result.matauang(data)
            print("===========================")
            nominal = int(input("Masukan Nominal    : "))
            result.konvers(data, nominal)
