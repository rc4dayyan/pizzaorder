# Simple Laravel web application
Simple application for order pizza

### Installation
1. Clone repo: `git clone https://github.com/rc4dayyan/pizzaorder.git`<br/>
2. Go to cloned folder, Run `cd pizzaorder`<br/>
3. Create new database on your mysql<br/>
4. Setup Environment variable file, Run `cp .env.example .env`<br/>
5. Update ".env" file to suit your needs "DB_DATABASE, DB_USERNAME, DB_PASSWORD"<br/>
6. Install Depedency, Run `composer install`<br/>
7. Migrate and Seed, Run `php artisan migrate --seed`<br/>
8. Passport install, Run `php artisan passport:install`<br/>
9. Set APP_KEY, Run `php artisan key:generate`<br/>
9. Run on local dev server, Run `php artisan serve`<br/>
10. Open browser `http://localhost:8000`<br/>

### Usage
1. Register for admin to see ordered pizza list <br/>
2. User can Order pizza without registration, by clicking 'Order Pizza' <br/>
3. To test api with oauth: <br/>
    - Login process, <br/>
        1. Request URL = http://localhost:8000/api/user/login<br/>
        2. Method = POST<br/>
        3. body params = email and password (registered user)<br/>
        4. Get "access_token" response<br/>
    <br/>
    - Get ordered pizza list,<br/>
        1. Request URL = http://localhost:8000/api/pizzas/orders<br/>
        2. Method = GET<br/>
        3. Header params: <br/>
            - name = authorization<br/>
            - value = Bearer $access_token<br/>
