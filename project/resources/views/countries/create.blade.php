@extends('includes.app')
@section('content')
    <div id="kraje" class="container mt-3 mb-5">
        <div class="row" style="margin-top: 100px;">
            <h1>Dodaj Kraj</h1>
        </div>
        <div class="row col-md-6">
            <form method="POST" action="{{ route('country.store') }}">
                @csrf
                <div class="form-group mb-2">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="code">Code</label>
                    <input id="code" name="code" type="text" class="form-control @error('code') is-invalid @enderror"
                        value="{{ old('code') }}">
                    @error('code')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="currency">currency</label>
                    <input id="currency" name="currency" type="text"
                        class="form-control @error('currency') is-invalid @enderror" value="{{ old('currency') }}">
                    @error('currency')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="surface">surface</label>
                    <input id="surface" name="surface" type="text"
                        class="form-control @error('surface') is-invalid @enderror" value="{{ old('surface') }}">
                    @error('surface')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="language">language</label>
                    <input id="language" name="language" type="text"
                        class="form-control @error('language') is-invalid @enderror" value="{{ old('language') }}">
                    @error('language')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <input type="submit" value="Wyślij" class="btn btn-primary">
            </form>
        </div>

    </div>
@endsection
