CREATE DATABASE trips;

USE trips;

CREATE TABLE trip_questions (
    id int AUTO_INCREMENT PRIMARY KEY,
    email varchar(255) NOT NULL,
    continent varchar(255) NOT NULL,
    type varchar(255),
    description varchar(255)
);

INSERT INTO trip_questions VALUES (1, 'email@example.com', 'Europa', 'Rodzaj', 'Opis');

CREATE TABLE trip_offer (
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    continent varchar(255) NOT NULL,
    country varchar(255) NOT NULL,
    period varchar(255) NOT NULL,
    description text(1000) NOT NULL,
    price float(255, 2) NOT NULL
);

INSERT INTO trip_offer VALUES 
(1, "Kolorado", "Ameryka Północna", "USA", "7 dni", " Jest wyżynno-górzystym stanem, którego średnia wysokość nad
poziomem morza przekracza 2000 m. Najwyższy szczyt Kolorado,
Mount Elbert, wznosi się na 4399 m n.p.m. Zachodnią część stanu
zajmują Góry Skaliste i Wyżyna Kolorado, wschodnią – obszar
Wielkich Równin.", 1500.0),

(2, "Alaska", "Ameryka Północna", "USA", "7 dni", " Pasmo górskie w Ameryce Północnej w stanie Alaska. Jest to
najwyższa część łańcucha Kordylierów z najwyższym szczytem
kontynentu – Denali (McKinley) (6194 m n.p.m.). Długość ok. 1000
km. Zbudowane z granitów i ze skał osadowych.", 1600.0),

(3, "Everest", "Azja", "Chiny", "7 dni", " Najwyższy szczyt Ziemi (8848 m n.p.m., podaje się też wysokość
8844 (pomiary chińskie) lub 8850 (pomiary amerykańskie)),
ośmiotysięcznik położony w Himalajach Wysokich (Centralnych), na
granicy Nepalu i Chińskiej Republiki Ludowej (Tybetu).", 1800.0),

(4, "Alpy", "Europa", "Austria", "7 dni", " Najwyższy łańcuch górski Europy, ciągnący się łukiem od wybrzeża
Morza Śródziemnego w okolicy Savony po dolinę Dunaju w okolicach
Wiednia. Łańcuch ma długość około 1200 km, szerokość od 150 do
250 km i zajmuje powierzchnię około 220 tys. km².", 1500.0);
