# Try Out Pemrograman Web Service And Managment

## Setup 
- Clone This repository
- Copy File `.env` to `.env.development`
- Open `.env.development` and set variabel :
```
DB_CONNECTION=mysqli
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

## JSON Response Format

### Secara default format json :
```json
{
    "status": 200,
    "message": "Success or Failed",
    "data": []
}
```

#### Check Version
```json
{
    "status": 200,
    "message": "Success or Failed",
    "data": {
        "id_ver": 1,
        "version": 12,
        "detail": 8
    }
}
```

#### Update Paket
Request :
```json
http://hostname/wservice
```
Response: 
```json
{
    "status": 200,
    "message": "Success or Failed",
    "data": [
        {
            "paket":"8",
            "nama_paket":"Paket 1"
        },
        {
            "paket":"9",
            "nama_paket":"Paket 2"
        },
        {
            "paket":"10",
            "nama_paket":"Paket 3"
        }
    ]
}
```
#### Update Soal
Request :
```json
http://hostname/wservice/update_soal/:id_paket
```
Response: 
```json
{
    "status": 200,
    "message": "Success or Failed",
    "data": [
        {
            "id": 189,
            "soal": "tes",
            "pil_a": "ad",
            "pil_b": "fd",
            "pil_c": "bg",
            "pil_d": "e",
            "jwban": 3,
            "tipe": 1,
            "paket": 8
        }
    ]
}
```

## Contributor
- :girl: [addinnt](https://github.com/addinnt)
- :girl: [amelrnt](https://github.com/amelrnt)
- :girl: [rigelr](https://github.com/rigelr)
- :boy: [hattamaulana](https://github.com/hattamaulana)