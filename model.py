from sqlalchemy.schema import Column
from sqlalchemy.types import String,Integer,Date,BLOB,BigInteger,DATETIME,ARRAY
from database import base,db_engine

class sign_up(base):
    __tablename__ = "signup"
    
    id = Column(Integer, primary_key=True,index=True)
    name = Column(String(30))
    email = Column(String(30))
    phoneno = Column(String(30))
    password= Column(String(30))
    status = Column(String(30))
    created_at=Column(String(30))