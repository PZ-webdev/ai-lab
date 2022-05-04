@extends('includes.app')
@section('title', 'Kraj: ' . $country->name . ' - ')
@section('content')
    <div id="kraje" class="container mt-3 mt-100">
        <div class="jumbotron">
            <h1 class="display-4">{{ $country->name }}</h1>

            <div class="row">
                <table class="table table-bordered col-md-6" style="width: 33%;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Opis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Kod</th>
                            <td>{{ $country->code }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Waluta</th>
                            <td>{{ $country->currency }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Powierzchnia</th>
                            <td>{{ $country->surface }} km²</td>
                        </tr>
                        <tr>
                            <th scope="row">Język</th>
                            <td>{{ $country->language }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
