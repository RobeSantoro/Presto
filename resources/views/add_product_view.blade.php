@extends('layouts.app')
@section('content')

<div class="container pt-custom">
    <div class="row justify-content-center">

        <div id="ContactForm" class="col-12 text-center align-self-end">

            <h1 class="pb-5">Pubblica Annuncio</h1>

            <div class="card">
                <div class="card-body">

                    <p class="text-left">Aggiungi il titolo ed una breve descrizione del prodotto</p>

                    {{-- FORM --}}
                    <form method="POST" action="{{ route('publish_product_route') }}">
                        @csrf

                        <label class="float-left mt-3 mb-0 mx-1" for="exampleFormControlSelect1">Nome Prodotto</label>
                        <input class="form-control" type="text" placeholder="Inserisci Nome Prodotto" name="product-name" value="{{ old('name') }}">

                        <label class="float-left mt-3 mb-0 mx-1" for="exampleFormControlSelect1">Descrizione Prodotto</label>
                        <input class="form-control" type="text" placeholder="Inserisci Cognome" name="product-description" value="{{ old('surname') }}">

{{--                    <div class="form-group">
                            <label class="gray float-left mt-3 mb-0 ml-2" for="CategorySelector">Seleziona Categoria</label>
                            <select class="form-control" id="CategorySelector">
                                <option id="All">Tutte le categorie</option>
                                <option id="Motori">Motori</option>
                                <option id="Market">Market</option>
                                <option id="Immobili">Immobili</option>
                                <option id="Lavoro">Lavoro</option>
                            </select>
                        </div> --}}

                        <button type="submit" class="btn btn-primary mt-5 px-5">Pubblica</button>

                    </form>
                    {{-- FORM --}}
                </div>
            </div>

        </div>
    </div>

</div>





@endsection