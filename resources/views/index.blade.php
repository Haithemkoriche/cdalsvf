@extends('master')
@section('titel')
    CDALS
@endsection
@section('content')
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($slides as $key => $slide)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="3000">
                    <img src="images/slide/{{ $slide->image }}" class="d-block w-100 blur carousel-img" alt="...">
                    <div class="carousel-caption">
                        <h1>{{ $slide->title }}</h1>
                        <p>{{ $slide->description }}</p>
                        <div class="d-grid row-gap-3">
                            <a href="/inscrir" class="btn btn-primary p-2">Inscrire</a>
                            <a href="#contact" class="btn btn-light p-2">Contacter</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- about -->
    <section id="about">
        <div class="container">
            <h2 style="text-align:center">À propos</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/rouina.jpg') }}" class="rounded mx-auto d-block img-fluid" alt=""
                        srcset="">
                </div>
                <div class="col-md-6 m-md-auto mt-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, libero at auctor congue, enim
                        tellus
                        venenatis magna, in venenatis lectus tellus eu sapien. Proin quis neque rutrum, lobortis felis eu,
                        vestibulum nibh. Nullam interdum sem ac nunc sodales, nec finibus justo sagittis.</p>
                    <a href="about.html" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>

    <!-- end about -->
    <!-- start activities -->
    <section id="activités">
        <div class="container mb-5 mt-5 pt-5">
            <h2 style="text-align:center" class="mb-5 mt-5">Nos Activités </h2>
            <div class="mt-5 row column-gap-auto row-gap-5 ">
                @foreach ($activities as $activity)
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <img src="{{ Storage::url($activity->image) }}" class="card-img-top img-fluid h-50" alt="...">
                            <div class="card-body d-md-flex flex-column">
                                <h5 class="card-title">{{ $activity->title }}</h5>
                                <p class="card-text">{{ $activity->description }}</p>
                                <a href="#" class="btn btn-primary mt-auto">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
    <!-- end activities -->
    <!-- start ateliers -->
    <section id="ateliers">
        <div class="container mb-5 mt-5">
            <h2 style="text-align:center" class="mb-5 mt-5">Les ateliers proposés</h2>
            <div class="row column-gap-auto">
                @foreach ($ateliers as $atelier)
                <div class="col-lg-4 col-md-6">
                    <div class="atelier">
                        <img src="{{ Storage::url($atelier->image) }}" alt="Atelier 1">
                        <h3>{{ $atelier->title }}</h3>
                        <p>{{ $atelier->description }}</p>
                        <a href="#" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- end ateliers -->
    <!-- start evenement -->
    <section class="evenements" id="evenements">
        <div class="container">
            <h2 style="text-align:center" class="pt-5">Événements à venir</h2>
            <div class="evenements-liste">
                @foreach ($evenements as $evenement)
                <div class="evenement">
                    <img src="{{ Storage::url($evenement->image) }}" alt="Événement 1">
                    <h3>{{ $evenement->title }}</h3>
                    <p>{{ $evenement->description }}</p>
                </div>
                @endforeach
            </div>
            <a href="evenements.html" class="btn"><u>Voir tous les événements</u></a>
        </div>
    </section>

    <!-- end evenement -->
    <!-- contact -->
    <section id="contact">
        <div class="container">
            <h2 style="text-align:center">Contact</h2>
            <form action="{{ Route('contact.store') }}" method="POST">
                {{-- @method('PUT') --}}
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" name="contact_name" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Adresse email</label>
                    <input type="email" class="form-control" id="email" name="contact_email" required>
                </div>
                <div class="form-group">
                    <label for="contact-phone" class="form-label">Numero telephone :</label>
                    <input type="tel" name="contact_phone" id="contact-phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="contact_message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </section>

    <!-- end contact -->
@endsection
