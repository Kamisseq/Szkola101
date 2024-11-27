SELECT tytul, plik
FROM zdjecia
WHERE polubienia >= 100;

SELECT plik, tytul, polubienia, imie, nazwisko
FROM zdjecia
JOIN autorzy ON zdjecia.autorzy_id = autorzy.id
ORDER BY nazwisko ASC;

SELECT imie, COUNT(*) as liczba_zdjec
from zdjecia
JOIN autorzy ON zdjecia.autorzy_id = autorzy.id
GROUP BY imie;