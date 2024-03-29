<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    @include('font-end.layouts.styles')
    @yield('css')

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('assets_fontend/icon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('assets_fontend/icon/favicon-32x32.png') }}">

    <meta name="description" content="Fisat Event">
    <meta name="keywords" content="">
    <meta name="author" content="bni|code">
    <title>@yield('title')</title>
</head>

<body>
    <!-- header -->
        @include('font-end.layouts.header')
    <!-- end header -->

    <!-- hero -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="row row--grid">
                <div class="col-12 col-lg-7">
                    <div class="hero__content hero__content--first">
                        <h2 class="hero__title"><b>7ième Forum</b>
                            <br>International et Salon
                            <span style="color:#ec8426; font-size:46px"> Africain des Transports <span>
                        </h2>

                        <p class="hero__tagline">
                            <strong style="color:#ec8426">Theme: </strong><br>
                            "Modernisation des écosystèmes logistiques, des transports et des Infrastructures: durabilité, sécurité, digitalisation
                            et employabilité des jeunes.
                            Quels défis et opportunités pour l'Afrique de demain?"
                        </p>
                        <div class="hero__btns">
                            <a data-scroll href="{{ route('fontend.index') }}#registration" class="hero__btn" style="background: linear-gradient(65deg, #c55d03 0%, #eb8326 100%);">
                                <span>Réservation</span>
                            </a>
                            <a data-scroll href="{{ route('fontend.index') }}#about" class="hero__btn hero__btn--white">
                                <span>
                                   En savoir plus
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="hero__content hero__content--second">
                        <div class="hero__dates" id="hero__dates">
                            <div class="hero__date hero__date--color" data-depth="0.25">
                                <div class="hero__date-day">
                                    22,23,24
                                    <span>Novembre 2023</span>
                                </div>
                                <div class="hero__date-text">Conférences <br>& Ateliers</div>
                            </div>

                            <div class="hero__date hero__date--glass" data-depth="0.15">
                                {{-- <div class="hero__date-day">
                                 SOFITEL ABIDJAN HOTEL IVOIRE - CÔTE D'IVOIRE
                                </div> --}}
                                <div class="hero__date-text" style="border-top: 1px solid rgba(255,255,255,0.1);">SOFITEL ABIDJAN HOTEL IVOIRE - <br> CÔTE D'IVOIRE</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end hero -->

    <!-- about -->
    <section class="section section--about section--about-up" id="about">
        <div class="container">
            <div class="row">
                <!-- about -->
                <div class="col-12">
                    <div class="about">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="about__cover" style="margin-bottom: 36px">
                                    <img src="{{ asset('assets_fontend/img/fisat/image-fisat-1.jpg') }}" alt="">
                                   {{--  <a href="https://vimeo.com/45830194" class="open-video"> --}}
                                    <a href="https://www.youtube.com/watch?v=_HFZPDIuoSI" class="open-video">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
                                        </svg>
                                    </a> 
                                </div>
                                <p>
                                    <span class="first-letter">D</span>epuis 2009, Le Salon Africain des Transports et des Infrastructures Économiques,
                                         réunit tous les professionnels et décideurs pour des échanges riches et uniques 
                                         sur les transports, les infrastructures et leurs secteurs connexes.
                                </p>
                                <p>
                                        Après Rabat en 2015, et Abidjan en 2017, avec
                                        une grande mobilisation des acteurs venant de
                                        toute l’Afrique, le Salon a connu une phase de ralen-
                                        tissement due d’une part à la densité de l’agenda
                                        national ivoirien et d’autre part, aux restrictions liées
                                        à la gestion de la pandémie du Coronavirus. En 2022,
                                        année de reprise,  l’événement s’est réinventé et est
                                        devenu le <strong>Forum International et Salon Africain
                                        des Transports (FISAT)</strong>. 
                                </p>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="about__content">
                                    <h2>À propos de la conférence</h2>
                                    <p>
                                        Il a focalisé, plus que jamais,
                                        toute l'attention des décideurs et des professionnels
                                        sur des sujets d’une brulante actualité au niveau na-
                                        tional et international. Ainsi, le pari de l’organisation et de la crédibilité
                                        scientifique ont été tenus. 
                                    </p>
                                    
                                     <p>
                                        Ainsi, en 2022, le FISAT a tenu toutes ses promesses,
                                        notamment en réussissant à repositionner le trans-
                                        port, la logistique et les infrastructures au cœur du
                                        processus de développement amorcé pour atteindre
                                        l’émergence de nos états, et malheureusement freiné
                                        par la récente crise. Cela s’est traduit par des débats
                                        animés par des experts de premier plan avec la parti-
                                        cipation d’institutions nationales et internationales 
                                     </p>
                                     <p>
                                        Le FISAT est un espace d’exposition, d’échanges et de
                                        Promotion par excellence, destiné, aux professionnels
                                        du transport, de la logistique et des infrastructures, à
                                        tous ceux qui évoluent dans les secteurs connexes et
                                        Le FISAT est donc la plateforme par excellence de
                                        valorisation et de promotion des Transports, de la
                                        logistique et des infrastructures économiques.
                                        C’est un grand carrefour de rencontres, d’échanges
                                        et de partage des professionnels des secteurs du
                                        transport, de la logistique et des secteurs connexes.
                                     </p>
                                </div>
                            </div>

                            <!-- statistics -->
                            <div class="col-12">
                                <div class="statistics">
                                    <div class="row">
                                         <div class="col-12 col-sm-6 col-xl-3">
                                            <div class="statistics__item">
                                                <div class="statistics__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                                </div>
                                                <div class="statistics__number"><span>50</span><b>+</b></div>
                                                <div class="statistics__text">Visiteurs Présentiels & digital</div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-xl-3">
                                            <div class="statistics__item">
                                                <div class="statistics__icon">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                </div>
                                                <div class="statistics__number"><span>8</span><b>+</b></div>
                                                <div class="statistics__text">Délégations étrangères présentes</div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-xl-3">
                                            <div class="statistics__item">
                                                <div class="statistics__icon">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                </div>
                                                <div class="statistics__number"><span>50</span><b>+</b></div>
                                                <div class="statistics__text">Exposants au forum</div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-xl-3">
                                            <div class="statistics__item">
                                                <div class="statistics__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path
                                                            d="M19,6.5H16v-1a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v1H5a3,3,0,0,0-3,3v9a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-9A3,3,0,0,0,19,6.5Zm-9-1a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1v1H10Zm10,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V13.45H7V14.5a1,1,0,0,0,2,0V13.45h6V14.5a1,1,0,0,0,2,0V13.45h3Zm0-7H4V9.5a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Z" />
                                                    </svg>
                                                </div>
                                                <div class="statistics__number"><span>23</span><b>+</b></div>
                                                <div class="statistics__text">Panélistes présents</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end statistics -->
                        </div>
                    </div>
                </div>
                <!-- end about -->
            </div>
        </div>
    </section>
    <!-- end about -->

    <!-- speakers -->
    <section class="section section--gradiend-bot" id="speakers">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12 col-xl-6 offset-xl-3">
                    <div class="section__title section__title--border">
                        <h2>Rencontrez nos conférenciers</h2>
                    </div>
                </div>
                <!-- end section title -->
            </div>

            <div class="row row--grid">
                <!-- speaker -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="speaker">
                        <div class="speaker__img">
                            <img src="{{ asset('assets_fontend/img/speakers/1.jpg') }}" alt="">

                            <div class="speaker__social">
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.07294,2H8.9375C3.33331,2,2,3.33331,2,8.92706V15.0625C2,20.66663,3.32294,22,8.92706,22H15.0625C20.66669,22,22,20.67706,22,15.07288V8.9375C22,3.33331,20.67706,2,15.07294,2Zm3.07287,14.27081H16.6875c-.55206,0-.71875-.44793-1.70831-1.4375-.86463-.83331-1.22919-.9375-1.44794-.9375-.30206,0-.38544.08332-.38544.5v1.3125c0,.35419-.11456.5625-1.04162.5625a5.69214,5.69214,0,0,1-4.44794-2.66668A11.62611,11.62611,0,0,1,5.35419,8.77081c0-.21875.08331-.41668.5-.41668H7.3125c.375,0,.51044.16668.65625.55212.70831,2.08331,1.91669,3.89581,2.40625,3.89581.1875,0,.27081-.08331.27081-.55206V10.10413c-.0625-.97913-.58331-1.0625-.58331-1.41663a.36008.36008,0,0,1,.375-.33337h2.29169c.3125,0,.41662.15625.41662.53125v2.89587c0,.3125.13544.41663.22919.41663.1875,0,.33331-.10413.67706-.44788a11.99877,11.99877,0,0,0,1.79169-2.97919.62818.62818,0,0,1,.63544-.41668H17.9375c.4375,0,.53125.21875.4375.53125A18.20507,18.20507,0,0,1,16.41669,12.25c-.15625.23956-.21875.36456,0,.64581.14581.21875.65625.64582,1,1.05207a6.48553,6.48553,0,0,1,1.22912,1.70837C18.77081,16.0625,18.5625,16.27081,18.14581,16.27081Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="speaker__about">
                            <h3>Otto Bree</h3>
                            <span>Themeforest</span>
                        </div>
                    </div>
                </div>
                <!-- end speaker -->

                <!-- speaker -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="speaker">
                        <div class="speaker__img">
                            <img src="{{ asset('assets_fontend/img/speakers/2.jpg') }}" alt="">

                            <div class="speaker__social">
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="speaker__about">
                            <h3>Eliza Josceline</h3>
                            <span>Codecanyon</span>
                        </div>
                    </div>
                </div>
                <!-- end speaker -->

                <!-- speaker -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="speaker">
                        <div class="speaker__img">
                            <img src="{{ asset('assets_fontend/img/speakers/3.jpg') }}" alt="">

                            <div class="speaker__social">
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.07294,2H8.9375C3.33331,2,2,3.33331,2,8.92706V15.0625C2,20.66663,3.32294,22,8.92706,22H15.0625C20.66669,22,22,20.67706,22,15.07288V8.9375C22,3.33331,20.67706,2,15.07294,2Zm3.07287,14.27081H16.6875c-.55206,0-.71875-.44793-1.70831-1.4375-.86463-.83331-1.22919-.9375-1.44794-.9375-.30206,0-.38544.08332-.38544.5v1.3125c0,.35419-.11456.5625-1.04162.5625a5.69214,5.69214,0,0,1-4.44794-2.66668A11.62611,11.62611,0,0,1,5.35419,8.77081c0-.21875.08331-.41668.5-.41668H7.3125c.375,0,.51044.16668.65625.55212.70831,2.08331,1.91669,3.89581,2.40625,3.89581.1875,0,.27081-.08331.27081-.55206V10.10413c-.0625-.97913-.58331-1.0625-.58331-1.41663a.36008.36008,0,0,1,.375-.33337h2.29169c.3125,0,.41662.15625.41662.53125v2.89587c0,.3125.13544.41663.22919.41663.1875,0,.33331-.10413.67706-.44788a11.99877,11.99877,0,0,0,1.79169-2.97919.62818.62818,0,0,1,.63544-.41668H17.9375c.4375,0,.53125.21875.4375.53125A18.20507,18.20507,0,0,1,16.41669,12.25c-.15625.23956-.21875.36456,0,.64581.14581.21875.65625.64582,1,1.05207a6.48553,6.48553,0,0,1,1.22912,1.70837C18.77081,16.0625,18.5625,16.27081,18.14581,16.27081Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="speaker__about">
                            <h3>Kathie Corl</h3>
                            <span>Videohive</span>
                        </div>
                    </div>
                </div>
                <!-- end speaker -->

                <!-- speaker -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="speaker">
                        <div class="speaker__img">
                            <img src="{{ asset('assets_fontend/img/speakers/4.jpg') }}" alt="">

                            <div class="speaker__social">
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.07294,2H8.9375C3.33331,2,2,3.33331,2,8.92706V15.0625C2,20.66663,3.32294,22,8.92706,22H15.0625C20.66669,22,22,20.67706,22,15.07288V8.9375C22,3.33331,20.67706,2,15.07294,2Zm3.07287,14.27081H16.6875c-.55206,0-.71875-.44793-1.70831-1.4375-.86463-.83331-1.22919-.9375-1.44794-.9375-.30206,0-.38544.08332-.38544.5v1.3125c0,.35419-.11456.5625-1.04162.5625a5.69214,5.69214,0,0,1-4.44794-2.66668A11.62611,11.62611,0,0,1,5.35419,8.77081c0-.21875.08331-.41668.5-.41668H7.3125c.375,0,.51044.16668.65625.55212.70831,2.08331,1.91669,3.89581,2.40625,3.89581.1875,0,.27081-.08331.27081-.55206V10.10413c-.0625-.97913-.58331-1.0625-.58331-1.41663a.36008.36008,0,0,1,.375-.33337h2.29169c.3125,0,.41662.15625.41662.53125v2.89587c0,.3125.13544.41663.22919.41663.1875,0,.33331-.10413.67706-.44788a11.99877,11.99877,0,0,0,1.79169-2.97919.62818.62818,0,0,1,.63544-.41668H17.9375c.4375,0,.53125.21875.4375.53125A18.20507,18.20507,0,0,1,16.41669,12.25c-.15625.23956-.21875.36456,0,.64581.14581.21875.65625.64582,1,1.05207a6.48553,6.48553,0,0,1,1.22912,1.70837C18.77081,16.0625,18.5625,16.27081,18.14581,16.27081Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="speaker__about">
                            <h3>Georgiana Patti</h3>
                            <span>Audiojungle</span>
                        </div>
                    </div>
                </div>
                <!-- end speaker -->

                <!-- speaker -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="speaker">
                        <div class="speaker__img">
                            <img src="{{ asset('assets_fontend/img/speakers/5.jpg') }}" alt="">

                            <div class="speaker__social">
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="speaker__about">
                            <h3>Joni Celeste</h3>
                            <span>Graphicriver</span>
                        </div>
                    </div>
                </div>
                <!-- end speaker -->

                <!-- speaker -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="speaker">
                        <div class="speaker__img">
                            <img src="{{ asset('assets_fontend/img/speakers/6.jpg') }}" alt="">

                            <div class="speaker__social">
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.07294,2H8.9375C3.33331,2,2,3.33331,2,8.92706V15.0625C2,20.66663,3.32294,22,8.92706,22H15.0625C20.66669,22,22,20.67706,22,15.07288V8.9375C22,3.33331,20.67706,2,15.07294,2Zm3.07287,14.27081H16.6875c-.55206,0-.71875-.44793-1.70831-1.4375-.86463-.83331-1.22919-.9375-1.44794-.9375-.30206,0-.38544.08332-.38544.5v1.3125c0,.35419-.11456.5625-1.04162.5625a5.69214,5.69214,0,0,1-4.44794-2.66668A11.62611,11.62611,0,0,1,5.35419,8.77081c0-.21875.08331-.41668.5-.41668H7.3125c.375,0,.51044.16668.65625.55212.70831,2.08331,1.91669,3.89581,2.40625,3.89581.1875,0,.27081-.08331.27081-.55206V10.10413c-.0625-.97913-.58331-1.0625-.58331-1.41663a.36008.36008,0,0,1,.375-.33337h2.29169c.3125,0,.41662.15625.41662.53125v2.89587c0,.3125.13544.41663.22919.41663.1875,0,.33331-.10413.67706-.44788a11.99877,11.99877,0,0,0,1.79169-2.97919.62818.62818,0,0,1,.63544-.41668H17.9375c.4375,0,.53125.21875.4375.53125A18.20507,18.20507,0,0,1,16.41669,12.25c-.15625.23956-.21875.36456,0,.64581.14581.21875.65625.64582,1,1.05207a6.48553,6.48553,0,0,1,1.22912,1.70837C18.77081,16.0625,18.5625,16.27081,18.14581,16.27081Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="speaker__about">
                            <h3>Sophie Moore</h3>
                            <span>Photodune</span>
                        </div>
                    </div>
                </div>
                <!-- end speaker -->

                <!-- speaker -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="speaker">
                        <div class="speaker__img">
                            <img src="{{ asset('assets_fontend/img/speakers/7.jpg') }}" alt="">

                            <div class="speaker__social">
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.07294,2H8.9375C3.33331,2,2,3.33331,2,8.92706V15.0625C2,20.66663,3.32294,22,8.92706,22H15.0625C20.66669,22,22,20.67706,22,15.07288V8.9375C22,3.33331,20.67706,2,15.07294,2Zm3.07287,14.27081H16.6875c-.55206,0-.71875-.44793-1.70831-1.4375-.86463-.83331-1.22919-.9375-1.44794-.9375-.30206,0-.38544.08332-.38544.5v1.3125c0,.35419-.11456.5625-1.04162.5625a5.69214,5.69214,0,0,1-4.44794-2.66668A11.62611,11.62611,0,0,1,5.35419,8.77081c0-.21875.08331-.41668.5-.41668H7.3125c.375,0,.51044.16668.65625.55212.70831,2.08331,1.91669,3.89581,2.40625,3.89581.1875,0,.27081-.08331.27081-.55206V10.10413c-.0625-.97913-.58331-1.0625-.58331-1.41663a.36008.36008,0,0,1,.375-.33337h2.29169c.3125,0,.41662.15625.41662.53125v2.89587c0,.3125.13544.41663.22919.41663.1875,0,.33331-.10413.67706-.44788a11.99877,11.99877,0,0,0,1.79169-2.97919.62818.62818,0,0,1,.63544-.41668H17.9375c.4375,0,.53125.21875.4375.53125A18.20507,18.20507,0,0,1,16.41669,12.25c-.15625.23956-.21875.36456,0,.64581.14581.21875.65625.64582,1,1.05207a6.48553,6.48553,0,0,1,1.22912,1.70837C18.77081,16.0625,18.5625,16.27081,18.14581,16.27081Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="speaker__about">
                            <h3>Felix Autumn</h3>
                            <span>3docean</span>
                        </div>
                    </div>
                </div>
                <!-- end speaker -->

                <!-- speaker -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="speaker">
                        <div class="speaker__img">
                            <img src="{{ asset('assets_fontend/img/speakers/8.jpg') }}" alt="">

                            <div class="speaker__social">
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.07294,2H8.9375C3.33331,2,2,3.33331,2,8.92706V15.0625C2,20.66663,3.32294,22,8.92706,22H15.0625C20.66669,22,22,20.67706,22,15.07288V8.9375C22,3.33331,20.67706,2,15.07294,2Zm3.07287,14.27081H16.6875c-.55206,0-.71875-.44793-1.70831-1.4375-.86463-.83331-1.22919-.9375-1.44794-.9375-.30206,0-.38544.08332-.38544.5v1.3125c0,.35419-.11456.5625-1.04162.5625a5.69214,5.69214,0,0,1-4.44794-2.66668A11.62611,11.62611,0,0,1,5.35419,8.77081c0-.21875.08331-.41668.5-.41668H7.3125c.375,0,.51044.16668.65625.55212.70831,2.08331,1.91669,3.89581,2.40625,3.89581.1875,0,.27081-.08331.27081-.55206V10.10413c-.0625-.97913-.58331-1.0625-.58331-1.41663a.36008.36008,0,0,1,.375-.33337h2.29169c.3125,0,.41662.15625.41662.53125v2.89587c0,.3125.13544.41663.22919.41663.1875,0,.33331-.10413.67706-.44788a11.99877,11.99877,0,0,0,1.79169-2.97919.62818.62818,0,0,1,.63544-.41668H17.9375c.4375,0,.53125.21875.4375.53125A18.20507,18.20507,0,0,1,16.41669,12.25c-.15625.23956-.21875.36456,0,.64581.14581.21875.65625.64582,1,1.05207a6.48553,6.48553,0,0,1,1.22912,1.70837C18.77081,16.0625,18.5625,16.27081,18.14581,16.27081Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="speaker__about">
                            <h3>Cong Duong</h3>
                            <span>Envato</span>
                        </div>
                    </div>
                </div>
                <!-- end speaker -->
            </div>
        </div>
    </section>
    <!-- end speakers -->

    <!-- program -->
    <section class="section section--dark" id="agenda">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="program">
                        <div class="row">
                            <!-- title -->
                            <div class="col-12 col-lg-6">
                                <div class="section__title section__title--white section__title--left">
                                    <h2>Programme de la conférence</h2>
                                </div>
                            </div>
                            <!-- end title -->

                            <!-- tabs nav -->
                            <div class="col-12 col-lg-6">
                                <ul class="nav nav-tabs program__tabs" id="program__tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="1-tab" data-toggle="tab" href="{{ route('fontend.index') }}#tab-1"
                                            role="tab" aria-controls="tab-1" aria-selected="true">
                                            Jour 1
                                            <span>22 Novembre, 2023</span>
                                        </a>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="2-tab" data-toggle="tab" href="{{ route('fontend.index') }}#tab-2"
                                            role="tab" aria-controls="tab-2" aria-selected="false">
                                            Jour 2
                                            <span>23 Novembre, 2023</span>
                                        </a>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="3-tab" data-toggle="tab" href="{{ route('fontend.index') }}#tab-3"
                                            role="tab" aria-controls="tab-3" aria-selected="false">
                                             Jour 3
                                            <span>24 Novembre, 2023</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end tabs nav -->

                            <!-- tabs content -->
                            <div class="col-12">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel"
                                        aria-labelledby="1-tab">
                                        <div class="program__content program__content--1">
                                            <!-- speech -->
                                            <div class="program__speech">
                                                <div class="program__speaker">
                                                    <div class="program__speaker-img">
                                                        <img src="{{ asset('assets_fontend/img/speakers/7.jpg') }}" alt="">
                                                    </div>
                                                    <div class="program__speaker-about">
                                                        <p>Felix Autumn</p>
                                                        <span>3docean</span>
                                                    </div>
                                                </div>
                                                <div class="program__agenda">
                                                    <h3>Ouverture de la conférence</h3>
                                                    <span>9:00 am - 10:30 am</span>
                                                    <p>Many desktop publishing packages and web page editors now use
                                                        Lorem Ipsum as their default model text, and a search for 'lorem
                                                        ipsum' will uncover many web sites still in their infancy.
                                                        Various versions have evolved over the years, sometimes by
                                                        accident, sometimes on purpose (injected humour and the like).
                                                    </p>
                                                    <p>The point of using Lorem Ipsum is that it has a more-or-less
                                                        normal distribution of letters, as opposed to using 'Content
                                                        here, content here', making it look like readable English.</p>
                                                </div>
                                            </div>
                                            <!-- end speech -->

                                            <!-- speech -->
                                            <div class="program__speech">
                                                <div class="program__speaker">
                                                    <div class="program__speaker-img">
                                                        <img src="{{ asset('assets_fontend/img/speakers/3.jpg') }}" alt="">
                                                    </div>
                                                    <div class="program__speaker-about">
                                                        <p>Kathie Corl</p>
                                                        <span>Videohive</span>
                                                    </div>
                                                </div>
                                                <div class="program__agenda">
                                                    <h3>Introduction aux affaires</h3>
                                                    <span>11:00 am - 12:30 pm</span>
                                                    <p>Many desktop publishing packages and web page editors now use
                                                        Lorem Ipsum as their default model text, and a search for 'lorem
                                                        ipsum' will uncover many web sites still in their infancy.
                                                        Various versions have evolved over the years, sometimes by
                                                        accident, sometimes on purpose (injected humour and the like).
                                                    </p>
                                                    <p>The point of using Lorem Ipsum is that it has a more-or-less
                                                        normal distribution of letters, as opposed to using 'Content
                                                        here, content here', making it look like readable English.</p>
                                                </div>
                                            </div>
                                            <!-- end speech -->

                                            <!-- speech -->
                                            <div class="program__speech">
                                                <div class="program__speaker">
                                                    <div class="program__speaker-img">
                                                        <img src="{{ asset('assets_fontend/img/speakers/1.jpg') }}" alt="">
                                                    </div>
                                                    <div class="program__speaker-about">
                                                        <p>Otto Bree</p>
                                                        <span>Themeforest</span>
                                                    </div>
                                                </div>
                                                <div class="program__agenda">
                                                    <h3>Tendances commerciales pour 2022</h3>
                                                    <span>13:00 pm - 14:30 pm</span>
                                                    <p>Many desktop publishing packages and web page editors now use
                                                        Lorem Ipsum as their default model text, and a search for 'lorem
                                                        ipsum' will uncover many web sites still in their infancy.
                                                        Various versions have evolved over the years, sometimes by
                                                        accident, sometimes on purpose (injected humour and the like).
                                                    </p>
                                                    <p>The point of using Lorem Ipsum is that it has a more-or-less
                                                        normal distribution of letters, as opposed to using 'Content
                                                        here, content here', making it look like readable English.</p>
                                                </div>
                                            </div>
                                            <!-- end speech -->

                                            <!-- speech -->
                                            <div class="program__speech">
                                                <div class="program__speaker">
                                                    <div class="program__speaker-img">
                                                        <img src="{{ asset('assets_fontend/img/speakers/6.jpg') }}" alt="">
                                                    </div>
                                                    <div class="program__speaker-about">
                                                        <p>Sophie Moore</p>
                                                        <span>Photodune</span>
                                                    </div>
                                                </div>
                                                <div class="program__agenda">
                                                    <h3>The Future of Business</h3>
                                                    <span>13:00 pm - 14:30 pm</span>
                                                    <p>Many desktop publishing packages and web page editors now use
                                                        Lorem Ipsum as their default model text, and a search for 'lorem
                                                        ipsum' will uncover many web sites still in their infancy.
                                                        Various versions have evolved over the years, sometimes by
                                                        accident, sometimes on purpose (injected humour and the like).
                                                    </p>
                                                    <p>The point of using Lorem Ipsum is that it has a more-or-less
                                                        normal distribution of letters, as opposed to using 'Content
                                                        here, content here', making it look like readable English.</p>
                                                </div>
                                            </div>
                                            <!-- end speech -->
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
                                        <div class="program__content program__content--2">
                                            <!-- speech -->
                                            <div class="program__speech">
                                                <div class="program__speaker">
                                                    <div class="program__speaker-img">
                                                        <img src="{{ asset('assets_fontend/img/speakers/2.jpg') }}" alt="">
                                                    </div>
                                                    <div class="program__speaker-about">
                                                        <p>Eliza Josceline</p>
                                                        <span>Codecanyon</span>
                                                    </div>
                                                </div>
                                                <div class="program__agenda">
                                                    <h3>Conference Opening</h3>
                                                    <span>9:00 am - 10:30 am</span>
                                                    <p>Many desktop publishing packages and web page editors now use
                                                        Lorem Ipsum as their default model text, and a search for 'lorem
                                                        ipsum' will uncover many web sites still in their infancy.
                                                        Various versions have evolved over the years, sometimes by
                                                        accident, sometimes on purpose (injected humour and the like).
                                                    </p>
                                                    <p>The point of using Lorem Ipsum is that it has a more-or-less
                                                        normal distribution of letters, as opposed to using 'Content
                                                        here, content here', making it look like readable English.</p>
                                                </div>
                                            </div>
                                            <!-- end speech -->

                                            <!-- speech -->
                                            <div class="program__speech">
                                                <div class="program__speaker">
                                                    <div class="program__speaker-img">
                                                        <img src="{{ asset('assets_fontend/img/speakers/4.jpg') }}" alt="">
                                                    </div>
                                                    <div class="program__speaker-about">
                                                        <p>Georgiana Patti</p>
                                                        <span>Audiojungle</span>
                                                    </div>
                                                </div>
                                                <div class="program__agenda">
                                                    <h3>Intro to Business</h3>
                                                    <span>11:00 am - 12:30 pm</span>
                                                    <p>Many desktop publishing packages and web page editors now use
                                                        Lorem Ipsum as their default model text, and a search for 'lorem
                                                        ipsum' will uncover many web sites still in their infancy.
                                                        Various versions have evolved over the years, sometimes by
                                                        accident, sometimes on purpose (injected humour and the like).
                                                    </p>
                                                    <p>The point of using Lorem Ipsum is that it has a more-or-less
                                                        normal distribution of letters, as opposed to using 'Content
                                                        here, content here', making it look like readable English.</p>
                                                </div>
                                            </div>
                                            <!-- end speech -->

                                            <!-- speech -->
                                            <div class="program__speech">
                                                <div class="program__speaker">
                                                    <div class="program__speaker-img">
                                                        <img src="{{ asset('assets_fontend/img/speakers/5.jpg') }}" alt="">
                                                    </div>
                                                    <div class="program__speaker-about">
                                                        <p>Joni Celeste</p>
                                                        <span>Graphicriver</span>
                                                    </div>
                                                </div>
                                                <div class="program__agenda">
                                                    <h3>Business Trends for 2022</h3>
                                                    <span>13:00 pm - 14:30 pm</span>
                                                    <p>Many desktop publishing packages and web page editors now use
                                                        Lorem Ipsum as their default model text, and a search for 'lorem
                                                        ipsum' will uncover many web sites still in their infancy.
                                                        Various versions have evolved over the years, sometimes by
                                                        accident, sometimes on purpose (injected humour and the like).
                                                    </p>
                                                    <p>The point of using Lorem Ipsum is that it has a more-or-less
                                                        normal distribution of letters, as opposed to using 'Content
                                                        here, content here', making it look like readable English.</p>
                                                </div>
                                            </div>
                                            <!-- end speech -->
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
                                        <div class="program__content program__content--3">
                                            <!-- speech -->
                                            <div class="program__speech">
                                                <div class="program__speaker">
                                                    <div class="program__speaker-img">
                                                        <img src="{{ asset('assets_fontend/img/speakers/8.jpg') }}" alt="">
                                                    </div>
                                                    <div class="program__speaker-about">
                                                        <p>Cong Duong</p>
                                                        <span>Envato</span>
                                                    </div>
                                                </div>
                                                <div class="program__agenda">
                                                    <h3>Conference Opening</h3>
                                                    <span>9:00 am - 10:30 am</span>
                                                    <p>Many desktop publishing packages and web page editors now use
                                                        Lorem Ipsum as their default model text, and a search for 'lorem
                                                        ipsum' will uncover many web sites still in their infancy.
                                                        Various versions have evolved over the years, sometimes by
                                                        accident, sometimes on purpose (injected humour and the like).
                                                    </p>
                                                    <p>The point of using Lorem Ipsum is that it has a more-or-less
                                                        normal distribution of letters, as opposed to using 'Content
                                                        here, content here', making it look like readable English.</p>
                                                </div>
                                            </div>
                                            <!-- end speech -->

                                            <!-- speech -->
                                            <div class="program__speech">
                                                <div class="program__speaker">
                                                    <div class="program__speaker-img">
                                                        <img src="{{ asset('assets_fontend/img/speakers/1.jpg') }}" alt="">
                                                    </div>
                                                    <div class="program__speaker-about">
                                                        <p>Otto Bree</p>
                                                        <span>Themeforest</span>
                                                    </div>
                                                </div>
                                                <div class="program__agenda">
                                                    <h3>Intro to Business</h3>
                                                    <span>11:00 am - 12:30 pm</span>
                                                    <p>Many desktop publishing packages and web page editors now use
                                                        Lorem Ipsum as their default model text, and a search for 'lorem
                                                        ipsum' will uncover many web sites still in their infancy.
                                                        Various versions have evolved over the years, sometimes by
                                                        accident, sometimes on purpose (injected humour and the like).
                                                    </p>
                                                    <p>The point of using Lorem Ipsum is that it has a more-or-less
                                                        normal distribution of letters, as opposed to using 'Content
                                                        here, content here', making it look like readable English.</p>
                                                </div>
                                            </div>
                                            <!-- end speech -->

                                            <!-- speech -->
                                            <div class="program__speech">
                                                <div class="program__speaker">
                                                    <div class="program__speaker-img">
                                                        <img src="{{ asset('assets_fontend/img/speakers/5.jpg') }}" alt="">
                                                    </div>
                                                    <div class="program__speaker-about">
                                                        <p>Joni Celeste</p>
                                                        <span>Graphicriver</span>
                                                    </div>
                                                </div>
                                                <div class="program__agenda">
                                                    <h3>Business Trends for 2022</h3>
                                                    <span>13:00 pm - 14:30 pm</span>
                                                    <p>Many desktop publishing packages and web page editors now use
                                                        Lorem Ipsum as their default model text, and a search for 'lorem
                                                        ipsum' will uncover many web sites still in their infancy.
                                                        Various versions have evolved over the years, sometimes by
                                                        accident, sometimes on purpose (injected humour and the like).
                                                    </p>
                                                    <p>The point of using Lorem Ipsum is that it has a more-or-less
                                                        normal distribution of letters, as opposed to using 'Content
                                                        here, content here', making it look like readable English.</p>
                                                </div>
                                            </div>
                                            <!-- end speech -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end tabs content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end program -->

    <!-- gallery -->
    <section class="section section--blue">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12 col-xl-6 offset-xl-3">
                    <div class="section__title section__title--border">
                        <h2>Galerie de photos</h2>
                    </div>
                </div>
                <!-- end section title -->
            </div>
        </div>

        <!-- gallery wrap -->
        <div class="container" id="gallery">
            <div class="row">
                <div class="col-12">
                    <div class="gallery">
                        <!-- gallery item -->
                        <figure class="gallery__item gallery__item--1">
                            <a href="{{ asset('assets_fontend/img/fisat/image-1.jpg') }}" title="Some Image Title 1">
                                <img src="{{ asset('assets_fontend/img/fisat/image-1.jpg') }}" alt="Some Image Title 1" />
                            </a>
                        </figure>
                        <!-- end gallery item -->

                        <!-- gallery item -->
                        <figure class="gallery__item gallery__item--2">
                            <a href="{{ asset('assets_fontend/img/fisat/image-2.jpg') }}" title="There may not be a Title">
                                <img src="{{ asset('assets_fontend/img/fisat/image-2.jpg') }}" alt="There may not be a Title" />
                            </a>
                        </figure>
                        <!-- end gallery item -->

                        <!-- gallery item -->
                        <figure class="gallery__item gallery__item--3">
                            <a href="{{ asset('assets_fontend/img/fisat/image-3.jpg') }}" title="Some Image Title 3">
                                <img src="{{ asset('assets_fontend/img/fisat/image-3.jpg') }}" alt="Some Image Title 3" />
                            </a>
                        </figure>
                        <!-- end gallery item -->

                        <!-- gallery item -->
                        <figure class="gallery__item gallery__item--4">
                            <a href="{{ asset('assets_fontend/img/fisat/image-4.jpg') }}" title="Some Image Title 4">
                                <img src="{{ asset('assets_fontend/img/fisat/image-4.jpg') }}" alt="Some Image Title 4" />
                            </a>
                        </figure>
                        <!-- end gallery item -->
                    </div>
                </div>
            </div>

            <div class="row collapse" id="collapsemore">
                <div class="col-12">
                    <div class="gallery">
                        <!-- gallery item -->
                        <figure class="gallery__item gallery__item--5">
                            <a href="{{ asset('assets_fontend/img/fisat/image-5.jpg') }}" title="Some Image Title 5">
                                <img src="{{ asset('assets_fontend/img/fisat/image-5.jpg') }}" alt="Some Image Title 5" />
                            </a>
                        </figure>
                        <!-- end gallery item -->

                        <!-- gallery item -->
                        <figure class="gallery__item gallery__item--6">
                            <a href="{{ asset('assets_fontend/img/fisat/image-6.jpg') }}" title="Some Image Title 6">
                                <img src="{{ asset('assets_fontend/img/fisat/image-6.jpg') }}" alt="Some Image Title 6" />
                            </a>
                        </figure>
                        <!-- end gallery item -->

                        <!-- gallery item -->
                        <figure class="gallery__item gallery__item--7">
                            <a href="{{ asset('assets_fontend/img/fisat/image-7.jpg') }}" title="Some Image Title 7">
                                <img src="{{ asset('assets_fontend/img/fisat/image-7.jpg') }}" alt="Some Image Title 7" />
                            </a>
                        </figure>
                        <!-- end gallery item -->

                        <!-- gallery item -->
                        <figure class="gallery__item gallery__item--8">
                            <a href="{{ asset('assets_fontend/img/fisat/image-9.jpg') }}" title="Some Image Title 8">
                                <img src="{{ asset('assets_fontend/img/fisat/image-9.jpg') }}" alt="Some Image Title 8" />
                            </a>
                        </figure>
                        <!-- end gallery item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end gallery wrap -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <button class="section__btn section__btn--more" type="button" data-toggle="collapse"
                        data-target="#collapsemore" aria-expanded="false" aria-controls="collapsemore">
                        <span>
                            Voir plus
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- end gallery -->

    <!-- registration -->
    <section class="section" id="registration">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <div class="section__title section__title--border">
                        <h2>Inscription</h2>
                        <p>Choisissez un pack qui correspond a vos besoin et inscrivez-vous !!!</p>
                    </div>
                </div>
                <!-- end section title -->
            </div>

            <div class="row row--grid">
                <!-- pass -->
                <div class="col-12 col-md-6 order-md-1 col-lg-4 order-lg-1">
                    <div class="pass">
                        <h3 class="pass__title">PACK 1</h3>
                        <div class="pass__price">950 000 <span>FCFA</span></div>
                        <div class="pass__price">1 450 <span>€</span></div>
                        <ul class="pass__list">
                            <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>TRANSPORT AEROPORT-HOTE</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>KIT DE PARTICIPATION</li>
                            <li class="not-included">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>RDV B to B</li>
                            <li class="not-included">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>HEBERGEMENT SOFITEL HOTEL IVOIRE
                            </li>
                            <li class="not-included">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>DEJEUNER
                            </li>
                            <li class="not-included">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>DINER GALA
                            </li>
                             <li class="not-included">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>TRANSPORT HOTEL-AEROPORT
                            </li>
                        </ul>

                        <a href="{{ route('fontend.index') }}#pass-modal" class="pass__btn open-modal" style="background: linear-gradient(65deg, #c55d03 0%, #eb8326 100%);"><span>Réservation</span></a>
                    </div>
                </div>
                <!-- end pass -->

                <!-- pass -->
                <div class="col-12 order-md-3 col-lg-4 order-lg-2">
                    <div class="pass pass--dark">
                        <h3 class="pass__title">PACK 2</h3>{{-- 850 000 FCFA – 1 298 € --}}
                        <div class="pass__price">850 000 <span>FCFA</span></div>
                        <div class="pass__price">1 298 <span>€</span></div>
                        <ul class="pass__list">
                            <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg> KIT DE PARTICIPATION
                            </li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg> RDV B to B
                            </li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg> HEBERGEMENT SOFITEL HOTEL IVOIRE
                            </li>
                            <li class="not-included"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>DEJEUNER
                            </li>
                            <li class="not-included"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>DINER GALA
                            </li>
                        </ul>

                        <a href="{{ route('fontend.index') }}#pass-modal" class="pass__btn open-modal" style="background: linear-gradient(65deg, #c55d03 0%, #eb8326 100%);"><span>Réservation</span></a>
                    </div>
                </div>
                <!-- end pass -->

                <!-- pass -->
                <div class="col-12 col-md-6 order-md-2 col-lg-4 order-lg-3">
                    <div class="pass">
                        <h3 class="pass__title">PACK 3</h3>
                           <div class="pass__price">450 000 <span>FCFA</span></div>
                        <div class="pass__price">687 <span>€</span></div>
                        <ul class="pass__list">
                            <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>KIT DE PARTICIPATION</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>RDV B to B</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>DEJEUNER</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>GALA</li>
                        </ul>
                        <a href="{{ route('fontend.index') }}#pass-modal" style="background: linear-gradient(65deg, #c55d03 0%, #eb8326 100%);" class="pass__btn open-modal"><span>Réservation</span></a>
                    </div>
                </div>

                <div class="col-12 col-md-6 order-md-2 col-lg-4 order-lg-3">
                    <div class="pass">
                        <h3 class="pass__title">PACK 4</h3>
                           <div class="pass__price">180 000 <span>FCFA</span></div>
                        <div class="pass__price">275 <span>€</span></div>
                        <ul class="pass__list">
                            <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>KIT DE PARTICIPATION</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>RDV B to B</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg>DEJEUNER
                            </li>
                        </ul>

                        <div class="pass__progress">
                            <div class="progress-bar" role="progressbar" style="width: 54%" aria-valuenow="54"
                                aria-valuemin="0" aria-valuemax="100" aria-label="premium-pass"></div>
                        </div>

                        <div class="pass__counter">137 <span>/ 250</span></div>

                        <a href="{{ route('fontend.index') }}#pass-modal" style="background: linear-gradient(65deg, #c55d03 0%, #eb8326 100%);" class="pass__btn open-modal"><span>Réservation</span></a>
                    </div>
                </div>
                <!-- end pass -->
            </div>
        </div>
    </section>
    <!-- end registration -->

    <!-- sponsors -->
    <section class="section section--gradiend-top section--gradiend-bot">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <div class="section__title section__title--between section__title--border">
                        <h2>Partenaires & <br>Sponsors</h2>
                        <p>Que vous souhaitiez bénéficier d’une visibilité maximale, d’une présence renforcée ou d’une exposition ciblée,
                             nous avons la solution idéale pour vous. <br>
                              <a data-scroll href="{{ route('fontend.index') }}#contacts">Devenir partenaire.</a></p>
                    </div>
                </div>
                <!-- end section title -->

                <!-- sponsors -->
                <div class="col-12">
                    <ul class="sponsors">
                        <li>
                            <a href="{{ route('fontend.index') }}#">
                                <img src="{{ asset('assets_fontend/img/sponsors/3docean-center.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('fontend.index') }}#">
                                <img src="{{ asset('assets_fontend/img/sponsors/videohive-center.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('fontend.index') }}#">
                                <img src="{{ asset('assets_fontend/img/sponsors/audiojungle-center.png')}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('fontend.index') }}#">
                                <img src="{{ asset('assets_fontend/img/sponsors/codecanyon-center.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('fontend.index') }}#">
                                <img src="{{ asset('assets_fontend/img/sponsors/photodune-center.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('fontend.index') }}#">
                                <img src="{{ asset('assets_fontend/img/sponsors/themeforest-center.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('fontend.index') }}#">
                                <img src="{{ asset('assets_fontend/img/sponsors/graphicriver-center.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('fontend.index') }}#">
                                <img src="{{ asset('assets_fontend/img/sponsors/videohive-center.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('fontend.index') }}#">
                                <img src="{{ asset('assets_fontend/img/sponsors/audiojungle-center.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('fontend.index') }}#">
                                <img src="{{ asset('assets_fontend/img/sponsors/codecanyon-center.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('fontend.index') }}#">
                                <img src="{{ asset('assets_fontend/img/sponsors/photodune-center.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('fontend.index') }}#">
                                <img src="{{ asset('assets_fontend/img/sponsors/themeforest-center.png') }}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end sponsors -->
            </div>
        </div>
    </section>
    <!-- end sponsors -->

    <!-- faq -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <div class="section__title section__title--border">
                        <h2>Frequently Asked Questions</h2>
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                            as opposed to using 'Content here, content here', making it look like readable English.</p>
                    </div>
                </div>
                <!-- end section title -->

                <!-- accordion -->
                <div class="col-12">
                    <div class="accordion" id="accordion">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="accordion__card">
                                    <button class="" type="button" data-toggle="collapse" data-target="#collapse1"
                                        aria-expanded="false" aria-controls="collapse1">
                                        Who are the confirmed speakers for the event?
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                        </span>
                                    </button>

                                    <div id="collapse1" class="collapse" data-parent="#accordion">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page <b>when looking at its layout</b>. The point of
                                            using Lorem Ipsum is that it has a more-or-less normal distribution of
                                            letters, as opposed to using 'Content here, content here', making it look
                                            like readable English.</p>
                                    </div>
                                </div>

                                <div class="accordion__card">
                                    <button class="collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Do you offer discounts for students?
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                        </span>
                                    </button>

                                    <div id="collapse2" class="collapse" data-parent="#accordion">
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their default model text, and a search for 'lorem ipsum' will uncover many
                                            web sites still in their infancy. Various versions have evolved over the
                                            years, sometimes by accident, sometimes on purpose (injected humour and the
                                            like).</p>
                                    </div>
                                </div>

                                <div class="accordion__card">
                                    <button class="collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Is there going to be an event recording?
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                        </span>
                                    </button>

                                    <div id="collapse3" class="collapse" data-parent="#accordion">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable.</p>
                                    </div>
                                </div>

                                <div class="accordion__card">
                                    <button class="collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Do you offer bulk discounts for big marketing teams?
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                        </span>
                                    </button>

                                    <div id="collapse4" class="collapse" data-parent="#accordion">
                                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                            isn't anything embarrassing hidden in the middle of text. All the Lorem
                                            Ipsum generators on the Internet tend to repeat predefined chunks as
                                            necessary, making this the first true generator on the Internet.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="accordion__card">
                                    <button class="collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        Do you offer bulk discounts for big marketing teams?
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                        </span>
                                    </button>

                                    <div id="collapse5" class="collapse" data-parent="#accordion">
                                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                            isn't anything embarrassing hidden in the middle of text. All the Lorem
                                            Ipsum generators on the Internet tend to repeat predefined chunks as
                                            necessary, making this the first true generator on the Internet.</p>
                                    </div>
                                </div>

                                <div class="accordion__card">
                                    <button class="collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                        Is the event venue confirmed?
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                        </span>
                                    </button>

                                    <div id="collapse6" class="collapse" data-parent="#accordion">
                                        <p>It uses a dictionary of over 200 Latin words, combined with a handful of
                                            model sentence structures, to generate Lorem Ipsum which looks reasonable.
                                            The generated Lorem Ipsum is therefore always free from repetition, injected
                                            humour, or non-characteristic words etc.</p>
                                    </div>
                                </div>

                                <div class="accordion__card">
                                    <button class="collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                        Who are the confirmed speakers for the event?
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                        </span>
                                    </button>

                                    <div id="collapse7" class="collapse" data-parent="#accordion">
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their default model text, and a search for 'lorem ipsum' will uncover many
                                            web sites still in their infancy. Various versions have evolved over the
                                            years, sometimes by accident, sometimes on purpose (injected humour and the
                                            like).</p>
                                    </div>
                                </div>

                                <div class="accordion__card">
                                    <button class="collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                        Do you offer discounts for students?
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z" />
                                            </svg>
                                        </span>
                                    </button>

                                    <div id="collapse8" class="collapse" data-parent="#accordion">
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their default model text, and a search for 'lorem ipsum' will uncover many
                                            web sites still in their infancy. Various versions have evolved over the
                                            years, sometimes by accident, sometimes on purpose (injected humour and the
                                            like).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end accordion -->
            </div>
        </div>
    </section>
    <!-- end faq -->

    <!-- get in touch -->
    <section class="section section--dark" id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <!-- section title -->
                    <div class="section__title section__title--white section__title--left">
                        <h2>Get In Touch</h2>
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                            as opposed to using 'Content here, content here', making it look like readable English.</p>
                    </div>
                    <!-- end section title -->

                    <!-- contacts -->
                    <div class="contacts">
                        <div class="contacts__list">
                            <a href="mailto:contact@rency.com" class="contact">
                                <span class="contact__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm-.41,2-5.88,5.88a1,1,0,0,1-1.42,0L5.41,6ZM20,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V7.41l5.88,5.88a3,3,0,0,0,4.24,0L20,7.41Z" />
                                    </svg>
                                </span>
                                <span class="contact__text">contact@rency.com</span>
                            </a>

                            <a href="tel:88007775353" class="contact">
                                <span class="contact__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M12.71,16.29l-.15-.12a.76.76,0,0,0-.18-.09L12.2,16a1,1,0,0,0-.91.27,1.15,1.15,0,0,0-.21.33,1,1,0,0,0,1.3,1.31,1.46,1.46,0,0,0,.33-.22,1,1,0,0,0,.21-1.09A1,1,0,0,0,12.71,16.29ZM16,2H8A3,3,0,0,0,5,5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z" />
                                    </svg>
                                </span>
                                <span class="contact__text">8 800 777 53 53</span>
                            </a>

                            <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                class="contact open-map">
                                <span class="contact__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M18,4.48a8.45,8.45,0,0,0-12,12l5.27,5.28a1,1,0,0,0,1.42,0L18,16.43A8.45,8.45,0,0,0,18,4.48ZM16.57,15,12,19.59,7.43,15a6.46,6.46,0,1,1,9.14,0ZM9,7.41a4.32,4.32,0,0,0,0,6.1,4.31,4.31,0,0,0,7.36-3,4.24,4.24,0,0,0-1.26-3.05A4.3,4.3,0,0,0,9,7.41Zm4.69,4.68a2.33,2.33,0,1,1,.67-1.63A2.33,2.33,0,0,1,13.64,12.09Z" />
                                    </svg>
                                </span>
                                <span class="contact__text">221B Baker St, Marylebone</span>
                            </a>
                        </div>

                        <!-- social -->
                        <div class="social">
                            <h3 class="social__title">Found us on social media</h3>
                            <div class="social__list">
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M23,9.71a8.5,8.5,0,0,0-.91-4.13,2.92,2.92,0,0,0-1.72-1A78.36,78.36,0,0,0,12,4.27a78.45,78.45,0,0,0-8.34.3,2.87,2.87,0,0,0-1.46.74c-.9.83-1,2.25-1.1,3.45a48.29,48.29,0,0,0,0,6.48,9.55,9.55,0,0,0,.3,2,3.14,3.14,0,0,0,.71,1.36,2.86,2.86,0,0,0,1.49.78,45.18,45.18,0,0,0,6.5.33c3.5.05,6.57,0,10.2-.28a2.88,2.88,0,0,0,1.53-.78,2.49,2.49,0,0,0,.61-1,10.58,10.58,0,0,0,.52-3.4C23,13.69,23,10.31,23,9.71ZM9.74,14.85V8.66l5.92,3.11C14,12.69,11.81,13.73,9.74,14.85Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.07294,2H8.9375C3.33331,2,2,3.33331,2,8.92706V15.0625C2,20.66663,3.32294,22,8.92706,22H15.0625C20.66669,22,22,20.67706,22,15.07288V8.9375C22,3.33331,20.67706,2,15.07294,2Zm3.07287,14.27081H16.6875c-.55206,0-.71875-.44793-1.70831-1.4375-.86463-.83331-1.22919-.9375-1.44794-.9375-.30206,0-.38544.08332-.38544.5v1.3125c0,.35419-.11456.5625-1.04162.5625a5.69214,5.69214,0,0,1-4.44794-2.66668A11.62611,11.62611,0,0,1,5.35419,8.77081c0-.21875.08331-.41668.5-.41668H7.3125c.375,0,.51044.16668.65625.55212.70831,2.08331,1.91669,3.89581,2.40625,3.89581.1875,0,.27081-.08331.27081-.55206V10.10413c-.0625-.97913-.58331-1.0625-.58331-1.41663a.36008.36008,0,0,1,.375-.33337h2.29169c.3125,0,.41662.15625.41662.53125v2.89587c0,.3125.13544.41663.22919.41663.1875,0,.33331-.10413.67706-.44788a11.99877,11.99877,0,0,0,1.79169-2.97919.62818.62818,0,0,1,.63544-.41668H17.9375c.4375,0,.53125.21875.4375.53125A18.20507,18.20507,0,0,1,16.41669,12.25c-.15625.23956-.21875.36456,0,.64581.14581.21875.65625.64582,1,1.05207a6.48553,6.48553,0,0,1,1.22912,1.70837C18.77081,16.0625,18.5625,16.27081,18.14581,16.27081Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('fontend.index') }}#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M10.13831,10.62982h-.00013a1.05288,1.05288,0,1,0,.00013,0Zm3.75427,0a1.14582,1.14582,0,1,0,1.04907,1.14166A1.09586,1.09586,0,0,0,13.89258,10.62982Zm4.99878-8.6297H5.10864A2.11364,2.11364,0,0,0,3,4.119V18.02527A2.11368,2.11368,0,0,0,5.10864,20.1441H16.77258l-.54516-1.90289,1.31653,1.224,1.24462,1.152L21,22.57153V4.119A2.11364,2.11364,0,0,0,18.89136,2.00012ZM14.92114,15.43323v.00006s-.37036-.44232-.67895-.83319a3.2459,3.2459,0,0,0,1.86181-1.224,5.87837,5.87837,0,0,1-1.18286.60681,6.76974,6.76974,0,0,1-1.49145.44232,7.206,7.206,0,0,1-2.66394-.01025,8.64456,8.64456,0,0,1-1.51209-.44226,6.03735,6.03735,0,0,1-.75085-.34973c-.03089-.02063-.06165-.03089-.09253-.05146a.14171.14171,0,0,1-.04114-.03082c-.18506-.10284-.28809-.17487-.28809-.17487A3.19975,3.19975,0,0,0,9.8811,14.57953c-.30847.39093-.68908.8537-.68908.8537a3.72892,3.72892,0,0,1-3.13709-1.56342A13.775,13.775,0,0,1,7.536,7.87323a5.08641,5.08641,0,0,1,2.89026-1.08l.10278.12348A6.93762,6.93762,0,0,0,7.824,8.2641s.22632-.12341.60682-.29828a7.722,7.722,0,0,1,2.335-.64795,1.00465,1.00465,0,0,1,.17492-.02063,8.702,8.702,0,0,1,2.07764-.02051,8.384,8.384,0,0,1,3.096.98737,6.84576,6.84576,0,0,0-2.561-1.30628l.14392-.16449a5.08575,5.08575,0,0,1,2.89026,1.08,13.77368,13.77368,0,0,1,1.4812,5.99652A3.75972,3.75972,0,0,1,14.92114,15.43323Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- end social -->
                    </div>
                    <!-- end contacts -->
                </div>

                <!-- form -->
                <div class="col-12 col-lg-6 offset-lg-1">
                    <form class="form" action="{{ route('fontend.index') }}#">
                        <div id="form__parallax" class="form__wrap">
                            <div class="form__bg" data-depth="0.4"></div>
                        </div>

                        <div class="form__content">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="form__title">Write To Us</h4>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form__group">
                                        <label for="name" class="form__label">Name</label>
                                        <input id="name" type="text" name="name" class="form__input"
                                            placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form__group">
                                        <label for="mail" class="form__label">Email</label>
                                        <input id="mail" type="text" name="mail" class="form__input"
                                            placeholder="example@domain.com">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form__group">
                                        <label for="phone" class="form__label">Phone</label>
                                        <input id="phone" type="text" name="phone" class="form__input"
                                            placeholder="800 543 - 2109">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form__group">
                                        <label for="subject" class="form__label">Subject</label>
                                        <input id="subject" type="text" name="subject" class="form__input"
                                            placeholder="Ex. Support">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form__group">
                                        <label for="message" class="form__label">Message</label>
                                        <textarea id="message" name="message" class="form__textarea"
                                            placeholder="Please enter your message..."></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="button" class="form__btn">
                                        <span>SUBMIT</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end form -->
            </div>
        </div>
    </section>
    <!-- end get in touch -->

    <!-- footer -->
        @include('font-end.layouts.footer')
    <!-- end footer -->

    <!-- pass modal -->
    <div id="pass-modal" class="zoom-anim-dialog mfp-hide modal">
        <button class="modal__close" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z" />
            </svg></button>

        <form action="{{ route('fontend.index') }}#" class="modal__form">
            <h4 class="modal__title">Buy Ticket</h4>

            <div class="form__group form__group--dark">
                <label for="fullname" class="form__label">Name</label>
                <input id="fullname" type="text" name="name" class="form__input" placeholder="Full name">
            </div>

            <div class="form__group form__group--dark">
                <label for="email" class="form__label">Email</label>
                <input id="email" type="text" name="email" class="form__input" placeholder="example@domain.com">
            </div>

            <div class="form__group form__group--dark">
                <label class="form__label" for="value">Choose Pass:</label>
                <select class="form__select" name="value" id="value">
                    <option value="119">Regular - $119</option>
                    <option value="189">Standart - $189</option>
                    <option value="249">Premium - $249</option>
                </select>

                <span class="form__text">You can spend money from your account on the renewal of the connected packages,
                    or on the purchase of goods on our website.</span>
            </div>

            <div class="form__group form__group--dark">
                <label class="form__label">Payment method:</label>

                <ul class="form__radio">
                    <li>
                        <input id="type1" type="radio" name="type" checked="">
                        <label for="type1">Visa</label>
                    </li>
                    <li>
                        <input id="type2" type="radio" name="type">
                        <label for="type2">Mastercard</label>
                    </li>
                    <li>
                        <input id="type3" type="radio" name="type">
                        <label for="type3">Paypal</label>
                    </li>
                </ul>
            </div>

            <button type="button" class="form__btn form__btn--center">
                <span>Proceed</span>
            </button>
        </form>
    </div>
    <!-- end pass modal -->

    <!-- article modal -->
    <div id="about-modal" class="zoom-anim-dialog mfp-hide modal modal--article">
        <button class="modal__close" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z" />
            </svg></button>

        <div class="modal__article">
            <h1>About Us (H1)</h1>

            <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English.
            </p>

            <img src="{{ asset('assets_fontend/img/about/modal.jpg') }}" alt="">

            <p>
                Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                and a search for 'lorem ipsum' will <b>uncover many</b> web sites still in their infancy. Various
                versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and
                the like).
            </p>

            <h2>Some title(H2)</h2>

            <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden
                in the middle of text.
            </p>

            <h3>Some title(H3)</h3>

            <p>
                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this
                the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a
                handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated
                Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>

            <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a
                Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the
                undoubtable source.
            </p>

            <h4>Some title(H4)</h4>

            <p>
                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this
                the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a
                handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated
                Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>

            <blockquote>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                predefined chunks as necessary, making this the first true generator on the Internet.</blockquote>

            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>

            <h5>Some title(H5)</h5>

            <h6>Some title(H6)</h6>

            <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to
                generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from
                repetition, injected humour, or non-characteristic words etc.</p>

            <ul>
                <li>Theme Forest</li>
                <li>Graphic River</li>
                <li>Audio Jungle</li>
                <li>3D Ocean</li>
                <li>Code Canayon</li>
            </ul>

            <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden
                in the middle of text. <a href="{{ route('fontend.index') }}#">Link</a> the Lorem Ipsum generators on the Internet tend to
                repeat predefined chunks as necessary, making this the first true generator on the Internet.
            </p>
        </div>
    </div>
    <!-- end article modal -->

    <!-- privacy modal -->
    <div id="privacy-modal" class="zoom-anim-dialog mfp-hide modal modal--article">
        <button class="modal__close" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z" />
            </svg></button>

        <div class="modal__article">
            <h1>Privacy policy</h1>

            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

            <h3>Determination of personal information of users</h3>

            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

            <ol>
                <li>If you are going to use a passage of Lorem Ipsum:
                    <ol>
                        <li>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                            necessary, making this the first true generator on the Internet.</li>
                        <li>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
                            structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is
                            therefore always free from repetition, injected humour, or non-characteristic words etc.
                        </li>
                    </ol>
                </li>
                <li>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don't look even slightly
                    believable.</li>
                <li>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                    text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                    versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour
                    and the like).</li>
            </ol>

            <h4>Reasons for collecting and processing user personal information</h4>

            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden
                in the middle of text.</p>

            <ol>
                <li>It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters.</li>
                <li>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
                    this the first true generator on the Internet:
                    <ol>
                        <li>It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged;</li>
                        <li>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages;</li>
                        <li>Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                            (injected humour and the like);</li>
                        <li>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                            model text;</li>
                    </ol>
                </li>
            </ol>

            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this
                the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a
                handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated
                Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>

            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden
                in the middle of text. <a href="{{ route('fontend.index') }}#">Link</a> the Lorem Ipsum generators on the Internet tend to
                repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
        </div>
    </div>
    <!-- end privacy modal -->

    <!-- The Gallery as lightbox dialog, should be a document body child element -->
    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" aria-label="image gallery"
        aria-modal="true" role="dialog">
        <div class="slides" aria-live="polite"></div>
        <h4 class="title">Some image title will be here</h4>
        <button class="prev" aria-controls="blueimp-gallery" aria-label="previous slide" aria-keyshortcuts="ArrowLeft"
            type="button"></button>
        <button class="next" aria-controls="blueimp-gallery" aria-label="next slide" aria-keyshortcuts="ArrowRight"
            type="button"></button>
        <button class="close" aria-controls="blueimp-gallery" aria-label="close" aria-keyshortcuts="Escape"
            type="button"></button>
    </div>

    @include('font-end.layouts.scripts')
    @yield('js')
</body>

</html>
