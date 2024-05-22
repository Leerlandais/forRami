<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WW3H92KT');</script>
    <!-- End Google Tag Manager -->
    <meta name="description" content="Découvrez les projets réalisés par Ben Salem Rami, incluant le développement web, l'intégration de bases de données et la création de systèmes interactifs.">
    <meta name="keywords" content="projets, développement web, intégration, création de site web, systèmes interactifs, Ben Salem Rami">
    <meta name="author" content="Ben Salem Rami">
    <title><?=$title?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100 bg-light">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WW3H92KT" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <?php
       include_once "../view/navbar.php"?>
        
        <!-- Projects Section-->
        <section class="py-5">
            <div class="container px-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Mes travaux
                            réalisés</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Project Card 1-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder"><a target="_blank"
                                                href="https://2023.webdev-cf2m.be/Rami/TEST%20TI%20VSCODE/public/"> Test
                                                d'intégration 1</a></h2>
                                        <p>Ma responsabilité était de créer des pages Web en utilisant HTML et CSS, en
                                            respectant scrupuleusement toutes les instructions et spécifications
                                            fournies dans le test assigné. J'ai travaillé avec diligence pour traduire
                                            les recommandations du test en un design fonctionnel et cohérent, en
                                            veillant à ce que la mise en page et le style des pages soient conformes aux
                                            demandes. Le résultat final a été un ensemble de pages Web répondant
                                            pleinement à toutes les demandes de test, offrant une expérience utilisateur
                                            complète et conforme aux attentes.</p>
                                    </div>
                                    <img class="img-fluid" src="assets/imgProj/Screenshot 2024-05-20 194448.png"
                                        alt="TI1" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 2-->
                        <div class="card overflow-hidden shadow rounded-4 border-0">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder"><a target="_blank"
                                                href="https://2023.webdev-cf2m.be/Rami/TI2-2024/public/"> Test
                                                d'intégration 2</a></h2>
                                        <p>Ma responsabilité était de gérer les requêtes PHP pour la base de données des
                                            commentaires, en respectant strictement toutes les spécifications du test.
                                            Le résultat : un système de gestion des commentaires pleinement conforme aux
                                            exigences du test.</p>
                                    </div>
                                    <img class="img-fluid" src="assets/imgProj/Screenshot 2024-05-20 194515.png"
                                        alt="TI2" />
                                </div>
                            </div>
                        </div>
                        <!--Proj 3-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mt-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder"><a target="_blank"
                                                href="https://2023.webdev-cf2m.be/Rami/TI3/public/"> Test d'intégration
                                                3</a></h2>
                                        <p>Ma tâche consistait à traiter les adresses dans la base de données et à les
                                            afficher sur une carte géographique créée avec Leaflet en utilisant
                                            JavaScript. Ensuite, j'ai implémenté un système CRUD utilisant PHP,
                                            permettant à un administrateur autorisé de gérer les données directement
                                            depuis le site. Cela incluait la possibilité de créer, modifier ou supprimer
                                            des données sans complications, garantissant une expérience transparente.
                                            J'ai travaillé avec soin pour répondre à toutes les spécifications des tests
                                            et fournir un système complet conforme aux demandes.</p>
                                    </div>
                                    <img height="" class="img-fluid"
                                        src="assets/imgProj/Screenshot 2024-05-20 194426.png" alt="TI3" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action section-->

    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0">Copyright &copy; BSR 2024 </div>
                </div>
                <div class="col-auto">
                    <a class="small" href="index.html">Accueil</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="projects.html">Mes compétences</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="resume.html">Mes travaux réalisés</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>