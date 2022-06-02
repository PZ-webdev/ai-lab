REM Po skończonym laboratorium:
git init
git config --local user.name "student"
git config --local user.email "student@ur.edu.pl"
git add --all
git commit -m "Lab013"
git archive --format=zip HEAD -o ../Lab013_02-06-2022.zip
REM Dodać plik .env do archiwum

REM W domu:
REM Wypakować Lab013_02-06-2022.zip do folderu Lab013
cd Lab013
composer install --no-interaction
php artisan storage:link
REM Utworzyć bazę lab13_db w PMA
php artisan migrate
php artisan db:seed
php artisan serve
REM http://127.0.0.1:8000
