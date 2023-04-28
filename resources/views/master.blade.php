<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css"
        integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <title>@yield('titel')</title>
</head>

<body style="scroll:smoth;">
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">C D A L S</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto text-capitalize ">
                    <a class="nav-link p-lg-3 active text-primary" aria-current="page" href="/#">Acceuil</a>
                    <a class="nav-link p-lg-3 " href="/#about">À propos</a>
                    <a class="nav-link p-lg-3 " href="/#activités">activités</a>
                    <a class="nav-link p-lg-3 " href="/#ateliers">Les ateliers</a>
                    <a class="nav-link p-lg-3 " href="/#evenements">Événements</a>
                    <a class="nav-link p-lg-3 " href="/#contact">Contact</a>
                    <a class="p-lg-3 btn btn-primary text-white" href="/inscrir">inscrire</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="mt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Nous contacter</h3>
                    <ul>
                        <li><i class="fa fa-map-marker"></i> 123 rue des Arts, Alger</li>
                        <li><i class="fa fa-phone"></i> +213 123 456 789</li>
                        <li><i class="fa fa-envelope"></i> info@cdls.com</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Suivez-nous</h3>
                    <ul class="social-media">
                        <i class="fa-brands fa-facebook"></i>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Inscription à la newsletter</h3>
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Entrez votre email...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">S'abonner</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <h3 class="mt-2 mb-2">Localisation : </h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12792.419703364221!2d2.9482025!3d36.7200412!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128faf8850f2ce0d%3A0xe04e843394305899!2sCenter%20Development%20Activities%20Scientists%20Ouledfayt%20Cdals!5e0!3m2!1sen!2sdz!4v1681857433561!5m2!1sen!2sdz"
                class="w-100" height="auto" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            {{-- </div> --}}
        </div>
        <div class="bottom-footer mt-4 mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="mb-0 text-center">&copy; 2023 Centre de développement de loisirs et scientifiques.
                            Tous droits réservés.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('https://code.jquery.com/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>
