from sqlalchemy.schema import Column
from sqlalchemy.types import String,Integer,Date,BLOB,BigInteger,DATETIME,ARRAY
from database import base,db_engine

class menu(base):

    __tablename__="MENU"

    id =Column(Integer,primary_key=True,index=True)
    Deshies_name=Column(String(30))
    Deshies_cost=Column(Integer)
    status=Column(String(30))
    