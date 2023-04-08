@extends('layouts.app')

    @section('content')
<section>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        {{ __('You are logged in!') }}
    </div>
    <div class="container-fluid bg-primary py-5 mb-5 page-header-fourniture">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">FOURNITURES ECOLES</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">EXTRA</a></li>
                            <li class="breadcrumb-item text-white " aria-current="page">FOURNITURES ECOLES</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> 
    <!-- About Start -->
    

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/fournitures.png" alt="" style="object-fit: cover;">
                    </div>
</br>
</br>
</br>
</br>
                    <h1 class="mb-4" id="scientigique">Primaire </h1>
                    <div class="wpb_wrapper">
			<ul>
<li title="" data-original-title="">CE1 (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/CE1.pdf">Télécharger</a>)</li>
<li title="" data-original-title="">CE2 (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/CE2.pdf">Télécharger</a>)</li>
<li title="" data-original-title="">CE3 (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/CE3.pdf">Télécharger</a>)</li>
<li title="" data-original-title="">CE4 (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/CE4.pdf">Télécharger</a>)</li>
<li title="" data-original-title="">CE5 (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/CE5.pdf">Télécharger</a>)</li>
<li title="" data-original-title="">CE6 (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/CE6.pdf">Télécharger</a>)</li>
</ul>

		</div>
                        
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">Collège </h1>
                    <div class="wpb_wrapper">
			            <ul>
                            <li title="" data-original-title="">1ère Collège (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/1COL.pdf">Télécharger</a>)</li>
                            <li title="" data-original-title="">2ème Collège (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/2COL.pdf">Télécharger</a>)</li>
                            <li title="" data-original-title="">3ème Collège (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/3COL.pdf">Télécharger</a>)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                   <h1 class="mb-4">Lycée</h1>
                    <div class="wpb_wrapper">
			            <p><strong>Tronc Commun:</strong></p>
                        <ul>
                        <li title="" data-original-title="">Tronc Commun BIOF (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/TC.pdf">Télécharger</a>)</li>
                        </ul>
                        <p><strong>1ère Baccalauréat:</strong></p>
                        <ul>
                        <li title="" data-original-title="">Sciences Economiques (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/1BAC_ECO.pdf">Télécharger)</a></li>
                        <li title="" data-original-title="">Sciences Expérimentales BIOF (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/1BAC_SC.pdf">Télécharger)</a></li>
                        <li>Sciences Mathématiques BIOF(<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/1BAC_SM.pdf">Télécharger</a>)</li>
                        </ul>
                        <p><strong>2ème Baccalauréat:</strong></p>
                        <ul>
                        <li>Sciences Economiques (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/2BAC_ECO.pdf">Télécharger</a> )</li>
                        <li title="" data-original-title="">Sciences physiques BIOF <a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/2BAC_PC.pdf">(Télécharger)</a></li>
                        <li>Sciences Mathématiques A BIOF (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/2BAC_A_SM.pdf">Télécharger</a>)</li>
                        <li title="" data-original-title="">Sciences Mathématiques B BIOF (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/2BAC_B_SM.pdf">Télécharger</a>)</li>
                        <li title="" data-original-title="">Sciences de la Vie et de la Terre BIOF (<a href="http://lesecolesihsane.com/wp-content/uploads/fourniturescolaire/2BAC_SVT.pdf">Télécharger</a>)</li>
                        </ul>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
  
        </div>
    </div>
    <!-- About End -->
    


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Accès Rapide</h4>
                    <a class="btn btn-link" href="">Acceuil</a>
                    <a class="btn btn-link" href="">Nos Cours</a>
                    <a class="btn btn-link" href="">A Propos</a>
                    <a class="btn btn-link" href="">Contact</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> Rue 123, Marrakech, Maroc</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+212 512 345678</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>MYSCHOOL@learn.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallerie</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">S'inscrire</h4>
                    <p>Recevez chaque semaine les derniers Learn. à suivre !</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Saisissez votre e-mail">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">S'inscrire</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="copyright">
                <div class="row">
                    <div>
                        &copy; <a class="border-bottom" href="#">MYSCHOOL. 2023</a>, tous les droits sont réservés.
                    </div>
                <!--<div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Acceuil</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!-- Testimonial End -->
@endsection