@extends('master')
@section('titel')
    CDALS
@endsection
@section('content')
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active " data-bs-interval="3000">
                <img src="{{ asset('images/1.jpg') }}" class="d-block w-100 blur carousel-img" alt="...">
                <div class="carousel-caption">
                    <h1>Centre de développement d'activités de divertissement scientifique</h1>
                    <p>C'est une maison de la science et de la connaissance gérée entièrement par l'Association des jeunes
                        scientifiques amateurs et encadrant un groupe de jeunes ambitieux.</p>
                    <div class="d-grid row-gap-3"><a href="/inscrir" class="btn btn-primary p-2">Inscrir</a><a
                            href="#contact" class="btn btn-light p-2">Contacter</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/c-2.jpg') }}" class="d-block w-100 blur carousel-img" alt="...">
                <div class="carousel-caption">
                    <h1>Centre de développement d'activités de divertissement scientifique</h1>
                    <p>C'est une maison de la science et de la connaissance gérée entièrement par l'Association des jeunes
                        scientifiques amateurs et encadrant un groupe de jeunes ambitieux.</p>
                    <div class="d-grid row-gap-3"><a href="/inscrir" class="btn btn-primary p-2">Inscrir</a><a
                            href="#contact" class="btn btn-light p-2">Contacter</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/c-3.jpg') }}" class="d-block w-100 blur carousel-img" alt="...">
                <div class="carousel-caption">
                    <h1>Centre de développement d'activités de divertissement scientifique</h1>
                    <p>C'est une maison de la science et de la connaissance gérée entièrement par l'Association des jeunes
                        scientifiques amateurs et encadrant un groupe de jeunes ambitieux.</p>
                    <div class="d-grid row-gap-3"><a href="/inscrir" class="btn btn-primary p-2">Inscrir</a><a
                            href="#contact" class="btn btn-light p-2">Contacter</a>
                    </div>
                </div>
            </div>
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
    <!-- start activities -->
    <section id="activités">
        <div class="container mb-6 mt-6 pt-5">
            <h2 style="text-align:center" class="mb-5 mt-5">Nos Activités </h2>
            <div class="mt-5 row column-gap-auto row-gap-5 ">
                @foreach ($activities as $activity)
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img src="images/{{ $activity->image }}" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $activity->title }}</h5>
                                <p class="card-text">{{ $activity->description }}</p>
                                <a href="#" class="btn btn-primary">En savoir plus</a>
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
                <div class="col-lg-4 col-md-6">
                    <div class="atelier">
                        <img src="{{ asset('images/c-2.jpg') }}" alt="Atelier 1">
                        <h3>Atelier 1</h3>
                        <p>Description de l'atelier 1</p>
                        <a href="#" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="atelier">
                        <img src="{{ asset('images/c-2.jpg') }}" alt="Atelier 2">
                        <h3>Atelier 2</h3>
                        <p>Description de l'atelier 2</p>
                        <a href="#" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="atelier">
                        <img src="{{ asset('images/c-2.jpg') }}" alt="Atelier 3">
                        <h3>Atelier 3</h3>
                        <p>Description de l'atelier 3</p>
                        <a href="#" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end ateliers -->
    <!-- start evenement -->
    <section class="evenements" id="evenements">
        <div class="container">
            <h2 style="text-align:center" class="pt-5">Événements à venir</h2>
            <div class="evenements-liste">
                <div class="evenement">
                    <img src="{{ asset('images/c-2.jpg') }}" alt="Événement 1">
                    <h3>Titre de l'événement 1</h3>
                    <p>Date et heure de l'événement 1</p>
                </div>
                <div class="evenement">
                    <img src="{{ asset('images/c-2.jpg') }}" alt="Événement 2">
                    <h3>Titre de l'événement 2</h3>
                    <p>Date et heure de l'événement 2</p>
                </div>
                <div class="evenement">
                    <img src="{{ asset('images/c-2.jpg') }}" alt="Événement 3">
                    <h3>Titre de l'événement 3</h3>
                    <p>Date et heure de l'événement 3</p>
                </div>
            </div>
            <a href="evenements.html" class="btn"><u>Voir tous les événements</u></a>
        </div>
    </section>

    <!-- end evenement -->
    <!-- about -->
    <section id="about">
        <div class="container">
            <h2 style="text-align:center">À propos</h2>
            <img src="{{ asset('images/rouina.jpg') }}" class="rounded mx-auto d-block img-fluid" alt=""
                srcset="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, libero at auctor congue, enim tellus
                venenatis magna, in venenatis lectus tellus eu sapien. Proin quis neque rutrum, lobortis felis eu,
                vestibulum nibh. Nullam interdum sem ac nunc sodales, nec finibus justo sagittis.</p>
            <a href="about.html" class="btn btn-primary">En savoir plus</a>
        </div>
    </section>

    <!-- end about -->
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
