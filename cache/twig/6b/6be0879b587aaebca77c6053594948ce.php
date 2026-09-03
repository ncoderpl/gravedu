<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @Page:D:/Projekty/gravEdu/user/pages/02.mysql/01.podstawy-baz-danych */
class __TwigTemplate_96fb4d0929cec75514c69903eeb40619 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class]->getChecker();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<p>Relacyjny model baz danych opiera się na matematycznej teorii relacji, w której zbiory danych są organizowane w logiczne, dwuwymiarowe struktury tabelaryczne powiązane zdefiniowanymi zależnościami. System zarządzania relacyjną bazą danych (RDBMS), taki jak MySQL, odpowiada za fizyczne składowanie, optymalizację dostępu, transakcyjną spójność oraz modyfikację informacji za pomocą standardowego języka zapytań SQL.</p>
<h2>Struktura tabelaryczna i elementy składowe relacji</h2>
<p>Struktura bazy danych opiera się na logicznym podziale na encje rzeczywiste lub abstrakcyjne, które w relacyjnych systemach reprezentowane są za pomocą tabel:</p>
<ul>
<li><strong>Tabela (relacja):</strong> Zbiór rekordów o jednolitej, z góry zdefiniowanej strukturze logicznej.</li>
<li><strong>Rekord (wiersz / krotka):</strong> Pojedynczy wpis w tabeli, który agreguje pełen zestaw danych dotyczący jednego konkretnego obiektu (np. jednego klienta, zamówienia czy towaru).</li>
<li><strong>Pole (kolumna / atrybut):</strong> Element składowy rekordu reprezentujący pojedynczą właściwość obiektu (np. imię, nazwisko, cena jednostkowa, data rejestracji). Każda kolumna posiada unikatową w ramach tabeli nazwę oraz przypisany typ danych.</li>
</ul>
<h2>Identyfikacja rekordów i mechanizmy kluczy</h2>
<p>W relacyjnej bazie danych żaden rekord nie może być anonimowy – każdy wiersz musi być jednoznacznie odróżnialny od pozostałych.</p>
<ul>
<li><strong>Klucz główny (PRIMARY KEY):</strong>
<ul>
<li>Kolumna (lub zespół kolumn), której wartość jednoznacznie identyfikuje każdy wiersz tabeli.</li>
<li>Wymusza integralność encji: wartości klucza głównego muszą być unikatowe w całej tabeli i nie mogą przyjmować wartości pustych (<code>NOT NULL</code>).</li>
</ul></li>
<li><strong>Identyfikatory naturalne a sztuczne:</strong>
<ul>
<li>Klucze naturalne (np. numer PESEL czy numer ISBN) bazują na cechach rzeczywistych obiektu, jednak rodzą ryzyko problemów w przypadku braku danych (np. rejestracja obcokrajowca bez numeru PESEL) lub zmian standardów.</li>
<li>Praktyka inżynierska nakazuje stosowanie kluczy sztucznych (surogatów) – najczęściej dodatkowego pola całkowitoliczbowego (np. <code>Id</code>, <code>KlientId</code>) zarządzanego przez mechanizm automatycznej inkrementacji <code>AUTO_INCREMENT</code>.</li>
</ul></li>
<li><strong>Ograniczenie unikatowości (UNIQUE):</strong>
<ul>
<li>Atrybut wymuszający brak powtórzeń w danej kolumnie (lub zestawie kolumn).</li>
<li>W przeciwieństwie do klucza głównego kolumna z ograniczeniem <code>UNIQUE</code> dopuszcza wystąpienie wartości <code>NULL</code> (chyba że jawnie dodano klauzulę <code>NOT NULL</code>).</li>
</ul></li>
</ul>
<h2>Relacje między tabelami i integralność referencyjna</h2>
<p>Separacja danych do niezależnych tabel wymaga utworzenia powiązań logicznych, realizowanych za pomocą kluczy obcych.</p>
<ul>
<li><strong>Klucz obcy (FOREIGN KEY):</strong> Pole w tabeli podrzędnej, które odwołuje się bezpośrednio do klucza głównego w tabeli nadrzędnej. Zapewnia integralność referencyjną – uniemożliwia wprowadzenie rekordu ze wskazaniem na nieistniejący obiekt nadrzędny.</li>
<li><strong>Kardynalność relacji:</strong></li>
</ul>
<table>
<thead>
<tr>
<th style=\"text-align: left;\">Typ relacji</th>
<th style=\"text-align: left;\">Opis architektury</th>
<th style=\"text-align: left;\">Przykład praktyczny</th>
</tr>
</thead>
<tbody>
<tr>
<td style=\"text-align: left;\"><strong>1:1 (jeden do jednego)</strong></td>
<td style=\"text-align: left;\">Jednemu rekordowi z tabeli A odpowiada ściśle jeden rekord w tabeli B.</td>
<td style=\"text-align: left;\">Podział danych osobowych i poufnych danych medycznych lub finansowych.</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>1:N (jeden do wielu)</strong></td>
<td style=\"text-align: left;\">Jednemu rekordowi z tabeli A odpowiada wiele rekordów w tabeli B, lecz rekord z B odnosi się tylko do jednego z A.</td>
<td style=\"text-align: left;\">Jeden klient może złożyć wiele zamówień, ale zamówienie należy do jednego klienta.</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>N:M (wiele do wielu)</strong></td>
<td style=\"text-align: left;\">Rekord z tabeli A może odnosić się do wielu rekordów z B, a rekord z B do wielu z A. Wymaga tabeli asocjacyjnej.</td>
<td style=\"text-align: left;\">Książka może mieć wielu autorów, a autor może napisać wiele książek.</td>
</tr>
</tbody>
</table>
<ul>
<li><strong>Realizacja relacji wiele do wielu (N:M):</strong>
<ul>
<li>Relacja N:M nie może być poprawnie obsłużona bezpośrednio w dwóch tabelach bez naruszenia zasad spójności.</li>
<li>Wymaga utworzenia <strong>tabeli pośredniczącej (asocjacyjnej/pomostowej)</strong>, zawierającej klucze obce wskazujące na obie tabele powiązane. Złożenie tych dwóch kluczy obcych stanowi najczęściej złożony klucz główny tabeli pośredniczącej.</li>
</ul></li>
</ul>
<h2>Zasady poprawnego projektowania i normalizacja</h2>
<p>Projektując strukturę bazy danych, należy bezwzględnie przestrzegać reguł eliminacji anomalii bazodanowych:</p>
<ul>
<li><strong>Eliminacja redundancji (nadmiarowości):</strong>
<ul>
<li>Unikanie powielania tych samych danych w wielu wierszach (np. powtarzanie nazwy i adresu wydawnictwa przy każdym tytule książki).</li>
<li>Redundancja marnuje przestrzeń dyskową oraz prowadzi do niespójności podczas modyfikacji danych (anomalie aktualizacji i usuwania). Dane powtarzające się należy wydzielić do osobnej tabeli słownikowej.</li>
</ul></li>
<li><strong>Atomowość danych (I Postać Normalna – 1NF):</strong>
<ul>
<li>W każdej komórce tabeli może znajdować się wyłącznie pojedyncza, niepodzielna informacja.</li>
<li>Błędem jest zapisywanie kilku identyfikatorów po przecinku w jednym polu lub łączenie całego adresu w jeden ciąg tekstowy. Poprawne podejście wymaga podziału adresu na atrybuty: ulica, nr domu, kod, miejscowość.</li>
</ul></li>
<li><strong>Optymalizacja wartości pustych (NULL):</strong>
<ul>
<li>Kolumny, które w większości wierszy pozostają puste (np. rzadko występujące uwagi do zamówienia), powinny być wydzielane do odrębnych tabel powiązanych relacją, aby nie alokować pustych struktur w tabeli głównej.</li>
</ul></li>
</ul>
<h2>Typy danych w systemie MySQL</h2>
<p>Wybór typu danych determinuje ilość pamięci zajmowanej przez rekord na dysku oraz szybkość wykonywania operacji arytmetycznych i porównawczych.</p>
<table>
<thead>
<tr>
<th style=\"text-align: left;\">Kategoria</th>
<th style=\"text-align: left;\">Typy danych</th>
<th style=\"text-align: left;\">Domyślny rozmiar / Zakres</th>
<th style=\"text-align: left;\">Przeznaczenie i specyfika</th>
</tr>
</thead>
<tbody>
<tr>
<td style=\"text-align: left;\"><strong>Całkowite</strong></td>
<td style=\"text-align: left;\"><code>TINYINT</code><br><code>SMALLINT</code><br><code>MEDIUMINT</code><br><code>INT</code> / <code>INTEGER</code><br><code>BIGINT</code></td>
<td style=\"text-align: left;\">1 B (–128 do 127)<br>2 B (–32 768 do 32 767)<br>3 B (–8,38 mln do 8,38 mln)<br>4 B (–2,14 mld do 2,14 mld)<br>8 B (około \$\\pm 9,22 \\cdot 10^{18}\$)</td>
<td style=\"text-align: left;\">Liczby całkowite, identyfikatory rekordów, flagi stanu; opcjonalny atrybut <code>UNSIGNED</code> eliminuje liczby ujemne, podwajając zakres dodatni.</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>Zmiennoprzecinkowe</strong></td>
<td style=\"text-align: left;\"><code>FLOAT</code><br><code>DOUBLE</code> / <code>REAL</code></td>
<td style=\"text-align: left;\">4 B (pojedyncza precyzja)<br>8 B (podwójna precyzja)</td>
<td style=\"text-align: left;\">Przybliżone wartości rzeczywiste do obliczeń naukowych i statystycznych.</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>Stałoprzecinkowe</strong></td>
<td style=\"text-align: left;\"><code>DECIMAL</code> / <code>NUMERIC</code></td>
<td style=\"text-align: left;\">Format zmienny: <code>DECIMAL(M, D)</code> (M – cyfry łącznie, D – po przecinku)</td>
<td style=\"text-align: left;\">Precyzyjne wartości dziesiętne; bezwzględny standard dla operacji finansowych i walutowych.</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>Tekstowe stałe</strong></td>
<td style=\"text-align: left;\"><code>CHAR(M)</code></td>
<td style=\"text-align: left;\">Do 255 znaków (stała alokacja)</td>
<td style=\"text-align: left;\">Krótkie teksty o stałej długości (np. kody ISO, numery PESEL, skróty hash); dopełniane spacjami.</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>Tekstowe zmienne</strong></td>
<td style=\"text-align: left;\"><code>VARCHAR(M)</code></td>
<td style=\"text-align: left;\">Do 65 535 bajtów (dynamiczna długość)</td>
<td style=\"text-align: left;\">Teksty o zróżnicowanej długości (imiona, opisy, adresy); brak marnowania miejsca na puste znaki.</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>Wielkie obiekty</strong></td>
<td style=\"text-align: left;\"><code>TEXT</code> (<code>TINY-</code>, <code>MEDIUM-</code>, <code>LONGTEXT</code>)<br><code>BLOB</code> (<code>TINY-</code>, <code>MEDIUM-</code>, <code>LONGBLOB</code>)</td>
<td style=\"text-align: left;\">Do 4 GB (w wersji <code>LONG</code>)</td>
<td style=\"text-align: left;\">Długie artykuły, dokumenty HTML (<code>TEXT</code>) oraz binarne pliki graficzne, multimedia i archiwa (<code>BLOB</code>).</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>Czasowe</strong></td>
<td style=\"text-align: left;\"><code>DATE</code><br><code>DATETIME</code><br><code>TIME</code><br><code>TIMESTAMP</code></td>
<td style=\"text-align: left;\"><code>RRRR-MM-DD</code> (3 B)<br><code>RRRR-MM-DD GG:MM:SS</code> (8 B)<br><code>GG:MM:SS</code> (3 B)<br><code>RRRR-MM-DD GG:MM:SS</code> (4 B)</td>
<td style=\"text-align: left;\">Reprezentacja daty, czasu oraz automatycznych znaczników modyfikacji rekordu w strefie UTC (<code>TIMESTAMP</code>).</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>Wyliczeniowe</strong></td>
<td style=\"text-align: left;\"><code>ENUM(\x27a\x27,\x27b\x27,...)</code><br><code>SET(\x27a\x27,\x27b\x27,...)</code></td>
<td style=\"text-align: left;\">1–2 B (do 65 535 wartości)<br>1–8 B (do 64 wartości)</td>
<td style=\"text-align: left;\">Wybór dokładnie jednej wartości z listy (<code>ENUM</code>) lub kombinacji wielu wartości zakodowanych w masce bitowej (<code>SET</code>).</td>
</tr>
</tbody>
</table>
<h2>Mechanizmy składowania danych (Storage Engines)</h2>
<p>Serwer MySQL posiada modularną architekturę warstwy fizycznej, umożliwiając przypisanie konkretnego silnika pamięci masowej (<code>ENGINE</code>) do każdej tabeli.</p>
<ul>
<li><strong>InnoDB:</strong>
<ul>
<li>Domyślny i zalecany mechanizm składowania w nowoczesnych wdrożeniach MySQL.</li>
<li>Zapewnia pełną transakcyjność zgodnie z paradygmatem <strong>ACID</strong> (Atomicity, Consistency, Isolation, Durability).</li>
<li>Obsługuje blokowanie na poziomie pojedynczych wierszy (<em>row-level locking</em>), co podnosi wydajność w środowiskach wielodostępnych.</li>
<li>Wspiera fizyczne sprawdzanie i wymuszanie więzów integralności referencyjnej (<code>FOREIGN KEY</code>).</li>
</ul></li>
<li><strong>MyISAM:</strong>
<ul>
<li>Starszy, nietransakcyjny mechanizm bazodanowy.</li>
<li>Brak obsługi transakcji (<code>COMMIT</code>, <code>ROLLBACK</code>) oraz brak wsparcia dla kluczy obcych.</li>
<li>Stosuje blokowanie na poziomie całej tabeli (<em>table-level locking</em>), co drastycznie obniża wydajność przy jednoczesnych zapisach wielu klientów.</li>
</ul></li>
<li><strong>Silniki specjalistyczne:</strong>
<ul>
<li><code>MEMORY</code> (dawniej <code>HEAP</code>): Tabele przechowywane wyłącznie w pamięci RAM; bardzo szybki dostęp, utrata danych po restarcie serwera.</li>
<li><code>ARCHIVE</code>: Silnik zoptymalizowany pod szybkie dopisywanie i kompresję danych bez indeksowania (logi, audyt).</li>
</ul></li>
</ul>
<h2>Podział języka SQL</h2>
<p>Język SQL dzieli się na podzbiory instrukcji odpowiedzialne za architekturę, operacje na danych, zarządzanie uprawnieniami oraz formułowanie zapytań:</p>
<ul>
<li><strong>DDL (Data Definition Language) – Język definicji danych:</strong>
<ul>
<li>Służy do tworzenia, modyfikacji i usuwania struktur bazy danych.</li>
<li>Główne polecenia: <code>CREATE DATABASE</code>, <code>CREATE TABLE</code>, <code>ALTER TABLE</code>, <code>DROP TABLE</code>, <code>TRUNCATE TABLE</code>, <code>CREATE INDEX</code>.</li>
</ul></li>
<li><strong>DML (Data Manipulation Language) – Język manipulacji danymi:</strong>
<ul>
<li>Odpowiada za zarządzanie zawartością tabel (rekordami).</li>
<li>Główne polecenia: <code>INSERT INTO</code> (wstawianie wierszy), <code>UPDATE</code> (modyfikacja istniejących danych), <code>DELETE</code> (usuwanie wierszy), <code>REPLACE</code>.</li>
</ul></li>
<li><strong>DQL (Data Query Language) – Język zapytań:</strong>
<ul>
<li>Wykorzystywany do pobierania, filtrowania, sortowania i agregowania informacji z tabel.</li>
<li>Podstawowe polecenie: <code>SELECT</code> rozbudowywane o klauzule <code>FROM</code>, <code>WHERE</code>, <code>GROUP BY</code>, <code>HAVING</code>, <code>ORDER BY</code>, <code>LIMIT</code> oraz złączenia tabel <code>JOIN</code>.</li>
</ul></li>
<li><strong>DCL (Data Control Language) – Język kontroli danych:</strong>
<ul>
<li>Zarządza bezpieczeństwem, prawami dostępu oraz kontami użytkowników serwera.</li>
<li>Główne polecenia: <code>CREATE USER</code>, <code>GRANT</code> (nadawanie uprawnień), <code>REVOKE</code> (odbieranie uprawnień).</li>
</ul></li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:D:/Projekty/gravEdu/user/pages/02.mysql/01.podstawy-baz-danych";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<p>Relacyjny model baz danych opiera się na matematycznej teorii relacji, w której zbiory danych są organizowane w logiczne, dwuwymiarowe struktury tabelaryczne powiązane zdefiniowanymi zależnościami. System zarządzania relacyjną bazą danych (RDBMS), taki jak MySQL, odpowiada za fizyczne składowanie, optymalizację dostępu, transakcyjną spójność oraz modyfikację informacji za pomocą standardowego języka zapytań SQL.</p>
<h2>Struktura tabelaryczna i elementy składowe relacji</h2>
<p>Struktura bazy danych opiera się na logicznym podziale na encje rzeczywiste lub abstrakcyjne, które w relacyjnych systemach reprezentowane są za pomocą tabel:</p>
<ul>
<li><strong>Tabela (relacja):</strong> Zbiór rekordów o jednolitej, z góry zdefiniowanej strukturze logicznej.</li>
<li><strong>Rekord (wiersz / krotka):</strong> Pojedynczy wpis w tabeli, który agreguje pełen zestaw danych dotyczący jednego konkretnego obiektu (np. jednego klienta, zamówienia czy towaru).</li>
<li><strong>Pole (kolumna / atrybut):</strong> Element składowy rekordu reprezentujący pojedynczą właściwość obiektu (np. imię, nazwisko, cena jednostkowa, data rejestracji). Każda kolumna posiada unikatową w ramach tabeli nazwę oraz przypisany typ danych.</li>
</ul>
<h2>Identyfikacja rekordów i mechanizmy kluczy</h2>
<p>W relacyjnej bazie danych żaden rekord nie może być anonimowy – każdy wiersz musi być jednoznacznie odróżnialny od pozostałych.</p>
<ul>
<li><strong>Klucz główny (PRIMARY KEY):</strong>
<ul>
<li>Kolumna (lub zespół kolumn), której wartość jednoznacznie identyfikuje każdy wiersz tabeli.</li>
<li>Wymusza integralność encji: wartości klucza głównego muszą być unikatowe w całej tabeli i nie mogą przyjmować wartości pustych (<code>NOT NULL</code>).</li>
</ul></li>
<li><strong>Identyfikatory naturalne a sztuczne:</strong>
<ul>
<li>Klucze naturalne (np. numer PESEL czy numer ISBN) bazują na cechach rzeczywistych obiektu, jednak rodzą ryzyko problemów w przypadku braku danych (np. rejestracja obcokrajowca bez numeru PESEL) lub zmian standardów.</li>
<li>Praktyka inżynierska nakazuje stosowanie kluczy sztucznych (surogatów) – najczęściej dodatkowego pola całkowitoliczbowego (np. <code>Id</code>, <code>KlientId</code>) zarządzanego przez mechanizm automatycznej inkrementacji <code>AUTO_INCREMENT</code>.</li>
</ul></li>
<li><strong>Ograniczenie unikatowości (UNIQUE):</strong>
<ul>
<li>Atrybut wymuszający brak powtórzeń w danej kolumnie (lub zestawie kolumn).</li>
<li>W przeciwieństwie do klucza głównego kolumna z ograniczeniem <code>UNIQUE</code> dopuszcza wystąpienie wartości <code>NULL</code> (chyba że jawnie dodano klauzulę <code>NOT NULL</code>).</li>
</ul></li>
</ul>
<h2>Relacje między tabelami i integralność referencyjna</h2>
<p>Separacja danych do niezależnych tabel wymaga utworzenia powiązań logicznych, realizowanych za pomocą kluczy obcych.</p>
<ul>
<li><strong>Klucz obcy (FOREIGN KEY):</strong> Pole w tabeli podrzędnej, które odwołuje się bezpośrednio do klucza głównego w tabeli nadrzędnej. Zapewnia integralność referencyjną – uniemożliwia wprowadzenie rekordu ze wskazaniem na nieistniejący obiekt nadrzędny.</li>
<li><strong>Kardynalność relacji:</strong></li>
</ul>
<table>
<thead>
<tr>
<th style=\"text-align: left;\">Typ relacji</th>
<th style=\"text-align: left;\">Opis architektury</th>
<th style=\"text-align: left;\">Przykład praktyczny</th>
</tr>
</thead>
<tbody>
<tr>
<td style=\"text-align: left;\"><strong>1:1 (jeden do jednego)</strong></td>
<td style=\"text-align: left;\">Jednemu rekordowi z tabeli A odpowiada ściśle jeden rekord w tabeli B.</td>
<td style=\"text-align: left;\">Podział danych osobowych i poufnych danych medycznych lub finansowych.</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>1:N (jeden do wielu)</strong></td>
<td style=\"text-align: left;\">Jednemu rekordowi z tabeli A odpowiada wiele rekordów w tabeli B, lecz rekord z B odnosi się tylko do jednego z A.</td>
<td style=\"text-align: left;\">Jeden klient może złożyć wiele zamówień, ale zamówienie należy do jednego klienta.</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>N:M (wiele do wielu)</strong></td>
<td style=\"text-align: left;\">Rekord z tabeli A może odnosić się do wielu rekordów z B, a rekord z B do wielu z A. Wymaga tabeli asocjacyjnej.</td>
<td style=\"text-align: left;\">Książka może mieć wielu autorów, a autor może napisać wiele książek.</td>
</tr>
</tbody>
</table>
<ul>
<li><strong>Realizacja relacji wiele do wielu (N:M):</strong>
<ul>
<li>Relacja N:M nie może być poprawnie obsłużona bezpośrednio w dwóch tabelach bez naruszenia zasad spójności.</li>
<li>Wymaga utworzenia <strong>tabeli pośredniczącej (asocjacyjnej/pomostowej)</strong>, zawierającej klucze obce wskazujące na obie tabele powiązane. Złożenie tych dwóch kluczy obcych stanowi najczęściej złożony klucz główny tabeli pośredniczącej.</li>
</ul></li>
</ul>
<h2>Zasady poprawnego projektowania i normalizacja</h2>
<p>Projektując strukturę bazy danych, należy bezwzględnie przestrzegać reguł eliminacji anomalii bazodanowych:</p>
<ul>
<li><strong>Eliminacja redundancji (nadmiarowości):</strong>
<ul>
<li>Unikanie powielania tych samych danych w wielu wierszach (np. powtarzanie nazwy i adresu wydawnictwa przy każdym tytule książki).</li>
<li>Redundancja marnuje przestrzeń dyskową oraz prowadzi do niespójności podczas modyfikacji danych (anomalie aktualizacji i usuwania). Dane powtarzające się należy wydzielić do osobnej tabeli słownikowej.</li>
</ul></li>
<li><strong>Atomowość danych (I Postać Normalna – 1NF):</strong>
<ul>
<li>W każdej komórce tabeli może znajdować się wyłącznie pojedyncza, niepodzielna informacja.</li>
<li>Błędem jest zapisywanie kilku identyfikatorów po przecinku w jednym polu lub łączenie całego adresu w jeden ciąg tekstowy. Poprawne podejście wymaga podziału adresu na atrybuty: ulica, nr domu, kod, miejscowość.</li>
</ul></li>
<li><strong>Optymalizacja wartości pustych (NULL):</strong>
<ul>
<li>Kolumny, które w większości wierszy pozostają puste (np. rzadko występujące uwagi do zamówienia), powinny być wydzielane do odrębnych tabel powiązanych relacją, aby nie alokować pustych struktur w tabeli głównej.</li>
</ul></li>
</ul>
<h2>Typy danych w systemie MySQL</h2>
<p>Wybór typu danych determinuje ilość pamięci zajmowanej przez rekord na dysku oraz szybkość wykonywania operacji arytmetycznych i porównawczych.</p>
<table>
<thead>
<tr>
<th style=\"text-align: left;\">Kategoria</th>
<th style=\"text-align: left;\">Typy danych</th>
<th style=\"text-align: left;\">Domyślny rozmiar / Zakres</th>
<th style=\"text-align: left;\">Przeznaczenie i specyfika</th>
</tr>
</thead>
<tbody>
<tr>
<td style=\"text-align: left;\"><strong>Całkowite</strong></td>
<td style=\"text-align: left;\"><code>TINYINT</code><br><code>SMALLINT</code><br><code>MEDIUMINT</code><br><code>INT</code> / <code>INTEGER</code><br><code>BIGINT</code></td>
<td style=\"text-align: left;\">1 B (–128 do 127)<br>2 B (–32 768 do 32 767)<br>3 B (–8,38 mln do 8,38 mln)<br>4 B (–2,14 mld do 2,14 mld)<br>8 B (około \$\\pm 9,22 \\cdot 10^{18}\$)</td>
<td style=\"text-align: left;\">Liczby całkowite, identyfikatory rekordów, flagi stanu; opcjonalny atrybut <code>UNSIGNED</code> eliminuje liczby ujemne, podwajając zakres dodatni.</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>Zmiennoprzecinkowe</strong></td>
<td style=\"text-align: left;\"><code>FLOAT</code><br><code>DOUBLE</code> / <code>REAL</code></td>
<td style=\"text-align: left;\">4 B (pojedyncza precyzja)<br>8 B (podwójna precyzja)</td>
<td style=\"text-align: left;\">Przybliżone wartości rzeczywiste do obliczeń naukowych i statystycznych.</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>Stałoprzecinkowe</strong></td>
<td style=\"text-align: left;\"><code>DECIMAL</code> / <code>NUMERIC</code></td>
<td style=\"text-align: left;\">Format zmienny: <code>DECIMAL(M, D)</code> (M – cyfry łącznie, D – po przecinku)</td>
<td style=\"text-align: left;\">Precyzyjne wartości dziesiętne; bezwzględny standard dla operacji finansowych i walutowych.</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>Tekstowe stałe</strong></td>
<td style=\"text-align: left;\"><code>CHAR(M)</code></td>
<td style=\"text-align: left;\">Do 255 znaków (stała alokacja)</td>
<td style=\"text-align: left;\">Krótkie teksty o stałej długości (np. kody ISO, numery PESEL, skróty hash); dopełniane spacjami.</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>Tekstowe zmienne</strong></td>
<td style=\"text-align: left;\"><code>VARCHAR(M)</code></td>
<td style=\"text-align: left;\">Do 65 535 bajtów (dynamiczna długość)</td>
<td style=\"text-align: left;\">Teksty o zróżnicowanej długości (imiona, opisy, adresy); brak marnowania miejsca na puste znaki.</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>Wielkie obiekty</strong></td>
<td style=\"text-align: left;\"><code>TEXT</code> (<code>TINY-</code>, <code>MEDIUM-</code>, <code>LONGTEXT</code>)<br><code>BLOB</code> (<code>TINY-</code>, <code>MEDIUM-</code>, <code>LONGBLOB</code>)</td>
<td style=\"text-align: left;\">Do 4 GB (w wersji <code>LONG</code>)</td>
<td style=\"text-align: left;\">Długie artykuły, dokumenty HTML (<code>TEXT</code>) oraz binarne pliki graficzne, multimedia i archiwa (<code>BLOB</code>).</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>Czasowe</strong></td>
<td style=\"text-align: left;\"><code>DATE</code><br><code>DATETIME</code><br><code>TIME</code><br><code>TIMESTAMP</code></td>
<td style=\"text-align: left;\"><code>RRRR-MM-DD</code> (3 B)<br><code>RRRR-MM-DD GG:MM:SS</code> (8 B)<br><code>GG:MM:SS</code> (3 B)<br><code>RRRR-MM-DD GG:MM:SS</code> (4 B)</td>
<td style=\"text-align: left;\">Reprezentacja daty, czasu oraz automatycznych znaczników modyfikacji rekordu w strefie UTC (<code>TIMESTAMP</code>).</td>
</tr>
<tr>
<td style=\"text-align: left;\"><strong>Wyliczeniowe</strong></td>
<td style=\"text-align: left;\"><code>ENUM(\x27a\x27,\x27b\x27,...)</code><br><code>SET(\x27a\x27,\x27b\x27,...)</code></td>
<td style=\"text-align: left;\">1–2 B (do 65 535 wartości)<br>1–8 B (do 64 wartości)</td>
<td style=\"text-align: left;\">Wybór dokładnie jednej wartości z listy (<code>ENUM</code>) lub kombinacji wielu wartości zakodowanych w masce bitowej (<code>SET</code>).</td>
</tr>
</tbody>
</table>
<h2>Mechanizmy składowania danych (Storage Engines)</h2>
<p>Serwer MySQL posiada modularną architekturę warstwy fizycznej, umożliwiając przypisanie konkretnego silnika pamięci masowej (<code>ENGINE</code>) do każdej tabeli.</p>
<ul>
<li><strong>InnoDB:</strong>
<ul>
<li>Domyślny i zalecany mechanizm składowania w nowoczesnych wdrożeniach MySQL.</li>
<li>Zapewnia pełną transakcyjność zgodnie z paradygmatem <strong>ACID</strong> (Atomicity, Consistency, Isolation, Durability).</li>
<li>Obsługuje blokowanie na poziomie pojedynczych wierszy (<em>row-level locking</em>), co podnosi wydajność w środowiskach wielodostępnych.</li>
<li>Wspiera fizyczne sprawdzanie i wymuszanie więzów integralności referencyjnej (<code>FOREIGN KEY</code>).</li>
</ul></li>
<li><strong>MyISAM:</strong>
<ul>
<li>Starszy, nietransakcyjny mechanizm bazodanowy.</li>
<li>Brak obsługi transakcji (<code>COMMIT</code>, <code>ROLLBACK</code>) oraz brak wsparcia dla kluczy obcych.</li>
<li>Stosuje blokowanie na poziomie całej tabeli (<em>table-level locking</em>), co drastycznie obniża wydajność przy jednoczesnych zapisach wielu klientów.</li>
</ul></li>
<li><strong>Silniki specjalistyczne:</strong>
<ul>
<li><code>MEMORY</code> (dawniej <code>HEAP</code>): Tabele przechowywane wyłącznie w pamięci RAM; bardzo szybki dostęp, utrata danych po restarcie serwera.</li>
<li><code>ARCHIVE</code>: Silnik zoptymalizowany pod szybkie dopisywanie i kompresję danych bez indeksowania (logi, audyt).</li>
</ul></li>
</ul>
<h2>Podział języka SQL</h2>
<p>Język SQL dzieli się na podzbiory instrukcji odpowiedzialne za architekturę, operacje na danych, zarządzanie uprawnieniami oraz formułowanie zapytań:</p>
<ul>
<li><strong>DDL (Data Definition Language) – Język definicji danych:</strong>
<ul>
<li>Służy do tworzenia, modyfikacji i usuwania struktur bazy danych.</li>
<li>Główne polecenia: <code>CREATE DATABASE</code>, <code>CREATE TABLE</code>, <code>ALTER TABLE</code>, <code>DROP TABLE</code>, <code>TRUNCATE TABLE</code>, <code>CREATE INDEX</code>.</li>
</ul></li>
<li><strong>DML (Data Manipulation Language) – Język manipulacji danymi:</strong>
<ul>
<li>Odpowiada za zarządzanie zawartością tabel (rekordami).</li>
<li>Główne polecenia: <code>INSERT INTO</code> (wstawianie wierszy), <code>UPDATE</code> (modyfikacja istniejących danych), <code>DELETE</code> (usuwanie wierszy), <code>REPLACE</code>.</li>
</ul></li>
<li><strong>DQL (Data Query Language) – Język zapytań:</strong>
<ul>
<li>Wykorzystywany do pobierania, filtrowania, sortowania i agregowania informacji z tabel.</li>
<li>Podstawowe polecenie: <code>SELECT</code> rozbudowywane o klauzule <code>FROM</code>, <code>WHERE</code>, <code>GROUP BY</code>, <code>HAVING</code>, <code>ORDER BY</code>, <code>LIMIT</code> oraz złączenia tabel <code>JOIN</code>.</li>
</ul></li>
<li><strong>DCL (Data Control Language) – Język kontroli danych:</strong>
<ul>
<li>Zarządza bezpieczeństwem, prawami dostępu oraz kontami użytkowników serwera.</li>
<li>Główne polecenia: <code>CREATE USER</code>, <code>GRANT</code> (nadawanie uprawnień), <code>REVOKE</code> (odbieranie uprawnień).</li>
</ul></li>
</ul>", "@Page:D:/Projekty/gravEdu/user/pages/02.mysql/01.podstawy-baz-danych", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
