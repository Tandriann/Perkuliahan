import mysql.connector

mydb = mysql.connector.connect(
    host="172.27.253.169",
    port=43306,
    user="root",
    password="p455w0rd",
    database="garden"
)

# print(mydb)

db = mydb.cursor()

db.execute("SELECT * from Anggrek ")
rest = db.fetchall()
for x in rest:
    print(x)

db.execute("SELECT * from Mawar ")
rest = db.fetchall()
for x in rest:
    print(x)

db.execute("SELECT * from Melati ")
rest = db.fetchall()
for x in rest:
    print(x)
