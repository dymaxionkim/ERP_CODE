using SQLite

# Make new DB
db = SQLite.DB("ERP_CODE.sqlite")

# Insert
SQLite.query(db, "INSERT OR REPLACE INTO partlist (ERP_CODE, NAME) VALUES ('H300001', 'A_LPL2');")
