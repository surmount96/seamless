# Laravel + VueJs + Tailwind

# Getting Started
Clone the project repository by running the command below if you use SSH
<li>git clone git@github.com:surmount96/seamless.git</li>
<br>
If you use https, use this instead
<li>git clone https://github.com/surmount96/seamless.git</li>
<br>
After cloning,run the following commands:
composer install 
npm install

Duplicate .env.example and rename it .env
Then run:

php artisan key:generate

Database Migrations
Be sure to fill in your database details in your .env file before running the migrations e.g DB_CONNECTION=sqlite :
php artisan migrate
To generate quick data into the DB run:
php artisan tinker
Then, factory(App\Employee::class,10)->create();
exit

lastly run:
And finally, start the application:

php artisan serve
