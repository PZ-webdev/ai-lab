<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="border-bottom: 1px solid rgb(66, 66, 66);">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('trips.index')}}">Wycieczki Górskie</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('trips.index')}}">Wycieczki</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('country.index')}}">Kraje</a>
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
