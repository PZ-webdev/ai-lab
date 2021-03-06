<div class="container">
    <h3 class="mt-3" id="wycieczki">Najtańsze wycieczki</h3>
    <div class="cards d-flex row mt-3">
        @forelse ($trips as $trip)
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('storage/img/mk' . $trip->id . '.jpg') }}" class="card-img-top card-img-height"
                        alt="{{ $trip->name }}" />
                    <div class="card-body">
                        <h5 class="card-title">{{ $trip->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-danger">{{ $trip->price }}zł</h6>
                        <p class="card-text">
                            {{ Str::words($trip->description, 15, '...') }}
                        </p>
                        <a href="{{ route('trips.show', $trip) }}" class="btn btn-sm btn-outline-success">Więcej</a>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
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
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($allTrips as $trip)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><a href="{{ route('trips.show', $trip) }}">{{ $trip->name }}</a></td>
                        <td>{{ $trip->continent }}</td>
                        <td>{{ $trip->country->name }}</td>
                        <td>{{ $trip->period }} dni</td>
                        <td>{{ $trip->price }} zł</td>
                        @can('is-admin', $trip)
                            <td>
                                <a href="{{ route('trips.edit', $trip) }}" class="btn btn-sm btn-warning">Edytuj</a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('trips.destroy', $trip) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="confirm('Czy na pewno chcesz usunać wycieczkę?');">Usuń</button>
                                </form>
                            </td>
                        @endcan
                    </tr>
                @empty
                    <p>Brak wycieczek</p>
                @endforelse
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
