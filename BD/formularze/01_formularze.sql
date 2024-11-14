SELECT * FROM czytelnicy;

SELECT tytul
FROM ksiazki
    JOIN wypozyczenia ON wypozyczenia.id_ksiazka = ksiazki.id
    JOIN czytelnicy ON wypozyczenia.id_czytelnik = czytelnicy.id
    WHERE imie = 'Adam' AND nazwisko = 'Milek';