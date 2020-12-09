@extends('front.user.uza.template')

@section('content')


    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">About</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="./img/core-img/curve-5.png" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="uza-about-us-area section-padding-80">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-80">
                        <img src="./img/bg-img/2.png" alt="">
                        <!-- Video Area -->
                        <div class="uza-video-area hi-icon-effect-8">
                            <a href="" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="section-heading mb-5">
                        <h2>Notre Mission</h2>
                    </div>

                    <div class="about-us-content mb-80">
                        <div class="about-tab-area">
                            <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab"
                                        aria-controls="tab-1" aria-selected="true">CREATION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab"
                                        aria-controls="tab-2" aria-selected="false"> ANALYSE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab3" data-toggle="tab" href="#tab-3" role="tab"
                                        aria-controls="tab-3" aria-selected="false">STRATÉGIE</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Mona Tab Content -->
                        <div class="about-tab-content">
                            <div class="tab-content" id="mona_modelTabContent">
                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel"
                                    aria-labelledby="tab1">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p>Composée d’ex naviguant, agents consignataires, experts agréés, juristes, les
                                            équipes Esurveys restent disponibles 7j/7j et 24h/24h pour vous fournir
                                            toutes leurs compétences en gestion des risques et services en matière de
                                            transport maritime, terrestre et aérien.</p>


                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p>Bénéficiant d’une connaissance parfaite de l’environnement immédiat et
                                            spécifique de chaque transport, nos spécialistes apportent toute
                                            l’information indispensable sur la zone où ils exercent : risques encourus,
                                            autorités portuaires, situation portuaire, qualité des services et des
                                            équipements de transport et de manutention, législation en vigueur, gestion
                                            de sinistre et litige en tout genre, protection des responsabilités liées au
                                            transport, etc…</p>
                                        <p>Conscient de la visibilité que nous vous apportons sur l’ensemble de vos
                                            opérations, notre réactivité est primordiale dans la transmission des
                                            comptes rendu, et le développement d’outils numériques portables nous permet
                                            de vous retransmettre toutes les informations en temps réel.</p>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p>Esurveys s’engage à surveiller, contrôler et inspecter l’ensemble de vos
                                            moyens de transports, unités de chargement et marchandises pour minimiser
                                            les risques sur chaque segment du transport.</p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Background Pattern -->
        <div class="about-bg-pattern">
            <img src="./img/core-img/curve-2.png" alt="">
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Why Choose Us Area Start ***** -->
    <section class="uza-why-choose-us-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Choose Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="choose-us-content mb-80">
                        <div class="section-heading mb-4">
                            <h2>Pourquoi nous choisir
                            </h2>
                            <p>
                                Nous sommes votre partenaire dans votre réussite</p>
                        </div>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Des experts distinctifs qui fournissent une expertise sans effort</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Des résultats enrichis rendus possibles par des professionnels expérimentés</li>

                            <li><i class="fa fa-check" aria-hidden="true"></i> Nous sommes axés sur les résultats,
                                orientés, nous livrons des résultats</li>
                        </ul>
                    </div>
                </div>
                <!-- Choose Us Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="choose-us-thumbnail mb-80">
                        <img class="w-100" src="img/bg-img/22.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Why Choose Us Area End ***** -->

    <!-- ***** Team Member Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Équipe d'experts
                        </h2>
                        <p>
                            Nous restons à la pointe de notre industrie en étant des experts dans le vôtre.</p>
                    </div>
                </div>
            </div>
        </div>


    <!-- ***** CTA Area Start ***** -->
    <div class="uza-cta-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <div class="cta-content mb-80">
                        <h2> Intéressé de travailler avec nous?</h2>

                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="cta-content mb-80">
                        <div class="call-now-btn">
                            <a href="#"><span>Appelez-nous maintenant:</span> (+216) 1234 5678</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** CTA Area End ***** -->




   
        @endsection
    
 