SELECT nazwa, ilosc, opis, cena, zdjecie
FROM Produkty
WHERE rodzaje_id IN (1, 2);

INSERT INTO PRODUKTY (rodzaje_id, producenci_id, nazwa, ilosc, opis, cena, zdjecie)
VALUES ( 1, 4, 'owoc1', 10, '', 9.99, 'owoce.jpg');