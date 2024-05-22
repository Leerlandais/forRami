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

    <meta name="description" content="Contactez-moi pour des collaborations et des projets. Je réponds dans les plus brefs délais.">
    <meta name="keywords" content="contact, collaboration, projets, email, téléphone, Ben Salem Rami">
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

<body class="d-flex flex-column">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WW3H92KT" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Ben Salem Rami</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="index.html">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="resume.html">Mes compétences </a></li>
                        <li class="nav-item"><a class="nav-link" href="projects.html">Mes travaux réalisés</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contactez-Moi</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <section class="py-5">
            <div class="container px-5">
                <!-- Contact form-->
                <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                    <div class="text-center mb-5">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i
                                class="bi bi-envelope"></i></div>
                        <h1 class="fw-bolder">Contactez-moi ici</h1>
                        <p class="lead fw-normal text-muted mb-0">Travaillons ensemble! <br> NB: Je vous répondrai dans
                            les plus brefs délais.</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                        data-sb-validations="required" />
                                    <label for="name">Votre nom et prénom </label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.
                                    </div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                        data-sb-validations="required,email" />
                                    <label for="email">Adresse e-mail </label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Un e-mail est
                                        requis.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">L'email n'est pas
                                        valide.</div>
                                </div>
                                <!-- Phone number input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                        data-sb-validations="required" />
                                    <label for="phone">Votre GSM</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Un numéro de
                                        téléphone est requis.</div>
                                </div>
                                <!-- Message input-->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" type="text"
                                        placeholder="Enter your message here..." style="height: 10rem"
                                        data-sb-validations="required"></textarea>
                                    <label for="message">Message</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Un message est
                                        requis.</div>
                                </div>
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Le formulaire n'a pas encore été activé.</div>
                                        Dès que c'est prêt, je ferai une mise à jour. Merci pour votre patience.
                                        <br />

                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">error 404!</div>
                                </div>
                                <!-- Submit Button-->
                                <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton"
                                        type="submit">Envoyer</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>