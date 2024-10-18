CREATE TABLE Produkty(
    Kod INT AUTO_INCREMENT PRIMARY KEY,
    Nazwa VARCHAR(40)
);

CREATE TABLE Dostawcy(
    Kod CHAR(4) PRIMARY KEY,
    Nazwa VARCHAR(40)
);

CREATE TABLE Oferty(
    Produkt INT,
    Dostawca CHAR(4),
    Cena INT,
    PRIMARY KEY (Produkt, Dostawca),
    FOREIGN KEY (Produkt) REFERENCES Produkty(Kod),
    FOREIGN KEY (Dostawca) REFERENCES Dostawcy(Kod)

);