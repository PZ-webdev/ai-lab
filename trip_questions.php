<?php
include('PDOConnect.php');

if (isset($_GET['search']) && $_GET['search'] != '') {
    $search = $_GET['search'];
    $sql = "SELECT * FROM trip_questions WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$search]);
} else {
    $sql = "SELECT * FROM trip_questions";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}

$i = 0;
?>

<!DOCTYPE html>
<html lang="en">

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
            <a class="navbar-brand" href="index.html">Wycieczki Górskie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html#carouselExampleCaptions">Start</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#wycieczki">Wycieczki</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#prices">Cennik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#about">Info</a>
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

    <div class="container" style="margin-top: 100px;">

        <form action="trip_questions.php" method="get">
            <input type="text" name="search" class="form-control" placeholder="Wyszukaj po adresie e-mail.." value="<?= $search ?? '' ?>">
            <button type="submit" class="btn btn-sm btn-primary mt-2">Szukaj</button>
            <a href="trip_questions.php" class="btn btn-sm btn-danger mt-2">Reset</a>
        </form>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Kontynent</th>
                    <th scope="col">Rodzaj</th>
                    <th scope="col">Komentarz</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch()) {
                    $i++; ?>
                    <tr>
                        <th scope="row"><?= $i; ?>.</th>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['continent']; ?></td>
                        <td><?= $row['type']; ?></td>
                        <td><?= $row['description']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


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