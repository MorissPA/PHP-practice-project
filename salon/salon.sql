CREATE TABLE Kolory(
IdKoloru INT AUTO_INCREMENT NOT NULL,
Kolor VARCHAR(30),
PRIMARY KEY (IdKoloru)
);

CREATE TABLE Auta(
IdAuta INT AUTO_INCREMENT NOT NULL,
Marka VARCHAR(50),
Model VARCHAR(50),
IdKoloru INT,
Cena DOUBLE,
PRIMARY KEY (IdAuta),
FOREIGN KEY (IdKoloru) REFERENCES Kolory (IdKoloru)
ON UPDATE CASCADE
ON DELETE SET NULL
);

INSERT INTO Kolory VALUES
(NULL,'Czarny'),
(NULL,'Czerwony'),
(NULL,'Srebrny');

INSERT INTO Auta VALUES
(NULL,'VW','Golf',1,80999.00),
(NULL,'Honda','Accord',3,135000),
(NULL,'BMW','M3',1,199000),
(NULL,'Alfa Romeo','C4',2,160000),
(NULL,'Fiat','126p',1,1000);




CREATE VIEW Widok1 AS
SELECT Marka, Model, Kolor, Cena
FROM Auta LEFT OUTER JOIN Kolory 
ON Auta.IdKoloru = Kolory.IdKoloru;
