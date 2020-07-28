# Laravel + VueJs + Tailwind

### Getting Started
Clone the project repository by running the command below if you use SSH
<li>git clone git@github.com:surmount96/seamless.git</li>
<br>
If you use https, use this instead
<li>git clone https://github.com/surmount96/seamless.git</li>
<br>
<p>After cloning,run the following commands:</p>
composer install <br>
npm install

Duplicate .env.example and rename it .env
Then run:

php artisan key:generate

####Database Migrations
<p>Be sure to fill in your database details in your .env file before running the migrations.</p>
<p>Then run: php artisan migrate</p>
####To generate quick data into the DB run:
<p>php artisan tinker</p>
Then, factory(App\Employee::class,10)->create();
exit

####lastly run:
And finally, start the application:

php artisan serve
