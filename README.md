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

* Xampp - wypakować do budżet-obywatelski w folderze xampp/htdocs
* Dodać plik .env (+nazwa bazy danych "budzet-obywatelski")
* Skonfigurować bazę danych (wystarczy utworzyć bazę danych o nazwie "budżet obywatelski"
* ```npm install
* ```npm run dev
* ```php artisan migrate:fresh --seed
* ```php artisan serve
* adres webaplikacji - localhost:8000
