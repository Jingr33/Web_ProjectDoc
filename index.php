
<!DOCTYPE html>
<html lang="cs-cz">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-K7TXVR05N6"></script>        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-K7TXVR05N6');
        </script>

        <meta charset="utf-8" />
        <meta name="robots" content="index, follow" />
        <meta name="google-site-verification" content="768GovNzIWUpmCHNIUqpoEwnBgWKhBCBPAkNAjQp3cQ" />
        <meta name="description" content="Komplexní služby projektové dokumentace rodinných domů i občaských staveb ve spolupráci se specialisty. Projektant s dlouholetou zkušeností." />
        <meta name="author" content="Jiří Ingr" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="style-index.css" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        
        <link rel="shortcut icon" href="pictures/logo/shorcut-icon.png" />

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <title>Projektová dokumentace rodinných domů | PROJEKCE STROUHAL</title>
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
                                <li class="dropdown-item active"><a href="domu">Domů</a></li>
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
                            <li class="active"><a href="#">Domů</a></li>
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
                <div id="landing-carousel">
                    <div id="Carousel" class="carousel slide carousel-fade d-flex" data-bs-ride="carousel" data-bs-interval="8000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#Carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Zapad"></button>
                            <button type="button" data-bs-target="#Carousel" data-bs-slide-to="1" aria-label="Zluty"></button>
                            <button type="button" data-bs-target="#Carousel" data-bs-slide-to="2" aria-label="Nocni"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="pictures/carousel/zapad.png" class="d-block w-100" alt="Rodinný dům se západem slunce">
                            </div>
                            <div class="carousel-item">
                                <img src="pictures/carousel/zluty.png" class="d-block w-100" alt="Žlutý rodinný dům">
                            </div>
                            <div class="carousel-item">
                                <img src="pictures/carousel/nocni.png" class="d-block w-100" alt="Rodinný dům v noci">
                            </div>
                        </div>
                    </div>
                    <div id="overlapp-text" class="d-none d-sm-block">
                        <h1> Projekce Strouhal
                        </h1>
                        <div class="d-none d-xl-block">
                            <p>Jsem projektant s více jak 18letou zkušeností z praxe a více jak stovkou zpracovaných projektových dokumentací. Zabývám se projektováním pozemních staveb, především rodinných a bytových domů a službami s nimi spojenými.</p>
                            <button type="button" role="button" data-bs-toggle="modal" data-bs-target="#modal-contact">Kontaktujte mě!</button>
                        </div>
                    </div>
                </div>
                <div id="aboutus" class="d-flex d-xl-none">
                    <div class="container">
                        <div class="row d-flex d-sm-none">
                            <div class="title col-12">
                                <h1>Projekce Strouhal</h1>        
                            </div>
                        </div>
                        <div class="row col-12 d-flex">
                            <div class="about">
                                <p>Jsem projektant s více jak 18letou zkušeností z praxe a více jak stovkou zpracovaných projektových dokumentací. Zabývám se projektováním pozemních staveb, především rodinných a bytových domů a službami s nimi spojenými.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--ČINNOSTI-->
                <div id="activities">
                    <div class="row">
                        <div class="activ-content d-block col-12 col-lg-6">
                            <h2>Projektová dokumentace</h2>
                            <p>Hledáte spolehlivého partnera pro zpracování projektové dokumentace? Jste na správném místě. Nabízím <strong>komplexní řešení</strong> ve vyšším kvalitativním standardu, které povede k úspěšné realizaci vašeho stavebního projektu, ať už se jedná o novou stavbu, rekonstrukci, adaptaci, demolici nebo dokonce dodatečné povolení, pasportizaci a další potřebné kroky.</p>
                            <a href="sluzby#projDok-href">
                                <button type="button" role="button">Podrobnosti</button>
                            </a>
                        </div>
                        <div class="activ-pics col-6 d-none d-lg-block">
                            <img src="pictures/landing_page/projdoc_image.png" alt="Projektová dokumentace">
                        </div>
                    </div>
                    <div class="row">
                        <div class="activ-pics col-6 d-none d-lg-block">
                            <img src="pictures/landing_page/poradenstvi_image.png" alt="Poradenství">
                        </div>
                        <div class="activ-content d-block col-12 col-lg-6">
                            <h2>Poradenství</h2>
                            <p>Jste ve fázi plánování nového domu, úprav stávající stavby nebo hledáte řešení stavebně technického rázu a potřebujete <strong>odbornou pomoc</strong> a <strong>radu</strong>? Nemusíte se obávat. Společně najdeme cestu, jak se s Vaší výzvou vypořádat!</p>
                            <a href="sluzby#porad-href">
                                <button type="button" role="button">Potřebuji poradit</button>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="activ-content d-block col-12 col-lg-6">
                            <h2>Inženýring</h2>
                            <p>Plánujete stavební projekt a chcete se <strong>vyhnout zdlouhavým čekáním</strong>, neustálému ježdění a zjišťování, kam a jak získat potřebné dokumenty, jsem tu pro Vás. Mým cílem je usnadnit Vám cestu ke schválení stavby.</p>
                            <a href="sluzby#ic-href">
                                <button type="button" role="button">Zjistit více</button>
                            </a>
                        </div>
                        <div class="activ-pics col-6 d-none d-lg-block">
                            <img src="pictures/landing_page/inzenyring_image.png" alt="Inženýring">
                        </div>
                    </div>
                    <div class="row">
                        <div class="activ-pics col-6 d-none d-lg-block">
                            <img src="pictures/landing_page/tho_image.png" alt="Technické hodnocení objektu">
                        </div>
                        <div class="activ-content d-block col-12 col-lg-6">
                            <h2>Technické hodnocení objektu</h2>
                            <p>Předejděte nepříjemným a nákladným stavebním překvapením v budoucnosti. Naše spolupráce vám umožní získat důležité informace o <strong>stavu nemovitosti</strong> a potenciálních <strong>konstrukčních problémech</strong>, které mohou ovlivnit Vaše rozhodnutí ohledně koupě.</p>
                            <a href="sluzby#tho-href">
                                <button type="button" role="button">Potřebuji poradit</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="reviews" class="d-none">
                    <!--REVIEWS-SMALL-->
                    <div id="reviews-small">
                        <div class="container car-revs d-flex d-lg-none">
                            <div id="Carousel-reviews" class="carousel slide d-flex" data-bs-ride="carousel" data-bs-interval="10000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img class="profil-photo" src="pictures/recenze/profil_photo.jpg" alt="Profilová fotografie" />
                                                    </div>
                                                    <div class="col-8">
                                                        <h4>Jméno Příjmení</h4>
                                                        <img class="review-stars" src="pictures/recenze/stars.png" alt="Hodnocení" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h3>Název recenze</h3>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, maxime aut odio iure nesciunt fuga amet illum tempore rem possimus perferendis magnam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img class="profil-photo" src="pictures/recenze/profil_photo.jpg" alt="Profilový obrázek" />
                                                    </div>
                                                    <div class="col-8">
                                                        <h4>Jméno Příjmení</h4>
                                                        <img class="review-stars" src="pictures/recenze/stars.png" alt="Hodnocení" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h3>Název recenze</h3>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, maxime aut odio iure nesciunt fuga amet illum tempore rem possimus perferendis magnam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img class="profil-photo" src="pictures/recenze/profil_photo.jpg" alt="Profilová fotografie" />
                                                    </div>
                                                    <div class="col-8">
                                                        <h4>Jméno Příjmení</h4>
                                                        <img class="review-stars" src="pictures/recenze/stars.png" alt="Hodnocení" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h3>Název recenze</h3>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, maxime aut odio iure nesciunt fuga amet illum tempore rem possimus perferendis magnam.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#Carousel-reviews" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#Carousel-reviews" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--REVIEWS-BIG-->
                    <div id="reviews-big">
                        <div class="container d-none d-lg-block">
                            <div class="row reviews-content">
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img class="profil-photo" src="pictures/recenze/profil_photo.jpg" alt="Profilová fotografie" />
                                                </div>
                                                <div class="col-8">
                                                    <h4>Jméno Příjmení</h4>
                                                    <img class="review-stars" src="pictures/recenze/stars.png" alt="Hodnocení" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h3>Název recenze</h3>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, maxime aut odio iure nesciunt fuga amet illum tempore rem possimus perferendis magnam.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img class="profil-photo" src="pictures/recenze/profil_photo.jpg" alt="Profilová fotografie" />
                                                </div>
                                                <div class="col-8">
                                                    <h4>Jméno Příjmení</h4>
                                                    <img class="review-stars" src="pictures/recenze/stars.png" alt="Hodnocení" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h3>Název recenze</h3>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, maxime aut odio iure nesciunt fuga amet illum tempore rem possimus perferendis magnam.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img class="profil-photo" src="pictures/recenze/profil_photo.jpg" alt="Profilová fotografie" />
                                                </div>
                                                <div class="col-8">
                                                    <h4>Jméno Příjmení</h4>
                                                    <img class="review-stars" src="pictures/recenze/stars.png" alt="Hodnocení" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h3>Název recenze</h3>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, maxime aut odio iure nesciunt fuga amet illum tempore rem possimus perferendis magnam.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="write-review">
                        <div class="container">
                            <div class="row">
                                <a href="https://www.google.com/search?q=v%C3%A1clav+strouhal%2C+dis.+projek%C4%8Dn%C3%AD+pr%C3%A1ce+pozemn%C3%AD+stavby&sca_esv=576160195&rlz=1C1CHBD_csCZ923CZ923&sxsrf=AM9HkKn9qf-iwyp_f78uuShIak8i9h5XvQ%3A1698168825738&ei=-f83ZbTNLLz-7_UPkZSK6A8&oq=v%C3%A1clav+strouhal+dis+&gs_lp=Egxnd3Mtd2l6LXNlcnAiFXbDoWNsYXYgc3Ryb3VoYWwgZGlzICoCCAAyBBAjGCdIrF9QpwZYpwZwAHgAkAEAmAFKoAGFAaoBATK4AQPIAQD4AQHCAgcQIxiwAxgn4gMEGAAgQYgGAZAGAQ&sclient=gws-wiz-serp#lrd=0x6473f340d0e0125:0xa5947b12a7e24d43,3,,,,">
                                    <button type="button" role="button">Napsat Recenzi</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- PATIČKA -->
            <?php require "./assets/footer.php"; ?>

        </main>

    </body>
</html>