---
title: 'Podstawy relacyjnych baz danych i systemu MySQL'
date: '2026-09-03'
taxonomy:
    category: [informatyka, bazy-danych]
    tag: [mysql, sql, rdbms, inf03]
summary: 'Wprowadzenie do relacyjnych baz danych: struktura tabelaryczna, klucze, normalizacja, mechanizmy składowania oraz podział języka SQL.'

---

Relacyjny model baz danych opiera się na matematycznej teorii relacji, w której zbiory danych są organizowane w logiczne, dwuwymiarowe struktury tabelaryczne powiązane zdefiniowanymi zależnościami. System zarządzania relacyjną bazą danych (RDBMS), taki jak MySQL, odpowiada za fizyczne składowanie, optymalizację dostępu, transakcyjną spójność oraz modyfikację informacji za pomocą standardowego języka zapytań SQL.

## Struktura tabelaryczna i elementy składowe relacji

Struktura bazy danych opiera się na logicznym podziale na encje rzeczywiste lub abstrakcyjne, które w relacyjnych systemach reprezentowane są za pomocą tabel:

* **Tabela (relacja):** Zbiór rekordów o jednolitej, z góry zdefiniowanej strukturze logicznej.
* **Rekord (wiersz / krotka):** Pojedynczy wpis w tabeli, który agreguje pełen zestaw danych dotyczący jednego konkretnego obiektu (np. jednego klienta, zamówienia czy towaru).
* **Pole (kolumna / atrybut):** Element składowy rekordu reprezentujący pojedynczą właściwość obiektu (np. imię, nazwisko, cena jednostkowa, data rejestracji). Każda kolumna posiada unikatową w ramach tabeli nazwę oraz przypisany typ danych.

## Identyfikacja rekordów i mechanizmy kluczy

W relacyjnej bazie danych żaden rekord nie może być anonimowy – każdy wiersz musi być jednoznacznie odróżnialny od pozostałych.

* **Klucz główny (PRIMARY KEY):**
  * Kolumna (lub zespół kolumn), której wartość jednoznacznie identyfikuje każdy wiersz tabeli.
  * Wymusza integralność encji: wartości klucza głównego muszą być unikatowe w całej tabeli i nie mogą przyjmować wartości pustych (`NOT NULL`).
* **Identyfikatory naturalne a sztuczne:**
  * Klucze naturalne (np. numer PESEL czy numer ISBN) bazują na cechach rzeczywistych obiektu, jednak rodzą ryzyko problemów w przypadku braku danych (np. rejestracja obcokrajowca bez numeru PESEL) lub zmian standardów.
  * Praktyka inżynierska nakazuje stosowanie kluczy sztucznych (surogatów) – najczęściej dodatkowego pola całkowitoliczbowego (np. `Id`, `KlientId`) zarządzanego przez mechanizm automatycznej inkrementacji `AUTO_INCREMENT`.
* **Ograniczenie unikatowości (UNIQUE):**
  * Atrybut wymuszający brak powtórzeń w danej kolumnie (lub zestawie kolumn).
  * W przeciwieństwie do klucza głównego kolumna z ograniczeniem `UNIQUE` dopuszcza wystąpienie wartości `NULL` (chyba że jawnie dodano klauzulę `NOT NULL`).

## Relacje między tabelami i integralność referencyjna

Separacja danych do niezależnych tabel wymaga utworzenia powiązań logicznych, realizowanych za pomocą kluczy obcych.

* **Klucz obcy (FOREIGN KEY):** Pole w tabeli podrzędnej, które odwołuje się bezpośrednio do klucza głównego w tabeli nadrzędnej. Zapewnia integralność referencyjną – uniemożliwia wprowadzenie rekordu ze wskazaniem na nieistniejący obiekt nadrzędny.
* **Kardynalność relacji:**

| Typ relacji | Opis architektury | Przykład praktyczny |
| :--- | :--- | :--- |
| **1:1 (jeden do jednego)** | Jednemu rekordowi z tabeli A odpowiada ściśle jeden rekord w tabeli B. | Podział danych osobowych i poufnych danych medycznych lub finansowych. |
| **1:N (jeden do wielu)** | Jednemu rekordowi z tabeli A odpowiada wiele rekordów w tabeli B, lecz rekord z B odnosi się tylko do jednego z A. | Jeden klient może złożyć wiele zamówień, ale zamówienie należy do jednego klienta. |
| **N:M (wiele do wielu)** | Rekord z tabeli A może odnosić się do wielu rekordów z B, a rekord z B do wielu z A. Wymaga tabeli asocjacyjnej. | Książka może mieć wielu autorów, a autor może napisać wiele książek. |

* **Realizacja relacji wiele do wielu (N:M):**
  * Relacja N:M nie może być poprawnie obsłużona bezpośrednio w dwóch tabelach bez naruszenia zasad spójności.
  * Wymaga utworzenia **tabeli pośredniczącej (asocjacyjnej/pomostowej)**, zawierającej klucze obce wskazujące na obie tabele powiązane. Złożenie tych dwóch kluczy obcych stanowi najczęściej złożony klucz główny tabeli pośredniczącej.

## Zasady poprawnego projektowania i normalizacja

Projektując strukturę bazy danych, należy bezwzględnie przestrzegać reguł eliminacji anomalii bazodanowych:

* **Eliminacja redundancji (nadmiarowości):**
  * Unikanie powielania tych samych danych w wielu wierszach (np. powtarzanie nazwy i adresu wydawnictwa przy każdym tytule książki).
  * Redundancja marnuje przestrzeń dyskową oraz prowadzi do niespójności podczas modyfikacji danych (anomalie aktualizacji i usuwania). Dane powtarzające się należy wydzielić do osobnej tabeli słownikowej.
* **Atomowość danych (I Postać Normalna – 1NF):**
  * W każdej komórce tabeli może znajdować się wyłącznie pojedyncza, niepodzielna informacja.
  * Błędem jest zapisywanie kilku identyfikatorów po przecinku w jednym polu lub łączenie całego adresu w jeden ciąg tekstowy. Poprawne podejście wymaga podziału adresu na atrybuty: ulica, nr domu, kod, miejscowość.
* **Optymalizacja wartości pustych (NULL):**
  * Kolumny, które w większości wierszy pozostają puste (np. rzadko występujące uwagi do zamówienia), powinny być wydzielane do odrębnych tabel powiązanych relacją, aby nie alokować pustych struktur w tabeli głównej.

## Typy danych w systemie MySQL

Wybór typu danych determinuje ilość pamięci zajmowanej przez rekord na dysku oraz szybkość wykonywania operacji arytmetycznych i porównawczych.

| Kategoria | Typy danych | Domyślny rozmiar / Zakres | Przeznaczenie i specyfika |
| :--- | :--- | :--- | :--- |
| **Całkowite** | `TINYINT`<br>`SMALLINT`<br>`MEDIUMINT`<br>`INT` / `INTEGER`<br>`BIGINT` | 1 B (–128 do 127)<br>2 B (–32 768 do 32 767)<br>3 B (–8,38 mln do 8,38 mln)<br>4 B (–2,14 mld do 2,14 mld)<br>8 B (około $\pm 9,22 \cdot 10^{18}$) | Liczby całkowite, identyfikatory rekordów, flagi stanu; opcjonalny atrybut `UNSIGNED` eliminuje liczby ujemne, podwajając zakres dodatni. |
| **Zmiennoprzecinkowe** | `FLOAT`<br>`DOUBLE` / `REAL` | 4 B (pojedyncza precyzja)<br>8 B (podwójna precyzja) | Przybliżone wartości rzeczywiste do obliczeń naukowych i statystycznych. |
| **Stałoprzecinkowe** | `DECIMAL` / `NUMERIC` | Format zmienny: `DECIMAL(M, D)` (M – cyfry łącznie, D – po przecinku) | Precyzyjne wartości dziesiętne; bezwzględny standard dla operacji finansowych i walutowych. |
| **Tekstowe stałe** | `CHAR(M)` | Do 255 znaków (stała alokacja) | Krótkie teksty o stałej długości (np. kody ISO, numery PESEL, skróty hash); dopełniane spacjami. |
| **Tekstowe zmienne** | `VARCHAR(M)` | Do 65 535 bajtów (dynamiczna długość) | Teksty o zróżnicowanej długości (imiona, opisy, adresy); brak marnowania miejsca na puste znaki. |
| **Wielkie obiekty** | `TEXT` (`TINY-`, `MEDIUM-`, `LONGTEXT`)<br>`BLOB` (`TINY-`, `MEDIUM-`, `LONGBLOB`) | Do 4 GB (w wersji `LONG`) | Długie artykuły, dokumenty HTML (`TEXT`) oraz binarne pliki graficzne, multimedia i archiwa (`BLOB`). |
| **Czasowe** | `DATE`<br>`DATETIME`<br>`TIME`<br>`TIMESTAMP` | `RRRR-MM-DD` (3 B)<br>`RRRR-MM-DD GG:MM:SS` (8 B)<br>`GG:MM:SS` (3 B)<br>`RRRR-MM-DD GG:MM:SS` (4 B) | Reprezentacja daty, czasu oraz automatycznych znaczników modyfikacji rekordu w strefie UTC (`TIMESTAMP`). |
| **Wyliczeniowe** | `ENUM('a','b',...)`<br>`SET('a','b',...)` | 1–2 B (do 65 535 wartości)<br>1–8 B (do 64 wartości) | Wybór dokładnie jednej wartości z listy (`ENUM`) lub kombinacji wielu wartości zakodowanych w masce bitowej (`SET`). |

## Mechanizmy składowania danych (Storage Engines)

Serwer MySQL posiada modularną architekturę warstwy fizycznej, umożliwiając przypisanie konkretnego silnika pamięci masowej (`ENGINE`) do każdej tabeli.

* **InnoDB:**
  * Domyślny i zalecany mechanizm składowania w nowoczesnych wdrożeniach MySQL.
  * Zapewnia pełną transakcyjność zgodnie z paradygmatem **ACID** (Atomicity, Consistency, Isolation, Durability).
  * Obsługuje blokowanie na poziomie pojedynczych wierszy (*row-level locking*), co podnosi wydajność w środowiskach wielodostępnych.
  * Wspiera fizyczne sprawdzanie i wymuszanie więzów integralności referencyjnej (`FOREIGN KEY`).
* **MyISAM:**
  * Starszy, nietransakcyjny mechanizm bazodanowy.
  * Brak obsługi transakcji (`COMMIT`, `ROLLBACK`) oraz brak wsparcia dla kluczy obcych.
  * Stosuje blokowanie na poziomie całej tabeli (*table-level locking*), co drastycznie obniża wydajność przy jednoczesnych zapisach wielu klientów.
* **Silniki specjalistyczne:**
  * `MEMORY` (dawniej `HEAP`): Tabele przechowywane wyłącznie w pamięci RAM; bardzo szybki dostęp, utrata danych po restarcie serwera.
  * `ARCHIVE`: Silnik zoptymalizowany pod szybkie dopisywanie i kompresję danych bez indeksowania (logi, audyt).

## Podział języka SQL

Język SQL dzieli się na podzbiory instrukcji odpowiedzialne za architekturę, operacje na danych, zarządzanie uprawnieniami oraz formułowanie zapytań:

* **DDL (Data Definition Language) – Język definicji danych:**
  * Służy do tworzenia, modyfikacji i usuwania struktur bazy danych.
  * Główne polecenia: `CREATE DATABASE`, `CREATE TABLE`, `ALTER TABLE`, `DROP TABLE`, `TRUNCATE TABLE`, `CREATE INDEX`.
* **DML (Data Manipulation Language) – Język manipulacji danymi:**
  * Odpowiada za zarządzanie zawartością tabel (rekordami).
  * Główne polecenia: `INSERT INTO` (wstawianie wierszy), `UPDATE` (modyfikacja istniejących danych), `DELETE` (usuwanie wierszy), `REPLACE`.
* **DQL (Data Query Language) – Język zapytań:**
  * Wykorzystywany do pobierania, filtrowania, sortowania i agregowania informacji z tabel.
  * Podstawowe polecenie: `SELECT` rozbudowywane o klauzule `FROM`, `WHERE`, `GROUP BY`, `HAVING`, `ORDER BY`, `LIMIT` oraz złączenia tabel `JOIN`.
* **DCL (Data Control Language) – Język kontroli danych:**
  * Zarządza bezpieczeństwem, prawami dostępu oraz kontami użytkowników serwera.
  * Główne polecenia: `CREATE USER`, `GRANT` (nadawanie uprawnień), `REVOKE` (odbieranie uprawnień).