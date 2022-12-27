total = int(input("Masukan Total Belanja :"))
setelah_dikenakan_pajak = total
if total < 100000:
    PPN = total * (10/100)

setelah_dikenakan_pajak = total + PPN
print("Setiap pembelian dikenakan biaya PPN 10% : Rp {:,}".format(
    int(PPN)).replace(',', '.'))
print("Harga setelah dikenakan PPN : Rp {:,}".format(
    int(setelah_dikenakan_pajak)).replace(',', '.'))
