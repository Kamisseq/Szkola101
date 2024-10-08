CREATE TABLE Dzialy (
    kod INT PRIMARY KEY, 
    nazwa TEXT, 
    budzet REAL
);

CREATE TABLE Pracownicy (
    ID INT PRIMARY KEY, 
    imie TEXT NOT NULL, 
    nazwisko TEXT NOT NULL, 
    dzial INT, 
    FOREIGN KEY (dzial) REFERENCES Dzialy(kod)
);

SELECT nazwisko 
FROM Pracownicy;

SELECT DISTINCT nazwisko 
FROM Pracownicy;

SELECT * 
FROM Pracownicy 
WHERE nazwisko = 'Smith';

SELECT * 
FROM Pracownicy 
WHERE nazwisko = 'Smith' OR nazwisko = 'Doe';

SELECT * 
FROM Pracownicy 
WHERE dzial = 14;

SELECT * 
FROM Pracownicy 
WHERE dzial IN (37, 77);

SELECT * 
FROM Pracownicy 
WHERE nazwisko LIKE 'S%';

SELECT SUM(budzet) 
FROM Dzialy;

SELECT dzial, COUNT(*) AS liczba_pracownikow 
FROM Pracownicy 
GROUP BY dzial;

SELECT Pracownicy.*, Dzialy.nazwa, Dzialy.budzet 
FROM Pracownicy 
JOIN Dzialy ON Pracownicy.dzial = Dzialy.kod;

SELECT Pracownicy.imie, Pracownicy.nazwisko, Dzialy.nazwa, Dzialy.budzet 
FROM Pracownicy 
JOIN Dzialy ON Pracownicy.dzial = Dzialy.kod;

SELECT Pracownicy.imie, Pracownicy.nazwisko 
FROM Pracownicy 
JOIN Dzialy ON Pracownicy.dzial = Dzialy.kod 
WHERE Dzialy.budzet > 60000;

SELECT * 
FROM Dzialy 
WHERE budzet > (SELECT AVG(budzet) FROM Dzialy);

SELECT Dzialy.nazwa 
FROM Dzialy 
JOIN Pracownicy ON Dzialy.kod = Pracownicy.dzial 
GROUP BY Dzialy.nazwa 
HAVING COUNT(Pracownicy.ID) > 2;

SELECT Pracownicy.imie, Pracownicy.nazwisko 
FROM Pracownicy 
JOIN Dzialy ON Pracownicy.dzial = Dzialy.kod 
WHERE Dzialy.budzet = (SELECT MIN(budzet) FROM Dzialy);

INSERT INTO Dzialy(kod, nazwa, budzet) VALUES (10, 'Quality Assurance', 40000);

INSERT INTO Pracownicy(ID, imie, nazwisko, dzial) VALUES (847219811, 'Mary', 'Moore', 10);

UPDATE Dzialy 
SET budzet = budzet * 0.9;

UPDATE Pracownicy 
SET dzial = 14 
WHERE dzial = 77;

DELETE FROM Pracownicy 
WHERE dzial = 14;

DELETE FROM Pracownicy 
WHERE dzial IN (SELECT kod FROM Dzialy WHERE budzet >= 60000);

DELETE FROM Pracownicy;

