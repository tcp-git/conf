# install helper
composer require --dev barryvdh/laravel-ide-helper
php artisan ide-helper:generate



*******************************************
แนวทางการแก้ error
Warning: require(/home/source/main/public/../vendor/autoload.php): Failed to open stream: No such file or directory in /home/source/main/public/index.php on line 34

รันคำสั่ง
docker exec -it (Laravel-app หาไอดี)  /bin/sh
ตย.  docker exec -it 2ac8bb3fa4b3  /bin/sh

cd /home/source/main
composer install
php artisan serve


/usr/local/etc/php

*******************************************
 แนวทางการแก้ error
SQLSTATE[HY000] [2002] Connection refused
 ไปที่ folder Laravel แก้ .env
*******************************************


docker-compose down
docker-compose build
docker-compose up


# คำสั่งพื้นฐานสำหรับ Docker

# ดึงอิมเมจจาก Docker Hub
docker pull [image-name]

# รันคอนเทนเนอร์จากอิมเมจ
docker run [options] [image-name]
# ตัวอย่าง
docker run -d -p 80:80 nginx

# แสดงรายการคอนเทนเนอร์ที่กำลังรันอยู่
docker ps

# แสดงรายการคอนเทนเนอร์ทั้งหมด (รวมถึงที่หยุดแล้ว)
docker ps -a

# หยุดคอนเทนเนอร์
docker stop [container-id]

# เริ่มคอนเทนเนอร์ที่หยุดอยู่
docker start [container-id]

# ลบคอนเทนเนอร์
docker rm [container-id]

# ลบอิมเมจ
docker rmi [image-id]

# รันคำสั่งในคอนเทนเนอร์ที่กำลังรันอยู่
docker exec -it [container-id] [command]
# ตัวอย่าง
docker exec -it [container-id] bash

# คำสั่งสำหรับ Docker Compose

# สร้างและรันคอนเทนเนอร์ตามไฟล์ docker-compose.yml
docker compose up

# หยุดและลบคอนเทนเนอร์ทั้งหมดที่ถูกสร้างโดย docker-compose.yml
docker compose down

# สร้างหรือ rebuild อิมเมจของบริการใน docker-compose.yml
docker compose build

# แสดงรายการคอนเทนเนอร์ที่รันโดย Docker Compose
docker compose ps

# ดู log ของบริการใน Docker Compose
docker compose logs

# รันคำสั่งในคอนเทนเนอร์ที่ถูกจัดการโดย Docker Compose
docker compose exec [service-name] [command]
 