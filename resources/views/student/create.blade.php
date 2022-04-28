@extends('layouts.app')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-12 pt-2">  
                <a href="{{ route('student') }}" class="btn btn-outline-dark btn-sm float-end">Retourner</a>             
                <div class="mt-5 pl-4 pr-4 pb-4">
                    <h1 class="display-4">Créer un(e) nouvel(le) étudiant(e)</h1>
                    <p>Remplissez et soumettez ce formulaire</p>
                    <hr>
                    <form method="post">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Nom</label>
                                <input type="text" id="name" class="form-control" name="name"
                                placeholder="Entrer le nom d'étudiant(e)" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="address">Adresse</label>
                                <input type="text" id="address" class="form-control" name="address"
                                placeholder="Entrer l'adresse d'étudiant(e)" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="phone">Téléphone</label>
                                <input type="text" id="phone" class="form-control" name="phone"
                                placeholder="Entrer le téléphone d'étudiant(e)" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="email">Courriel</label>
                                <input type="text" id="email" class="form-control" name="email"
                                placeholder="Entrer le courriel d'étudiant(e)" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="date_birthday">Date de naissance</label>
                                <input type="text" id="date_birthday" class="form-control" name="date_birthday"
                                placeholder="Entrer la date de naissance d'étudiant(e)" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                               <label for="city">Ville</label>
                               <select class="form-select" aria-label="Default select example" name="city" id="city">
                               <option>Sélectionnez la ville d'étudiant(e)</option>
                                @foreach($city as $city)
                                <option value="{{ $city->id }}">{{ $city->city }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="control-group text-center">
                                <button class="btn btn-dark">
                                    Ajouter un(e) étudiant(e)
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection