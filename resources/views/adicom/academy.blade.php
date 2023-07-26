@extends('layouts.main')

@section('title')
    @parent ADICOM ACADEMY
@endsection

{{--@section('description')--}}
{{--    {{ setting('site.description') }}--}}
{{--@endsection--}}

{{--@section('keywords')--}}
{{--    {{ setting('site.keywords') }}--}}
{{--@endsection--}}

{{--@section('meta-image')--}}
{{--    {{ Voyager::image(setting('site.logo')) }}--}}
{{--@endsection--}}

@section('content')
    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container"
                 style="background-image: url({{asset('assets/img/header_test-1.jpg')}});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">ADICOM ACADEMY</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Banner html end-->
        <section class="about-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="section-head">
                            <h3 class="section-title">
                                BOOTCAMP ADICOMACADEMY
                                La formation en présentiel pour
                                booster votre stratégie digitale
                            </h3><br><br>
                            <p class="text-center">Améliorez les performances de vos campagnes sur les réseaux
                                sociaux</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="section-head">
                            <p class="section-paragraph">
                            <h5 class="section-title">À PROPOS DU BOOTCAMP</h5>
                            <p>À travers nos cours et de la pratique avec nos experts certifiés, vous pourrez :</p><br>

                            <li>Définir vos objectifs,</li>
                            <br><br>
                            <li>Construire pas à pas votre plan d’action sur vos plateformes sociales.</li>
                            <br>
                            <p>
                                Un savant mélange de storytelling, contenus, nouveaux formats, influence marketing pour
                                apporter <strong>le bon message aux bonnes cibles et au bon moment !</strong>
                            </p>

                            <strong>
                                Il s’agit d’un programme accéléré qui transforme et donne des clés pour booster &
                                implémenter sa stratégie de marketing digital sur les marchés d’Afrique francophone.
                            </strong>
                            <br><br><br>

                            <h5 class="section-title">OBJECTIFS PÉDAGOGIQUES </h5>
                            <p>
                                À la fin de cette formation, vous serez capable de : <br>
                            </p>

                            <li>Définir une stratégie et un plan d’actions pour votre stratégie social media</li>
                            <br>
                            <li>Raconter une histoire qui résonne avec votre audience</li>
                            <br>
                            <li>Créer et animer une communauté</li>
                            <br>
                            <li>Créer du contenu efficace et engageant</li>
                            <br>
                            <li>Définir et alimenter un planning éditorial</li>
                            <br>
                            <li>Mesurer et optimiser les performances de vos publications</li>
                            <br>
                            <li>Identifier, collaborer, et créer du contenu avec des influenceurs pertinents</li>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="iconbox-container-bg">
                    <div class="iconbox-item-bg">
                        <div class="iconbox-content-bg">
                            <img src="{{asset('assets/img/benedicte-e1651741666840.png')}}" alt="" class="img-fluid rounded-circle" style="max-width: 100px;">
                            <h5>Bénédicte Gallet</h5>
                            <p>Ex-Directrice Mediacom Burkina Faso</p>
                            <p>L'avantage c'est qu'on était un petit groupe. Cela a permis à chacun d'avoir un
                                rapport particulier, personnel, avec le formateur.</p>
                        </div>
                    </div>
                    <div class="iconbox-item-bg">
                        <div class="iconbox-content-bg">
                            <img src="{{asset('assets/img/steve-e1651742174538.png')}}" alt="" class="img-fluid rounded-circle" style="max-width: 100px;">
                            <h5>Stève Fayomi</h5>
                            <p>Manager senior Orange Côte d'Ivoires</p>
                            <p>Mention "excellent" ! On attend la prochaine formation avec impatience.</p>
                        </div>
                    </div>
                    <div class="iconbox-item-bg item-3">
                        <div class="iconbox-content-bg ">
                            <img src="{{asset('assets/img/rebecca-e1651743072900.jpg')}}" alt="" class="img-fluid rounded-circle" style="max-width: 100px;">
                            <h5>Rebecca N'Guessan</h5>
                            <p>Chef de projet chez Kaizene</p>
                            <p>Le formateur a été très professionnel, on voit tout de
                                suite que c'est quelqu'un qui maîtrise son sujet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
{{--        <section class="about-mission-and-aim">--}}
{{--            <div class="container">--}}
{{--                <div class="about-purpose">--}}
{{--                    <figure class="about-banner-image">--}}
{{--                        <div class="pattern-overlay overlay-circle"></div>--}}
{{--                        <img src="{{asset('assets/img/eventum-img38.png')}}" alt="">--}}
{{--                    </figure>--}}
{{--                    <div class="mission-and-aim-inside">--}}
{{--                        <div class="about-mission-content">--}}
{{--                            <div class="section-head">--}}
{{--                                <h4 class="section-title">--}}
{{--                                    FAQ - FOIRE AUX QUESTIONS--}}
{{--                                </h4>--}}
{{--                            </div>--}}
{{--                            <div class="widget-bg faq-widget">--}}
{{--                                <div id="sidebar-tab-content" class="accordion-content" role="tablist">--}}
{{--                                    <div id="accordion-A" class="card tab-pane fade show active" role="tabpanel"--}}
{{--                                         aria-labelledby="accordion-A">--}}
{{--                                        <div class="card-header" role="tab" id="qus-A">--}}
{{--                                            <h6 class="mb-0">--}}
{{--                                                <a data-bs-toggle="collapse" href="#collapse-one" aria-expanded="false"--}}
{{--                                                   aria-controls="collapse-one" class="collapsed">--}}
{{--                                                    QU'EST-CE QU'IL FAUT SAVOIR SUR L'ADICOM ACADEMY ?--}}
{{--                                                </a>--}}
{{--                                            </h6>--}}
{{--                                        </div>--}}
{{--                                        <div id="collapse-one" class="collapse" data-bs-parent="#sidebar-tab-content"--}}
{{--                                             role="tabpanel" aria-labelledby="qus-A">--}}
{{--                                            <div class="card-body">--}}
{{--                                                <p class="justify-content">--}}
{{--                                                    Pour répondre à la demande de notre écosystème en formations digitales, ADICOM--}}
{{--                                                    lance sa saison ADICOM ACADEMY qui s’adresse aux professionnels de la communication--}}
{{--                                                    et du marketing. En 2022, l’ACADEMY est conçue comme un programme de formations intensives pour--}}
{{--                                                    une meilleure prise en main professionnelle des médias sociaux.--}}
{{--                                                </p>--}}

{{--                                               <p>--}}
{{--                                                   Il s’agit d’un programme accéléré qui transforme et donne des clés pour booster--}}
{{--                                                   & implémenter sa stratégie de marketing digital sur les marchés d’Afrique francophone.--}}
{{--                                               </p>--}}
{{--                                                <p>--}}
{{--                                                    À travers nos cours et de la pratique avec nos experts certifiés, vous pourrez--}}
{{--                                                    définir vos objectifs, construire pas à pas votre plan d’action sur--}}
{{--                                                    vos plateformes sociales. Un savant mélange de storytelling, contenus,--}}
{{--                                                    nouveaux formats, influence marketing pour apporter le bon message aux bonnes cibles et au bon moment !--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div id="accordion-B" class="card tab-pane" role="tabpanel"--}}
{{--                                         aria-labelledby="accordion-B">--}}
{{--                                        <div class="card-header" role="tab" id="qus-B">--}}
{{--                                            <h6 class="mb-0">--}}
{{--                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-two"--}}
{{--                                                   aria-expanded="false" aria-controls="collapse-two">--}}
{{--                                                    QUELS SONT LES PRÉ REQUIS À AVOIR POUR PARTICIPER AU BOOTCAMP ?--}}
{{--                                                </a>--}}
{{--                                            </h6>--}}
{{--                                        </div>--}}
{{--                                        <div id="collapse-two" class="collapse" data-bs-parent="#sidebar-tab-content"--}}
{{--                                             role="tabpanel" aria-labelledby="qus-B">--}}
{{--                                            <div class="card-body">--}}
{{--                                                <li>Une volonté d’utiliser les réseaux sociaux au service de sa stratégie marketing</li>--}}
{{--                                                <li>Au moins un compte actif sur Facebook, Linkedin, ou Instagram</li>--}}
{{--                                                <li>Avoir un ordinateur  portable pour le volet pratique (PC ou Mac & Smartphone)</li>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div id="accordion-C" class="card tab-pane" role="tabpanel"--}}
{{--                                         aria-labelledby="accordion-C">--}}
{{--                                        <div class="card-header" role="tab" id="qus-C">--}}
{{--                                            <h6 class="mb-0">--}}
{{--                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-three"--}}
{{--                                                   aria-expanded="false" aria-controls="collapse-three">--}}
{{--                                                    POURQUOI UNE FORMATION ADICOMACADEMY ?--}}
{{--                                                </a>--}}
{{--                                            </h6>--}}
{{--                                        </div>--}}
{{--                                        <div id="collapse-three" class="collapse" data-bs-parent="#sidebar-tab-content"--}}
{{--                                             role="tabpanel" aria-labelledby="qus-C">--}}
{{--                                            <div class="card-body">--}}
{{--                                                <li>Pour bénéficier d’une formation conçue par des experts reconnus en Afrique et du réseau ADICOM (Africa digital communication)</li>--}}
{{--                                                <li>Pour comprendre les usages et tendances des médias sociaux en Afrique</li>--}}
{{--                                                <li>Pour apprendre vite et en immersion sur la création de contenus via des outils et la pratique</li>--}}
{{--                                                <li>Pour s’inspirer d’exemples concrets en Côte d’Ivoire et en Afrique francophone</li>--}}
{{--                                                <li>Pour améliorer sa visibilité en ligne</li>--}}
{{--                                                <li>Pour rencontrer et échanger avec des influenceurs marketing</li>--}}
{{--                                                #APPRENDRE #CONNECTER #INNOVER--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div id="accordion-D" class="card tab-pane" role="tabpanel"--}}
{{--                                         aria-labelledby="accordion-D">--}}
{{--                                        <div class="card-header" role="tab" id="qus-D">--}}
{{--                                            <h6 class="mb-0">--}}
{{--                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-three"--}}
{{--                                                   aria-expanded="false" aria-controls="collapse-three">--}}
{{--                                                    QUELS SONT LES OBJECTIFS PÉDAGOGIQUES DU BOOTCAMP ?--}}
{{--                                                </a>--}}
{{--                                            </h6>--}}
{{--                                        </div>--}}
{{--                                        <div id="collapse-three" class="collapse" data-bs-parent="#sidebar-tab-content"--}}
{{--                                             role="tabpanel" aria-labelledby="qus-D">--}}
{{--                                            <div class="card-body">--}}
{{--                                                <p>À la fin de cette formation, vous serez capable de :</p>--}}
{{--                                                <li>Définir une stratégie et un plan d’actions pour votre stratégie social media</li>--}}
{{--                                                <li>Raconter une histoire qui résonne avec votre audience</li>--}}
{{--                                                <li>Créer et animer une communauté</li>--}}
{{--                                                <li>Créer du contenu efficace et engageant</li>--}}
{{--                                                <li>Définir et alimenter un planning éditorial</li>--}}
{{--                                                <li>Mesurer et optimiser les performances de vos publications</li>--}}
{{--                                                <li>Identifier, collaborer, et créer du contenu avec des influenceurs pertinents</li>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div id="accordion-E" class="card tab-pane" role="tabpanel"--}}
{{--                                         aria-labelledby="accordion-D">--}}
{{--                                        <div class="card-header" role="tab" id="qus-E">--}}
{{--                                            <h6 class="mb-0">--}}
{{--                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-three"--}}
{{--                                                   aria-expanded="false" aria-controls="collapse-three">--}}
{{--                                                    CETTE FORMATION EST-ELLE FAITE POUR MOI ?--}}
{{--                                                </a>--}}
{{--                                            </h6>--}}
{{--                                        </div>--}}
{{--                                        <div id="collapse-three" class="collapse" data-bs-parent="#sidebar-tab-content"--}}
{{--                                             role="tabpanel" aria-labelledby="qus-E">--}}
{{--                                            <div class="card-body">--}}
{{--                                                <li>Responsables Marketing et/ou Communication</li>--}}
{{--                                                <li>Chefs de projets digitaux/social media</li>--}}
{{--                                                <li>Community Managers</li>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div id="accordion-F" class="card tab-pane" role="tabpanel"--}}
{{--                                         aria-labelledby="accordion-F">--}}
{{--                                        <div class="card-header" role="tab" id="qus-F">--}}
{{--                                            <h6 class="mb-0">--}}
{{--                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-three"--}}
{{--                                                   aria-expanded="false" aria-controls="collapse-three">--}}
{{--                                                    COMMENT SE DÉROULE LE BOOTCAMP ?--}}
{{--                                                </a>--}}
{{--                                            </h6>--}}
{{--                                        </div>--}}
{{--                                        <div id="collapse-three" class="collapse" data-bs-parent="#sidebar-tab-content"--}}
{{--                                             role="tabpanel" aria-labelledby="qus-D">--}}
{{--                                            <div class="card-body">--}}
{{--                                                <p>Ce Bootcamp se déroulera dans les locaux de à SFA (Se Former Autrement),--}}
{{--                                                    Rue Louis Lumière, Abidjan du 11 au 14 Juillet 2022 en 2 cohortes de 10 à 15 personnes maximum :</p>--}}
{{--                                                <li>11 au 12 Juillet 2022 pour la première cohorte</li>--}}
{{--                                                <li>13 au 14 Juillet 2022 pour la seconde cohorte</li>--}}
{{--                                                <li>Il s’agit d’une formation inter-entreprises en présentiel.</li>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div id="accordion-G" class="card tab-pane" role="tabpanel"--}}
{{--                                         aria-labelledby="accordion-G">--}}
{{--                                        <div class="card-header" role="tab" id="qus-G">--}}
{{--                                            <h6 class="mb-0">--}}
{{--                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-three"--}}
{{--                                                   aria-expanded="false" aria-controls="collapse-three">--}}
{{--                                                    QUELLES SONT LES MODALITÉS PÉDAGOGIQUES ?--}}
{{--                                                </a>--}}
{{--                                            </h6>--}}
{{--                                        </div>--}}
{{--                                        <div id="collapse-three" class="collapse" data-bs-parent="#sidebar-tab-content"--}}
{{--                                             role="tabpanel" aria-labelledby="qus-D">--}}
{{--                                            <div class="card-body">--}}
{{--                                               <p> Théorie (20%)</p>--}}

{{--                                                <li>Cours sur slides</li>--}}
{{--                                                <li>Des explications (en schéma, vidéo, en audio, en texte et témoignages)</li>--}}
{{--                                                <p>Technique, bonnes pratiques et retours d’expérience (30%)</p>--}}

{{--                                                <li>Des exemples concrets et des études de cas</li>--}}
{{--                                                <li>La boîte à outils : des ressources et références outils</li>--}}
{{--                                                <p>Pratique avec les experts (50%)</p>--}}

{{--                                                <li>Des exercices, projets de mise en situation</li>--}}
{{--                                                <li>Des quiz pour tester ses connaissances</li>--}}
{{--                                                <li>Des échanges et questions avec les formateurs & influenceurs--}}
{{--                                                    Workbook</li>--}}
{{--                                                <li>Toolbox : les références et templates (veille, outils téléchargeables gratuits et sur abonnement)</li>--}}


{{--                                                <p>SUIVI ET ÉVALUATION DES ACQUIS</p>--}}

{{--                                                <li>Exercices pratiques de groupe et personnels corrigés par les formateurs</li>--}}
{{--                                                <li>Quizz après chaque thème (sous format QCM)</li>--}}
{{--                                                <li>Pour la formule PREMIUM : mentoring sur la base d’un travail écrit réel (propre à votre projet de marketing digital actuel)</li>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div id="accordion-H" class="card tab-pane" role="tabpanel"--}}
{{--                                         aria-labelledby="accordion-H">--}}
{{--                                        <div class="card-header" role="tab" id="qus-H">--}}
{{--                                            <h6 class="mb-0">--}}
{{--                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-three"--}}
{{--                                                   aria-expanded="false" aria-controls="collapse-three">--}}
{{--                                                    PUIS-JE AVOIR LE PROGRAMME DÉTAILLÉ DU BOOTCAMP ?--}}
{{--                                                </a>--}}
{{--                                            </h6>--}}
{{--                                        </div>--}}
{{--                                        <div id="collapse-three" class="collapse" data-bs-parent="#sidebar-tab-content"--}}
{{--                                             role="tabpanel" aria-labelledby="qus-D">--}}
{{--                                            <div class="card-body">--}}
{{--                                                <h2><strong>PROGRAMME</strong></h2>--}}
{{--                                                <p>“J’apprends de façon intensive, je pratique et je rencontre mes pairs”</p>--}}
{{--                                                <h2><strong>BOOTCAMP DIGITAL</strong></h2>--}}

{{--                                                <p>“Je booste ma stratégie de marketing digital et je passe à l’action ! ”</p>--}}

{{--                                                <p>Améliorer les performances de vos campagnes sur les réseaux sociaux</p>--}}

{{--                                                <h2><strong>INTRODUCTION EN DISTANCIEL</strong></h2>--}}
{{--                                                <p>Introduction au marketing digital en Afrique francophone</p>--}}

{{--                                                <li>Comprendre les réseaux sociaux : focus sur meta et linkedin</li>--}}
{{--                                                <li>Les dernières données des socionautes en Afrique francophone</li>--}}
{{--                                                <li>Tendances social media et créativité</li>--}}
{{--                                                <p>QUIZZ : Mettre en place un système de veille</p>--}}
{{--                                                <h2><strong>JOUR 1 EN PRÉSENTIEL</strong></h2>--}}
{{--                                                <li>Auditer ses comptes existants sur les réseaux sociaux et se fixer de nouveaux objectifs</li>--}}
{{--                                                <li>Maîtriser les fondamentaux des plateformes : comprendre l’intérêt de communiquer sur instagram, facebook ou linkedin--}}
{{--                                                    (les 3 réseaux sociaux phares dans la zone) et choisir son ou ses canaux</li>--}}
{{--                                                <li>Etudier les meilleurs : panorama de stratégies social media en Afrique francophone et best practices</li>--}}
{{--                                                <li>Connaître les principaux outils et méthodes d’analyse</li>--}}
{{--                                                <li>PASSEZ A L’ACTION : formaliser sa stratégie social media--}}
{{--                                                    (réseaux sociaux, profil de sa communauté,  ses objectifs et indicateurs associés)</li>--}}

{{--                                                <li>Savoir raconter une histoire qui résonne avec son audience : digital storytelling et brand content</li>--}}
{{--                                                <li>Explorer les nouvelles tendances du storytelling : panorama des marques qui fonctionnent</li>--}}
{{--                                                <li>Créer du contenu avec une agence ou en autonomie</li>--}}
{{--                                                <li>Définir un brief agence digitale</li>--}}
{{--                                                <li>Créer des visuels</li>--}}
{{--                                                <li>Créer des vidéos simples</li>--}}
{{--                                                <li>Créer des live</li>--}}
{{--                                                <li>Créer des réels</li>--}}
{{--                                                <li>Créer des podcasts</li>--}}
{{--                                                <li>Utiliser l’UGC (user generated content)</li>--}}
{{--                                                <li>Écrire pour le social media</li>--}}
{{--                                                <p><strong>PASSEZ À L’ACTION</strong> : trouver son positionnement et--}}
{{--                                                    entraînez vous à raconter votre histoire avec la définition de votre calendrier de contenus</p>--}}

{{--                                                <li>Fédérer sa communauté et utiliser des outils d’analyse : le community management en Afrique francophone</li>--}}
{{--                                                <li>Qualifier sa communauté et savoir l’écouter</li>--}}
{{--                                                <li>Trouver son rôle en tant que marque</li>--}}
{{--                                                <li>Animer et engager sa communauté dans le temps</li>--}}
{{--                                                <li>Modérer sa communauté</li>--}}
{{--                                                <p><strong>PASSEZ À L’ACTION</strong> : rédigez votre calendrier éditorial</p>--}}
{{--                                                <h2><strong>JOUR 2 EN PRÉSENTIEL</strong></h2>--}}
{{--                                                <li>Maîtriser meta business manager pour augmenter la visibilité de ses publications</li>--}}
{{--                                                <li>Comprendre le gestionnaire de pub meta manager et maîtriser le vocabulaire</li>--}}
{{--                                                <li>Travailler ses audiences, celles qui correspondent à vos personaes</li>--}}
{{--                                                <li>Configurer ses objectifs et ses publicités</li>--}}
{{--                                                <li>S’inspirer d’exemples d’annonce</li>--}}
{{--                                                <li>Suivre les conversion avec le pixel</li>--}}
{{--                                                <li>Optimiser sa campagne</li>--}}
{{--                                                <p><strong>PASSEZ À L’ACTION</strong> : quizz lancement de campagne</p>--}}

{{--                                                <li>Identifier, collaborer et créer du contenu avec des influenceurs marketing pertinents</li>--}}
{{--                                                <li>Savoir repérer sur les plateformes les influenceurs qui matchent avec sa marque</li>--}}
{{--                                                <li>Négocier avec les influenceurs marketing ( brief, méthode de travail et budget)</li>--}}
{{--                                                <li>S’inspirer de campagnes et contenus créés par des influenceurs</li>--}}
{{--                                                <li>Échanges à bâtons rompus avec des influenceurs marketing</li>--}}
{{--                                                <p><strong>PASSEZ À L’ACTION</strong> : 2 questions à nos influenceurs invités sur votre contenu de marque</p>--}}
{{--                                                <h2><strong>REMISE DES CERTIFICATS DE RÉUSSITE</strong></h2>--}}
{{--                                                <p><strong>MENTORING</strong> (réservé aux personnes inscrites pour l’offre premium)</p>--}}

{{--                                                <p>Parce que les recettes miracles n’existent pas et que vous vous retrouvez à--}}
{{--                                                    tourner en rond, nous vous proposons de dépasser vos points de blocages avec nos formateurs experts.</p>--}}
{{--                                                <h4><strong>Comment ?</strong></h4>--}}
{{--                                                <li>Venir avec un cas réel sur un réseau social précis : facebook, instagram ou linkedin</li>--}}
{{--                                                <li>Produire et tester en direct</li>--}}
{{--                                                <li>Définir un plan d’action sur les prochains mois</li>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div id="accordion-I" class="card tab-pane" role="tabpanel"--}}
{{--                                         aria-labelledby="accordion-I">--}}
{{--                                        <div class="card-header" role="tab" id="qus-I">--}}
{{--                                            <h6 class="mb-0">--}}
{{--                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-three"--}}
{{--                                                   aria-expanded="false" aria-controls="collapse-three">--}}
{{--                                                    UN CERTIFICAT EST-IL DÉLIVRÉ À LA FIN DU BOOTCAMP ?--}}
{{--                                                </a>--}}
{{--                                            </h6>--}}
{{--                                        </div>--}}
{{--                                        <div id="collapse-three" class="collapse" data-bs-parent="#sidebar-tab-content"--}}
{{--                                             role="tabpanel" aria-labelledby="qus-D">--}}
{{--                                            <div class="card-body">--}}
{{--                                                <p>Un certificat de réussite ADICOMACADEMY vous sera remis</p>--}}
{{--                                                --}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- About page html start -->
    </main>
@endsection
