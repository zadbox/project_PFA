@extends('layouts.app2')

@section('title', 'A propos')

@section('content')
    <main class="nk-pages">
        <section class="section has-shape has-mask">
            <div class="nk-shape bg-shape-blur-m mt-8 start-50 top-0 translate-middle-x"></div>
            <div class="nk-mask bg-pattern-dot bg-blend-around mt-n5 mb-10p mh-50vh"></div>
            <div class="container">
                <div class="section-head">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-9 col-xl-8 col-xxl-7">
                            <h6 class="overline-title text-primary">A propos de nous </h6>
                            <h2 class="title h1"></h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row g-gs justify-content-center align-items-center flex-lg-row-reverse">
                        <div class="col-lg-6 col-md-11">
                            <div class="block-gfx ps-xxl-5">
                                <img class="w-100" src="images/about.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="block-text pe-xxl-7">

                                <h6 class="overline-title text-primary">BRAIN Technology</h6>


                                <p style="text-align: justify" class="lead">
                                    Chez BRAIN, nous vous aidons à libérer vos équipes des tâches répétitives et à faible
                                    valeur ajoutée, en automatisant ce qui peut l’être, pour leur permettre de se concentrer
                                    sur des missions stratégiques et créatives. Notre expertise dans l'automatisation des
                                    processus, soutenue par des technologies d'intelligence artificielle et de blockchain,
                                    nous permet de créer des solutions sur mesure adaptées aux besoins spécifiques de chaque
                                    client, quels que soient leur secteur et leurs objectifs.


                                </p>
                                <ul class="list gy-3 pe-xxl-7">
                                    <li>
                                        <em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Agences de
                                            communication et Marketing digital </span>
                                    </li>
                                    <li>
                                        <em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Promotion
                                            immobilière et Conciergerie</span>
                                    </li>
                                    <li>
                                        <em class="icon text-success fs-5 ni ni-check-circle-fill"></em><span>Agroalimentaire
                                            et Traçabilité</span>
                                    </li>
                                </ul>
                                <ul class="btn-list btn-list-inline gy-0">
                                    <li>
                                        <a  href="{{url('/contact')}}"class="btn btn-lg btn-primary"><span>Planifier une démo </span><em
                                                class="icon ni ni-arrow-long-right"></em></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--     <section style="padding-bottom: 70px;" class="section section-bottom-0 has-shape">
        <div class="nk-shape bg-shape-blur-m ms-n8 start-50 top-50 ms-n25 translate-middle-y"></div>
        <div class="container">
            <div class="section-content">
                <div class="timeline">
                    <div class="timeline-background"></div>
                    <div class="timeline-content">
                        <div class="timeline-item" data-step="1">
                            <div class="timeline-card">
                                <h3 class="title">2023 - Développement de solutions IA</h3>
                                <p>
                                    BRain Technology se concentre sur le développement et l'amélioration d'algorithmes pour l'analyse de plaies, en utilisant l'apprentissage profond.
                                </p>
                            </div>
                        </div>
                        <div class="timeline-item" data-step="2">
                            <div class="timeline-card">
                                <h3 class="title">2024 - Expansion dans la Blockchain</h3>
                                <p>
                                    L'entreprise travaille sur un projet de blockchain pour les transactions liées aux enchères d'électricité verte.
                                </p>
                            </div>
                        </div>
                        <div class="timeline-item" data-step="3">
                            <div class="timeline-card">
                                <h3 class="title">Automatisation des Processus</h3>
                                <p>
                                    BRain Technology aide ses clients à automatiser les tâches répétitives dans divers secteurs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    -->
        <style>
            @media screen and (min-width: 1280px) {
                .bg {
                    background-size: cover;
                }
            }

            .bg {
                z-index: -1;
                background: url("/images/bg.png") no-repeat;
                background-position: 100% 0;
                background-size: auto;
                min-height: 546px;
                bottom: 0;
                left: 0;
                right: 0;
                bac
            }
            .block-gfx img {
    transition: transform 0.5s ease;
}

.block-gfx img:hover {
    transform: scale(1.1); /* Augmente la taille de 10% au survol */
}
        </style>

        <section style="padding-bottom: 100px;" class="section section-bottom-0">
            <div class="container">
                <div class="section-head">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-10 col-xl-7 col-xxl-8">
                            <h6 class="overline-title text-primary">Notre histoire </h6>
                            <p style="text-align: justify" class="title">Née dans l'univers de la technologie en 2020,
                                BRain Technology s'est rapidement imposée comme un acteur clé de l'automatisation des
                                processus et de l'intelligence artificielle.

                                Ce succès repose sur une équipe de passionnés, une expertise développée au Maroc, et un
                                engagement constant dans l'innovation, qui nous permet de repousser les limites depuis notre
                                création.</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row g-gs justify-content-center flex-md-row-reverse align-items-center">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="rounded-4 bg-info bg-opacity-50 p-5 pe-0">
                                <div class="block-gfx me-n4">
                                    <img class="w-100 rounded-3 shadow-sm" src="images/first.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="block-text">
                                <div class="media media-middle text-bg-primary-soft rounded-pill fw-medium fs-5 mb-3">
                                    2017
                                </div>
                                <h3 class="title">Les débuts d'une idée</h3>
                                <p style="text-align: justify">
                                Tout commence autour d'une table, lors d’une discussion entre deux amis passionnés de technologie. Frustrés par le temps perdu sur des tâches répétitives et sans réelle valeur ajoutée dans leurs propres expériences professionnelles, ils imaginent une solution capable de libérer les entreprises de ces fardeaux.
                                 L'idée de créer une technologie qui transformerait les méthodes de travail des PME germe alors. Leur mission devient claire : permettre aux entreprises de se concentrer sur l'essentiel, en automatisant l'inutile. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sction-sap text-center py-3 d-none d-md-block">
                    <svg class="h-3rem h-sm-5rem h-lg-7rem" viewbox="0 0 444 112" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M442.989 1C443.49 18.4197 426.571 53.2592 354.892 53.2591C265.293 53.2591 126.139 53.2591 80.0875 53.2591C34.0366 53.2591 7.00663 85.784 0.999979 111"
                            stroke="currentColor" stroke-dasharray="7 7"></path>
                    </svg>
                </div>
                <div class="h-3rem d-md-none"></div>
                <div class="section-content">
                    <div class="row g-gs justify-content-center align-items-center">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="rounded-4 bg-primary bg-opacity-40 p-5 ps-0">
                                <div class="block-gfx ms-n4">
                                    <img class="w-100 rounded-3 shadow-sm" src="images/blockchain.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="block-text px-xxl-5">
                                <div class="media media-middle text-bg-primary-soft rounded-pill fw-medium fs-5 mb-3">
                                    2018
                                </div>
                                <h3 class="title">Exploration de la blockchain</h3>
                                <p style="text-align: justify">
                                Au fur et à mesure que leur projet mûrit, ils explorent les technologies les plus prometteuses de l’époque.
                                 La blockchain se révèle être un levier incroyable pour sécuriser et traçabiliser les processus.
                                Convaincus que la transparence et la sécurité seraient des piliers de leur vision,
                                ils intègrent la blockchain comme fondement de leur projet. Ils commencent à dessiner les contours
                                d’une solution combinant IA et blockchain, qui garantirait non 
                                seulement une automatisation intelligente mais aussi un niveau de confiance sans précédent
                                 dans les transactions.
                                </p>
                                <ul class="list gy-2">
                                    <li>
                                        <em class="icon ni ni-dot"></em><span>Public Blockchain</span>
                                    </li>
                                    <li>
                                        <em class="icon ni ni-dot"></em><span>Private Blockchain</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sction-sap text-center py-3 d-none d-md-block">
                    <svg class="h-3rem h-sm-5rem h-lg-7rem" viewbox="0 0 444 114" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.01068 1C0.510125 18.7364 17.4289 54.2093 89.1082 54.2093C178.707 54.2093 317.861 54.2093 363.912 54.2093C409.963 54.2093 436.993 87.3256 443 113"
                            stroke="currentColor" stroke-dasharray="7 7"></path>
                    </svg>
                </div>
                <div class="h-3rem d-md-none"></div>
                <div class="section-content">
                    <div class="row g-gs justify-content-center flex-md-row-reverse align-items-center">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="rounded-4 bg-pink bg-opacity-30 p-5 pe-0">
                                <div class="block-gfx me-n4">
                                    <img class="w-100 rounded-3 shadow-sm" src="images/idee.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="block-text">
                                <div class="media media-middle text-bg-primary-soft rounded-pill fw-medium fs-5 mb-3">
                                    2019
                                </div>
                                <h3 class="title">L'idée prend forme</h3>
                                <p style="text-align: justify">
                                    L'idée de créer une entreprise dédiée à l'automatisation se précise. L'objectif devient
                                    de transformer les entreprises en les libérant des tâches répétitives grâce à
                                    l'intelligence artificielle, notamment via l'utilisation de modèles de langage (LLM)
                                    pour automatiser la gestion des données et les processus décisionnels.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sction-sap text-center py-3 d-none d-md-block">
                    <svg class="h-3rem h-sm-5rem h-lg-7rem" viewbox="0 0 444 112" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M442.989 1C443.49 18.4197 426.571 53.2592 354.892 53.2591C265.293 53.2591 126.139 53.2591 80.0875 53.2591C34.0366 53.2591 7.00663 85.784 0.999979 111"
                            stroke="currentColor" stroke-dasharray="7 7"></path>
                    </svg>
                </div>
                <div class="h-3rem d-md-none"></div>
                <div class="section-content">
                    <div class="row g-gs justify-content-center align-items-center">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="rounded-4 bg-primary bg-opacity-40 p-5 ps-0">
                                <div class="block-gfx ms-n4">
                                    <img class="w-100 rounded-3 shadow-sm" src="images/lancement.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="block-text px-xxl-5">
                                <div class="media media-middle text-bg-primary-soft rounded-pill fw-medium fs-5 mb-3">
                                    2020
                                </div>
                                <h3 class="title">1<sup>e</sup> solution d'automatisation</h3>
                                <p style="text-align: justify">
                                Après plusieurs mois de travail acharné et d'itérations, leur première solution est prête.
                                 Lancement officiel : une plateforme qui révolutionne la gestion des agences de communication
                                  et de marketing digital, en automatisant les tâches chronophages grâce à des modèles d'IA avancés.
                                  Leur innovation est saluée par les premiers utilisateurs qui y voient une transformation totale de leur manière de travailler.
                                 Ce premier succès les pousse à aller plus loin, toujours avec cette même idée directrice : simplifier et optimiser le quotidien des entreprises grâce à l’automatisation.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="padding-bottom: 100px;" class="section section-sm section-0">
            <div class="container">
                <div class="section-head">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-9 col-xl-8 col-xxl-6">
                            <h1 class="overline-title text-primary">Nos partenaires Technologiques</h1>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <!-- Slider principal -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="h-2rem visible-on-light-mode" src="images/7.png" alt="" />
                                <img class="h-2rem visible-on-dark-mode" src="images/7_.png" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img class="h-2rem visible-on-light-mode" src="images/8.png" alt="" />
                                <img class="h-2rem visible-on-dark-mode" src="images/8_.png" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img class="h-2rem visible-on-light-mode" src="images/9.png" alt="" />
                                <img class="h-2rem visible-on-dark-mode" src="images/9_.png" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img class="h-2rem visible-on-light-mode" src="images/1.png" alt="" />
                                <img class="h-2rem visible-on-dark-mode" src="images/1.png" alt="" />
                            </div>
                            
                            <div class="swiper-slide">
                                <img class="h-2rem visible-on-light-mode" src="images/2.png" alt="" />
                                <img class="h-2rem visible-on-dark-mode" src="images/2_.png" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img class="h-2rem visible-on-light-mode" src="images/3.png" alt="" />
                                <img class="h-2rem visible-on-dark-mode" src="images/4_.png" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img class="h-2rem visible-on-light-mode" src="images/4.png" alt="" />
                                <img class="h-2rem visible-on-dark-mode" src="images/4.png" alt="" />
                            </div>

                            <div class="swiper-slide">
                                <img class="h-2rem visible-on-light-mode" src="images/5.png" alt="" />
                                <img class="h-2rem visible-on-dark-mode" src="images/6.png" alt="" />
                            </div>

                            <div class="swiper-slide">
                                <img class="h-2rem visible-on-light-mode" src="images/2.png" alt="" />
                                <img class="h-2rem visible-on-dark-mode" src="images/2_.png" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img class="h-2rem visible-on-light-mode" src="images/3.png" alt="" />
                                <img class="h-2rem visible-on-dark-mode" src="images/4_.png" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img class="h-2rem visible-on-light-mode" src="images/4.png" alt="" />
                                <img class="h-2rem visible-on-dark-mode" src="images/4.png" alt="" />
                            </div>
                           
                            <div class="swiper-slide">
                                <img class="h-2rem visible-on-light-mode" src="images/5.png" alt="" />
                                <img class="h-2rem visible-on-dark-mode" src="images/6.png" alt="" />
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section style="padding-bottom: 40px;" class="section section-0 has-shape">
            <div class="nk-shape bg-shape-blur-d start-50 bottom-0"></div>
            <div class="nk-shape bg-shape-blur-e mt-n12 me-n10 end-50"></div>
            <div class="container">
                <div class="section-content">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-9 col-xl-8 col-xxl-7">
                            <h6 class="overline-title text-primary">Nos valeurs</h6>

                        </div>
                    </div>
                    <div class="row text-center g-gs justify-content-center">
                        <div class="col-md-6 col-xl-3">
                            <div class="pt-6 h-100">
                                <div class="card h-100 rounded-4 border-0 shadow-sm">
                                    <div class="card-body">
                                        <div class="feature">
                                            <div class="feature-media mt-n8 mb-3">
                                                <div
                                                    class="media media-3xl media-middle media-border text-bg-primary-soft-outline rounded-4">
                                                    <img src="images/valeurs/agile.png" alt="Icon"
                                                        class="w-100 h-100" />
                                                </div>
                                            </div>
                                            <div class="feature-text">
                                                <h4 class="title">Agilité </h4>
                                                <p style="text-align: justify;">
                                                    Votre entreprise évolue, et nous évoluons avec vous. Nos solutions sont
                                                    flexibles et s'adaptent à vos besoins spécifiques, vous permettant de
                                                    rester agile dans un marché en constante mutation.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="pt-6 h-100">
                                <div class="card h-100 rounded-4 border-0 shadow-sm">
                                    <div class="card-body">
                                        <div class="feature">
                                            <div class="feature-media mt-n8 mb-3">
                                                <div
                                                    class="media media-3xl media-middle media-border text-bg-info-soft-outline rounded-4">
                                                    <img src="images/valeurs/inovation ecosystem.png" alt="Icon"
                                                        class="w-100 h-100" />

                                                </div>
                                            </div>
                                            <div class="feature-text">
                                                <h4 class="title">Éco-responsabilité </h4>
                                                <p style="text-align: justify;">
                                                    Nous conjuguons performance et respect de l'environnement. En optimisant
                                                    vos processus, nous vous aidons à réduire votre empreinte écologique
                                                    tout en augmentant votre efficacité.


                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="pt-6 h-100">
                                <div class="card h-100 rounded-4 border-0 shadow-sm">
                                    <div class="card-body">
                                        <div class="feature">
                                            <div class="feature-media mt-n8 mb-3">
                                                <div
                                                    class="media media-3xl media-middle media-border text-bg-blue-soft-outline rounded-4">
                                                    <img src="images/valeurs/Big data and analytic.png" alt="Icon"
                                                        class="w-100 h-100" />

                                                </div>
                                            </div>
                                            <div class="feature-text">
                                                <h4 class="title">Transparence </h4>
                                                <p style="text-align: justify;">
                                                    Une collaboration saine repose sur la confiance. Avec BRAIN Technology
                                                    pas de surprises cachées ni de jargon incompréhensible. Nous vous
                                                    accompagnons avec clarté à chaque étape.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="pt-6 h-100">
                                <div class="card h-100 rounded-4 border-0 shadow-sm">
                                    <div class="card-body">
                                        <div class="feature">
                                            <div class="feature-media mt-n8 mb-3">
                                                <div
                                                    class="media media-3xl media-middle media-border text-bg-blue-soft-outline rounded-4">
                                                    <img src="images/valeurs/Design thinking.png" alt="Icon"
                                                        class="w-100 h-100" />

                                                </div>
                                            </div>
                                            <div class="feature-text">
                                                <h4 class="title">Innovation </h4>
                                                <p style="text-align: justify;">
                                                    L'innovation est notre moteur. Nous mettons à votre portée des
                                                    technologies avant-gardistes, autrefois réservées aux géants de
                                                    l'industrie, pour propulser votre PME vers de nouveaux sommets.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-bottom-0 has-shape">
            <div class="nk-shape bg-shape-blur-m mt-n3 start-50 top-0 translate-middle-x"></div>
            <div class="container">
                <div class="section-head">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <h6 class="overline-title text-primary">Avis & Opinion</h6>
                            {{-- <h2 class="title">Qu'est-ce que nos Clients disent</h2> --}}
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="swiper-init swiper-card-shadow" data-space-between="32" data-loop="true"
                        data-breakpoints='{"0":{"slidesPerView":1}, "778": {"slidesPerView": 2},"1200":{"slidesPerView":3}}'>
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide h-auto">
                                <div class="card rounded-4 border-0 h-100">
                                    <div class="card-body flex-grow-0">
                                        <div class="d-flex align-items-center">
                                            <div class="media media-xl media-middle rounded-pill">
                                                <img src="images/avatar/author/sm-q.jpg" alt="" />
                                            </div>
                                            <div class="media-info ms-3">
                                                <h5 class="mb-1">Élodie Martin</h5>
                                                <div class="sub-text">Directrice Générale chez ComDigitale</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body bg-black bg-opacity-20 py-3 flex-grow-0 quote-s2">
                                        <div class="quote-icon"></div>
                                        <blockquote>
                                            BRain Technology a complètement transformé notre façon de travailler. Grâce à
                                            l'automatisation, nous avons gagné un temps précieux.
                                        </blockquote>
                                    </div>
                                    <div class="card-body d-flex flex-column h-100">
                                        <div class="mb-auto">
                                            <p>
                                                Depuis que nous avons mis en place leurs solutions, notre productivité a
                                                augmenté de 30 % et nos équipes sont plus motivées que jamais.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="swiper-slide h-auto">
                                <div class="card rounded-4 border-0 h-100">
                                    <div class="card-body flex-grow-0">
                                        <div class="d-flex align-items-center">
                                            <div class="media media-xl media-middle rounded-pill">
                                                <img src="images/avatar/author/sm-r.jpg" alt="" />
                                            </div>
                                            <div class="media-info ms-3">
                                                <h5 class="mb-1">Jean Dupont</h5>
                                                <div class="sub-text">Responsable IT chez ImmoPlus</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body bg-black bg-opacity-20 py-3 flex-grow-0 quote-s2">
                                        <div class="quote-icon"></div>
                                        <blockquote>
                                            La solution blockchain de BRain a apporté une transparence totale à nos
                                            transactions, renforçant la confiance de nos partenaires.
                                        </blockquote>
                                    </div>
                                    <div class="card-body d-flex flex-column h-100">
                                        <div class="mb-auto">
                                            <p>
                                                Nous avons pu automatiser les processus les plus critiques de notre activité
                                                immobilière, réduisant les erreurs et améliorant l'efficacité.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 3 -->
                            <div class="swiper-slide h-auto">
                                <div class="card rounded-4 border-0 h-100">
                                    <div class="card-body flex-grow-0">
                                        <div class="d-flex align-items-center">
                                            <div class="media media-xl media-middle rounded-pill">
                                                <img src="images/avatar/author/sm-s.jpg" alt="" />
                                            </div>
                                            <div class="media-info ms-3">
                                                <h5 class="mb-1">Sophie Leclerc</h5>
                                                <div class="sub-text">Responsable Qualité chez AgroBio</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body bg-black bg-opacity-20 py-3 flex-grow-0 quote-s2">
                                        <div class="quote-icon"></div>
                                        <blockquote>
                                            Grâce à BRain Technology, nous avons pu améliorer la traçabilité de nos
                                            produits, garantissant une transparence totale.
                                        </blockquote>
                                    </div>
                                    <div class="card-body d-flex flex-column h-100">
                                        <div class="mb-auto">
                                            <p>
                                                Leur approche innovante nous a permis de répondre aux exigences
                                                réglementaires tout en optimisant nos coûts de gestion.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 4 -->
                            <div class="swiper-slide h-auto">
                                <div class="card rounded-4 border-0 h-100">
                                    <div class="card-body flex-grow-0">
                                        <div class="d-flex align-items-center">
                                            <div class="media media-xl media-middle rounded-pill">
                                                <img src="images/avatar/author/sm-r.jpg" alt="" />
                                            </div>
                                            <div class="media-info ms-3">
                                                <h5 class="mb-1">Laurent Bernard</h5>
                                                <div class="sub-text">CEO chez TechVille</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body bg-black bg-opacity-20 py-3 flex-grow-0 quote-s2">
                                        <div class="quote-icon"></div>
                                        <blockquote>
                                            Les solutions de BRain nous ont permis de faire un bond en avant dans notre
                                            transformation numérique.
                                        </blockquote>
                                    </div>
                                    <div class="card-body d-flex flex-column h-100">
                                        <div class="mb-auto">
                                            <p>
                                                L'intégration de l'automatisation a considérablement réduit nos coûts
                                                opérationnels, tout en améliorant notre réactivité.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 5 -->
                            <div class="swiper-slide h-auto">
                                <div class="card rounded-4 border-0 h-100">
                                    <div class="card-body flex-grow-0">
                                        <div class="d-flex align-items-center">
                                            <div class="media media-xl media-middle rounded-pill">
                                                <img src="images/avatar/author/sm-q.jpg" alt="" />
                                            </div>
                                            <div class="media-info ms-3">
                                                <h5 class="mb-1">Caroline Durand</h5>
                                                <div class="sub-text">Directrice des Opérations chez InnovGreen</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body bg-black bg-opacity-20 py-3 flex-grow-0 quote-s2">
                                        <div class="quote-icon"></div>
                                        <blockquote>
                                            L'efficacité de nos opérations a été transformée grâce à l'automatisation de
                                            BRain.
                                        </blockquote>
                                    </div>
                                    <div class="card-body d-flex flex-column h-100">
                                        <div class="mb-auto">
                                            <p>
                                                Les résultats parlent d'eux-mêmes : nous avons amélioré notre productivité
                                                de 40 % en moins d'un an.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 6 -->
                            <div class="swiper-slide h-auto">
                                <div class="card rounded-4 border-0 h-100">
                                    <div class="card-body flex-grow-0">
                                        <div class="d-flex align-items-center">
                                            <div class="media media-xl media-middle rounded-pill">
                                                <img src="images/avatar/author/sm-s.jpg" alt="" />
                                            </div>
                                            <div class="media-info ms-3">
                                                <h5 class="mb-1">Thomas Lefèvre</h5>
                                                <div class="sub-text">CTO chez DataSoft</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body bg-black bg-opacity-20 py-3 flex-grow-0 quote-s2">
                                        <div class="quote-icon"></div>
                                        <blockquote>
                                            Avec BRain, nous avons franchi un cap dans l'optimisation de nos processus IT.
                                        </blockquote>
                                    </div>
                                    <div class="card-body d-flex flex-column h-100">
                                        <div class="mb-auto">
                                            <p>
                                                Les technologies de BRain nous ont aidés à rationaliser nos opérations, tout
                                                en améliorant la sécurité et la qualité de nos services.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: -29px" class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
