# Orchard Third Party API

## How it works
The third party needs to send a Json request with the following attributes set:
```
app_id
app_secret
imei
```
the response would be the phone data, or an error if the phone is not found or if the third party is not authorized


## To install
Create a database named "advanceddb" and import the file "advanceddb.sql" found in the repo root.

## To Access "Phone CRUD Module"
Access the CRUD module via this url: 
```
http://localhost/advanced/admin/phones
```

## To test the third party API
Test the API by going to this url:
```
http://localhost/advanced/
```

You can test the API by using these credentials:
App id: APP-ID-1
App secret: HASHED-APP-SECRET

There are currently two phones in the database with the following IMEIs:
222222
444444


## Site login
Login to the site by the following username and password:
username: bijan
password: 111111


## Notes
There needs to be a module for creation, hashin and regeneration of App Secrets. Also the authorizations should be inforced and appropriate output fields filtered. Therefore the code is far from production yet. It is solely developed for testing purposes. 





