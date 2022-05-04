@extends('includes.app')
@section('content')
    <div class="container mt-100">
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
@endsection
