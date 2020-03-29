# Try Out Pemrograman Web Service And Managment

## Setup 
- Clone This repository
- Copy File `.env` to `.env.development`
- Open `.env.development` and set variabel :
```
APP_URL=http://localhost/Webserver_Android_Ujian/

DB_CONNECTION=mysqli
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

## JSON Response Format
Berikut merupakan JSON Request & Response Contract :

#### Check Version
Request :

`http://localhost/Webserver_Android_Ujian/api/check_version`

Reponse :
```json
{
    "id_ver": 1,
    "version": 12,
    "detail": 8
}
```

#### Update Paket
Request :

`http://localhost/Webserver_Android_Ujian/api/update_paket`

Reponse :
Response: 
```json
[
    {
        "paket":"8",
        "nama_paket":"Paket 1"
    }
]
```
#### Update Soal
Request :

`http://localhost/Webserver_Android_Ujian/api/update_soal/:id_paket`

Reponse : 
```json
[
    {
      "id": 189,
       "soal": "",
       "pil_a": "",
       "pil_b": "",
       "pil_c": "",
       "pil_d": "",
       "jwban": 3,
       "tipe": 1,
       "paket": 8
    }
]
```

## Contributor
- :girl: [addinnt](https://github.com/addinnt)
- :girl: [amelrnt](https://github.com/amelrnt)
- :girl: [rigelr](https://github.com/rigelr)
- :boy: [hattamaulana](https://github.com/hattamaulana)