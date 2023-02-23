<div class="slide-logo-wrapper">
    <a href="./" class="slide-logo">
        <?= renderImg("slide-logo.png", "logo") ?>
    </a>
</div>
<header>
    <div class="header-nav">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-7 col-md-6 col-lg-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-4 col-md-auto text-end">
                    <div class="text-secondary fw-600 subtitle">Melbourne Wide</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid position-relative">
        <a href="#services" class="btn btn-primary rounded-5 mx-1 mb-1 fs-20 fw d-flex gap-1 d-md-none">See our services <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="14.5" cy="14.5" r="14.15" stroke="#F3F7FB" stroke-width="0.7" />
                <path d="M19.2383 12L15.1061 16.1322L10.9738 12L10 12.9738L14.6191 17.593C14.7483 17.7221 14.9234 17.7946 15.1061 17.7946C15.2887 17.7946 15.4638 17.7221 15.593 17.593L20.2121 12.9738L19.2383 12Z" fill="#F3F7FB" />
            </svg>
        </a>
        <div class="banner" id="banner-slider">
            <div class="banner-slider-card card-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="heading">Melbourne's #1 Roof & Gutter Specialist</div>
                            <div class="subheading py-5">Call or book a free quote online</div>
                            <div class="row justify-content-center justify-content-md-start gy-4">
                                <div class="col-auto">
                                    <a href="#form" class="btn btn-light rounded-pill border-quarternary shadow-quarternary text-quarternary fs-23 px-5">Free quote</a>
                                </div>
                                <div class="col-auto">
                                    <a href="tel:<?= $phone_number ?>" class="btn btn-tertiary rounded-pill border-primary shadow-primary text-primary fs-23 px-5">Contact us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-flex flex-column align-items-end">
                            <div class="d-inline-flex flex-column align-items-center">
                                <div class="pb-3 fs-17">See our services</div>
                                <a href="#services">
                                    <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="26.0579" cy="26.0579" r="25.5579" stroke="#F3F7FB" />
                                        <path d="M34.5728 21.5657L27.1468 28.9917L19.7208 21.5657L17.9707 23.3157L26.2717 31.6168C26.5038 31.8488 26.8186 31.9792 27.1468 31.9792C27.475 31.9792 27.7897 31.8488 28.0218 31.6168L36.3229 23.3157L34.5728 21.5657Z" fill="#F3F7FB" />
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <div class="fs-35 pt-6 pb-5">We have nothing but 5-star Reviews</div>
                                <div class="row align-items-center g-3">
                                    <div class="col-auto"><?= renderImg('google.png', 'icons') ?></div>
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center gap-2 lh-1">
                                            <div><?= renderImg('stars.png', 'icons') ?></div>
                                            <div class="fs-23">(5.0)</div>
                                        </div>
                                        <hr>
                                        <div class="fw-600 fs-23 lh-1">200+ <span class="fw-300">Reviews</span></div>
                                    </div>
                                    <div class="col">
                                        <?= renderImg('local-reviews.png', 'icons') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slider-card card-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="heading">10% OFF For Seniors!</div>
                            <div class="secondarySubheading fw-600 pt-3">Present your senior's card to us</div>
                            <div class="subheading py-5">Call or book a free quote online</div>
                            <div class="row justify-content-center justify-content-md-start gy-4">
                                <div class="col-auto">
                                    <a href="#form" class="btn btn-light rounded-pill border-quarternary shadow-quarternary text-quarternary fs-23 px-5">Free quote</a>
                                </div>
                                <div class="col-auto">
                                    <a href="tel:<?= $phone_number ?>" class="btn btn-tertiary rounded-pill border-primary shadow-primary text-primary fs-23 px-5">Contact us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-flex flex-column align-items-end">
                            <div class="d-inline-flex flex-column align-items-center">
                                <div class="pb-3 fs-17">See our services</div>
                                <a href="#services">
                                    <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="26.0579" cy="26.0579" r="25.5579" stroke="#F3F7FB" />
                                        <path d="M34.5728 21.5657L27.1468 28.9917L19.7208 21.5657L17.9707 23.3157L26.2717 31.6168C26.5038 31.8488 26.8186 31.9792 27.1468 31.9792C27.475 31.9792 27.7897 31.8488 28.0218 31.6168L36.3229 23.3157L34.5728 21.5657Z" fill="#F3F7FB" />
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <div class="fs-35 pt-6 pb-5">We have nothing but 5-star Reviews</div>
                                <div class="row align-items-center g-3">
                                    <div class="col-auto"><?= renderImg('google.png', 'icons') ?></div>
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center gap-2 lh-1">
                                            <div><?= renderImg('stars.png', 'icons') ?></div>
                                            <div class="fs-23">(5.0)</div>
                                        </div>
                                        <hr>
                                        <div class="fw-600 fs-23 lh-1">200+ <span class="fw-300">Reviews</span></div>
                                    </div>
                                    <div class="col">
                                        <?= renderImg('local-reviews.png', 'icons') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="progressBarContainerWrapper">
            <div class="progressBarContainer row flex-nowrap">
                <div class="col-6">
                    <a class="banner_item" href="javascript:;">
                        <span data-slick-index="0" class="progressBar"></span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="banner_item" href="javascript:;">
                        <span data-slick-index="1" class="progressBar"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="d-lg-none">
        <div class="container text-md-center">
            <div class="fs-66 text-secondary fw-600 lh-1">We have nothing but 5-star Reviews</div>
            <div class="row justify-content-md-center align-items-center g-3 py-5">
                <div class="col-auto"><?= renderImg('google.svg', 'icons') ?></div>
                <div class="col-auto text-primary">
                    <div class="d-flex align-items-center gap-2 lh-1">
                        <div><?= renderImg('stars.png', 'icons') ?></div>
                        <div class="fs-23 fw-600">(5.0)</div>
                    </div>
                    <hr class="my-2">
                    <div class="fw-600 fs-23 lh-1">200+ <span class="fw-300">Reviews</span></div>
                </div>
            </div>
        </div>
        <div id="review-sliders" class="pb-8">
            <div><?= renderImg('oneflare.png', 'lib') ?></div>
            <div><?= renderImg('wordofmouth.png', 'lib') ?></div>
            <div><?= renderImg('truelocal.png', 'lib') ?></div>
            <div><?= renderImg('hipages.png', 'lib') ?></div>
        </div>
    </div>
</header>

<section class="awards">
    <div class="container">
        <div class="row gy-md-5 gy-lg-0">
            <div class="col-lg-4 col-xl-5">
                <div class="fw-600 fs-57 lh-1 text-primary">Offering the best gutter cleaning service in Melbourne</div>
                <div class="text-dark py-5 lh-2 d-md-none">Welcome to Roof and Gutter Repairs Melbourne by General Home Services. We are a Melbourne-based company specialising in roof and gutter repairs. Our commitment to exceptional workmanship and attention to detail sets us apart. With years of experience in the industry, we have built a reputation for quality services and satisfied customers.</div>
                <div class="row align-items-center g-3 pt-7 d-none d-lg-flex">
                    <div class="col-auto"><?= renderImg('google.svg', 'icons') ?></div>
                    <div class="col-auto text-primary">
                        <div class="d-flex align-items-center gap-2 lh-1">
                            <div><?= renderImg('stars.png', 'icons') ?></div>
                            <div class="fs-23">(5.0)</div>
                        </div>
                        <hr class="my-2">
                        <div class="fw-600 fs-23 lh-1">200+ <span class="fw-300">Reviews</span></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="awards-container">
                    <div class="fs-17 lh-1_7 d-none d-md-block">Welcome to Roof and Gutter Repairs Melbourne by General Home Services. We are a Melbourne-based company specialising in roof and gutter repairs. Our commitment to exceptional workmanship and attention to detail sets us apart. With years of experience in the industry, we have built a reputation for quality services and satisfied customers.</div>
                    <div class="row align-items-center justify-content-between pt-md-5 pb-md-4">
                        <div class="col-auto text-capitalize fs-25 fw-600 lh-1">Service Award</div>
                        <div class="col col-md-auto"><?= renderImg('wordofmouth.png', 'logo') ?></div>
                    </div>
                    <div class="row pt-4 justify-content-around gx-1 gx-md-4">
                        <div class="col col-md-auto"><?= renderImg('award-2020-sm.png', 'lib', 'd-md-none') ?><?= renderImg('award-2020.png', 'lib', 'd-none d-md-block') ?></div>
                        <div class="col col-md-auto"><?= renderImg('award-2021-sm.png', 'lib', 'd-md-none') ?><?= renderImg('award-2021.png', 'lib', 'd-none d-md-block') ?></div>
                        <div class="col col-md-auto"><?= renderImg('award-2022-sm.png', 'lib', 'd-md-none') ?><?= renderImg('award-2022.png', 'lib', 'd-none d-md-block') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-us">
    <div class="container">
        <div class="row gy-md-5 gy-lg-0">
            <div class="col-lg-5">
                <div class="fw-600 fs-57 lh-1 text-primary">Why should you choose Gutter Repairs Melbourne?</div>
            </div>
            <div class="col">
                <div class="fs-17 lh-1_7 text-dark pt-6 pt-md-0">
                    At Roof and Gutter Repairs Melbourne, we understand the importance of proper gutter maintenance. That's why we offer professional gutter cleaning services to ensure the longevity and protection of your roof and home. Our team stays up to date on the latest trends and techniques to provide the best possible results. Choose us for your next gutter repair or cleaning project and experience the difference in quality and service.
                </div>
                <div class="row pt-6">
                    <div class="col col-md-auto">
                        <a href="#form" class="btn btn-light rounded-pill border-quarternary shadow-quarternary text-quarternary fs-23 px-md-5 w-100">Free quote</a>
                    </div>
                    <div class="col col-md-auto">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-quarternary rounded-pill border-primary shadow-primary text-white fs-23 px-md-5 w-100">Contact us</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pt-7 gx-3 gy-4 why-us-large">
            <div class="col-lg-4">
                <div class="why-us-card bg-tertiary active">
                    <div>
                        <div class="fs-16 text-primary">Why should you choose Gutter Repairs Melbourne?</div>
                        <div class="heading pt-5">We consult &amp; give practical advice</div>
                        <div class="fs-17 text-primary fw-600 py-4">With honest and reasonable rates</div>
                        <div class="fw-300 fs-16 lh-2 pt-2 pb-6">
                            We offer renovation and expansion services for gutter cleaning in Melbourne. Our team will guide you through the project, <span class="fw-600">helping bring your vision for a new and improved gutter cleaning to life.</span> Understanding the importance of expert advice and guidance is key when it comes to any gutter cleaning service in Melbourne. So if you're searching for the <span class="fw-600">best gutter cleaning company,</span> let us showcase our process.
                        </div>
                    </div>
                    <div class="divider bg-primary"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="why-us-card bg-tertiary-dark">
                    <div>
                        <div class="fs-16 text-primary">Why should you choose Gutter Repairs Melbourne?</div>
                        <div class="heading pt-5">We DO NOT use contractors!</div>
                        <div class="fs-17 text-primary fw-600 py-4">All our staff are licensed roof technicians</div>
                        <div class="fw-300 fs-16 lh-2 pt-2 pb-6">
                            Our company, Roof & Gutter Repairs Melbourne, <span class="fw-600">has been providing high-quality gutter cleaning services in Melbourne since 1990.</span> Unlike some contractors who promise top-notch services but only provide quick and cheap workmanship, <span class="fw-600">we are fully licensed gutter cleaners who prioritize pride and workmanship.</span> We understand that a successful gutter cleaning service is not just about the appearance of the tiles, but also the underlying water guard cleaning. <span class="fw-600">Our gutter cleaning services ensure that your gutters will not leak and will last for a long time.</span> Trust us to provide you with a gutter cleaning service that exceeds your expectations.
                        </div>
                    </div>
                    <div class="divider bg-primary"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="why-us-card bg-secondary">
                    <div>
                        <div class="fs-16 text-white">Why should you choose Gutter Repairs Melbourne?</div>
                        <div class="heading pt-5">Our insurances are the best in the industry</div>
                        <div class="fs-17 text-white fw-600 py-4">We offer lifetime warranty</div>
                        <div class="fw-300 fs-16 lh-2 pt-2 pb-6 text-white">
                            At Roof and Gutter Repairs Melbourne, <span class="fw-600">we offer durable gutter cleaning solutions to ensure longevity.</span> If you're currently facing issues such as discoloration, cracks, mould growth, unpleasant odours, or black spots on your ceiling, it's probably due to subpar workmanship. Trust us to <span class="fw-600">provide a better solution</span> and prevent these issues from reoccurring. <span class="fw-600">Our team is fully licensed and equipped</span> to handle all your roof and gutter repair needs.
                        </div>
                    </div>
                    <div class="divider bg-white"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="why-us-sm">
        <div class="why-us-card bg-tertiary">
            <div class="whyUsCardInnerSlider">
                <div class="pre">
                    <div class="fs-13">Why should you choose Gutter Repairs Melbourne?</div>
                    <div class="row pt-5">
                        <div class="col">
                            <div class="heading">We consult &amp; give practical advice</div>
                            <div class="fw-600 pt-2">With honest and reasonable rates</div>
                        </div>
                        <div class="col-auto">
                            <a href="javascript:void(0);" class="whyUsGoTo" dtarget="1">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24.9999" cy="25.0001" r="24.4999" transform="rotate(-90 24.9999 25.0001)" stroke="#0050A5" />
                                    <path d="M20.6897 16.8306L27.8142 23.9551L20.6897 31.0797L22.3687 32.7587L30.3327 24.7946C30.5554 24.572 30.6804 24.27 30.6804 23.9551C30.6804 23.6403 30.5554 23.3383 30.3327 23.1156L22.3687 15.1516L20.6897 16.8306Z" fill="#0050A5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="post">
                    <div class="fw-600 fs-13">We consult &amp; give practical advice</div>
                    <div class="text-dark py-4">
                        We offer renovation and expansion services for gutter cleaning in Melbourne. Our team will guide you through the project, <span class="fw-600">helping bring your vision for a new and improved gutter cleaning to life.</span> Understanding the importance of expert advice and guidance is key when it comes to any gutter cleaning service in Melbourne. So if you're searching for the <span class="fw-600">best gutter cleaning company,</span> let us showcase our process.
                    </div>
                </div>
            </div>
            <div>
                <hr class="bg-primary mt-0 mb-2">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <ul class="whyUsDots">
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <a href="javascript:void(0);" class="whyUsGoTo whyUsGoBack" dtarget="0">
                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14.5" cy="14.5" r="14.15" transform="rotate(90 14.5 14.5)" stroke="#0050A5" stroke-width="0.7" />
                                <path d="M17 19.2383L12.8678 15.1061L17 10.9738L16.0262 10L11.407 14.6191C11.2779 14.7483 11.2054 14.9234 11.2054 15.1061C11.2054 15.2887 11.2779 15.4638 11.407 15.593L16.0262 20.2121L17 19.2383Z" fill="#0050A5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="why-us-card bg-tertiary-dark">
            <div class="whyUsCardInnerSlider">
                <div class="pre">
                    <div class="fs-13">Why should you choose Gutter Repairs Melbourne?</div>
                    <div class="row pt-5">
                        <div class="col">
                            <div class="heading">We DO NOT use contractors!</div>
                            <div class="fw-600 pt-2">All our staff are licensed roof technicians</div>
                        </div>
                        <div class="col-auto">
                            <a href="javascript:void(0);" class="whyUsGoTo" dtarget="1">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24.9999" cy="25.0001" r="24.4999" transform="rotate(-90 24.9999 25.0001)" stroke="#0050A5" />
                                    <path d="M20.6897 16.8306L27.8142 23.9551L20.6897 31.0797L22.3687 32.7587L30.3327 24.7946C30.5554 24.572 30.6804 24.27 30.6804 23.9551C30.6804 23.6403 30.5554 23.3383 30.3327 23.1156L22.3687 15.1516L20.6897 16.8306Z" fill="#0050A5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="post">
                    <div class="fw-600 fs-13">We DO NOT use contractors!</div>
                    <div class="text-dark py-4">
                        Our company, Roof & Gutter Repairs Melbourne, <span class="fw-600">has been providing high-quality gutter cleaning services in Melbourne since 1990.</span> Unlike some contractors who promise top-notch services but only provide quick and cheap workmanship, <span class="fw-600">we are fully licensed gutter cleaners who prioritize pride and workmanship.</span> We understand that a successful gutter cleaning service is not just about the appearance of the tiles, but also the underlying water guard cleaning. <span class="fw-600">Our gutter cleaning services ensure that your gutters will not leak and will last for a long time.</span> Trust us to provide you with a gutter cleaning service that exceeds your expectations.
                    </div>
                </div>
            </div>
            <div>
                <hr class="bg-primary mt-0 mb-2">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <ul class="whyUsDots">
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <a href="javascript:void(0);" class="whyUsGoTo whyUsGoBack" dtarget="0">
                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14.5" cy="14.5" r="14.15" transform="rotate(90 14.5 14.5)" stroke="#0050A5" stroke-width="0.7" />
                                <path d="M17 19.2383L12.8678 15.1061L17 10.9738L16.0262 10L11.407 14.6191C11.2779 14.7483 11.2054 14.9234 11.2054 15.1061C11.2054 15.2887 11.2779 15.4638 11.407 15.593L16.0262 20.2121L17 19.2383Z" fill="#0050A5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="why-us-card bg-secondary">
            <div class="whyUsCardInnerSlider">
                <div class="pre">
                    <div class="fs-13 text-white">Why should you choose Gutter Repairs Melbourne?</div>
                    <div class="row pt-5">
                        <div class="col">
                            <div class="heading">Our insurances are the best in the industry</div>
                            <div class="fw-600 pt-2">We offer lifetime warranty</div>
                        </div>
                        <div class="col-auto">
                            <a href="javascript:void(0);" class="whyUsGoTo" dtarget="1">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24.9999" cy="25.0001" r="24.4999" transform="rotate(-90 24.9999 25.0001)" stroke="#0050A5" />
                                    <path d="M20.6897 16.8306L27.8142 23.9551L20.6897 31.0797L22.3687 32.7587L30.3327 24.7946C30.5554 24.572 30.6804 24.27 30.6804 23.9551C30.6804 23.6403 30.5554 23.3383 30.3327 23.1156L22.3687 15.1516L20.6897 16.8306Z" fill="#0050A5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="post">
                    <div class="fw-600 fs-13 text-white">Our insurances are the best in the industry</div>
                    <div class="text-white py-4 fw-300">
                        At Roof and Gutter Repairs Melbourne, <span class="fw-600">we offer durable gutter cleaning solutions to ensure longevity.</span> If you're currently facing issues such as discoloration, cracks, mould growth, unpleasant odours, or black spots on your ceiling, it's probably due to subpar workmanship. Trust us to <span class="fw-600">provide a better solution</span> and prevent these issues from reoccurring. <span class="fw-600">Our team is fully licensed and equipped</span> to handle all your roof and gutter repair needs.
                    </div>
                </div>
            </div>
            <div>
                <hr class="bg-primary mt-0 mb-2">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <ul class="whyUsDots">
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <a href="javascript:void(0);" class="whyUsGoTo whyUsGoBack" dtarget="0">
                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14.5" cy="14.5" r="14.15" transform="rotate(90 14.5 14.5)" stroke="#0050A5" stroke-width="0.7" />
                                <path d="M17 19.2383L12.8678 15.1061L17 10.9738L16.0262 10L11.407 14.6191C11.2779 14.7483 11.2054 14.9234 11.2054 15.1061C11.2054 15.2887 11.2779 15.4638 11.407 15.593L16.0262 20.2121L17 19.2383Z" fill="#0050A5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services" id="services">
    <div class="bg-light text-primary pb-7">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto fs-57 fw-600 lh-1">What services<br class="d-md-none"> we offer</div>
                <div class="col-auto fs-17 fw-300 d-none d-md-block">Explore what we do</div>
            </div>
        </div>
    </div>
    <div class="bg-light-blue py-6 py-lh-9">
        <?php
        $services = [
            [
                "name" => "Gutter Cleaning",
                "icon" => "gutter-cleaning.png",
                "description" => "We'll be at your door within the hour."
            ],
            [
                "name" => "Gutter Replacement",
                "icon" => "gutter-cleaning.png",
                "description" => "No extra or hidden fees for extended time."
            ],
            [
                "name" => "Leak Guard Installation",
                "icon" => "gutter-cleaning.png",
                "description" => "Teams all over Sydney to assist you 24/7."
            ],
            [
                "name" => "Gutter Repair",
                "icon" => "gutter-cleaning.png",
                "description" => "Teams all over Sydney to assist you 24/7."
            ],
            [
                "name" => "Downpipe Repairs",
                "icon" => "gutter-cleaning.png",
                "description" => "We’ll be at your door within the hour."
            ],
            [
                "name" => "Ground Drains Cleared",
                "icon" => "gutter-cleaning.png",
                "description" => "No extra or hidden fees for extended time."
            ],
            [
                "name" => "Drain Pipe Cleared",
                "icon" => "gutter-cleaning.png",
                "description" => "No extra or hidden fees for extended time."
            ],
            [
                "name" => "Path & Driveway Pressure Cleaning",
                "icon" => "gutter-cleaning.png",
                "description" => "No extra or hidden fees for extended time."
            ],
        ];
        ?>
        <div class="container">
            <div class="d-md-none text-primary fw-300">Explore what we do</div>
            <div class="serviceSliderNav">
                <?php foreach ($services as $index => $service) { ?>
                    <div>
                        <div class="icon"><?= renderImg('service-' . ($index + 1) . '.jpg', 'lib') ?></div>
                        <div class="name"><?= $service['name'] ?></div>
                    </div>
                <?php } ?>
            </div>
            <div class="row g-4" id="serviceSlider">
                <?php foreach ($services as $index => $service) { ?>
                    <div class="col-md-6 col-xl-4">
                        <div class="service-card">
                            <div>
                                <div class="row align-items-center px-2">
                                    <div class="col-auto"><?= renderImg($service['icon'], 'icons') ?></div>
                                    <div class="col fs-25 fw-500 lh-1"><?= $service['name'] ?></div>
                                </div>
                                <div class="image">
                                    <?= renderImg('service-' . ($index + 1) . '.jpg', 'lib') ?>
                                </div>
                                <div class="px-2 fs-17 fw-300 pt-2 pb-6 description"><?= $service['description'] ?></div>
                            </div>
                            <div>
                                <div class="divider"></div>
                                <div class="row justify-content-between align-items-center px-2 pt-3 text-light-blue">
                                    <div class="col-auto col-lg-4 fw-600 ls-0_195"><?= ($index + 1) . '/' . count($services) ?></div>
                                    <div class="col-md-4 text-center d-none d-lg-block">
                                        <a href="javascript:void(0)" class="showMoreServiceDescription">
                                            <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="26.0579" cy="26.0579" r="25.5579" stroke="#F3F7FB" />
                                                <path d="M34.5728 21.5657L27.1468 28.9917L19.7208 21.5657L17.9707 23.3157L26.2717 31.6168C26.5038 31.8488 26.8186 31.9792 27.1468 31.9792C27.475 31.9792 27.7897 31.8488 28.0218 31.6168L36.3229 23.3157L34.5728 21.5657Z" fill="#F3F7FB" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="col-auto col-lg-4 fw-300 text-end">Our services</div>
                                    <div class="col-auto d-lg-none">
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="javascript:void(0)" class="servicePrev">
                                                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="14.5" cy="14.5" r="14.15" transform="rotate(90 14.5 14.5)" stroke="#E0EBF6" stroke-width="0.7" />
                                                        <path d="M17 19.2383L12.8678 15.1061L17 10.9738L16.0262 10L11.407 14.6191C11.2779 14.7483 11.2054 14.9234 11.2054 15.1061C11.2054 15.2887 11.2779 15.4638 11.407 15.593L16.0262 20.2121L17 19.2383Z" fill="#E0EBF6" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <a href="javascript:void(0)" class="serviceNext">
                                                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="14.5" cy="14.5" r="14.15" transform="rotate(-90 14.5 14.5)" stroke="#E0EBF6" stroke-width="0.7" />
                                                        <path d="M12 9.7617L16.1322 13.8939L12 18.0262L12.9738 19L17.593 14.3809C17.7221 14.2517 17.7946 14.0766 17.7946 13.8939C17.7946 13.7113 17.7221 13.5362 17.593 13.407L12.9738 8.78787L12 9.7617Z" fill="#E0EBF6" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="quick-contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-9 col-lg-6">
                        <div class="text-primary fs-35 fw-600 lh-1 text-md-center text-lg-start">Give us a call or enquire if you need our expert advice!</div>
                    </div>
                    <div class="col-auto">
                        <div class="row pt-6 pb-5">
                            <div class="col-auto">
                                <a href="tel:<?= $phone_number ?>" class="btn btn-quarternary rounded-pill border-primary shadow-primary text-white fs-23 px-4"><?= $phone_number ?></a>
                            </div>
                            <div class="col-auto d-none d-md-block">
                                <a href="#form" class="btn btn-light rounded-pill border-quarternary shadow-quarternary text-quarternary fs-23 px-5">Enquire now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <hr class="bg-secondary mt-3 mb-5 my-lg-7 d-none d-md-block"> -->
                <!-- <div class="row justify-content-md-center gx-3 gx-md-4">
                    <div class="col-auto">
                        <a href="<?= $facebook ?>" target="_blank" class="">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="28" cy="28" r="27" fill="#3FA9F3" fill-opacity="0.15" stroke="#3FA9F3" stroke-width="2" />
                                <path d="M26.4933 36.6668L26.47 29.5295H23.4111V26.4707H26.47V24.4315C26.47 21.6793 28.1742 20.353 30.6293 20.353C31.8053 20.353 32.8161 20.4406 33.1106 20.4797V23.3558L31.4079 23.3566C30.0727 23.3566 29.8141 23.9911 29.8141 24.9221V26.4707H33.6072L32.5876 29.5295H29.8141V36.6668H26.4933Z" fill="#0050A5" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= $instagram ?>" target="_blank" class="">
                            <svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="28.54" cy="28" r="27" fill="#3FA9F3" fill-opacity="0.15" stroke="#3FA9F3" stroke-width="2" />
                                <path d="M29.0494 21.8223C31.2273 21.8223 31.4853 21.8315 32.3458 21.8702C32.8629 21.8764 33.3751 21.9716 33.8599 22.1516C34.2145 22.2826 34.5351 22.4917 34.798 22.7634C35.0697 23.0262 35.2788 23.3468 35.4098 23.7014C35.5898 24.1862 35.6849 24.6984 35.6912 25.2155C35.7299 26.0761 35.7391 26.3371 35.7391 28.5119C35.7391 30.6868 35.7299 30.9478 35.6912 31.8083C35.6849 32.3254 35.5898 32.8376 35.4098 33.3224C35.2743 33.6743 35.0666 33.9939 34.8 34.2605C34.5334 34.5271 34.2139 34.7348 33.862 34.8702C33.3772 35.0502 32.865 35.1454 32.3479 35.1516C31.4873 35.1904 31.2263 35.1995 29.0515 35.1995C26.8767 35.1995 26.6156 35.1904 25.7551 35.1516C25.238 35.1454 24.7258 35.0502 24.241 34.8702C23.8864 34.7392 23.5658 34.5301 23.3029 34.2584C23.0312 33.9956 22.8222 33.675 22.6912 33.3204C22.5112 32.8356 22.416 32.3234 22.4098 31.8063C22.371 30.9457 22.3618 30.6847 22.3618 28.5099C22.3618 26.3351 22.371 26.074 22.4098 25.2135C22.416 24.6964 22.5112 24.1842 22.6912 23.6994C22.8222 23.3448 23.0312 23.0242 23.3029 22.7613C23.5658 22.4897 23.8864 22.2806 24.241 22.1496C24.7258 21.9696 25.238 21.8744 25.7551 21.8682C26.6156 21.8294 26.8767 21.8202 29.0515 21.8202M29.0494 20.353C26.8338 20.353 26.5565 20.3622 25.6847 20.402C25.0087 20.4157 24.3399 20.544 23.7067 20.7813C23.1622 20.9858 22.669 21.307 22.2619 21.7224C21.8465 22.1295 21.5253 22.6226 21.3208 23.1671C21.0835 23.8003 20.9553 24.4691 20.9415 25.1452C20.9018 26.0169 20.8926 26.2943 20.8926 28.5099C20.8926 30.7255 20.9018 31.0028 20.9415 31.8746C20.9553 32.5506 21.0835 33.2195 21.3208 33.8526C21.5253 34.3971 21.8465 34.8903 22.2619 35.2974C22.669 35.7128 23.1622 36.034 23.7067 36.2385C24.3405 36.476 25.01 36.6043 25.6868 36.6178C26.5565 36.6576 26.8338 36.6668 29.0494 36.6668C31.265 36.6668 31.5424 36.6576 32.4141 36.6178C33.0909 36.6043 33.7604 36.476 34.3942 36.2385C34.9361 36.0288 35.4281 35.7082 35.839 35.2974C36.2498 34.8865 36.5704 34.3945 36.7801 33.8526C37.0176 33.2188 37.1459 32.5493 37.1594 31.8726C37.1992 31.0028 37.2083 30.7255 37.2083 28.5079C37.2083 26.2902 37.1992 26.0149 37.1594 25.1431C37.1448 24.4677 37.0158 23.7996 36.7781 23.1671C36.5736 22.6226 36.2524 22.1295 35.837 21.7224C35.4298 21.307 34.9367 20.9858 34.3922 20.7813C33.759 20.544 33.0902 20.4157 32.4141 20.402C31.5424 20.3622 31.265 20.353 29.0494 20.353Z" fill="#0050A5" />
                                <path d="M29.0494 24.3213C28.221 24.3213 27.4112 24.567 26.7224 25.0272C26.0336 25.4875 25.4967 26.1416 25.1797 26.907C24.8627 27.6724 24.7798 28.5145 24.9414 29.327C25.103 30.1395 25.5019 30.8859 26.0877 31.4716C26.6735 32.0574 27.4198 32.4563 28.2323 32.618C29.0448 32.7796 29.887 32.6966 30.6523 32.3796C31.4177 32.0626 32.0718 31.5257 32.5321 30.8369C32.9923 30.1481 33.238 29.3383 33.238 28.5099C33.238 27.9598 33.1296 27.4152 32.9192 26.907C32.7087 26.3988 32.4001 25.9371 32.0112 25.5481C31.6222 25.1592 31.1605 24.8507 30.6523 24.6402C30.1441 24.4297 29.5995 24.3213 29.0494 24.3213ZM29.0494 31.2292C28.5116 31.2292 27.9859 31.0697 27.5387 30.7709C27.0915 30.4721 26.743 30.0474 26.5371 29.5505C26.3313 29.0536 26.2775 28.5069 26.3824 27.9794C26.4873 27.4519 26.7463 26.9674 27.1266 26.5871C27.5069 26.2068 27.9914 25.9478 28.5189 25.8428C29.0464 25.7379 29.5932 25.7918 30.0901 25.9976C30.587 26.2034 31.0116 26.5519 31.3104 26.9991C31.6092 27.4463 31.7687 27.9721 31.7687 28.5099C31.7687 29.2311 31.4822 29.9228 30.9723 30.4327C30.4623 30.9427 29.7706 31.2292 29.0494 31.2292Z" fill="#0050A5" />
                                <path d="M33.4032 25.135C33.9438 25.135 34.382 24.6968 34.382 24.1562C34.382 23.6156 33.9438 23.1773 33.4032 23.1773C32.8626 23.1773 32.4243 23.6156 32.4243 24.1562C32.4243 24.6968 32.8626 25.135 33.4032 25.135Z" fill="#0050A5" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= $linkedin ?>" target="_blank" class="">
                            <svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="28.0801" cy="28" r="27" fill="#3FA9F3" fill-opacity="0.15" stroke="#3FA9F3" stroke-width="2" />
                                <path d="M36.0336 20.353H21.1473C20.7395 20.353 20.4336 20.6589 20.4336 21.0668V36.055C20.4336 36.3609 20.7395 36.6668 21.1473 36.6668H36.1356C36.5434 36.6668 36.8493 36.3609 36.8493 35.953V21.0668C36.7473 20.6589 36.4414 20.353 36.0336 20.353ZM22.8807 34.2197V26.4707H25.3277V34.2197H22.8807ZM24.1042 25.4511C23.2885 25.4511 22.6767 24.7373 22.6767 24.0236C22.6767 23.2079 23.2885 22.5962 24.1042 22.5962C24.9199 22.5962 25.5316 23.2079 25.5316 24.0236C25.4297 24.7373 24.8179 25.4511 24.1042 25.4511ZM34.3003 34.2197H31.8532V30.4471C31.8532 29.5295 31.8532 28.4079 30.6297 28.4079C29.4061 28.4079 29.2022 29.4275 29.2022 30.4471V34.3217H26.7552V26.4707H29.1003V27.4903C29.4061 26.8785 30.2218 26.2668 31.3434 26.2668C33.7905 26.2668 34.1983 27.8981 34.1983 29.9373V34.2197H34.3003Z" fill="#0050A5" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= $youtube ?>" target="_blank" class="">
                            <svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="28.6211" cy="28" r="27" fill="#3FA9F3" fill-opacity="0.15" stroke="#3FA9F3" stroke-width="2" />
                                <path d="M38.0786 24.7032C37.8492 23.1568 37.161 22.0862 35.5551 21.8483C33.0315 21.3724 29.1315 21.3724 29.1315 21.3724C29.1315 21.3724 25.2315 21.3724 22.708 21.8483C21.1021 22.0862 20.2992 23.1568 20.1845 24.7032C19.9551 26.2496 19.9551 28.5097 19.9551 28.5097C19.9551 28.5097 19.9551 30.7698 20.1845 32.3162C20.4139 33.8626 21.1021 34.9332 22.708 35.1711C25.2315 35.6469 29.1315 35.6469 29.1315 35.6469C29.1315 35.6469 33.0315 35.6469 35.5551 35.1711C37.161 34.8143 37.8492 33.8626 38.0786 32.3162C38.308 30.7698 38.308 28.5097 38.308 28.5097C38.308 28.5097 38.308 26.2496 38.0786 24.7032ZM26.8374 32.0783V24.9411L32.5727 28.5097L26.8374 32.0783Z" fill="#0050A5" />
                            </svg>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<section class="form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7 text-md-center">
                <div class="fs-57 fw-600 lh-1">Get your free<br class="d-md-none"> quote today</div>
                <div class="fs-17 fw-300 pt-4 pb-5 pb-md-6">Simply fill out your information below and we will get back to you shortly</div>
                <form action="./src/form" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                    <div class="row gx-3 gy-3 gy-md-4">
                        <div class="col-md-6">
                            <input type="text" class="form-control light" name="name" placeholder="Name*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control light" name="phone" placeholder="Contact no.*" required>
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control light" name="email" placeholder="Email*" required>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control light" name="address" placeholder="Street adress*" required>
                        </div>
                        <div class="col-5 col-md-4">
                            <input type="text" class="form-control light" name="postcode" placeholder="Postcode*" required>
                        </div>
                        <div class="col-7 col-md-5">
                            <select name="service" class="form-control form-select dark">
                                <option selected disabled>Select service*</option>
                                <option>Shower Sealing</option>
                                <option>Bath Sealing</option>
                                <option>Grout Repairs</option>
                                <option>Leaking Showers</option>
                                <option>Leaking Balcony</option>
                                <option>Water Proofing</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control dark" name="date" required>
                        </div>
                        <div class="col">
                            <input type="time" class="form-control dark" name="time" required>
                        </div>
                        <div class="col-12">
                            <textarea name="enquiry" class="form-control light" placeholder="Additional message (optional)" rows="5"></textarea>
                        </div>
                        <div class="col-12 py-3">
                            <label for="file-upload" class="my-0 w-100 text-white fs-17 fw-600 text-center" id="file-label">
                                <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.26831 7.81843L14.0865 1.00024L20.9047 7.81843" stroke="#F3F7FB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.0859 1.00024V19.1821" stroke="#F3F7FB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.40436 14.6364H4.67871C4.20203 14.6364 3.79162 14.9728 3.69813 15.4402L1.8254 24.8039C1.70165 25.4227 2.17494 26 2.80599 26H25.3664C25.9974 26 26.4707 25.4227 26.347 24.8039L24.4742 15.4402C24.3807 14.9728 23.9703 14.6364 23.4937 14.6364H19.768" stroke="#F3F7FB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <br>
                                <div class="pt-2">Attach supporting files</div>
                            </label>
                            <input id="file-upload" class="form-control rounded-0" type="file" name="uploadedFile" onchange="fileUploaded('file-upload','uploaded-file-name')">
                            <div class="text-light fw-300 text-center" id="uploaded-file-name">
                                (optional)
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn w-100 btn-light rounded-pill border-quarternary shadow-quarternary text-quarternary fs-23 px-5">Submit now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="accreditiation">
    <div class="container">
        <div class="row justify-content-between align-items-center gy-5">
            <div class="col-lg col-xl-auto text-primary">
                <div class="fs-35 fw-600">Is it time for a gutter clean?</div>
                <div class="fs-20 fw-300 pt-3 pt-md-2">- Yes! We are the right team for your gutter cleaning job!</div>
            </div>
            <div class="col-md-auto">
                <div class="row">
                    <div class="col-6 col-md-auto">
                        <a href="#form" class="btn btn-light rounded-pill border-quarternary shadow-quarternary text-quarternary fs-23 px-md-5 w-100">Free quote</a>
                    </div>
                    <div class="col-6 col-md-auto">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-quarternary rounded-pill border-primary shadow-primary text-white fs-23 px-md-4 w-100"><?= $phone_number ?></a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bg-secondary my-5 my-md-6">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row gy-2">
                    <div class="col-md-4"><?= renderImg('accreditiation-1.jpg', 'lib', 'w-100 rounded-8') ?></div>
                    <div class="col-md-4"><?= renderImg('accreditiation-2.jpg', 'lib', 'w-100 rounded-8') ?></div>
                    <div class="col-md-4"><?= renderImg('accreditiation-3.jpg', 'lib', 'w-100 rounded-8') ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light-blue py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-4">
                    <div class="col-12 col-lg-auto fs-25 text-primary fw-600 text-center">Easy payment methods</div>
                    <div class="col-auto">
                        <?= renderImg('payment-methods.png', 'lib') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="colorful-bar"></div>

<footer>
    <div class="container">
        <!-- <div class="text-center">
            <a href="./"><?= renderImg('footer-logo.png', 'logo') ?></a>
        </div> -->
        <div class="row align-items-center justify-content-center justify-content-md-between contact gy-7 gy-md-2">
            <div class="col-auto"><a href="./"><?= renderImg('footer-logo.png', 'logo') ?></a></div>
            <div class="col-12 col-md-auto">
                <div class="row gy-5">
                    <div class="col-auto">
                        <div class="text-secondary fw-600 pb-3 d-md-none">Speak to our professionals</div>
                        <a href="tel:<?= $phone_number ?>" class="btn btn-quarternary rounded-pill border-white shadow-white text-white fs-23 px-4"><?= $phone_number ?></a>
                    </div>
                    <div class="col-auto">
                        <div class="text-secondary fw-600 pb-3 d-md-none">Get your free quote today!</div>
                        <a href="#form" class="btn btn-light rounded-pill border-quarternary shadow-quarternary text-quarternary fs-23 px-lg-5">Free quote</a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md col-lg-auto">
                <div class="row justify-content-center gx-2 gx-lg-4">
                    <div class="col-auto col-md col-lg-auto">
                        <a href="<?= $facebook ?>" target="_blank" class="">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="28" cy="28" r="27" fill="#0050A5" stroke="#3FA9F3" stroke-width="2" />
                                <path d="M26.4933 36.6668L26.47 29.5295H23.4111V26.4707H26.47V24.4315C26.47 21.6793 28.1742 20.353 30.6293 20.353C31.8053 20.353 32.8161 20.4406 33.1106 20.4797V23.3558L31.4079 23.3566C30.0727 23.3566 29.8141 23.9911 29.8141 24.9221V26.4707H33.6072L32.5876 29.5295H29.8141V36.6668H26.4933Z" fill="#F3F7FB" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto col-md col-lg-auto">
                        <a href="<?= $instagram ?>" target="_blank" class="">
                            <svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="28.54" cy="28" r="27" fill="#0050A5" stroke="#3FA9F3" stroke-width="2" />
                                <path d="M29.0494 21.8223C31.2273 21.8223 31.4853 21.8315 32.3458 21.8702C32.8629 21.8764 33.3751 21.9716 33.8599 22.1516C34.2145 22.2826 34.5351 22.4917 34.798 22.7634C35.0697 23.0262 35.2788 23.3468 35.4098 23.7014C35.5898 24.1862 35.6849 24.6984 35.6912 25.2155C35.7299 26.0761 35.7391 26.3371 35.7391 28.5119C35.7391 30.6868 35.7299 30.9478 35.6912 31.8083C35.6849 32.3254 35.5898 32.8376 35.4098 33.3224C35.2743 33.6743 35.0666 33.9939 34.8 34.2605C34.5334 34.5271 34.2139 34.7348 33.862 34.8702C33.3772 35.0502 32.865 35.1454 32.3479 35.1516C31.4873 35.1904 31.2263 35.1995 29.0515 35.1995C26.8767 35.1995 26.6156 35.1904 25.7551 35.1516C25.238 35.1454 24.7258 35.0502 24.241 34.8702C23.8864 34.7392 23.5658 34.5301 23.3029 34.2584C23.0312 33.9956 22.8222 33.675 22.6912 33.3204C22.5112 32.8356 22.416 32.3234 22.4098 31.8063C22.371 30.9457 22.3618 30.6847 22.3618 28.5099C22.3618 26.3351 22.371 26.074 22.4098 25.2135C22.416 24.6964 22.5112 24.1842 22.6912 23.6994C22.8222 23.3448 23.0312 23.0242 23.3029 22.7613C23.5658 22.4897 23.8864 22.2806 24.241 22.1496C24.7258 21.9696 25.238 21.8744 25.7551 21.8682C26.6156 21.8294 26.8767 21.8202 29.0515 21.8202M29.0494 20.353C26.8338 20.353 26.5565 20.3622 25.6847 20.402C25.0087 20.4157 24.3399 20.544 23.7067 20.7813C23.1622 20.9858 22.669 21.307 22.2619 21.7224C21.8465 22.1295 21.5253 22.6226 21.3208 23.1671C21.0835 23.8003 20.9553 24.4691 20.9415 25.1452C20.9018 26.0169 20.8926 26.2943 20.8926 28.5099C20.8926 30.7255 20.9018 31.0028 20.9415 31.8746C20.9553 32.5506 21.0835 33.2195 21.3208 33.8526C21.5253 34.3971 21.8465 34.8903 22.2619 35.2974C22.669 35.7128 23.1622 36.034 23.7067 36.2385C24.3405 36.476 25.01 36.6043 25.6868 36.6178C26.5565 36.6576 26.8338 36.6668 29.0494 36.6668C31.265 36.6668 31.5424 36.6576 32.4141 36.6178C33.0909 36.6043 33.7604 36.476 34.3942 36.2385C34.9361 36.0288 35.4281 35.7082 35.839 35.2974C36.2498 34.8865 36.5704 34.3945 36.7801 33.8526C37.0176 33.2188 37.1459 32.5493 37.1594 31.8726C37.1992 31.0028 37.2083 30.7255 37.2083 28.5079C37.2083 26.2902 37.1992 26.0149 37.1594 25.1431C37.1448 24.4677 37.0158 23.7996 36.7781 23.1671C36.5736 22.6226 36.2524 22.1295 35.837 21.7224C35.4298 21.307 34.9367 20.9858 34.3922 20.7813C33.759 20.544 33.0902 20.4157 32.4141 20.402C31.5424 20.3622 31.265 20.353 29.0494 20.353Z" fill="#F3F7FB" />
                                <path d="M29.0494 24.3213C28.221 24.3213 27.4112 24.567 26.7224 25.0272C26.0336 25.4875 25.4967 26.1416 25.1797 26.907C24.8627 27.6724 24.7798 28.5145 24.9414 29.327C25.103 30.1395 25.5019 30.8859 26.0877 31.4716C26.6735 32.0574 27.4198 32.4563 28.2323 32.618C29.0448 32.7796 29.887 32.6966 30.6523 32.3796C31.4177 32.0626 32.0718 31.5257 32.5321 30.8369C32.9923 30.1481 33.238 29.3383 33.238 28.5099C33.238 27.9598 33.1296 27.4152 32.9192 26.907C32.7087 26.3988 32.4001 25.9371 32.0112 25.5481C31.6222 25.1592 31.1605 24.8507 30.6523 24.6402C30.1441 24.4297 29.5995 24.3213 29.0494 24.3213ZM29.0494 31.2292C28.5116 31.2292 27.9859 31.0697 27.5387 30.7709C27.0915 30.4721 26.743 30.0474 26.5371 29.5505C26.3313 29.0536 26.2775 28.5069 26.3824 27.9794C26.4873 27.4519 26.7463 26.9674 27.1266 26.5871C27.5069 26.2068 27.9914 25.9478 28.5189 25.8428C29.0464 25.7379 29.5932 25.7918 30.0901 25.9976C30.587 26.2034 31.0116 26.5519 31.3104 26.9991C31.6092 27.4463 31.7687 27.9721 31.7687 28.5099C31.7687 29.2311 31.4822 29.9228 30.9723 30.4327C30.4623 30.9427 29.7706 31.2292 29.0494 31.2292Z" fill="#F3F7FB" />
                                <path d="M33.4032 25.135C33.9438 25.135 34.382 24.6968 34.382 24.1562C34.382 23.6156 33.9438 23.1773 33.4032 23.1773C32.8626 23.1773 32.4243 23.6156 32.4243 24.1562C32.4243 24.6968 32.8626 25.135 33.4032 25.135Z" fill="#F3F7FB" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto col-md col-lg-auto">
                        <a href="<?= $linkedin ?>" target="_blank" class="">
                            <svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="28.0801" cy="28" r="27" fill="#0050A5" stroke="#3FA9F3" stroke-width="2" />
                                <path d="M36.0336 20.353H21.1473C20.7395 20.353 20.4336 20.6589 20.4336 21.0668V36.055C20.4336 36.3609 20.7395 36.6668 21.1473 36.6668H36.1356C36.5434 36.6668 36.8493 36.3609 36.8493 35.953V21.0668C36.7473 20.6589 36.4414 20.353 36.0336 20.353ZM22.8807 34.2197V26.4707H25.3277V34.2197H22.8807ZM24.1042 25.4511C23.2885 25.4511 22.6767 24.7373 22.6767 24.0236C22.6767 23.2079 23.2885 22.5962 24.1042 22.5962C24.9199 22.5962 25.5316 23.2079 25.5316 24.0236C25.4297 24.7373 24.8179 25.4511 24.1042 25.4511ZM34.3003 34.2197H31.8532V30.4471C31.8532 29.5295 31.8532 28.4079 30.6297 28.4079C29.4061 28.4079 29.2022 29.4275 29.2022 30.4471V34.3217H26.7552V26.4707H29.1003V27.4903C29.4061 26.8785 30.2218 26.2668 31.3434 26.2668C33.7905 26.2668 34.1983 27.8981 34.1983 29.9373V34.2197H34.3003Z" fill="#F3F7FB" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto col-md col-lg-auto">
                        <a href="<?= $youtube ?>" target="_blank" class="">
                            <svg width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="28.6211" cy="28" r="27" fill="#0050A5" stroke="#3FA9F3" stroke-width="2" />
                                <path d="M38.0786 24.7033C37.8492 23.1569 37.161 22.0863 35.5551 21.8484C33.0315 21.3726 29.1315 21.3726 29.1315 21.3726C29.1315 21.3726 25.2315 21.3726 22.708 21.8484C21.1021 22.0863 20.2992 23.1569 20.1845 24.7033C19.9551 26.2497 19.9551 28.5098 19.9551 28.5098C19.9551 28.5098 19.9551 30.7699 20.1845 32.3163C20.4139 33.8628 21.1021 34.9333 22.708 35.1712C25.2315 35.6471 29.1315 35.6471 29.1315 35.6471C29.1315 35.6471 33.0315 35.6471 35.5551 35.1712C37.161 34.8144 37.8492 33.8628 38.0786 32.3163C38.308 30.7699 38.308 28.5098 38.308 28.5098C38.308 28.5098 38.308 26.2497 38.0786 24.7033ZM26.8374 32.0784V24.9412L32.5727 28.5098L26.8374 32.0784Z" fill="#F3F7FB" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="row justify-content-between align-items-center">
            <div class="col-5 text-light fw-600 d-lg-none lh-1"><?= $site ?></div>
            <div class="col-auto d-none d-lg-block">
                <div class="row gx-2 gx-md-3 text-white justify-content-center fw-300">
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center">All Rights Reserved</div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                </div>
            </div>
            <div class="col-5 col-md-auto">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
        </div>

        <div class="d-lg-none text-light fw-300 pt-4 fs-13">
            All Rights Reserved | Copyright <?= date('Y') ?>
        </div>
    </div>
</footer>