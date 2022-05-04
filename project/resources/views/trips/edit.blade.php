@extends('includes.app')
@section('content')
    <div id="trip" class="container mb-5 mt-100">
        <div class="row">
            <h1>Edytuj Wycieczkę: {{ $trip->name }}</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="{{ route('trips.update', $trip->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            value="{{ $trip->name }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <label for="">Kraj</label>
                        <select class="form-control" id="id_country" name="id_country">
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}"
                                    {{ $trip->id_country == $country->id ? 'selected' : '' }}>{{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-2">
                        <label for="continent">Continent</label>
                        <input id="continent" name="continent" type="text"
                            class="form-control @error('continent') is-invalid @enderror" value="{{ $trip->continent }}">
                        @error('continent')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <label for="period">period</label>
                        <input id="period" name="period" type="number"
                            class="form-control @error('period') is-invalid @enderror" value="{{ $trip->period }}">
                        @error('period')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-2">
                        <label for="price">price</label>
                        <input id="price" name="price" type="text" class="form-control @error('price') is-invalid @enderror"
                            value="{{ $trip->price }}">
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">
                        {{ $trip->description }}
                    </textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <input type="submit" value="Zapisz" class="btn btn-primary mt-3 mb-3">
                </form>
            </div>
            <div class="col-md-6">
                ZDJECIE
            </div>

        </div>
    </div>
@endsection
