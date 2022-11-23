<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
 * Copyright (c) 2022 by multiple authors                      *
 * Politechnika Śląska | Silesian University of Technology     *
 *                                                             *
 * Nazwa pliku: config.php                                     *
 * Projekt: restaurant-project-php-si                          *
 * Data utworzenia: 2022-11-10, 19:56:36                       *
 * Autor: Milosz08                                             *
 *                                                             *
 * Ostatnia modyfikacja: 2022-11-23 09:42:40                   *
 * Modyfikowany przez: Miłosz Gilga                            *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

use App\Core\Config;

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
 * W tym pliku należy umieszczać wartości konfiguracyjne, stałe i inne elementy konfiguracji PHP. Zmienną konfiguracyjną deklaruje się   *
 * poprzed odwołanie do klasy Config i wywołanie na niej statycznej metody set. Metoda nie pozwoli na stworzenie dwóch wartości          *
 * konfiguracyjnych z tym samym kluczem. Przykładowe zadeklarowanie wartości konfiguracyjnej:                                            *
 *                                                                                                                                       *
 *      Config::set('__KLUCZ__', 'wartość');                                                                                             *
 *                                                                                                                                       *
 * Aby odwołać się do tej zmiennej w programie należy użyć metody statycznej get. Metoda zwróci wartość znajdującą się pod wybranym      *
 * kluczem. Jeśli klucz nie będzie istniał wyrzuci wyjątek. Przykład użycia:                                                             *
 *                                                                                                                                       *
 *      Config::get('__KLUCZ__');                                                                                                        *
 *                                                                                                                                       *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

Config::set('__MVC_DEF_CONTROLLER__', 'home'); // domyślna nazwa kontrolera uruchamianego w przypadku braku parametru action w zapytaniu
Config::set('__MVC_DEF_METHOD__', 'index'); // domyślna metoda kontrolera uruchamiana w przypadku braku parametru action w zapytaniu
Config::set('__MVC_CONTROLLER_SUFFIX__', 'Controller'); // domyślny sufix plików kontrolerów (np. Home>Controller<, Example>Controller<) itp.
Config::set('__MVC_CONTROLLER_DIR__', Config::build_path(__DIR__, 'controllers')); // domyślny katalog przechowywania kontrolerów aplikacji
Config::set('__MVC_CONTROLLER_NAMESPACE__', 'App\Controllers\\'); // domyślna przestrzeń nazw dla kontrolerów

Config::set('__PAGE_TITLE__', 'Start'); // domyślny tytuł (prefix, po złączeniu z sufixem da) Start | Dobre.pl
Config::set('__SUFFIX_PAGE_TITLE__', ' | Dobre.pl'); // suffix tytułu (pojawia się po dynamiczne generowanym tytule strony)

Config::set('__DB_DSN__', $_ENV['DB_DSN']); // data source name do bazy danych
Config::set('__DB_USERNAME__', $_ENV['DB_USERNAME']); // nazwa użytkownika bazy danych
Config::set('__DB_PASSWORD__', $_ENV['DB_PASSWORD']); // hasło użytkownika bazy danych
Config::set('__DB_INIT_COMMANDS__', array(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES "UTF8"')); // wymuszenie kodowania znaków UTF-8

Config::set('__SHA_SALT__', $_ENV['SHA_SALT']); // sól do algorytmu haszującego hasła
