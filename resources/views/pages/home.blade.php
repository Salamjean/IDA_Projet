@extends('layouts.template')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ida Internationale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!-- jQuery et Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
  <div>
    
    <!-- banner-section -->
    <section class="banner-section style-five">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ asset('assetsHome/assets/images/banner/banner-13.jpg')}})"></div>
                <div class="auto-container">
                    <div class="content-box centred">
                        <h5>Suivez le bon chemin</h5>
                        <h1>Stratégie efficace avec <br />Assistance financière</h1>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn">Comment pouvons-nous vous aider</a>
                            <a href="index.html" class="user-btn"><i class="far fa-user"></i><span>Trouver un consultant</span></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ asset('assetsHome/assets/images/banner/banner-14.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5>Vers un avenir radieux</h5>
                        <h1>Expérience client optimisée <br />Parcours</h1>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn style-two">Comment nous aidons</a>
                            <a href="index" class="banner-btn-two">Trouver un consultant</a>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ asset('assetsHome/assets/images/banner/banner-15.jpg')}})"></div>
                <div class="auto-container">
                    <div class="content-box centred">
                        <h1>Créez de meilleures stratégies <br />et des avantages pour vous</h1>
                        <ul class="list-item clearfix">
                            <li>.&nbsp;<a href="index.html">Expérimenté</a>&nbsp;.&nbsp;</li>
                            <li><a href="index.html">Spécialisé</a>&nbsp;.&nbsp;</li>
                            <li><a href="index.html">Professionnel</a>&nbsp;.&nbsp;</li>
                        </ul>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn">Comment pouvons-nous vous aider</a>
                            <a href="index" class="user-btn style-two"><i class="far fa-user"></i><span>Trouver un consultant</span></a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

   <!-- feature section -->
   <section class="feature-style-four">
    <div class="fluid-container">
        <div class="inner-content clearfix">
            <div class="feature-block-four">
                <div class="inner-box">
                    <div class="hidden-icon"><i class="fas fa-search"></i></div>
                    <div class="inner">
                        <div class="icon-box"><i class="fas fa-search"></i></div>
                        <h3>Meilleure Analyse Financière</h3>
                        <p>Acepteur sintas haecat ipsum sed dui proident suntup.</p>
                    </div>
                </div>
            </div>
            <div class="feature-block-four">
                <div class="inner-box">
                    <div class="hidden-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <div class="inner">
                        <div class="icon-box"><i class="fas fa-file-invoice-dollar"></i></div>
                        <h3>Planification Fiscale Gratuite</h3>
                        <p>Acepteur sintas haecat ipsum sed dui proident suntup.</p>
                    </div>
                </div>
            </div>
            <div class="feature-block-four">
                <div class="inner-box">
                    <div class="hidden-icon"><i class="fas fa-chart-line"></i></div>
                    <div class="inner">
                        <div class="icon-box"><i class="fas fa-chart-line"></i></div>
                        <h3>Notre Trading d'Investissement</h3>
                        <p>Acepteur sintas haecat ipsum sed dui proident suntup.</p>
                    </div>
                </div>
            </div>
            <div class="feature-block-four">
                <div class="inner-box">
                    <div class="hidden-icon"><i class="fas fa-bullhorn"></i></div>
                    <div class="inner">
                        <div class="icon-box"><i class="fas fa-bullhorn"></i></div>
                        <h3>Consultation & Gestion</h3>
                        <p>Acepteur sintas haecat ipsum sed dui proident suntup.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>
   <!-- feature section end -->


 <!-- about-style-four -->
 <section class="about-style-four">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div id="content_block_13">
                    <div class="content-box-about">
                        <div class="sec-title style-four right">
                            <h5>À propos de Fionca</h5>
                            <h2>Planification du futur numérique basée sur des faits réels</h2>
                        </div>
                        <div class="text">
                            <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh deris luptate velit excepteur duis aute irure dolor voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod.</p>
                            <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                        </div>
                        <div class="progress-content" style="display: flex; justify-content: space-between;">
                            <div class="progress-box">
                                <p>Planification stratégique</p>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="65%"></div>
                                    <span class="count-text">65%</span>
                                </div>
                            </div>
                            <div class="progress-box">
                                <p>Analyse d'entreprise</p>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="90%"></div>
                                    <span class="count-text">90%</span>
                                </div>
                            </div>
                            <div class="progress-box">
                                <p>Optimisation des affaires</p>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="50%"></div>
                                    <span class="count-text">50%</span>
                                </div>
                            </div>
                            <div class="progress-box">
                                <p>Gestion fiscale</p>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="70%"></div>
                                    <span class="count-text">70%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div id="image_block_four">
                    <div class="image-box">
                        <div class="pattern-layer" style="background-image: url({{ asset('assetsHome/assets/images/shape/shape-23.png')}});"></div>
                        <figure class="image wow slideInRight animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <img src="assets/images/resource/about-3.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-four end -->
 
    <!-- funfact-style-four -->
    <section class="funfact-style-four centred">
        <div class="pattern-layer-four" style="background-image: url({{ asset('assetsHome/assets/images/shape/shape-24.png')}});"></div>
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column-funfact">
                    <div class="counter-block-four wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box-funfact">
                            <span class="count-text-funfact" data-speed="1500" data-stop="10">110</span>k+
                        </div>
                        <h3>Clients <br />Internationaux</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column-funfact">
                    <div class="counter-block-four wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box-funfact">
                            <span class="count-text-funfact" data-speed="1500" data-stop="5">1000</span>k+
                        </div>
                        <h3>Projets <br />Terminés</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column-funfact">
                    <div class="counter-block-four wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box-funfact">
                            <span class="count-text-funfact" data-speed="1500" data-stop="370">100</span>k+
                        </div>
                        <h3>Employés <br />Experts</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column-funfact">
                    <div class="counter-block-four wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box-funfact">
                            <span class="count-text-funfact" data-speed="1500" data-stop="75">100</span>k+
                        </div>
                        <h3>Pays <br />Desservis</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact-style-four -->

    <!-- service-style-five -->
    <section class="service-style-five bg-color-1">
        <div class="container-fluid">
            <div class="sec-title style-four right">
                <h5>Reconnus et de confiance dans le monde entier</h5>
                <h2>Des services de qualité avec une différence</h2>
            </div>
            <div class="tabs-box">
                <div class="tab-btn-box">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">
                            <i class="flaticon-rocket"></i>
                            Stratégies de planification
                        </li>
                        <li class="tab-btn" data-tab="#tab-2">
                            <i class="flaticon-innovation-1"></i>
                            Conseils financiers
                        </li>
                        <li class="tab-btn" data-tab="#tab-3">
                            <i class="flaticon-growth-3"></i>
                            Gestion des investissements
                        </li>
                        <li class="tab-btn" data-tab="#tab-4">
                            <i class="flaticon-idea"></i>
                            Marketing de la richesse
                        </li>
                        <li class="tab-btn" data-tab="#tab-5">
                            <i class="flaticon-target"></i>
                            Développement
                        </li>
                    </ul>
                </div>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <figure class="image-box"><img src="{{ asset('assetsHome/assets/images/service/service-4.jpg') }}" alt=""></figure>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                <div class="content-box">
                                    <h3>Stratégies de planification</h3>
                                    <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh deris luptate velit excepteur duis aute irure dolor voluptate labore et dolore magn aliqua.
                                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea reprehenderit in voluptate.</p>
                                    <ul class="list-item clearfix">
                                        <li>Acepteur sintas haecat sed non duiy</li>
                                        <li>Proident sunt culpa sed ipsum tempor sed</li>
                                        <li>Ut enim ad minim veniam quis nostrud exercitation</li>
                                        <li>Laboris nisi ut aliquip exy ea consequat duis</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-2">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <figure class="image-box"><img src="{{ asset('assetsHome/assets/images/service/service-4.jpg')}}" alt=""></figure>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                <div class="content-box">
                                    <h3>Conseils financiers</h3>
                                    <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh deris luptate velit excepteur duis aute irure dolor voluptate labore et dolore magn aliqua.
                                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea reprehenderit in voluptate.</p>
                                    <ul class="list-item clearfix">
                                        <li>Acepteur sintas haecat sed non duiy</li>
                                        <li>Proident sunt culpa sed ipsum tempor sed</li>
                                        <li>Ut enim ad minim veniam quis nostrud exercitation</li>
                                        <li>Laboris nisi ut aliquip exy ea consequat duis</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-3">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <figure class="image-box"><img src="{{ asset('assetsHome/assets/images/service/service-4.jpg')}}" alt=""></figure>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                <div class="content-box">
                                    <h3>Gestion des investissements</h3>
                                    <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh deris luptate velit excepteur duis aute irure dolor voluptate labore et dolore magn aliqua.
                                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea reprehenderit in voluptate.</p>
                                    <ul class="list-item clearfix">
                                        <li>Acepteur sintas haecat sed non duiy</li>
                                        <li>Proident sunt culpa sed ipsum tempor sed</li>
                                        <li>Ut enim ad minim veniam quis nostrud exercitation</li>
                                        <li>Laboris nisi ut aliquip exy ea consequat duis</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-4">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <figure class="image-box"><img src="{{ asset('assetsHome/assets/images/service/service-4.jpg')}}" alt=""></figure>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                <div class="content-box">
                                    <h3>Marketing de la richesse</h3>
                                    <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh deris luptate velit excepteur duis aute irure dolor voluptate labore et dolore magn aliqua.
                                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea reprehenderit in voluptate.</p>
                                    <ul class="list-item clearfix">
                                        <li>Acepteur sintas haecat sed non duiy</li>
                                        <li>Proident sunt culpa sed ipsum tempor sed</li>
                                        <li>Ut enim ad minim veniam quis nostrud exercitation</li>
                                        <li>Laboris nisi ut aliquip exy ea consequat duis</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-5">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <figure class="image-box"><img src="{{ asset('assetsHome/assets/images/service/service-4.jpg')}}" alt=""></figure>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                <div class="content-box">
                                    <h3>Développement des processus</h3>
                                    <p>Exercitation llamco laboris nis aliquip sed conseqrure dolorn repreh deris luptate velit excepteur duis aute irure dolor voluptate labore et dolore magn aliqua.
                                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea reprehenderit in voluptate.</p>
                                    <ul class="list-item clearfix">
                                        <li>Acepteur sintas haecat sed non duiy</li>
                                        <li>Proident sunt culpa sed ipsum tempor sed</li>
                                        <li>Ut enim ad minim veniam quis nostrud exercitation</li>
                                        <li>Laboris nisi ut aliquip exy ea consequat duis</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- service-style-five end -->

     <!-- project-style-four -->
     <section class="project-style-four">
        <div class="auto-container">
            <div class="title-inner clearfix">
                <div class="sec-title style-four right pull-left">
                    <h5>Nos études de cas</h5>
                    <h2>Projets récents</h2>
                </div>
                <div class="btn-box pull-right"><a href="index.html">Voir plus de projets</a></div>
            </div>
            <div class="two-column-carousel owl-carousel owl-theme owl-nav-none">
                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('assetsHome/assets/images/gallery/project-17.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <span>Planification de solutions</span>
                                <h3>Solutions de recherche consultative</h3>
                                <p>Acepteur sintas haecat sed non sed dui proident sunt sed ipsum tempor adipisicing elit sed incidunt.</p>
                                <a href="index.html"><i class="fas fa-arrow-right"></i><span>Lire la suite</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('assetsHome/assets/images/gallery/project-18.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <span>Planification de solutions</span>
                                <h3>Perspectives du marché client</h3>
                                <p>Acepteur sintas haecat sed non sed dui proident sunt sed ipsum tempor adipisicing elit sed incidunt.</p>
                                <a href="index.html"><i class="fas fa-arrow-right"></i><span>Lire la suite</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('assetsHome/assets/images/gallery/project-17.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <span>Planification de solutions</span>
                                <h3>Solutions de recherche consultative</h3>
                                <p>Acepteur sintas haecat sed non sed dui proident sunt sed ipsum tempor adipisicing elit sed incidunt.</p>
                                <a href="index.html"><i class="fas fa-arrow-right"></i><span>Lire la suite</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('assetsHome/assets/images/gallery/project-18.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <span>Planification de solutions</span>
                                <h3>Perspectives du marché client</h3>
                                <p>Acepteur sintas haecat sed non sed dui proident sunt sed ipsum tempor adipisicing elit sed incidunt.</p>
                                <a href="index.html"><i class="fas fa-arrow-right"></i><span>Lire la suite</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('assetsHome/assets/images/gallery/project-17.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <span>Planification de solutions</span>
                                <h3>Solutions de recherche consultative</h3>
                                <p>Acepteur sintas haecat sed non sed dui proident sunt sed ipsum tempor adipisicing elit sed incidunt.</p>
                                <a href="index.html"><i class="fas fa-arrow-right"></i><span>Lire la suite</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('assetsHome/assets/images/gallery/project-18.jpg')}}" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <span>Planification de solutions</span>
                                <h3>Perspectives du marché client</h3>
                                <p>Acepteur sintas haecat sed non sed dui proident sunt sed ipsum tempor adipisicing elit sed incidunt.</p>
                                <a href="index.html"><i class="fas fa-arrow-right"></i><span>Lire la suite</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- project-style-four end -->
  </div>

   <script type="module" src="js/script.js"></script>
</body>
</html>
@endsection