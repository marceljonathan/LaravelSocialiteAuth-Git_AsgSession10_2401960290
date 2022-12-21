1. Buat database di phpmyadmin dengan nama "authasg"
2. Ubah nama database di env dengan "authasg"
3. Di env perlu memasukkan client id dan secret id yang didapatkan dari sistem auth Google dan Github
ENV:
GOOGLE_CLIENT_ID=YOUR_GOOGLE_CLIENT_ID
GOOGLE_SECRET_ID=YOUR_GOOGLE_SECRET_ID

GITHUB_CLIENT_ID=YOUR_GITHUB_CLIENT_ID
GITHUB_SECRET_ID=YOUR_GITHUB_SECRET_ID
4. Jalankan XAMPP
5. Jalanakan "php artisan migrate --seed" di terminal
6. ketik "php artisan serve" di terminal
7. Website bisa digunakan
