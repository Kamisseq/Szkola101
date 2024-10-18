SELECT * FROM Magazyny;

SELECT * FROM Kontenery 
WHERE Wartosc > 150;

SELECT DISTINCT Zawartosc FROM Kontenery;

SELECT AVG(Wartosc) FROM Kontenery;

SELECT Magazyn, AVG(Wartosc)
FROM Kontenery 
GROUP BY Magazyn;

SELECT Magazyn, AVG(Wartosc 
FROM Kontenery 
GROUP BY Magazyn 
HAVING AVG(Wartosc) > 150;

SELECT Kontenery.Kod, Magazyny.Lokalizacja 
FROM Kontenery 
JOIN Magazyny ON Kontenery.Magazyn = Magazyny.Kod;

SELECT Magazyn, COUNT(Kod) 
FROM Kontenery 
GROUP BY Magazyn;

SELECT Magazyny.Kod, COUNT(Kontenery.Kod)
FROM Magazyny 
LEFT JOIN Kontenery ON Magazyny.Kod = Kontenery.Magazyn 
GROUP BY Magazyny.Kod;

SELECT Magazyny.Kod 
FROM Magazyny 
JOIN Kontenery ON Magazyny.Kod = Kontenery.Magazyn 
GROUP BY Magazyny.Kod 
HAVING COUNT(Kontenery.Kod) > Magazyny.Pojemnosc;

SELECT Kontenery.Kod, Magazyny.Lokalizacja, Magazyny.Pojemnosc 
FROM Magazyny 
LEFT JOIN Kontenery ON Magazyny.Kod = Kontenery.Magazyn 
WHERE Magazyny.Lokalizacja = 'Chicago';

INSERT INTO Magazyny(Kod, Lokalizacja, Pojemnosc) 
VALUES (7, 'New York', 3);

INSERT INTO Kontenery(Kod, Zawartosc, Wartosc, Magazyn) 
VALUES ('H5RT', 'Papers', 200, 2);

UPDATE Kontenery 
SET Wartosc = Wartosc * 0.85;

DELETE FROM Kontenery 
WHERE Wartosc < 100;

DELETE FROM Kontenery 
WHERE Magazyn IN (
    SELECT Magazyny.Kod 
    FROM Magazyny 
    JOIN Kontenery ON Magazyny.Kod = Kontenery.Magazyn 
    GROUP BY Magazyny.Kod 
    HAVING COUNT(Kontenery.Kod) > Magazyny.Pojemnosc
);