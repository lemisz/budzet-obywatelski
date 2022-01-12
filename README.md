# Budżet Obywatelski

Projekt platformy służącej do obsługi pomysłów na spożytkowanie środków z budżetu obywatelskiego. Użytkownicy w założeniu mogą się rejestrować, dodawać swoje pomysły, głosować na inne pomysły, przeglądać pomysły za pomocą różnych filtrów i wyszukiwarki, komentować pomysły, zgłaszać je jako spam, usuwać swoje pomysły. Administrator może zmieniać statusy pomysłu.


### Wykorzystane narzędzia

* Laravel
* Laravel Breeze
* Laravel Livewire
* Eloquent Sluggable
* Tailwind CSS
* Alpine.js
* Node.js


## Funkcjonalności

### Działa:

* Rejestracja użytkownika (prosta)
* Logowanie (proste)
* Przekierowywanie niezalogowanego użytkownika do logowania (gdy chce skorzystać z funkcjonalności dla niego niedostępnych)
* Layout - w całości, ale nie jest responsywny
* Formularz "Dodaj nowy pomysł", łącznie z walidacją
* Karta pomysłu - przechodzenie do szczegółów z widoku głównego
* Głosowanie - oddawanie głosu na pomysły dla zalogowanego użytkownika
* Sumowanie głosów
* Filtrowanie pomysłów po statusie
* Filtrowanie pomysłów po kategorii
* Sortowanie pomysłów wg. dodatkowego filtra "najlepsze"
* Filtrowanie pomysłów wg. dodatkowego filtra "moje" dla zalogowanego użytkownika
* Sumowanie pomysłów w danej kategorii wyświetlane przy filtrze statusu
* Combo filtrowania za pomocą wszystkich powyższych na raz
* Wyszukiwanie pomysłów za pomocą wyszukiwarki (po tytułach), łącznie z walidacją (minimum 3 znaki)

### Nie działa (choć jest już w layoucie):

* Komentarze
* Zmiana statusu pomysłu przez admina
* Konto admina
* Edycja pomysłu
* Usuwanie pomysłu
* Zgłaszanie pomysłu jako spam
* Powiadomienia o zmianie statusu pomysłu dla głosujących na dany pomysł
* Kompletna polska wersja językowa (przykład - funkcja diffForHumans(), na karcie pomysłu czas utworzenia wyświetla się po angielsku)


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
