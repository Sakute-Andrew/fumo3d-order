<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project FUMO</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>

        <header class="header">
            <div class="header__inner container">
                <div class="header__for-mobile">
                    <figure class="header__logo">
                        <img class="header__decoration decoration decoration--mobile"
                             src="./images/decorations/Decoration.svg" alt="Project Fumo">
                    </figure>
                    <button class="header__burger-button burger-button visible-mobile" type="button"
                            onclick="mobileOverlay.showModal()">
                        <span class="visually-hidden">Open navigation menu</span>
                    </button>
                </div>
                <nav class="header__menu menu hidden-mobile">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a class="menu__link" href="#">About us</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">Materials</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">Make Order</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">Calculation</a>
                        </li>
                    </ul>
                </nav>
                <button class="header__sign-in-button button" type="button"
                        onclick="mobileOverlay.showModal()" name="Sign in">
                    Sign in
                </button>
            </div>
            <div class="header__divider"></div>
        </header>
        <main>
        <div class="main-wrapper">
            <section class="toast-layout">
                <article class="hello-page">
                    <div class="hello-page">
                        <div class="hello-page__article">
                            <h1 class="article__title">Welcome to Project FUMO</h1>
                            <h3 class="article__subtitle">Fresh ideas. For everybody</h3>
                            <p class="article__description">Your manufacturer in real time. Order industrial quality custom parts at low cost. All materials from plastic to metal - FDM, SLA, SLS, MJF, DMLS.</p>
                        </div>
                        <div class="hello-page__content">
                            <a>
                                <img src="https://static1.makeuseofimages.com/wordpress/wp-content/uploads/2022/06/3D-printer-types.jpg" />
                            </a>
                        </div>
                    </div>
                </article>
                <article class="card-page">
                    <div class="card-page__main">
                        <h3 class="card-page__title">How it works?</h3>
                        <div class="card-page__wrapper">
                                <div class="card-page__content">
                                    <img src="https://media.graphassets.com/ibdcfgStSWW3w6zY6AYk">
                                    <h3 class="card-page__title">Upload your project</h3>
                                    <p class="card-page__description">More than 35 file formats are supported, including STL, OBJ, STEP and ZIP. All uploads are secure and confidential.</p>
                                </div>
                                <div class="card-page__content">
                                    <img src="https://media.graphassets.com/Sr6vnP8ATEOvAq15ncNg">
                                    <h3 class="card-page__title">Chose your material</h3>
                                    <p class="card-page__description">Catalog has more than 20 printing materials and colours. We also offer special requirements</p>
                                    <a href="#" class="card-page__button">See materials -></a>
                                </div>
                                <div class="card-page__content">
                                    <img src="https://media.graphassets.com/MnGBcA9QjebKRMZEWshz">
                                    <h3 class="card-page__title">Select your delivery plan</h3>
                                    <p class="card-page__description">Choose your deliverer from more than 150 services worldwide and receive your order fast and hassle-free.</p>
                                </div>
                        </div>
                    </div>
                </article>
                <article class="why-us">
                    <div class="why-us__wrapper">
                        <div class="why-us__left">
                            <h2>Why Fumo?</h2>
                        </div>
                        <div class="why-us__image">
                            <img src="https://media.graphassets.com/resize=fit:max,height:400,width:600/output=format:webp/RGxC05HCRJaketsk5xB4" alt="Why us">
                        </div>
                        <div class="why-us__right">
                            <ol class="numbered-list">
                            <li class="numbered-list__item">
                                <span class="NumberedListItem__content">
                                    <div class="Stack Stack--space-80">
                                        <h3 class="ContentHeadline ContentHeadline--size-70">Transparent pricing. No minimum order..</h3>
                                        <p class="ContentParagraph ContentParagraph--appearance-base">Unlike other 3D printing services, we will never charge you a service fee or require minimum order amounts.</p>
                                    </div>
                                </span>
                            </li>
                            <li class="numbered-list__item"><span class="NumberedListItem__content">
                                    <div class="Stack Stack--space-80">
                                        <h3 class="ContentHeadline ContentHeadline--size-70">Instant price comparison of 3D printing services worldwide</h3>
                                        <p class="ContentParagraph ContentParagraph--appearance-base">For the best price on high-quality 3D prints, Craftcloud compares prices in real-time from among manufacturers in your area and around the world.</p>
                                    </div>
                                </span>
                            </li>
                            <li class="numbered-list__item">
                                <span class="NumberedListItem__content">
                                    <div class="Stack Stack--space-80">
                                        <h3 class="ContentHeadline ContentHeadline--size-70">The most technologies</h3>
                                        <p class="ContentParagraph ContentParagraph--appearance-base">We are always expanding our network in order to offer as many cutting-edge 3D printing technologies and materials as possible, which now include FDM, SLA, SLS, DMLS/SLM, and MJF.</p>
                                    </div>
                                </span>
                            </li>
                            <li class="numbered-list__item">
                                <span class="NumberedListItem__content">
                                    <div class="Stack Stack--space-80">
                                        <h3 class="ContentHeadline ContentHeadline--size-70">Vetted printing partners</h3>
                                        <p class="ContentParagraph ContentParagraph--appearance-base">Craftcloud's manufacturing partners have been hand-selected and thoroughly evaluated based on their history of providing high-quality services and competitive prices.</p>
                                    </div>
                                </span>
                            </li>
                            </ol>
                        </div>
                    </div>
                </article>
                <article class="toast-layout__latest-tech">
                    <div class="latest-tech__wrapper">
                        <div class="latest-tech__top">
                        <div class="latest-tech__left">
                            <h2 class="latest-tech__title">Latest Technology</h2>
                            <p class="latest-tech__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc tincidunt aliquam. Nullam nec purus nec nunc tincidunt aliquam.</p>
                            <a href="#" class="latest-tech__button">Learn More</a>
                        </div>
                        <div class="latest-tech__right">
                            <img src="images/tech.png" alt="Tech">
                        </div>
                        </div>
                        <div class="latest-tech__bottom">
                            <button class="button"/>
                        </div>

                    </div>
                </article>

                <article class="toast-layout__contact-us">

                </article>
            </section>
        </div>

        </main>
            <footer class="footer">
                <div class="footer__inner container">
                    <div class="footer__left">
                        <div class="footer__block">
                            <h3 class="footer__heading">

                                Project FUMO. 3D Printing Service
                            </h3>
                            <p>&copy; {{ date('Y') }} Project FUMO. All rights reserved.</p>
                        </div>

                    </div>

                    <div class="footer__right">

                        <div class="footer__col">
                            <h4 class="footer__small-heading">
                                The legals
                            </h4>

                            <nav class="footer__menu menu">
                                <ul class="menu__list menu__list--vertical">
                                    <li class="menu__item ">
                                        <a class="menu__link" href="#">Copyright</a>
                                    </li>
                                    <li class="menu__item">
                                        <a class="menu__link" href="#">Privacy</a>
                                    </li>
                                    <li class="menu__item">
                                        <a class="menu__link" href="#">Contact</a>
                                    </li>
                                    <li class="menu__item">
                                        <a class="menu__link" href="#">Terms</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </footer>
        </footer>
    </body>
</html>
