@extends('master')
@section('content')
    <div class="container">
        <div class="text-center mb-5 mt-5">
            <h1 class="display-5">Rejoignez notre centre de développement d'activités de loisirs et scientifiques !
            </h1>
            <p class="lead"> Découvrez de nouveaux passe-temps, développez des compétences et rencontrez des personnes
                partageant les mêmes centres d'intérêt dans notre centre de loisirs et scientifique. Inscrivez-vous dès
                maintenant pour une vie plus enrichissante et passionnante !</p>
        </div>
        <form action="" method="post">
            @csrf
            <div class="row mt-2 mb-2">
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom :</label>
                    <input type="text" id="nom" name="nom" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="prenom" class="form-label">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" class="form-control">
                </div>
            </div>
            <label for="email" class="form-label">Email :</label>
            <input type="email" name="email" id="email" class="form-control">
            <div class="row mt-2 mb-2">
                <div class="col-md-6">
                    <label for="date-naissance" class="form-label">Date de Naissance : </label>
                    <input type="date" name="date_naissance" id="date-naissance" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="lieu" class="form-label">Lieu de Naissance :</label>
                    <input type="text" name="lieu_naissance" id="lieu" class="form-control">
                </div>
            </div>
            <label for="numero" class="form-label">Numero Téléphone : </label>
            <input type="tel" name="numero" id="numero" class="form-control">
            <label for="addres" class="form-label mt-2 mb-2">Votre Adresse :</label>
            <input type="text" class="form-control" id="addres" name="addres">
            <div class="mt-5 mb-2 me-5 d-flex justify-content-end ">
                <input type="submit" value="S'inscrir" class="btn btn-primary p-3 pe-5 ps-5">
            </div>
        </form>
    </div>
@endsection
