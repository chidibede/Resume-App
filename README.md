# Resume-App

Open Source Resume/CV Creation and Sharing Web App known as CloudCV (Done with Laravel PHP Framework), created to assist Job seekers to create their cv without paying for it, and have the ability to share
the link to their resume on the go. The ability to download the resume as a pdf file is also added. It simulates
a portflio website.

git pull
git status // optional
git add -A
git commit -m "message"
git push

# Running the project locally for newly cloned github project

Make sure you have php and laravel installed locally. If not, run the following commands for ubuntu

```
sudo apt update
sudo apt install apache2
systemctl status apache2
sudo apt install libapache2-mod-php php php-common php-xml php-gd php-opcache php-mbstring php-tokenizer php-json php-bcmath php-zip unzip
sudo apt install curl
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
composer global require laravel/installer
nano ~/.bashrc
export PATH="$HOME/.config/composer/vendor/bin:$PATH"
source ~/.bashrc
sudo apt-get install php-mysql
```

serving the project

```
composer install (for newyly cloned github projects)
npm install
cp .env.example .env
php artisan key:generate
'''
Create an empty database for your project using the database tools you prefer
 add the connection credentials in the .env file and Laravel will handle the connection from there.

In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.
'''
php artisan migrate
php artisan serve
```

# For already existing project locally
run 
```
php artisan serve
```