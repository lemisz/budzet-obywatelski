# Budżet Obywatelski

Projekt platformy służącej do obsługi pomysłów na spożytkowanie środków z budżetu obywatelskiego. Użytkownicy w założeniu mogą się rejestrować, dodawać swoje pomysły, głosować na inne pomysły, przeglądać pomysły za pomocą różnych filtrów i wyszukiwarki, komentować pomysły, zgłaszać je jako spam, usuwać swoje pomysły. Administrator może zmieniać statusy pomysłu.


## Screenshoty
Ekran główny aplikacji:
![screenshot-1](https://github.com/lemisz/budzet-obywatelski/blob/main/screenshots/pierwszy.png)

Logowanie:
![screenshot-1](https://github.com/lemisz/budzet-obywatelski/blob/main/screenshots/drugi.png)

Po zalogowaniu i wybraniu jednego z filtrów:
![screenshot-1](https://github.com/lemisz/budzet-obywatelski/blob/main/screenshots/trzeci.png)

Szczegóły karty pomysłu:
![screenshot-1](https://github.com/lemisz/budzet-obywatelski/blob/main/screenshots/czwarty.png)

Wersja mobilna:
<img src="https://github.com/lemisz/budzet-obywatelski/blob/main/screenshots/piaty.png" width=50% height=50%> <img src="https://github.com/lemisz/budzet-obywatelski/blob/main/screenshots/szosty.png" width=50% height=50%>

### Wykorzystane narzędzia

* [Laravel](https://laravel.com)
* [Laravel Breeze](https://github.com/laravel/breeze)
* [Laravel Livewire](https://laravel-livewire.com/)
* [Eloquent Sluggable](https://github.com/cviebrock/eloquent-sluggable)
* [Tailwind CSS](https://tailwindcss.com/)
* [Alpine.js](https://alpinejs.dev/)
* [Node.js](https://nodejs.org/)


## Funkcjonalności

### Działa:

* Rejestracja użytkownika
* Logowanie
* Przekierowywanie niezalogowanego użytkownika do logowania (gdy chce skorzystać z funkcjonalności dla niego niedostępnych)

* Layout - w 100% responsywny, a także całościowy (również dla niezaimplementowanych funcjonalności)
* Formularz "Dodaj nowy pomysł", łącznie z walidacją, komunikatami błędów i przekierowaniem niezalogowanego użytkownika

* Karta pomysłu na stronie głównej z dynamiczną liczbą głosów, czasem dodania pomysłu
* Karta pomysłu - przechodzenie do szczegółów z widoku głównego (tytuł pomysłu jako link)

* Głosowanie - oddawanie głosu na pomysły dla zalogowanego użytkownika
* Sumowanie głosów, dynamiczne wyświetlanie liczby głosów
* Odejmowanie swojego głosu poprzez ponowne naciśnięcie dynamicznego buttona

* Filtrowanie pomysłów po statusie
* Filtrowanie pomysłów po kategorii
* Sortowanie pomysłów wg. dodatkowego filtra "najlepsze"
* Filtrowanie pomysłów wg. dodatkowego filtra "moje" dla zalogowanego użytkownika
* Łączne filtrowanie po wszystkich powyższych filtrach na raz

* Sumowanie pomysłów w danej kategorii wyświetlane przy filtrze statusu
* Wyszukiwanie pomysłów za pomocą wyszukiwarki (po tytułach), łącznie z walidacją (minimum 3 znaki) i wyświetlaniem powiadomienia o ewentualnym nieznalezieniu pomysłu

### Nie działa (choć jest już w layoucie):

* Komentarze
* Zmiana statusu pomysłu przez admina
* Konto admina
* Edycja pomysłu
* Usuwanie pomysłu
* Zgłaszanie pomysłu jako spam
* Powiadomienia o zmianie statusu pomysłu dla głosujących na dany pomysł
* Kompletna polska wersja językowa (funkcja diffForHumans(), na karcie pomysłu czas utworzenia wyświetla się po angielsku)


### Instalacja

1. Xampp - wypakować do budżet-obywatelski w folderze xampp/htdocs, włączyć server apache i mysql
2. Dodać plik .env podmieniając plik env.example (+nazwa bazy danych "budzet-obywatelski")
3. Skonfigurować bazę danych (wystarczy utworzyć bazę danych o nazwie "budzet-obywatelski". Upewnić się, że dane bazy zgadzają się z zawartością pliku .env
4. Zainstalować paczki npm:
   ```sh
   npm install
   ```
5. Wykonać komendę:
    ```sh
    npm run dev
    ```
6. Wykonać migrację i wypełnić bazę przygotowanymi danymi:
    ```sh
    php artisan migrate:fresh --seed
    ```
7. Uruchomić webaplikację:
    ```sh
    php artisan serve
    ```
8. Adres webaplikacji - localhost:8000
