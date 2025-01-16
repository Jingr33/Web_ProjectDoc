<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K7TXVR05N6"></script>        <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-K7TXVR05N6');
    </script>

    <meta charset="utf-8" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="google-site-verification" content="768GovNzIWUpmCHNIUqpoEwnBgWKhBCBPAkNAjQp3cQ" />
    <meta name="description" content="Stránka webu Projekce Strouhal nebyla nalezena." />
    <meta name="author" content="Jiří Ingr" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="style-error-page.css" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        
    <link rel="shortcut icon" href="pictures/logo/shorcut-icon.png" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <title>Stránka nenalezena | PROJEKCE STROUHAL</title>
</head>
<body>
    <!-- Modální dialog -->
    <?php require "./assets/modal-dialog.php"; ?>

    <main>
        <header>
            <div class="container-fluid" id="nav">
                <!--  Navline logo -->
                <a id="nav-logo" href="domu">
                        <h2>PROJEKCE STROUHAL</h2>
                        <h3>Projekty rodinných domů</h3>
                </a>
                <!-- Dropdown mobilní menu -->
                <div id="nav-dropdown">
                    <div class="d-flex" id="dropdown-menu">
                        <button class="btn dropdown" type="button" role="button" id="dropdown-button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div id="menu-button"></div>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdown-button">
                            <li class="dropdown-item"><a href="domu">Domů</a></li>
                            <li class="dropdown-item"><a href="sluzby">Služby</a></li>
                            <li class="dropdown-item"><a href="reference">Reference</a></li>
                            <li class="dropdown-item"><a href="cenik">Ceník</a></li>
                            <li class="dropdown-item"><a href="spoluprace">Postup spolupráce</a></li>
                            <li class="dropdown-item"><a href="kontakt">Kontakt</a></li>
                            <li class="dropdown-item"><a role="button" data-bs-toggle="modal" data-bs-target="#modal-contact" class="dropdown-difference">Nezávazná poptávka</a></li>
                        </ul>
                    </div>
                </div>
                <nav>
                    <ul class="navbar">
                        <li><a href="#">Domů</a></li>
                        <li><a href="sluzby">Služby</a></li>
                        <li><a href="reference">Reference</a></li>
                        <li><a href="cenik">Ceník</a></li>
                        <li><a href="spoluprace">Postup spolupráce</a></li>
                        <li><a href="kontakt">Kontakt</a></li>
                    </ul>
                </nav>
                <button id="nav-button" role="button" type="button"  data-bs-toggle="modal" data-bs-target="#modal-contact"> <!-- vyřešit odkaz -->
                    Rychlý<br>kontakt
                </button>
            </div>
        </header>
        <article>
            <div class="top-gap d-none d-lg-flex"></div>
            <div class="top-gap-small d-flex d-lg-none"></div>

            <div class="error-404">
                <div id="error-large" class="d-none d-lg-flex row">
                    <div class="col-auto">
                        <img src="pictures/error-page/error-404.png" alt="Stránka nebyla nalezena">
                    </div>
                    <div class="col">
                        <div class="error-text row">
                            <h1>404</h1>
                            <h2>Stránka nebyla nalezena</h2>
                            <p>Tuto stránku se najít nepodařilo. Můj web ale můžete bez obav prozkoumávat dál.</p>
                        </div>
                    </div>
                </div>

                <div id="error-small" class="d-flex d-lg-none row">
                <div class="error-text row">
                        <h1>404</h1>
                        <h2>Stránka nebyla nalezena</h2>
                        <p>Tuto stránku se najít nepodařilo. Můj web ale můžete bez obav prozkoumávat dál.</p>
                    </div>
                    <div class="row">
                        <img src="pictures/error-page/error-404-small2.png" alt="Stránka nebyla nalezena">
                    </div>
                </div>
            </div>
        </article>
    </main>

    <!-- Patička -->
    <?php require "assets/footer.php"; ?>
</body>
</html>