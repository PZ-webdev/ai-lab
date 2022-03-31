<?php
include('PDOConnect.php');

$sql = "SELECT * FROM trip_offer";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$trips = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Wycieczki Górskie</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        body {
            font-family: "Rubik", sans-serif;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Wycieczki Górskie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php#carouselExampleCaptions">Start</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#wycieczki">Wycieczki</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#prices">Cennik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about">Info</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Szukaj ..." aria-label="Search" />
                    <button class="btn btn-outline-primary" type="submit">
                        Szukaj
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/mc1.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Niesamowite widoki!</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/mc2.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Niesamowite przeżycia!</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/mc3.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Piękno natury!</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <h3 class="mt-3" id="wycieczki">Wycieczki</h3>
        <div class="cards d-flex row mt-3">
            <?php foreach ($trips as $trip) : ?>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="assets/img/mk<?= $trip['id'] ?>.jpg" class="card-img-top" alt="<?= $trip['name'] ?>" />
                        <div class="card-body">
                            <h5 class="card-title"><?= $trip['name'] ?></h5>
                            <p class="card-text">
                                <?= $trip['description'] ?>
                            </p>
                            <a href="#" class="btn btn-sm btn-outline-success">Więcej ...</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
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
                    <?php foreach ($trips as $trip) : ?>
                        <tr>
                            <th scope="row"><?= $trip['id'] ?></th>
                            <td><?= $trip['name'] ?></td>
                            <td><?= $trip['continent'] ?></td>
                            <td><?= $trip['country'] ?></td>
                            <td><?= $trip['period'] ?></td>
                            <td><?= $trip['price'] ?>PLN</td>
                        </tr>
                    <?php endforeach; ?>
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
                <form action="trip_page_form.php" method="post">
                    <h3>Zapytanie o ofertę</h3>

                    <div class="mb-3">
                        <label for="" class="form-label">Adres E-mail: </label>
                        <input type="email" class="form-control" name="email" id="" placeholder="email@example.com" />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Rodzaj oferty: </label>
                        <input type="text" class="form-control" name="type" id="" placeholder="" />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kontynet: </label>
                        <select class="form-select" name="continent" multiple aria-label="multiple select example">
                            <option value="Azja">Azja</option>
                            <option value="Europa">Europa</option>
                            <option value="Ameryka Północna">Ameryka Północna</option>
                            <option value="Ameryka Południowa">Ameryka Południowa</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Komentarz</label>
                        <textarea class="form-control" name="description" id="" rows="3"></textarea>
                    </div>
                    <div class="mb-3" style="float: right">
                        <button class="btn btn-primary" type="submit">Wyślij</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light">
        <p class="text-center">&copy; Wycieczki górskie – 2022</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>