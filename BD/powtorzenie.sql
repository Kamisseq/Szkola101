SELECT
FROM
WHERE
GROUP BY
HAVING
ORDER BY
LIMIT

CREATE TABLE Producenci (
    kod INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(250) NOT NULL
);

CREATE TABLE Produkty (
    kod INT PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(250) NOT NULL,
    cena DECIMAL(7,2) NOT NULL,
    producent INT,                                  
    FOREIGN KEY (producent) REFERENCES Producenci(kod)
);


SELECT nazwa from Produkty;

SELECT nazwa, cena from Produkty;

SELECT nazwa from produkty WHERE cena <= 200;

SELECT nazwa, cena from produkty WHERE cena BETWEEN 60 AND 120;

SELECT Nazwa, cena * 100 from Produkty;

SELECT avg(cena) from produkty;

SELECT avg(cena) 
FROM produkty 
WHERE producent = 2;

SELECT count(*)
FROM Produkty
WHERE Cena >= 180;

SELECT nazwa, cena
FROM Produkty
Where Cena >= 180
ORDER by cena ASC, nazwa DESC;

SELECT *
FROM Produkty
JOIN Producenci ON Produkty.producent = Producenci.kod

SELECT Produkty.nazwa, Produkty.cena, Producenci.nazwa
FROM Produkty
    JOIN Producenci ON Produkty.producent = Producenci.kod;

SELECT producent, avg(cena)
FROM Produkty
GROUP BY Producent;

SELECT Producenci.nazwa, avg(produkty.cena)
FROM Produkty
    JOIN Producenci ON Produkty.producent = Producenci.kod
GROUP BY Producenci.nazwa;

SELECT Producenci.nazwa, avg(produkty.cena)
FROM Produkty
    JOIN Producenci ON Produkty.producent = Producenci.kod
GROUP BY Producenci.nazwa
HAVING avg(produkty.cena) >= 150;

SELECT nazwa, cena
FROM Produkty
ORDER BY cena ASC
LIMIT 1;

SELECT nazwa, cena
FROM Produkty
WHERE cena = (SELECT MIN(cena) FROM Produkty);



