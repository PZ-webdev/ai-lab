@extends('includes.app')
@section('content')
    @include('includes.header')

    <div id="kraje" class="container mt-3 mb-5">
        <div class="row" style="margin-top: 100px;">
            <h1>Kraje</h1>
        </div>
        <div class="row">
            <a href="{{ route('country.create') }}" class="link">Dodaj nowy kraj</a>
        </div>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nazwa</th>
                    <th scope="col">Kod</th>
                    <th scope="col">Waluta</th>
                    <th scope="col">Powierzchnia</th>
                    <th scope="col">Język</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($countries as $country)
                    <tr>
                        <th scope="row">
                        <th href="{{ route('country.show', $country) }}" class="link text-dark">{{ $country->id }}</a>
                        </th>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->code }}</td>
                        <td>{{ $country->currency }}</td>
                        <td>{{ $country->area }} km²</td>
                        <td>{{ $country->language }}</td>
                        @can('is-admin', $country)
                            <td>
                                <a href="{{ route('country.edit', $country) }}" class="btn btn-sm btn-warning">Edytuj</a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('country.destroy', $country) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="confirm('Czy na pewno chcesz usunać kraj z dostępnymi wycieczkami w tym kraju?');">Usuń</button>
                                </form>
                            </td>
                        @endcan
                    </tr>
                @empty
                    <tr>
                        <th scope="row" colspan="6">Brak krajów.</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
