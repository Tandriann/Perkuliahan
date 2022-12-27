from datetime import date


def tanggalLahir(name):
    data = input('Enter ' + name + ' (yyyy mm dd): ').split(' ')
    try:
        return date(int(data[0]), int(data[1]), int(data[2]))
    except Exception as e:
        print(e)
        print('Input Tidak Valid, Ikuti format yang diberikan!')
        tanggalLahir(name)


def usiaSaatIni():
    born = tanggalLahir('tanggal lahirmu')
    today = date.today()
    extra_year = 1 if ((today.month, today.day) <
                       (born.month, born.day)) else 0
    return today.year - born.year - extra_year


print('age :', usiaSaatIni(), 'st')
