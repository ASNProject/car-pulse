<!--
 Copyright 2025 ariefsetyonugroho
 
 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at
 
     https://www.apache.org/licenses/LICENSE-2.0
 
 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
-->

# 📦 Car Pulse Tracker
Website monitoring suhu ban kendaraan dan lokasi

## ✨ Features  
- API Endpoint (List CarPulse, Create Carpulse)


## ⚙️ Installation & 🚀 Usage 
##### Clone Project
```
git clone https://github.com/ASNProject/car-pulse.git
```
<b > Jika menggunakan xampp/ Windows, download file dan simpan di dalam C:/xampp/htdocs</b>

- Rename .env.example dengan .env dan sesuaikan pengaturan DB seperti dibawah
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_carpulse
DB_USERNAME=root
DB_PASSWORD=
```

- Download database di folder ```sql``` dan import di mysql

##### Run Project
- Run Composer
```
composer update
```

- Run server
```
php artisan serve
```
- Development (For localhost)
```
php artisan serve --host=0.0.0.0 --port=8000
```
- Web Access
```
127.0.0.1:8000
```

#### Route
##### CarPulse
- Post
```
Route : http://127.0.0.1:8000/api/carpulses

Body: 
{
    "user_id": <string>,
    "b_front_left": <string>,
    "b_front_right": <sting>,
    "b_back_left": <string>,
    "b_back_right": <string>,
    "s_front_left": <string>,
    "s_front_right": <string>,
    "s_back_left": <string>,
    "s_back_right": <string>,
    "latitude": <string>,
    "longitude": <string>,
}
```
- Get 
```
Route : http://127.0.0.1:8000/api/carpulse
```

## Notes
- Versi Larvel 12.0

## Production
### .htaccess
```
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Handle X-XSRF-Token Header
    RewriteCond %{HTTP:x-xsrf-token} .
    RewriteRule .* - [E=HTTP_X_XSRF_TOKEN:%{HTTP:X-XSRF-Token}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```