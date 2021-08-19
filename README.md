# Zadanie-Symfony
## Wymagania:
  php7+ Link do pogrania: https://www.php.net/downloads.php
  
  composer. Link do pobrania: https://getcomposer.org/download/
  
  Symfony. Link do pobrania: https://symfony.com/download
  
  Nodejs lub Yarn.
  
 ## Proces instalacji.
  1) Probranie repozytorium z zadaniem manualnie bądź przez komendę pull
  2) Wypakowanie zadania do wybranego folderu.
  3) Uruchomienie w folderze z projektem komendy 
  ```
  composer install
  ```
  4) Ustawienie połączenia z bazą danych w pliku **.env** przykład:
  ```
  DATABASE_URL=pdo-mysql://root:123456@127.0.0.1:3306/rekrutacjaSR?serverVersion=mariadb-10.6.3
  pdo-mysql - Silnik bazy danych
  root:123456 - Login i hasło do bazy
  127.0.0.1:3306 - IP oraz port bazy
  rekrutacjaSR - Nazwa bazy danych
  mariadb-10.6.3 - typ bazy danych oraz wersja
  ```
  5) Utworzenie bazy danych za pomocą komendy:
  ```
  php bin/console doctrine:database:create
  ```
  6) Wykonanie migracji do bazy z tabelami i przygotowanymi wartościami
  ```
  php bin/console doctrine:migrations:migrate
  ```
  7) Instalacja modółu nodejs lub yarn:
  ```
  NODEJS:  npm install
  YARN: yarn install
  ```
  8) Build plików css i js:
  ```
  encore production --progress
  ```
  9) utworzenie chache strony:
  ```
  php bin/console cache:warmup
  ```
  
  
