<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project FUMO</title>
    <link href="/css/style.css" rel="stylesheet" >
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="main-wrapper">
    <header class="header">
        <div class="header__navbar">
            <div class="navbar__left">
                <a href="#" class="navbar__logo">
                    <img src="images/logo.png" alt="Logo">
                </a>
            </div>
            <div class="navbar__links">
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Materials</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Calculate Price</a></li>
                </ul>
            </div>
            <div class="navbar__right">
                <a href="#" class="navbar__button">Sign Up</a>
            </div>
        </div>
    </header>
    <main>
        <div class="main-wrapper">
            <section class="toast-layout">
                <article class="toast-layout__hello-page">
                    <div class="hello-page">
                        <div class="hello-page_article">
                            <h1 class="article__title">Welcome to Project FUMO</h1>
                            <h2 class="article__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc tincidunt aliquam. Nullam nec purus nec nunc tincidunt aliquam.</h2>
                            <p class="article__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc tincidunt aliquam. Nullam nec purus nec nunc tincidunt aliquam.</p>
                        </div>
                        <div class="hello-page__content">
                            <a>
                                <img />
                            </a>
                    </div>
                </article>
                <article class="toast-layout__card-page">
                    <div class="card-page__wrapper">
                        <div class="card-page__content">
                            <h1 class="card-page__title">Upload your project</h1>
                            <p class="card-page__description">More than 35 file formats are supported, including STL, OBJ, STEP and ZIP. All uploads are secure and confidential.</p>
                        </div>
                        <div class="card-page__content">
                            <h1 class="card-page__title">Chose your material</h1>
                            <p class="card-page__description">Catalog has more than 20 printing materials and colours. We also offer special requirements</p>
                            <a href="#" class="card-page__button">See materials -></a>
                        </div>
                        <div class="card-page__content">
                            <h1 class="card-page__title">Select your delivery plan</h1>
                            <p class="card-page__description">Choose your preferred deliverer from more than 150 professional services worldwide and receive your order fast and hassle-free.</p>
                        </div>
                    </div>
                </article>
                <article class="toast-layout__why-us">
                    <div class="why-us__wrapper">
                        <div class="why-us__left">
                            <h1>Why Fumo?</h1>
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
                        <div class="why-us__image">

                        </div>
                    </div>
                </article>
                <article class="toast-layout__latest-tech">
                    <div class="latest-tech__wrapper">
                        <div class="latest-tech__top">
                        <div class="latest-tech__left">
                            <h1 class="latest-tech__title">Latest Technology</h1>
                            <p class="latest-tech__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc tincidunt aliquam. Nullam nec purus nec nunc tincidunt aliquam.</p>
                            <a href="#" class="latest-tech__button">Learn More</a>
                        </div>
                        <div class="latest-tech__right">
                            <img src="images/tech.png" alt="Tech">
                        </div>
                        </div>
                        <div class="latest-tech__bottom">
                            <button class="button">
                        </div>
                    </div>
                </article>

                <article class="toast-layout__contact-us">

                </article>
            </section>
        </div>
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Project FUMO. All rights reserved.</p>
    </footer>
</div>
</body>
</html>
