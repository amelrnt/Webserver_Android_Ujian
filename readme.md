# POLINEMA Mobile Learning

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

## JSON Request And Response
Berikut merupakan JSON Request & Response Contract :

Hostname `http://localhost/Webserver_Android_Ujian/api/`

| Request | Response |
|-|:-|
| /check_version | `{"id_ver": "version": 12, "detail": 8 }`|
| /check_version | `[{ "paket":"8", "nama_paket":"Paket 1"}]` |
| /update_soal/:id_paket | `[{ "id": 189, "soal": "", "pil_a": "", "pil_b": "", "pil_c": "", "pil_d": "", "jwban": 3, "tipe": 1, "paket": 8}]`|
