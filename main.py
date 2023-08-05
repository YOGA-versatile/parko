from fastapi import FastAPI,Form, Request, Depends,File,UploadFile
from fastapi.responses import HTMLResponse, JSONResponse
from fastapi.templating import Jinja2Templates
from sqlalchemy.orm import Session
from database import SessionLocal  # Assuming you have defined SessionLocal in database.py
from fastapi.staticfiles import StaticFiles
from datetime import datetime
import model as model
from fastapi.responses import RedirectResponse
from fastapi import FastAPI, Depends
from fastapi.encoders import jsonable_encoder
from typing import Dict,List, Union,Optional
import os
import shutil
import uuid
import json

current_date_time=datetime.utcnow()
app = FastAPI()

# Templates for the frontend/host directory
templates = Jinja2Templates(directory='frontend/host/templates')
app.mount("/frontend/host", StaticFiles(directory="frontend/host"), name="host")

# Templates for the frontend/adminpanel directory
admin_templates = Jinja2Templates(directory='frontend/adminpanel/templates')
app.mount("/frontend/adminpanel", StaticFiles(directory="frontend/adminpanel"), name="adminpanel")


def get_db():
    db = None
    try:
        db = SessionLocal()
        yield db
    finally:
        db.close()

@app.get('/get_home')
def get_booking(request: Request, db: Session = Depends(get_db)):
    return templates.TemplateResponse("index.php", context={"request": request})


@app.get('/get_map')
def get_booking(request: Request, db: Session = Depends(get_db)):
    return templates.TemplateResponse("map.php", context={"request": request})



@app.get('/get_developers')
def get_booking(request: Request, db: Session = Depends(get_db)):
    return templates.TemplateResponse("developers.php", context={"request": request})

@app.get('/get_login')
def get_booking(request: Request, db: Session = Depends(get_db)):
    return admin_templates.TemplateResponse("auth.php", context={"request": request})


@app.get('/get_listing')
def get_booking(request: Request, db: Session = Depends(get_db)):
    new_user = db.query(model.host).filter(model.host.status=="ACTIVE").all()
    return templates.TemplateResponse("listing.php", context={"request": request , "data":new_user})

user_counter = 0

@app.post('/post_signup')
def create_data(request:Request,db:Session=Depends(get_db),name:str=Form(...),email:str=Form(...),phoneno:str=Form(...),password:str=Form(...)):
    statuss="ACTIVE"
    created_at = current_date_time
    # body=model.sign_up(name=s_name,email=s_email,phoneno=s_phone,password=user_password,status=statuss,created_at=created_at)
    find=db.query(model.sign_up).filter(model.sign_up.email==email,model.sign_up.status =="ACTIVE").first()
    if find is None:
            global user_counter
    
    # Increment the counter to get the next user ID
            user_counter += 1
    
    # Create the user ID in the format "userX" where X is the value of the counter
            user_id = f"user{user_counter}"
            body=model.sign_up(name=name,user_id=user_id,email=email,phoneno=phoneno,password=password,status=statuss,created_at=created_at)
            db.add(body)
            db.commit()
            error = "Done"
            json_compatible_item_data = jsonable_encoder(error)
            return JSONResponse(content=json_compatible_item_data)
    else:
            error = "Already this name Exist"
            json_compatible_item_data = jsonable_encoder(error)
            return JSONResponse(content=json_compatible_item_data)


@app.post('/post_login')
def create_data(request: Request, db: Session = Depends(get_db), l_email: str = Form(...), l_password: str = Form(...)):
    user = db.query(model.sign_up).filter(model.sign_up.email == l_email, model.sign_up.password == l_password ,model.sign_up.status =="ACTIVE").first()
    
    if user is None:
            error = "Not in database"
            json_compatible_item_data = jsonable_encoder(error)
            return JSONResponse(content=json_compatible_item_data)
    else:
            error = "Done"
            json_compatible_item_data = jsonable_encoder(error)
            return JSONResponse(content=json_compatible_item_data)
    

@app.post('/post_host_data')
def create_data(request: Request, db: Session = Depends(get_db), userType: str = Form(...), spaceName: str = Form(...), spaceSize: int = Form(...), spaceAddress: str = Form(...), spaceCity: str = Form(...), spacePincode: int = Form(...), coordinates_container: str = Form(...), spaceLength: int = Form(...), spaceWidth: int = Form(...), spaceSurvey: str = Form(...), spaceAdhar: int = Form(...), spaceFileMultiple: UploadFile = File(...), dropdownMenuButton: List[str] = Form(...), subscriptionUser: str = Form(...), currentUser: str = Form(...), spaceInstructions: str = Form(...)):
    statuss = "ACTIVE"
    created_at = current_date_time
    file_type=spaceFileMultiple.content_type
    ext=file_type.split('/')[-1]
    image1=str(uuid.uuid4())+ '.' + str(ext)
    file_loc=f"frontend/host/uploadimage/{image1}"
    with open(file_loc,"wb+") as file_view:
        shutil.copyfileobj(spaceFileMultiple.file,file_view)


    body = model.host(
        userType=userType,
        namespaceName=spaceName,
        spaceSize=spaceSize,
        spaceAddress=spaceAddress,
        spaceCity=spaceCity,
        spacePincode=spacePincode,
        coordinates_container=coordinates_container,
        spaceLength=spaceLength,
        spaceWidth=spaceWidth,
        spaceSurvey=spaceSurvey,
        spaceAdhar=spaceAdhar,
        spaceFileMultiple=image1,  # Use the correct variable name here
        subscriptionUser=subscriptionUser,
        dropdownMenuButton=jsonable_encoder(dropdownMenuButton),
        currentUser=currentUser,
        spaceInstructions=spaceInstructions,
        status=statuss,
        created_at=created_at
    )

    db.add(body)

    # Add the dropdownMenuButton options one by one


    db.commit()
    return RedirectResponse("/get_listing", status_code=303)

    # error = "Done"
    # json_compatible_item_data = jsonable_encoder(error)
    # return JSONResponse(content=json_compatible_item_data)



