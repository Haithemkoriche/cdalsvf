@extends('admin.layout')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">C D A L S</a>
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
                        <h5 class="card-title"> <i class="fas fa-users"></i>  Membres</h5>
                        <h2 class="card-text d-flex justify-content-between"> {{ $membersCount }} <a href="" class="text-white "><i class="fas fa-arrow-right"></i></a></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-users"></i>  Employés</h5>
                        <h2 class="card-text d-flex justify-content-between">400 <a href="" class="text-white "><i class="fas fa-arrow-right"></i></a></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-list"></i>  Activités</h5>
                        <h2 class="card-text d-flex justify-content-between">{{ $activitiesCount }} <a href="" class="text-white "><i class="fas fa-arrow-right"></i></a></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-dark">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-tools"></i>  Ateliers</h5>
                        <h2 class="card-text d-flex justify-content-between">{{ $ateliersCount }} <a href="" class="text-white "><i class="fas fa-arrow-right"></i></a></h2>
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
        {{-- <div class="dashboard-card">
            <h3>Carousel</h3>
            <p>Ajouter un élément</p>
            <a href="{{ route('carousel.create') }}" class="btn btn-primary">Ajouter au carousel</a>
        </div> --}}

    @endsection
