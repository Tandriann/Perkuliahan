class LuasSegitiga:
    print("--------------------------------------------")
    print("  Program Menghitung Luas Segitiga  ")
    print("--------------------------------------------")

    def hitung():
        alas = float(input("Masukkan Alas: "))
        tinggi = float(input("Masukkan Tinggi: "))
        luas = 1/2*alas*tinggi

        print("--------------------------------------------")
        print("Alas Segitiga: ", alas)
        print("Tinggi Segitiga: ", tinggi)
        print("Maka Luas Segitiga adalah: ", luas)
        print("--------------------------------------------")

    hitung()
