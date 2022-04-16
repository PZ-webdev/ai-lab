-- CREATE DATABASE trips;
-- USE trips;
CREATE TABLE trip_questions (
    id int AUTO_INCREMENT PRIMARY KEY,
    email varchar(255) NOT NULL,
    continent varchar(255) NOT NULL,
    type varchar(255),
    description varchar(255)
);

CREATE TABLE trip_offer (
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    continent varchar(255) NOT NULL,
    country varchar(255) NOT NULL,
    period varchar(255) NOT NULL,
    description text(1000) NOT NULL,
    price float(255, 2) NOT NULL
);

CREATE TABLE countries (
  id int AUTO_INCREMENT PRIMARY KEY,
  name varchar(255) NOT NULL,
  code VARCHAR(10) NOT NULL,
  currency VARCHAR(255) NOT NULL,
  surface varchar(255),
  language varchar(255)
);

CREATE TABLE trips (
  id int AUTO_INCREMENT PRIMARY KEY,
  id_country int(11) NOT NULL,
  name varchar(255) NOT NULL,
  continent varchar(255) NOT NULL,
  price float(255, 2) NOT NULL
);
ALTER TABLE
  `trips`
ADD
  FOREIGN KEY (`id_country`) REFERENCES `countries`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO trip_questions VALUES 
    (1, 'email@example.com', 'Europa', 'Rodzaj', 'Opis'),
    (2, 'email2@example.com', 'Azja', 'Rodzaj wycieczki', 'Opis dla wycieczki');

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

INSERT INTO countries VALUES 
    (1, 'Polska', 'PL', 'Złoty', 312696, 'Polski'), 
    (2, 'Niemcy', 'GER', 'Euro', 357114, 'Niemiecki'), 
    (3, 'Holandia', 'NL', 'Euro', 41850, 'Holenderski'),
    (4, 'Turcja', 'TUR', 'Lira turecka', 783562, 'Turecki'),
    (5, 'Chiny', 'CH', 'Renminbi ', 9596960 , 'Chiński'),
    (6, 'Stany Zjednoczone', 'USA', 'Dolar ametykańki', 9833520 , 'Angielski'),
    (7, 'Austria', 'UT', 'Euro', 83871, 'Angielski');

INSERT INTO trips VALUES 
    (1, 1, 'Wycieczka Górska', 'Europa', 1800.50),
    (2, 4, 'Gorąca Plaża', 'Europa', 2100.79), 
    (3, 2, 'Brama Brandernburska', 'Europa', 1000), 
    (4, 3, 'Ciepła Holandia', 'Europa', 1200), 
    (5, 6, 'Kolorado', 'Ameryka Północna', 1500), 
    (6, 6, 'Alaska', 'Ameryka Północna', 1800),
    (7, 5, 'Everest', 'Azja', 1900.0),
    (8, 7, 'Alpy', 'Europa', 1400),
    (9, 7, 'Alpy (z przewodnikiem)', 'Europa', 2400),
    (10, 6, 'Kolorado (z przewodnikiem)', 'Ameryka Północna', 2100);