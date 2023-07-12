## Set up project:
- docker-compose build
- docker-compose up

SANCTUM
Register:
http://localhost:8000/api/register

List organizations:
http://localhost:8000/api/organization

Organization by id:
http://localhost:8000/api/organization/5

Delete organization:
http://localhost:8000/api/organization/1

Put organization:
http://localhost:8000/api/organization/7
    
    body {
    "organization_name": "test",
    "description": "test",
    "employees_count": 100,
    "phone_number": "1234125"
    }

Patch organization:
http://localhost:8000/api/organization/1

    body {
    "organization_name": "test",
    "description": "test",
    "employees_count": 100
    }
