class Students:
    def __init__(self, name, rank, points):
        self.name = name
        self.rank = rank
        self.points = points

    # custom function
    def demofunc(self):
        print("I am "+self.name)
        print("I got Rank ", +self.rank)


# create 4 objects
st1 = Students("Marcel", 1, 100)
st2 = Students("Adit", 2, 90)
st3 = Students("Nizar", 3, 76)
st4 = Students("Tekheng", 4, 60)

# panggil fungsi menggunakan objek yang dibuat di atas
st1.demofunc()
st2.demofunc()
st3.demofunc()
st4.demofunc()
