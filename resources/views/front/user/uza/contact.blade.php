@extends('front.user.uza.template')
@section('content')

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
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

    <!-- ***** Contact Area Start ***** -->
    <section class="uza-contact-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Contact Form -->
                <div class="col-12 col-lg-8">
                    <div class="uza-contact-form mb-80">
                        <div class="contact-heading mb-50">
                            <h4>Merci pour ton intérêt. <br>Veuillez remplir le formulaire ci-dessous pour vous
                                renseigner sur notre travail .</h4>
                        </div>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="full-name"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control mb-30" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="full-name"
                                            placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="email"
                                            placeholder="Organization">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control mb-30" name="message" rows="8" cols="80"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn uza-btn btn-3 mt-15">Nous contacter
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Single Contact Card -->
                <div class="col-12 col-lg-3">
                    <div class="contact-sidebar-area mb-80">
                        <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                            <h4>Nous contacter
                            </h4>
                            <h3>(+216) 1234 5678</h3>
                            <h6>mrabet.maan@planet.tn </h6>
                            <h6>Mon - Fri: 9:00 - 19:00 <br>Closed on Weekends</h6>
                        </div>

                        <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                            <h4>France</h4>
                            <h3>(+65) 2222 5678</h3>
                            <h6>49 Charing Cross Rd, London, UK <br>hello.colorlib@gmail.com</h6>
                        </div>

                        <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                            <h4>Tunisie</h4>
                            <h3>(+65) 6666 5678</h3>
                            <h6>40 Baria Sreet 13/2 NY City, US <br>hello.colorlib@gmail.com</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Google Maps -->
                <div class="col-12">
                    <div class="google-maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.853171277533!2d5.388865915485531!3d43.27545177913597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9c7542dc38145%3A0xdaf3ebe474d8ace7!2sE-Survey.com!5e0!3m2!1sfr!2sfr!4v1540905936702"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Area End ***** -->

    

  @endsection