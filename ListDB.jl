using SQLite
using DataFrames

# Make new DB
db = SQLite.DB("ERP_CODE.sqlite")

# List
list = SQLite.query(db, "SELECT * FROM partlist ORDER BY ERP_CODE;")

#println(list)
writetable("ListDB.csv", list, separator=',', header=true)
