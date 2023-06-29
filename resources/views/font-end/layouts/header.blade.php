<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__content">
                    <!-- btn -->
                    <button class="header__btn" type="button" aria-label="header__nav">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- end btn -->

                    <!-- logo -->
                    <a data-scroll href="{{ route('fontend.index') }}#hero" class="header__logo">
                        <img class="header__logo-white" src="img/logo.svg" alt="">
                        <img class="header__logo-dark" src="img/logo--dark.svg" alt="">
                    </a>
                    <!-- end logo -->

                    <!-- tagline -->
                    <span class="header__tagline">Conference <br>Landing Page</span>
                    <!-- end tagline -->

                    <!-- navigation -->
                    <ul class="header__nav" id="header__nav">
                        {{-- <li class="dropdown header__dropdown">
                            <a class="dropdown-toggle" href="{{ route('fontend.index') }}#" role="button" id="dropdownMenuLink1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home <svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z" />
                                </svg></a>

                            <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                <li><a href="index.html">Landing page v1</a></li>
                                <li><a href="index2.html">Landing page v2</a></li>
                                <li><a href="index3.html">Landing page v3</a></li>
                            </ul>
                        </li> --}}
                        <li>
                            <a data-scroll href="{{ route('fontend.index') }}#">Accueil</a>
                        </li>
                        <li>
                            <a data-scroll href="{{ route('fontend.index') }}#speakers">Speakers</a>
                        </li>
                        <li>
                            <a data-scroll href="{{ route('fontend.index') }}#agenda">Agenda</a>
                        </li>
                        <li>
                            <a data-scroll href="{{ route('fontend.index') }}#registration">Registration</a>
                        </li>
                        <li>
                            <a data-scroll href="{{ route('fontend.index') }}#contacts">Contacts</a>
                        </li>
                    </ul>
                    <!-- end navigation -->

                    <!-- sign in -->
                    <a data-scroll href="{{ route('fontend.index') }}#registration" class="header__cta"><span>Buy ticket</span></a>
                    <!-- end sign in -->
                </div>
            </div>
        </div>
    </div>
</header>
