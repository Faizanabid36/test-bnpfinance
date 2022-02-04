## BnP Finance company Test Project

**Tech Stack**:
1. Laravel
2. ReactJS(TypeScript)
3. SCSS

## All the requirements that were mentioned in the document are met.

## Steps to execute in order to setup the project

1. **Clone** the project ```git clone https://github.com/Faizanabid36/test-bnpfinance.git```
2. Open **cmd** and execute `cd test-bnpfinance`
3. Now **execute** `composer install` in **cmd**
4. **Rename** `.env.example` to `.env`
5. **Create** table in `phpmyadmin` and **enter these credentials in the .env**
6. **Execute** `npm i`
7. **Execute** `npm run dev`
8. **Execute** `php artisan key:generate`
9. **Execute** `php artisan migrate --seed`, this will create dummy data in database, please check seeders.
10. **Execute** `php artisan serve` to start server
