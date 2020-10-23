@extends('front.user.uza.template')
@section('content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Services</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
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

    <!-- ****** Gallery Area Start ****** -->
    <section class="uza-portfolio-area section-padding-80">

        <!-- Portfolio Menu -->
        <div class="portfolio-menu text-center mb-80">
            <button class="btn active" data-filter="*">Tous les services</button>
            <button class="btn" data-filter=".securite">Sécurité et opérations</button>
            <button class="btn" data-filter=".marchandise">Marchandises et moyens de transport</button>
            <button class="btn" data-filter=".corps">Corps et machines</button>
        </div>

        <div class="container-fluid">
            <div class="row uza-portfolio">

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item securite">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/1.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Supervision, assistance et contrôle des opérations maritimes exceptionnelles</h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about1"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about1" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Supervision, assistance et contrôle des opérations maritimes exceptionnelles</h2>
                            <p>Notre cabinet d’expertise maritime terrestre et aérienne intervient dans toute la France
                                pour assurer le suivi des colis nécessitant des moyens particuliers. Nos équipes
                                spécialisées à la supervision, assistance et contrôle des opérations maritimes
                                exceptionnelles seront en parfaite adéquation avec les moyens spécifiques du colis.

                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item securite">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/2.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Supervision et surveillance des transports routiers – Supervision and oversight for
                                excptional road freight transport</h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about2"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about2" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h5>Supervision et surveillance des transports routiers – Supervision and oversight for
                                excptional road freight transport</h5>
                            <p>La société d’expertise Esurveys basée à Marseille prend en charge l’interface avec le
                                chargeur, le transporteur, le manutentionnaire et le réceptionnaire.

                                Esurveys et l’ensemble des experts assistent aux opérations de chargement des colis
                                lourds, assurent le contrôle de l’arrimage et du saisissage.

                                Les convois à caractère exceptionnel sont susceptibles d’occasionner une gêne pour la
                                circulation générale et de générer des risques d’accidents. L’éclairage et la
                                signalisation sont particulièrement soumis à des consignes particulières et strictes.
                                Les transports exceptionnels sont donc réglementés et soumis à une procédure
                                administrative visant à délivrer une autorisation, ainsi qu’à des règles de circulation
                                précises.

                                Ainsi, nos experts conseillent, supervisent et surveillent la progression de ces
                                convois, pour s’assurer du respect des règles de circulation.

                            </p>
                        </div>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item securite">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/3.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Supervision colis lourds et marchandises hors gabarit – Supervision heavy lift ans out
                                of gauge</h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about3"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about3" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Supervision colis lourds et marchandises hors gabarit – Supervision heavy lift ans out
                                of gauge</h2>
                            <p>Nous assurons l’interface avec l’armateur, son affréteur et le manutentionnaire.

                                Esurveys assiste aux opérations de chargement des colis lourds, assure le contrôle de
                                son arrimage et du saisissage de tout type de marchandises exceptionnelles, fragiles, à
                                haut risque et vulnérables à la manutention.

                                ESurveys apporte aussi un conseil au transport des charges encombrantes, telles que des
                                pièces détachées de grandes machines, des cargaisons indivisibles et non standardisées,
                                par exemple des locomotives, des générateurs, des citernes, équipement de forage…

                            </p>
                        </div>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item securite">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/4.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Surveillance de l’état des marchandises-conteneurs avant et après débarquement
                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about4"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about4" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Surveillance de l’état des marchandises-conteneurs avant et après débarquement –
                                Supervision of the condition of goods-containers before loading or after unloading</h2>
                            <p>L’ensemble des cabinets d’expertises Esurveys installés tout autour de la Mer
                                Méditerranée, assurent le suivi des colis de bout en bout, nous sommes l’interface entre
                                le client / chargeur et sa marchandise.

                                Pour cela, nous réalisons une vérification complète et précise de l’état des
                                marchandises avant l’embarquement et après le débarquement. Nous utilisons des outils
                                numériques (tablettes, photos numériques) pour que vous puissiez suivre en temps réel
                                l’état de votre marchandise ou conteneur.
                            </p>
                        </div>
                    </div>
                </div>




                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item securite">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/5.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Contrôle des opérations d’arrimage et de saisissage, surveillance chargement – Control
                                of cargo stowage and lashing oversight of loading </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about5"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about5" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Contrôle des opérations d’arrimage et de saisissage, surveillance chargement – Control
                                of cargo stowage and lashing oversight of loading
                            </h2>
                            <p>Fort de sa présence sur l’ensemble du territoire français et dans les principaux ports
                                Africains Esurveys cabinet d’expertise maritime est spécialisé dans l’assistance et le
                                contrôle de toutes les phases de chargement et déchargement à bord des navires. Nos
                                équipes supervisent également les opérations d’arrimage et de saisissage des
                                marchandises à bord des navires commerciaux.

                                Ainsi notre présence à chaque rupture de charge permet un suivi des différentes étapes
                                des marchandises transportées, que vous suivrez en temps réel grâce à nos outils
                                numériques.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item securite">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/6.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Contrôle des opérations d’arrimage et de saisissage, surveillance chargement – Control
                                of cargo stowage and lashing oversight of loading</h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about6"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about6" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Contrôle des opérations d’arrimage et de saisissage, surveillance chargement – Control
                                of cargo stowage and lashing oversight of loading
                            </h2>
                            <p>Fort de sa présence sur l’ensemble du territoire français et dans les principaux ports
                                Africains Esurveys cabinet d’expertise maritime est spécialisé dans l’assistance et le
                                contrôle de toutes les phases de chargement et déchargement à bord des navires. Nos
                                équipes supervisent également les opérations d’arrimage et de saisissage des
                                marchandises à bord des navires commerciaux.

                                Ainsi notre présence à chaque rupture de charge permet un suivi des différentes étapes
                                des marchandises transportées, que vous suivrez en temps réel grâce à nos outils
                                numériques.
                            </p>
                        </div>
                    </div>
                </div>





                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marchandise">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/7.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Expertise et contrôle d’aptitude au transport des MAFI
                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about7"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about7" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Expertise et contrôle d’aptitude au transport des MAFI

                            </h2>
                            <p>E-surveys, société d’expertise, de controle et de surveillance basée à Marseille vous
                                propose
                                ses services pour l’aptitude au transport des Mafi destinés au transport. Nos experts
                                inspectent toutes vos unités de chargement avant opérations.


                            </p>
                        </div>
                    </div>
                </div>


                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marchandise">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/8.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Expertise avaries marchandises conventionnelles & Generale cargo
                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about8"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about8" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Expertise avaries marchandises conventionnelles & Generale cargo

                            </h2>
                            <p>Le cabinet d’expertise E-surveys basé à Marseille, propose ce type de service dans toute
                                la France. Toutes les filiales du groupe seront mobilisées pour expertiser vos
                                marchandises endommagées durant leurs acheminements. E-surveys intervient aussi
                                directement en Afrique du Nord et de l’Ouest.

                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marchandise">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/9.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Certificat de contrôle de qualité à l’export pour toutes les marchandises – Quality
                                control certificate for export
                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about9"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about9" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Certificat de contrôle de qualité à l’export pour toutes les marchandises – Quality
                                control certificate for export

                            </h2>
                            <p>La société E-surveys émet pour l’ensemble de vos marchandises des certificats de contrôle
                                de qualité, nous prenons en charge l’ensemble des conditions de transports liés à
                                l’exportation de certaines marchandises à l’export..


                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marchandise">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/10.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Expertise dommage et avarie sur marchandises transportées – injury and damage survey on
                                goods

                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about10"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about10" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Expertise dommage et avarie sur marchandises transportées – injury and damage survey on
                                goods

                            </h2>
                            <p>En tant que cabinet d’expertise transports ESURVEYS intervient à la demande de différents
                                donneurs d’ordres tels que les P&I Club et les assureurs Maritime ou RC auprès desquels
                                notre cabinet est référencé. Notre bureau d’expertise à Marseille s’est spécialisé en
                                conseil transport et juridique, prévention des risques,organisation et gestion des
                                expertises. Notre équipe d’experts est réactive et disponible 7/7J pour vous apporter
                                une évaluation des risques et des avaries, ainsi que la valeur et le montant du dommage
                                de toutes marchandises avariée, en respectant ses caractéristiques techniques.



                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marchandise">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/11.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Certification conteneurs et agreage dernier voyage – certification containers and
                                grading “S.O.C.” (shippers own container)


                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about11"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about11" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Expertise dommage et avarie sur marchandises transportées – injury and damage survey on
                                goods

                            </h2>
                            <p>Les techniciens d’ESURVEYS disposent des agréments IICL (Institute of International
                                Container Lessors) leur permettant de certifier la conformité des conteneurs pour une
                                utilisation « multimodale » en transport maritime, routier, ferroviaire, et leur
                                conformité aux exigences des normes ISO.

                                L’équipe de ESurveys, possède le savoir-faire technique et l’expérience pour tester et
                                contrôler tous types de conteneurs, afin d’être transportés suivant les normes maritimes
                                (étanchéité, structure interne, gabarit et usure). Ceci dans le but de garantir au
                                propriétaire une validité temporaire de transport multimodal et dans le cadre des
                                conventions et règles internationales.

                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marchandise">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/12.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Certification de non explosivité – Certification of non explosivity


                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about12"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about12" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Certification de non explosivité – Certification of non explosivity

                            </h2>
                            <p>ESURVEYS intervient principalement dans la surveillance des déchets de métaux avant
                                chargement sur des vraquiers fluviomaritimes. A la suite des contrôles et de l’expertise
                                des marchandises inspectées nos experts déclarent la conformité au voyage maritime et
                                délivre le certificat de non explosivité.



                            </p>
                        </div>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marchandise">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/13.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Certification anti pollution – Expertise ans certification of anti-pollution

                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about13"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about13" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Certification anti pollution – Expertise ans certification of anti-pollution.
                            </h2>
                            <p>L’équipe d’ESURVEYS est spécialisée dans les hydrocarbures et les marchandises de type
                                pétrole et autres dérivées. Nous intervenons dans un cadre préventif mais aussi en cas
                                de pollution déclarée afin d’identifier le type de pollution et de déterminer son
                                origine afin de prendre les mesures conservatoires pour protéger les intérêts de nos
                                mandants.

                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marchandise">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/14.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Expertise contradictoire sur conteneur – Joint expertise on container


                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about14"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about14" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h2>Expertise contradictoire sur conteneur – Joint expertise on container

                            </h2>
                            <p>ESurveys, cabinet d’expertise maritime terrestre et aérienne, vous accompagne lors de
                                votre expertise contradictoire sur conteneurs accidentés lors du transport maritime. Nos
                                experts examinent consciencieusement le conteneur endommagé, enregistrent les dégâts
                                constatés et rédigent les conclusions. Notre équipe d’experts détient une capacité
                                d’analyse optimale qui vous garantira une expertise précise.

                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marchandise">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/15.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Expertises contradictoires et inspections remorques – Joint expertise & inspection on
                                trailer


                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about15"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about15" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h5>Expertises contradictoires et inspections remorques – Joint expertise & inspection on
                                trailer
                            </h5>
                            <p style="font-size: 15px;"> L’ensemble des inspecteurs ESURVEYS sont spécialisés dans
                                l’inspection, le contrôle, la
                                surveillance des remorques avec près de 25000 constats de surveillances émis chaque
                                année. Des expertises tripartites ont été développées et mises en place depuis plus de
                                10 ans. Elles impliquent à la fois, le transporteur maritime, le transporteur routier et
                                le manutentionnaire. Disposant de bureaux sur le Maghreb, la surveillance des remorques
                                se déroulent en INTERFACE avec les cabinets d’expertise à l’étranger pour un contrôle de
                                bout en bout dudit transport maritime. Nous sommes en mesure de vous proposer une
                                traçabilité optimale de vos moyens de transports.

                                ESurveys, vous accompagne lors de votre expertise
                                contradictoire sur remorque. Notre équipe d’experts examine consciencieusement le
                                véhicule endommagé, enregistre les dégâts constatés et rédigent les conclusions. Notre
                                équipe d’experts détient une capacité d’analyse optimale et une expérience quotidienne
                                pour diligenter dans les meilleures conditions son expertise.


                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marchandise">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/16.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Inspection bobines d’acier à Fos sur mer – Inspection steel coils at Fos sur mer

                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about16"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about16" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h5>Inspection bobines d’acier à Fos sur mer – Inspection steel coils at Fos sur mer

                            </h5>
                            <p>Les experts E SURVEYS interviennent depuis plus de 25 ans sur le site ARCELOR MITTAL –
                                Fos-Sur-Mer.

                                Les interventions de nos experts consistent en une analyse technique des aciers afin de
                                définir le grade des produits et d’établir un état de la totalité des marchandises avant
                                leur expédition. Nos principaux interlocuteurs, armateurs / affréteurs et leurs P&I
                                Clubs ont à leur disposition avant le départ de chaque navire le récapitulatif précis de
                                l’état des marchandises embarquées à bord du navire.




                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item marchandise">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/17.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Inspection chargement et déchargement des véhicules – inspection loading and unloading
                                of vehicules

                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about17"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about17" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h5>Inspection chargement et déchargement des véhicules – inspection loading and unloading
                                of vehicules

                            </h5>
                            <p>ESURVEYS effectue les contrôles de qualité de plus de 100 000 véhicules neufs sur toute
                                la zone sud de la Méditerranée en France et dans les principaux ports d’Afrique du Nord
                                pour les principaux armateurs internationaux.
                                Les services de supervision au chargement et déchargement des véhicules garantissent une
                                inspection précise des véhicules stationnés à quai, ainsi qu’un enregistrement de tous
                                les dégâts constatés sur une voiture.

                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item corps">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/18.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Draft survey, pesee statique et jaugeage des navires – gauging


                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about18"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about18" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h5>Draft survey, pesee statique et jaugeage des navires – gauging


                            </h5>
                            <p>ESURVEYS intervient pour le compte des opérateurs de navires, Armateurs ou affréteurs
                                afin de procéder aux calculs des creux et des soutes au chargement et au déchargement
                                aussi bien dans le cadre de draft que pour les prises en charge et/ou restitution de
                                navires.

                                Nos experts compétents en jaugeage des navires vous aideront à déterminer le poids des
                                marchandises en vrac.



                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item corps">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/19.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Bunker survey, condition survey on hire & off hire de navires affretes



                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about19"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about19" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h5>Bunker survey, condition survey on hire & off hire de navires affretes


                            </h5>
                            <p>ESURVEYS intervient pour le compte des opérateurs de navires, Armateurs ou affréteurs.

                                Nous procédons aux calculs des creux et des soutes au chargement et au déchargement
                                aussi bien dans le cadre de draft que pour les prises en charge ou restitution de
                                navires.

                                Nos techniciens (ex officiers de la Marine Marchande) sont à votre disposition pour
                                réaliser toutes les prestations dans le cadre d’affrètement, d’achat ou de vente de
                                navire.



                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item corps">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/20.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Expertise pour les activités plaisances – Expertise for yachting activities

                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about20"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about20" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h5>Expertise pour les activités plaisances – Expertise for yachting activities

                            </h5>
                            <p>ESURVEYS et son cabinet d’expertise à Marseille et Sète intervient sur tout le bassin
                                méditerranéen dans le cadre d’expertise de vedettes et de voiliers pour des
                                pré-assurances, achats, ventes ou à la suite d’un sinistre ou tout autre évènement de
                                mer.

                                Nous proposons assistance et expertises techniques lors d’avarie et dommages au navire.

                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item corps">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/21.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Assistance pour toute maintenance corps et machines des navires – Maintenance hull and
                                machinery assistance

                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about21"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about21" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h5>Assistance pour toute maintenance corps et machines des navires – Maintenance hull and
                                machinery assistance


                            </h5>
                            <p>Nos techniciens (officiers de la Marine Marchande) interviennent pour le compte des
                                assureurs corps et P&I Club, ainsi que pour des opérateurs maritimes, armateurs et
                                propriétaires de navires, managers ou gestionnaires de flottes.
                                Par leurs expériences et leur savoir-faire technique, nos experts seront à votre
                                disposition pour vous conseiller et assister lors de la maintenance et réparation du
                                navire.

                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item corps">
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/22.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Expertise et dommages corps de navire – Hull ans machinery survey


                            </h6>

                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="#openModal-about22"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div id="openModal-about22" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <h5>Expertise et dommages corps de navire – Hull ans machinery survey

                            </h5>
                            <p>L’ensemble des experts Esurveys (officiers de la Marine Marchande, Expert maritime,
                                commissionnaire de transport) interviennent pour le compte des assureurs corps et P&I
                                Club, ainsi que pour des opérateurs maritimes, armateurs et propriétaires de navires,
                                managers ou gestionnaires de flottes. Les experts de ESurveys peuvent établir un examen
                                technique de la coque, de la machine et des apparaux dans le but de constater la
                                conformité du navire à son usage et à la réglementation en vigueur et d’estimer la
                                valeur vénale du navire. En cas de dommages sur corps de navires, nos experts en
                                détermineront circonstances et causes et vous accompagneront tout au long des
                                interventions techniques.

                            </p>
                        </div>
                    </div>
                </div>







            </div>

        </div>







        
        </div>
    </section>
    <!-- ****** Gallery Area End ****** -->



   @endsection