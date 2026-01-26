# NP-Auto
## Requirements
- PHP (v8.5.1 or higher)
- Composer (v2.9.3)
- NodeJS (v25.3.0)
- NPM (v11.7.0)
- MySQL/MariaDB

# Installation
1. Start mysql
2. Go to the app folder:
```
cd app
```
3. Install composer:
```
composer install
```
4. Generate your own .env file and key
```
cp .env.example .env
php artisan key:generate
```
5. Create database and migrate
```
php artisan migrate
```
You will be prompted to create the database if it doesn't exist already. Type:
```
yes
```
6. Install node modules
```
npm i
```
7. Create a cache path location:
```
mkdir -p storage/framework/{cache,sessions,views}
```
composer run dev, This command is a shortcut for npm run dev, and php artisan serve
# Getting started
1. Launch Laravel app, vite and TailwindCSS:
```
composer run dev
```
This command is a shorthand for:
```
npm run dev
php artisan serve
```

2. Open the app in the browser. By default your link will be:
- http://127.0.0.1:8000

3. If you are making changes to the database structure or seeders: Use this command afterwards:
```
php artisan migrate:fresh --seed
```