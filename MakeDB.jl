using SQLite

# Make new DB
db = SQLite.DB("ERP_CODE.sqlite")

# Make new Table
SQLite.query(db,"CREATE TABLE partlist (ERP_CODE TEXT PRIMARY KEY, NAME TEXT);")
