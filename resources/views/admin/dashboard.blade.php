@extends('admin.layout')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Membres</h5>
                        <h2 class="card-text">{{ $membersCount }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Employés</h5>
                        {{-- <h2 class="card-text">{{ $employeesCount }}</h2> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Activités</h5>
                        <h2 class="card-text">{{ $activitiesCount }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ateliers</h5>
                        <h2 class="card-text">{{ $ateliersCount }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Événements</h5>
                        <h2 class="card-text">{{ $evenementsCount }}</h2>
                    </div>
                </div>
            </div>
            <!-- Ajouter une activité -->
            <div class="col-md-6">
                <h2>Ajouter une activité</h2>
                <form action="{{ route('ajouter_activite') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titre :</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description :</label>
                        <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image :</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>

            <!-- Ajouter un atelier -->
            <div class="col-md-6">
                <h2>Ajouter un atelier</h2>
                <form action="{{ route('ajouter_atelier') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="atelier_title">Titre :</label>
                        <input type="text" class="form-control" id="atelier_title" name="atelier_title" required>
                    </div>
                    <div class="form-group">
                        <label for="atelier_description">Description :</label>
                        <textarea class="form-control" id="atelier_description" name="atelier_description" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="atelier_image">Image :</label>
                        <input type="file" class="form-control" id="atelier_image" name="atelier_image" accept="image/*"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>

            <!-- Ajouter un événement -->
            <div class="col-md-6">
                <h2>Ajouter un événement</h2>
                <form action="{{ route('ajouter_evenement') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="evenement_title">Titre :</label>
                        <input type="text" class="form-control" id="evenement_title" name="evenement_title" required>
                    </div>
                    <div class="form-group">
                        <label for="evenement_description">Description :</label>
                        <textarea class="form-control" id="evenement_description" name="evenement_description" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="evenement_image">Image :</label>
                        <input type="file" class="form-control" id="evenement_image" name="evenement_image"
                            accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        @endsection
