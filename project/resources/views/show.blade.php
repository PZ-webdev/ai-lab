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

    <div class="container">
        <h3 class="mt-5" id="wycieczki">Wycieczka</h3>
        <div class="cards d-flex row mt-3">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('storage/img/mk' . $trip->id . '.jpg') }}" class="card-img-top" alt="Kolorado" />
                    <div class="card-body">
                        <h5 class="card-title">{{ $trip->name }}</h5>
                        <p class="card-text">
                            Jest wyżynno-górzystym stanem, którego średnia wysokość nad
                            poziomem morza przekracza 2000 m. Najwyższy szczyt Kolorado,
                            Mount Elbert, wznosi się na 4399 m n.p.m. Zachodnią część stanu
                            zajmują Góry Skaliste i Wyżyna Kolorado, wschodnią – obszar
                            Wielkich Równin.
                        </p>
                    </div>
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
