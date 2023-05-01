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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Membres</h5>
                        <h2 class="card-text">{{ $membersCount }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Employés</h5>
                        <h2 class="card-text">400</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title">Activités</h5>
                        <h2 class="card-text">{{ $activitiesCount }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-dark">
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
                        <h5 class="card-title"> <i class="fas fa-calendar-alt"></i>Événements</h5>
                        <h2 class="card-text">{{ $evenementsCount }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-cogs"></i> Options
                        </h5>
                        <a href="{{ route('activite.index') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Ajouter une activité
                        </a>
                        <a href="{{ route('atelier.index') }}" class="btn btn-success">
                            <i class="fas fa-plus"></i> Ajouter un atelier
                        </a>
                        <a href="{{ route('evenement.index') }}" class="btn btn-info">
                            <i class="fas fa-plus"></i> Ajouter un événement
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
