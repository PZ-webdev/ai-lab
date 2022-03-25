<?php

Class Trip
{

    public function __construct(
        public int $id,
        public string $name,
        public string $continent,
        public string $country,
        public string $period,
        public string $description,
        public float $price
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->continent = $continent;
        $this->country = $country;
        $this->period = $period;
        $this->description = $description;
        $this->price = $price;
    }
    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the value of continent
     *
     * @return string
     */
    public function getContinent(): string
    {
        return $this->continent;
    }

    /**
     * Get the value of country
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Get the value of period
     *
     * @return string
     */
    public function getPeriod(): string
    {
        return $this->period;
    }

    /**
     * Get the value of description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Get the value of price
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    public function __toString()
    {
        return "ID: " . $this->id . "\nNazwa Wycieczki: " . $this->name . "\nCena: " . $this->price;
    }
}

$trip1 = new Trip(1, "Kolorado", "Ameryka Północna", "USA", "7 dni", " Jest wyżynno-górzystym stanem, którego średnia wysokość nad
poziomem morza przekracza 2000 m. Najwyższy szczyt Kolorado,
Mount Elbert, wznosi się na 4399 m n.p.m. Zachodnią część stanu
zajmują Góry Skaliste i Wyżyna Kolorado, wschodnią – obszar
Wielkich Równin.", 1500.0);

$trip2 = new Trip(2, "Alaska", "Ameryka Północna", "USA", "7 dni", " Pasmo górskie w Ameryce Północnej w stanie Alaska. Jest to
najwyższa część łańcucha Kordylierów z najwyższym szczytem
kontynentu – Denali (McKinley) (6194 m n.p.m.). Długość ok. 1000
km. Zbudowane z granitów i ze skał osadowych.", 1600.0);

$trip3 = new Trip(3, "Everest", "Azja", "Chiny", "7 dni", " Najwyższy szczyt Ziemi (8848 m n.p.m., podaje się też wysokość
8844 (pomiary chińskie) lub 8850 (pomiary amerykańskie)),
ośmiotysięcznik położony w Himalajach Wysokich (Centralnych), na
granicy Nepalu i Chińskiej Republiki Ludowej (Tybetu).", 1800.0);

$trip4 = new Trip(4, "Alpy", "Europa", "Austria", "7 dni", " Najwyższy łańcuch górski Europy, ciągnący się łukiem od wybrzeża
Morza Śródziemnego w okolicy Savony po dolinę Dunaju w okolicach
Wiednia. Łańcuch ma długość około 1200 km, szerokość od 150 do
250 km i zajmuje powierzchnię około 220 tys. km².", 1200.0);

$trips = array($trip1, $trip2, $trip3, $trip4);
// $trips = array();