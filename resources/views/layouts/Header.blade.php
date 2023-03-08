<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <!--<h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>-->
            <img class="logoimg" src="img/logo.png"></img>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{url('/')}}" class="nav-item nav-link  active">Acceuil</a>
                <a href="{{url('courses')}}" class="nav-item nav-link  ">Nos Ecole</a>
                 
                <div class="nav-item dropdown">
                    <a href="{{url('about')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">service</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{url('transport')}}" class="dropdown-item">TRANSPORT SCOLAIRE</a>
                        <a href="{{url('cafe')}}" class="dropdown-item">CAFÉTÉRIA – ICAFÉ</a>
                       
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{url('about')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">EXTRA</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{URL('associationdesparent')}}" class="dropdown-item">ASSOCIATION DES PARENTS D’ÉLÈVE</a>
                        <a href="{{url('bureaux')}}" class="dropdown-item">BUREAU DES ÉTUDIANTS</a>
                        <a href="{{URL('fourniture')}}" class="dropdown-item">Fournitures Scolaires 2022 – 2023</a>
                    </div>
                </div>
             
                <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{url('inscription')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Inscrire<i class="fa fa-arrow-right ms-3"></i></a>
            <a href="{{url('login')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Connexion<i class="fa fa-user ms-3"></i></a>
        </div>
    </nav>