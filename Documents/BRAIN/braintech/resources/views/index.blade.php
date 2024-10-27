@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<main class="nk-pages">
  <style>
        .block-gfx img {
    transition: transform 0.5s ease;
}

.block-gfx img:hover {
    transform: scale(1.1); /* Augmente la taille de 10% au survol */
}
  </style>
    <section class="section section-bottom-0 has-shape">
      <div
        class="nk-shape bg-shape-blur-a mt-8 start-50 top-0 translate-middle-x"
      ></div>
      <div class="container">
        <div class="section-content">
            <div
              class="row g-gs justify-content-center align-items-center flex-lg-row-reverse"
            >
              <div class="col-lg-6 col-md-11">
                <div class="block-gfx ps-xxl-5">
                  <img class="w-100" src="{{asset('images/liberez2.jpg')}}" alt="" />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="block-text pe-xxl-7">
                  <h2 class="title">
                  Libérez vos équipes des tâches répétitives grâce à l'automatisation avec AI
                  </h2>
                  <p style="text-align: justify;" class="lead">
                  Chez BRAIN Technology, nous libérons vos équipes des tâches répétitives et à faible valeur ajoutée en automatisant ce qui peut l’être, grâce à des solutions sur mesure basées sur l’IA et la blockchain. Nos solutions permettent à vos collaborateurs de se concentrer sur des missions stratégiques et créatives, tout en optimisant vos processus.             </p>
                  <ul class="list gy-3 pe-xxl-7">
                    <li>
                      <em
                        class="icon text-success fs-5 ni ni-check-circle-fill"
                      ></em
                      ><span
                        >Automatisez la génération de contenu média </span
                      >
                    </li>
                    <li>
                      <em
                        class="icon text-success fs-5 ni ni-check-circle-fill"
                      ></em
                      ><span
                        >Optimisez votre service après-vente </span
                      >
                    </li>
                    <li>
                      <em
                        class="icon text-success fs-5 ni ni-check-circle-fill"
                      ></em
                      ><span
                        >Automatisez vos campagnes de marketing </span
                      >
                    </li>
                    <li>
                      <em
                        class="icon text-success fs-5 ni ni-check-circle-fill"
                      ></em
                      ><span
                        >Utilisez la blockchain pour assurer la traçabilité </span
                      >
                    </li>
                  </ul>
                  <ul class="btn-list btn-list-inline gy-0">
                    <li>
                      <a href="{{url('/a-propos')}}" class="btn btn-lg btn-primary"
                        ><span>Voir plus</span
                        ><em class="icon ni ni-arrow-long-right"></em
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row text-center g-gs">
              <!-- Première carte -->
              <div class="col-md-6 col-xl-3">
                <div class="card rounded-4 border-0 shadow-tiny h-100">
                  <div class="card-body">
                    <div class="feature">
                      <div class="feature-media">
                        <div class="media media-middle media-xl text-bg-primary-soft rounded-4">
                          <b style="font-size: 50px">
                            <span style="font-size: 50px" class="counter" data-target="70">0</span>%
                          </b>
                        </div>
                      </div>
                      <div class="feature-text">
                        <h4 class="title">Augmentation de la productivité</h4>
                        <p style="text-align: justify;">
                          Grâce à l'automatisation des processus répétitifs,
                           nos clients constatent une nette amélioration de leur efficacité.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          
              <!-- Deuxième carte -->
              <div class="col-md-6 col-xl-3">
                <div class="card rounded-4 border-0 shadow-tiny h-100">
                  <div class="card-body">
                    <div class="feature">
                      <div class="feature-media">
                        <div class="media media-middle media-xl text-bg-primary-soft rounded-4">
                          <b style="font-size: 50px">
                            <span style="font-size: 50px" class="counter" data-target="80">0</span>%
                          </b>
                        </div>
                      </div>
                      <div class="feature-text">
                        <h4 class="title">Réduction des erreurs opérationnelles</h4>
                        <p style="text-align: justify;">
                          Les solutions d'intelligence artificielle réduisent considérablement les erreurs humaines,
                           assurant une précision accrue.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          
              <!-- Troisième carte -->
              <div class="col-md-6 col-xl-3">
                <div class="card rounded-4 border-0 shadow-tiny h-100">
                  <div class="card-body">
                    <div class="feature">
                      <div class="feature-media">
                        <div class="media media-middle media-xl text-bg-primary-soft rounded-4">
                          <b style="font-size: 50px">
                            <span style="font-size: 50px" class="counter" data-target="60">0</span>%
                          </b>
                        </div>
                      </div>
                      <div class="feature-text">
                        <h4 class="title">Gain de temps sur les tâches</h4>
                        <p style="text-align: justify;">
                          Vos équipes peuvent se concentrer sur des tâches plus stratégiques et créatives grâce à l’automatisation.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          
              <!-- Quatrième carte -->
              <div class="col-md-6 col-xl-3">
                <div class="card rounded-4 border-0 shadow-tiny h-100">
                  <div class="card-body">
                    <div class="feature">
                      <div class="feature-media">
                        <div class="media media-middle media-xl text-bg-primary-soft rounded-4">
                          <b style="font-size: 50px">
                            <span class="counter" data-target="50">0</span>%
                          </b>
                        </div>
                      </div>
                      <div class="feature-text">
                        <h4 class="title">Réduction des coûts opérationnels</h4>
                        <p style="text-align: justify;">
                        Nos solutions automatisées allègent les coûts opérationnels en minimisant les tâches manuelles et les erreurs,
                         tout en améliorant l'efficacité des processus métier.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          
            </div>
          </div>
      </div>
    </section>
    

    
    <section class="section has-mask" id="expertise-section">
      <div class="nk-mask bg-pattern-dot bg-blend-around mt-10p mb-3"></div>
      <div class="container">
        <div class="section-head">
          <div class="row justify-content-center text-center">
            <div class="col-lg-9 col-xl-8 col-xxl-7">
              <h6 class="overline-title text-primary">Nos services</h6>
              <h2 class="title">Nos Domaines d'Expertise</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="overflow-hidden">
            <ul class="nav nav-tabs nav-tabs-stretch mb-5" id="expertise-tabs">
              <li class="w-100 w-sm-50 w-lg-auto">
                <button class="nav-link w-100 w-lg-auto active" data-bs-toggle="tab" data-bs-target="#social-media-adds">
                  <span>Communication et Marketing Digital</span>
                </button>
              </li>
              <li class="w-100 w-sm-50 w-lg-auto">
                <button class="nav-link w-100 w-lg-auto" data-bs-toggle="tab" data-bs-target="#website-copy-seo">
                  <span> Promotion Immobilière et conciergerie</span>
                </button>
              </li>
              <li class="w-100 w-sm-50 w-lg-auto">
                <button class="nav-link w-100 w-lg-auto" data-bs-toggle="tab" data-bs-target="#blog-section-writing">
                 <span>Agroalimentaire et traçabilité</span>
                </button>
              </li>
              <li class="w-100 w-sm-50 w-lg-auto">
                <button class="nav-link w-100 w-lg-auto" data-bs-toggle="tab" data-bs-target="#ecommerce-copy">
                  <span>Blockchain Technologie</span>
                </button>
              </li>
            </ul>
          </div>
    
          <div class="tab-content p-5 card border-0 rounded-4 shadow-sm">
            <div class="tab-pane p-lg-3 fade show active" id="social-media-adds" tabindex="0">
              <div class="row g-gs flex-xl-row-reverse">
                <div class="col-xl-6 col-lg-10">
                  <div class="block-gfx">
                    <img class="w-100 rounded-3" src="{{asset('images/digital.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="block-text pe-xl-7">
                    <h3 class="mb-4">Agence de Communication et Marketing Digital</h3>
                    <p class="lead" style="text-align: justify">
                      Chez BRAIN, nous comprenons les défis uniques auxquels font face les agences de communication et de marketing digital.
                    </p>
                    <ul class="list gy-3">
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Génération Automatisée de Contenu Média</span></li>
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Automatisation de la Réception des Appels</span></li>
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Chatbots Multilingues et Multidialectes</span></li>
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Automatisation des Campagnes Marketing</span></li>
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Service Après-Vente Optimisé</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane p-lg-3 fade" id="website-copy-seo" tabindex="0">
              <div class="row g-gs flex-xl-row-reverse">
                <div class="col-xl-6 col-lg-10">
                  <div class="block-gfx">
                    <img class="w-100 rounded-3" src="images/immo.jpg" alt="">
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="block-text pe-xl-7">
                    <h3 class="mb-4">Promotion Immobilière et Conciergerie</h3>
                    <p class="lead" style="text-align: justify">
                      Dans le secteur immobilier, l'efficacité et la réactivité sont essentielles. BRAIN vous aide à automatiser les processus clés pour améliorer votre service client et optimiser vos opérations.
                    </p>
                    <ul class="list gy-3">
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Qualification Multidimensionnelle des Clients</span></li>
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Automatisation de la Gestion des Rendez-vous</span></li>
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Service Après-Vente Optimisé</span></li>
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Transfert Automatisé des Garanties</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane p-lg-3 fade" id="blog-section-writing" tabindex="0">
              <div class="row g-gs flex-xl-row-reverse">
                <div class="col-xl-6 col-lg-10">
                  <div class="block-gfx">
                    <img class="w-100 rounded-3" src="images/tracalilite.jpg" alt="">
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="block-text pe-xl-7">
                    <h3  class="mb-4">Agroalimentaire et traçabilité</h3>
                    <p class="lead" style="text-align: justify">
                      La transparence et l'efficacité sont cruciales dans le secteur agroalimentaire. BRAIN vous offre des solutions technologiques pour assurer la traçabilité de vos produits et optimiser votre chaîne d'approvisionnement.
                    </p>
                    <ul class="list gy-3">
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Traçabilité des Produits avec la Blockchain</span></li>
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Automatisation de la Gestion des Stocks</span></li>
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Réapprovisionnement Automatique</span></li>
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Analyse Prédictive Basée sur la Saison et les Tendances du Marché</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane p-lg-3 fade" id="ecommerce-copy" tabindex="0">
              <div class="row g-gs flex-xl-row-reverse">
                <div class="col-xl-6 col-lg-10">
                  <div class="block-gfx">
                    <img class="w-100 rounded-3" src="images/block.jpg" alt="">
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="block-text pe-xl-7">
                    <h3 class="mb-4">Blockchain Technologie</h3>
                    <p style="text-align: justify">
                      Nous reconnaissons le potentiel transformateur de la technologie blockchain dans divers secteurs. En tant que registre décentralisé et sécurisé, la blockchain permet une transparence accrue et une sécurité renforcée dans les processus transactionnels.
                    </p>
                    <ul class="list gy-3">
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Décentralisation des Données</span></li>
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Automatisation des Contrats Intelligents</span></li>
                      <li><em class="icon text-primary ni ni-check-circle-fill"></em><span>Suivi Transparent des Transactions</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        let tabs = document.querySelectorAll("#expertise-tabs button");
        let currentIndex = 0;
        const tabLength = tabs.length;
        let intervalId;
    
        function activateTab(index) {
          tabs.forEach((tab, i) => {
            tab.classList.toggle('active', i === index);
            const targetId = tab.getAttribute("data-bs-target");
            const targetTab = document.querySelector(targetId);
            targetTab.classList.toggle('show', i === index);
            targetTab.classList.toggle('active', i === index);
          });
        }
    
        function autoScrollTabs() {
          currentIndex = (currentIndex + 1) % tabLength;
          activateTab(currentIndex);
        }
    
        function startAutoScroll() {
          intervalId = setInterval(autoScrollTabs, 2800);
        }
    
        function stopAutoScroll() {
          clearInterval(intervalId);
        }
    
        startAutoScroll();
    
        const section = document.getElementById("expertise-section");
        section.addEventListener("mouseenter", stopAutoScroll);
        section.addEventListener("mouseleave", startAutoScroll);
      });
    </script>

    <section style="padding-bottom: 100px;" class="section section-0 has-shape">
        <div class="nk-shape bg-shape-blur-d start-50 bottom-0"></div>
        <div class="nk-shape bg-shape-blur-e mt-n12 me-n10 end-50"></div>
        <div class="container">
          <div class="section-content">
            <div class="row justify-content-center text-center">
               <!--   <div class="col-lg-9 col-xl-8 col-xxl-7">
                  <h6 class="overline-title text-primary">Nos Valeurs</h6>
                  <h2 class="title">xxxx </h2>
                  
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
                            class="media media-3xl media-middle media-border text-bg-primary-soft-outline rounded-4"
                          >
                                                        </div>
                        </div>
                        <div class="feature-text">
                          <h4 class="title">Agilité </h4>
                          <p style="text-align: justify;">
                            Votre entreprise évolue, et nous évoluons avec vous. Nos solutions sont flexibles et s'adaptent à vos besoins spécifiques, vous permettant de rester agile dans un marché en constante mutation.
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
                            class="media media-3xl media-middle media-border text-bg-info-soft-outline rounded-4"
                          >
                          
                          </div>
                        </div>
                        <div class="feature-text">
                          <h4 class="title">Éco-responsabilité  </h4>
                          <p style="text-align: justify;">
                            Nous conjuguons performance et respect de l'environnement. En optimisant vos processus, nous vous aidons à réduire votre empreinte écologique tout en augmentant votre efficacité.


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
                            class="media media-3xl media-middle media-border text-bg-blue-soft-outline rounded-4"
                          >
                          
                          </div>
                        </div>
                        <div class="feature-text">
                          <h4 class="title">Transparence </h4>
                          <p style="text-align: justify;">
                            Une collaboration saine repose sur la confiance. Avec BRAIN Technology pas de surprises cachées ni de jargon incompréhensible. Nous vous accompagnons avec clarté à chaque étape.
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
                            class="media media-3xl media-middle media-border text-bg-blue-soft-outline rounded-4"
                          >
                          
                          </div>
                        </div>
                        <div class="feature-text">
                          <h4 class="title">Innovation </h4>
                          <p style="text-align: justify;">
                            L'innovation est notre moteur. Nous mettons à votre portée des technologies avant-gardistes, autrefois réservées aux géants de l'industrie, pour propulser votre PME vers de nouveaux sommets.
                          </p>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  -->
          </div>
        </div>
      </section>

      <section style="padding-bottom: 100px;" class="section section-sm section-0">
        <div class="container">
          <div class="section-head">
            <div class="row justify-content-center text-center">
              <div class="col-lg-9 col-xl-8 col-xxl-6">
                <h1 class="overline-title text-primary">Nos partenaires Technologiques</h1>
                <h2 class="title"></h2>

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
                  <img class="h-2rem visible-on-dark-mode" src="images/9_ .png" alt="" />
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
                  <img class="h-2rem visible-on-light-mode" src="images/5.png" alt="" />
                  <img class="h-2rem visible-on-dark-mode" src="images/6.png" alt="" />
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </section>
    <section class="section section-bottom-0 section-top-0">
      <div class="container">
        <div class="section-head">
          <div class="row justify-content-center text-center">
            <div class="col-lg-9 col-xl-7 col-xxl-6">
              <h6 id="notre-approche" class="overline-title text-primary">Notre approche en trois phases </h6>
              <h2 class="title">Commencez votre parcours avec BRAIN </h2>
           
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row g-gs justify-content-center">
            <div class="col-lg-4 col-md-6">
              <div class="pricing">
                <div class="pricing-body p-5">
                  <div class="text-center">
                    <h5 class="mb-3">Phase 1 : Audit, Analyse et Modélisation</h5>
                    <h3 class="h2 mb-4">
                      
                    </h3>
                   
                  </div>
                  <ul class="list gy-3 pt-4 ps-2">
                    <li>
                      <em class="icon ni ni-check text-success"></em>
                      <span
                        ><strong></strong> Analyse des points de douleur de votre business</span
                      >
                    </li>
                    <li>
                      <em class="icon ni ni-check text-success"></em>
                      <span><strong></strong>Détection et cartographie des processus internes  </span>
                    </li>
                    <li>
                      <em class="icon ni ni-check text-success"></em>
                      <span><strong></strong> Évaluation des technologies actuelles</span>
                    </li>
                   
                    <li>
                      <em class="icon ni ni-check text-success"></em>
                      <span>Recommandations personnalisées</span>
                    </li>
                  
                    <li>
                      <em class="icon ni ni-check text-success"></em>
                      <span>Amélioration de vos opérations</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="pricing pricing-featured bg-primary">
                <div class="pricing-body p-5">
                  <div class="text-center">
                    <h5 class="mb-3">Phase 2 : Conception Technique et développement</h5>
                    <h3 class="h2 mb-4">
                        
                      <span class="caption-text text-muted"> </span>
                    </h3>
                    <a  href="{{url('/a-propos')}}" class="btn btn-primary btn-block"
                      >Planifier vôtre rendez-vous</a
                    >
                  </div>
                  <ul class="list gy-3 pt-4 ps-2">
                    <li>
                      <em class="icon ni ni-check text-success"></em>
                      <span
                        ><strong></strong>  Conception de l'architecture
                        technique</span
                      >
                    </li>
                    <li>
                      <em class="icon ni ni-check text-success"></em>
                      <span><strong></strong> Choix des composants (LLM, BDD, scraping, stockage, API)</span>
                    </li>
                    <li>
                      <em class="icon ni ni-check text-success"></em>
                      <span>Développement des solutions
                      d'automatisation</span>
                    </li>
                    <li>
                      <em class="icon ni ni-check text-success"></em>
                      <span>Paramétrage</span>
                    </li>
                    <li>
                      <em class="icon ni ni-check text-success"></em>
                      <span>Tests fonctionnels</span>
                    </li>
                    <li>
                      <em class="icon ni ni-check text-success"></em>
                      <span>Tests techniques</span>
                    </li>
                    
                   
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="pricing">
                <div class="pricing-body p-5">
                  <div class="text-center">
                    <h5 class="mb-3">Phase 3 : Déploiement, Hébergement et Formation</h5>
                    <h3 class="h2 mb-4">
                      
                      <span class="caption-text text-muted"> </span>
                    </h3>
                    
                  </div>
                  <ul class="list gy-3 pt-4 ps-2">
                    <li>
                      <em class="icon ni ni-check text-success"></em>
                      <span
                        ><strong></strong> Déploiement de la solution</span
                      >
                    </li>
                    <li>
                      <em class="icon ni ni-check text-success"></em>
                      <span><strong></strong>  Suivi
                      post-déploiement</span>
                    </li>
                    <li>
                      <em class="icon ni ni-check text-success"></em>
                      <span>Optimisation</span>
                    </li>
                    <li>
                      <em class="icon ni ni-check text-success"></em>
                      <span>Formation des utilisateurs finaux</span>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
     <section class="section section-lg bg-white">
        <div class="container">
          <div class="section-head">
            <div class="row justify-content-center text-center">
              <div class="col-lg-9 col-xl-8 col-xxl-7">
                <h6 class="overline-title text-primary">
                  Pourquoi nous choisir ?
                </h6>
                <h2 class="title">On adapte l'approche suivante</h2>
             
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row gx-gs gy-6 align-items-xl-center">
              <div class="col-xl-7 col-lg-7">
                <div
                  class="block-gfx p-3 p-xl-4 bg-primary bg-opacity-10 me-xl-3 rounded"
                >
                  <img
                    class="rounded-4"
                    src="images/approche.jpg"
                    alt=""
                  />
                </div>
              </div>
              <div class="col-xl-5 col-lg-5">
                <ul class="step-list">
                  <li class="step-list-item">
                    <div class="step-list-icon">
                      <em class="icon ni ni-check"></em>
                    </div>
                    <div class="step-list-text">
                      <h6 class="overline-title text-primary">Analyse du besoin et validation de l'opportunité</h6>
                      <p>
                        Nous commençons par une analyse approfondie des besoins et la validation de l'opportunité d'implémenter des outils IA.
                      </p>
                    </div>
                  </li>
                  <li class="step-list-item">
                    <div class="step-list-icon">
                      <em class="icon ni ni-check"></em>
                    </div>
                    <div class="step-list-text">
                      <h6 class="overline-title text-primary">Cadrage du projet</h6>
                      <p>
                        Le cadrage du projet est essentiel pour fixer des objectifs précis, définir la portée et allouer les ressources nécessaires. 
                      </p>
                    </div>
                  </li>
                  <li class="step-list-item">
                    <div class="step-list-icon">
                      <em class="icon ni ni-check"></em>
                    </div>
                    <div class="step-list-text">
                      <h6 class="overline-title text-primary">Proposition des solutions / POC</h6>
                      <p>
                        a mise en place de la solution se fait par étapes itératives, permettant des ajustements en temps réel. 
                      </p>
                    </div>
                  </li>
                  <li class="step-list-item">
                    <div class="step-list-icon">
                      <em class="icon ni ni-check"></em>
                    </div>
                    <div class="step-list-text">
                      <h6 class="overline-title text-primary">Intégration dans le SI </h6>
                      <p>
                        Nous intégrons la solution dans votre environnement existant, en minimisant les interruptions et en maximisant la compatibilité.
                      </p>
                    </div>
                  </li>
                  <li class="step-list-item">
                    <div class="step-list-icon">
                      <em class="icon ni ni-check"></em>
                    </div>
                    <div class="step-list-text">
                      <h6 class="overline-title text-primary">Maintenance</h6>
                      <p>
                        Notre engagement ne s'arrête pas à l'implémentation. Nous offrons un support continu pour assurer la pérennité et l'efficacité de la solution.
                      </p>
                    </div>
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
          <!--<div class="section-content">
            <div class="row g-gs">
              <div class="col-lg-4 col-sm-6">
                <div class="feature">
                  <div class="feature-media">
                    <div
                      class="media media-middle media-xl text-bg-primary-soft rounded-4"
                    >
                      <em class="icon ni ni-grid-plus"></em>
                    </div>
                  </div> 
                  <div class="feature-text">
                    <h4 class="title">Create AI images with prompts</h4>
                    <p>
                      Create a bullet point list of your product benefits that
                      appeal to your customers to purchase.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="feature">
                  <div class="feature-media">
                    <div
                      class="media media-middle media-xl text-bg-primary-soft rounded-4"
                    >
                      <em class="icon ni ni-layout2"></em>
                    </div>
                  </div>
                  <div class="feature-text">
                    <h4 class="title">Generate images in hundred styles</h4>
                    <p>
                      Write very attractive headlines, slogans or paragraph
                      for your landing page of your website.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="feature">
                  <div class="feature-media">
                    <div
                      class="media media-middle media-xl text-bg-primary-soft rounded-4"
                    >
                      <em class="icon ni ni-loader"></em>
                    </div>
                  </div>
                  <div class="feature-text">
                    <h4 class="title">High-res images with details</h4>
                    <p>
                      Need to improve your existing content? Our AI will
                      rewrite and improve the content for you.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </section>

    <section class="section section-bottom-0">
      <div class="container">
        <div class="section-wrap bg-primary bg-opacity-10 rounded-4">
          <div class="section-content bg-pattern-dot-sm p-4 p-sm-6">
            <div class="row justify-content-center text-center">
              <div class="col-xl-8 col-xxl-9">
                <div class="block-text">
                  <h6 class="overline-title text-primary">
                    Vous ne retrouvez pas votre secteur d'activité ?
                  </h6>
                  <h2 class="title">Pas d'inquiétude, nous intervenons également dans d'autres domaines.</h2>
                  <p class="lead mt-3">
                    N'hésitez pas à nous contacter pour discuter de vos besoins, et nous serons ravis de vous accompagner dans votre transformation .
                  </p>
                  <ul class="btn-list btn-list-inline">
                    <li>
                      <a  href="{{url('/a-propos')}}" class="btn btn-lg btn-primary"
                        ><span>
                            Demandez une demo </span
                        ><em class="icon ni ni-arrow-long-right"></em
                      ></a>
                    </li>
                  </ul>
                  <ul class="list list-row gy-0 gx-3">
                    <li>
                      <em
                        class="icon ni ni-check-circle-fill text-success"
                      ></em
                      ><span>Aucun engagement</span>
                    </li>
                    <li>
                      <em
                        class="icon ni ni-check-circle-fill text-success"
                      ></em
                      ><span>Audit technique </span>
                    </li>
                    <li>
                      <em
                        class="icon ni ni-check-circle-fill text-success"
                      ></em
                      ><span>Explorer les differentes automatisations sur mesure  </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const counters = document.querySelectorAll('.counter');
      const speed = 200; // Ajuste la vitesse de l'animation
  
      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const counter = entry.target;
            const updateCount = () => {
              const target = +counter.getAttribute('data-target');
              const count = +counter.innerText;
  
              // Calcul du nombre à ajouter à chaque étape
              const increment = target / speed;
  
              if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 10); // Met à jour toutes les 10ms
              } else {
                counter.innerText = target;
              }
            };
  
            updateCount();
            observer.unobserve(counter); // Arrête d'observer après avoir atteint le target
          }
        });
      }, { threshold: 1.0 }); // 1.0 signifie que l'élément doit être complètement visible
  
      counters.forEach(counter => {
        observer.observe(counter);
      });
    });
  </script>
  
@endsection
