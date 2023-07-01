<!DOCTYPE html>
<html lang="fr">
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

    @yield('content')

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
