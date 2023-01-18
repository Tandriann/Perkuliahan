import mysql.connector

mydb = mysql.connector.connect(
    host="172.27.253.169",
    port=43306,
    user="root",
    password="p455w0rd",
    database="garden"
)

db = mydb.cursor()

db.execute("SHOW TABLES")

for x in db:
    print(x)
