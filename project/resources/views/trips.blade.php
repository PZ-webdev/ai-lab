<!DOCTYPE html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Wycieczki Górskie</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        body {
            font-family: "Rubik", sans-serif;
        }

    </style>
</head>

<body>

    @include('includes.nav')

    @include('includes.header')

    <div class="container">
        <h3 class="mt-3" id="wycieczki">Wycieczki</h3>
        <div class="cards d-flex row mt-3">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('storage/img/mk1.jpg') }}" class="card-img-top" alt="Kolorado" />
                    <div class="card-body">
                        <h5 class="card-title">Kolorado</h5>
                        <p class="card-text">
                            Jest wyżynno-górzystym stanem, którego średnia wysokość nad
                            poziomem morza przekracza 2000 m. Najwyższy szczyt Kolorado,
                            Mount Elbert, wznosi się na 4399 m n.p.m. Zachodnią część stanu
                            zajmują Góry Skaliste i Wyżyna Kolorado, wschodnią – obszar
                            Wielkich Równin.
                        </p>
                        <a href="#" class="btn btn-sm btn-outline-success">Więcej ...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('storage/img/mk2.jpg') }}" class="card-img-top" alt="Alaska" />
                    <div class="card-body">
                        <h5 class="card-title">Alaska</h5>
                        <p class="card-text">
                            Pasmo górskie w Ameryce Północnej w stanie Alaska. Jest to
                            najwyższa część łańcucha Kordylierów z najwyższym szczytem
                            kontynentu – Denali (McKinley) (6194 m n.p.m.). Długość ok. 1000
                            km. Zbudowane z granitów i ze skał osadowych.
                        </p>
                        <a href="#" class="btn btn-sm btn-outline-success">Więcej ...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('storage/img/mk3.jpg') }}" class="card-img-top" alt="Everest" />
                    <div class="card-body">
                        <h5 class="card-title">Everest</h5>
                        <p class="card-text">
                            Najwyższy szczyt Ziemi (8848 m n.p.m., podaje się też wysokość
                            8844 (pomiary chińskie) lub 8850 (pomiary amerykańskie)),
                            ośmiotysięcznik położony w Himalajach Wysokich (Centralnych), na
                            granicy Nepalu i Chińskiej Republiki Ludowej (Tybetu).
                        </p>
                        <a href="#" class="btn btn-sm btn-outline-success">Więcej ...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('storage/img/mk4.jpg') }}" class="card-img-top" alt="Alpy" />
                    <div class="card-body">
                        <h5 class="card-title">Alpy</h5>
                        <p class="card-text">
                            Najwyższy łańcuch górski Europy, ciągnący się łukiem od wybrzeża
                            Morza Śródziemnego w okolicy Savony po dolinę Dunaju w okolicach
                            Wiednia. Łańcuch ma długość około 1200 km, szerokość od 150 do
                            250 km i zajmuje powierzchnię około 220 tys. km².
                        </p>
                        <a href="#" class="btn btn-sm btn-outline-success">Więcej ...</a>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="mt-3" id="prices">Cennik</h3>
        <div class="prices">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nazwa wycieczki</th>
                        <th scope="col">Kontynent</th>
                        <th scope="col">Kraj</th>
                        <th scope="col">Okres</th>
                        <th scope="col">Cena</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kolorado</td>
                        <td>Ameryka Północna</td>
                        <td>USA</td>
                        <td>7 dni</td>
                        <td>1500 PLN</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Alaska</td>
                        <td>Ameryka Północna</td>
                        <td>USA</td>
                        <td>7 dni</td>
                        <td>1600 PLN</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Everest</td>
                        <td>Azja</td>
                        <td>Chiny</td>
                        <td>7 dni</td>
                        <td>1800 PLN</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Alpy</td>
                        <td>Europa</td>
                        <td>Austria</td>
                        <td>7 dni</td>
                        <td>1200 PLN</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="about row mt-4">
            <div class="col-md-6 col-sm-12">
                <h3 id="about">O naszych wycieczkach...</h3>
                <p>
                    Film ze zdjęciami z podróży naszych klientów. Być może Państwa
                    zdjęcia z wyprawy trafią tu za niedługo!
                </p>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/t7ZpJ7wWlZI?rel=0" title="YouTube video"></iframe>
                </div>
            </div>
            <div class="mt-3 col-md-6 col-sm-12">
                <h3>Zapytanie o ofertę</h3>

                <div class="mb-3">
                    <label for="" class="form-label">Adres E-mail: </label>
                    <input type="email" class="form-control" id="" placeholder="adres.email@example.com" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Rodzaj oferty: </label>
                    <input type="text" class="form-control" id="" placeholder="" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kontynet: </label>
                    <select class="form-select" multiple aria-label="multiple select example">
                        <option value="1">Azja</option>
                        <option value="2">Europa</option>
                        <option value="3">Ameryka Północna</option>
                        <option value="3">Ameryka Południowa</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Komentarz</label>
                    <textarea class="form-control" id="" rows="3"></textarea>
                </div>
                <div class="mb-3" style="float: right">
                    <button class="btn btn-primary">Wyślij</button>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
