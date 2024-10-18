CREATE TABLE Filmy (
    Kod INT PRIMARY KEY AUTO_INCREMENT,
    Tytul VARCHAR(250) NOT NULL,
    Rating VARCHAR(250)
);

Create Table Kina (
    Kod INT PRIMARY KEY AUTO_INCREMENT,
    Nazwa VARCHAR(250) NOT NULL,
    Film INT,
    FOREIGN KEY (Film) REFERENCES Filmy(Kod)
);

Select Tytul FROM Filmy;

SELECT DISTINCT Rating FROM Filmy
WHERE Rating IS NOT NULL;

Select * from Filmy
WHERE Rating IS NULL;

SELECT * FROM Kina 
WHERE film IS NULL;

-- 5. Wyświetl wszystkie dane o kinach i filmach, uwzględnij tylko dane o filmach, które są wyświetlane w tych kinach i dane o kinach, w których są wyświetlane jakieś filmy. 
SELECT *
From Kina
INNER JOIN Filmy ON Kina.Film = Filmy.Kod


-- 6. Wyświetl wszystkie dane o kinach i filmach, uwzględnij w zestawieniu także te kina, w których aktualnie nie są wyświetlane żadne filmy.
SELECT *
From Kina LEFT JOIN Filmy ON Kina.Film = Filmy.Kod


-- 7. Wyświetl wszystkie dane o kinach i filmach, uwzględnij w zestawieniu także te filmy, które nie są aktualnie wyświetlane w żadnych kinach. 
SELECT *
From Kina RIGHT JOIN Filmy ON Kina.Film = Filmy.Kod;


-- 8. Wyświetl wszystkie dane o kinach i filmach, uwzględnij w zestawieniu także te kina, w których aktualnie nie są wyświetlane żadne filmy oraz  te filmy, które nie są aktualnie wyświetlane w żadnych kinach. 
SELECT *
From Kina LEFT JOIN Filmy ON Kina.Film = Filmy.Kod
UNION
SELECT *
From Kina RIGHT JOIN Filmy ON Kina.Film = Filmy.Kod;

-- 9. Dodaj film  "One, Two, Three" (bez ratingu)
INSERT INTO Filmy (Tytul) 
VALUES ('One, Two, Three');

 
-- 10. Ustal rating wszystkich filmów bez ratingu na  "G".
UPDATE Filmy 
SET Rating = 'G'
WHERE Rating IS NULL;


-- 11. usuń kina wyświetlające filmy z ratingiem "NC-17".
DELETE FROM Kina
WHERE Film IN (SELECT Kod FROM Filmy WHERE Rating = 'NC-17');

