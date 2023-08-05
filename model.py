from sqlalchemy.schema import Column
from sqlalchemy.types import String, Integer, Date, BLOB, BigInteger, DATETIME, ARRAY,JSON
from database import base,db_engine

class sign_up(base):
    __tablename__ = "signup"
    
    id = Column(Integer, primary_key=True,index=True)
    user_id = Column(String(30))
    name = Column(String(30))
    email = Column(String(30))
    phoneno = Column(String(30))
    password= Column(String(30))
    status = Column(String(30))
    created_at=Column(String(30))

class host(base):
    __tablename__ = "host_details"

    id = Column(Integer, primary_key=True,index=True)
    userType = Column(String(30))
    namespaceName = Column(String(30))
    spaceSize = Column(Integer)
    spaceAddress = Column(String(300))
    spaceCity = Column(String(30))
    spacePincode = Column(Integer)
    coordinates_container = Column(String(30))
    spaceLength = Column(Integer)
    spaceWidth = Column(Integer)
    spaceSurvey = Column(String(30))
    spaceAdhar = Column(Integer)
    spaceFileMultiple = Column(String(130))
    dropdownMenuButton = Column(JSON)
    subscriptionUser = Column(String(30))
    currentUser = Column(String(30))
    spaceInstructions = Column(String(300))
    status = Column(String(30))
    created_at=Column(String(30))