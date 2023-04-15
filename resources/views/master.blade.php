<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>@yield('titel')</title>
</head>

<body style="scroll:smoth;">
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary"             >
        <div class="container">
            <a class="navbar-brand" href="#">C D A L S</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto text-capitalize ">
                    <a class="nav-link p-lg-3 active" aria-current="page" href="#">Home</a>
                    <a class="nav-link p-lg-3 " href="#activités">activités</a>
                    <a class="nav-link p-lg-3 " href="#ateliers">Les ateliers</a>
                    <a class="nav-link p-lg-3 " href="#evenements">Événements</a>
                    <a class="nav-link p-lg-3 " href="#about">À propos</a>
                    <a class="nav-link p-lg-3 " href="#contact">Contact</a>
                    <a class="nav-link p-lg-3 " href="/inscrir">inscrir</a>
                </div>
            </div>
        </div>
    </nav>

{{-- <div class="container"> --}}
    {{-- <div class="mt-5 mb-5"> --}}
    @yield('content')
{{-- </div> --}}
{{-- </div> --}}

    <footer class="mt-5">
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
                        <li><a href="#"><i class="fa-solid fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-linkedin"></i></a></li>
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
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>&copy; 2023 Centre de développement de loisirs et scientifiques. Tous droits réservés.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
