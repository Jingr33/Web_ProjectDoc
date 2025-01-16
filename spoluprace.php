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
        <meta name="description" content="Co získání kompletní projektové dokumetace obnáší? Průběh spolupráce se zkušeným projektantem krok po kroku." />
        <meta name="author" content="Jiří Ingr" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="style-cooperation.css" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        
        <link rel="shortcut icon" href="pictures/logo/shorcut-icon.png" />

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <title>Postup spolupráce | PROJEKCE STROUHAL</title>
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
                                <li class="dropdown-item active"><a href="spoluprace">Postup spolupráce</a></li>
                                <li class="dropdown-item"><a href="kontakt">Kontakt</a></li>
                                <li class="dropdown-item"><a role="button" data-bs-toggle="modal" data-bs-target="#modal-contact" class="dropdown-difference">Nezávazná poptávka</a></li>
                            </ul>
                        </div>
                    </div>
                    <nav>
                        <ul class="navbar">
                            <li><a href="domu">Domů</a></li>
                            <li><a href="sluzby">Služby</a></li>
                            <li><a href="reference">Reference</a></li>
                            <li><a href="cenik">Ceník</a></li>
                            <li class="active"><a href="#">Postup spolupráce</a></li>
                            <li><a href="kontakt">Kontakt</a></li>
                        </ul>
                    </nav>
                    <button id="nav-button" role="button" type="button"  data-bs-toggle="modal" data-bs-target="#modal-contact"> <!-- vyřešit odkaz -->
                        Rychlý<br>kontakt
                    </button>
                </div>
            </header>
            <article>
                <div class="top-gap"></div>
                <section class="container" id="ps-header">
                    <h1>Postup spolupráce</h1>
                </section>
                <section class="container" id="ps-timeline">
                    <div class="tl-line"></div>
                    <div class="tl-start"></div>
                    <div class="tl-end"></div>
                    <a href="#l-prvni-schuzka"><div class="ps"></div></a>
                    <a href="#l-cenova-nabidka"><div class="cn"></div></a>
                    <a href="#l-schuzka"><div class="svt"></div></a>
                    <a href="#l-revize"><div class="rcn"></div></a>
                    <a href="#l-studie"><div class="stu"></div></a>
                    <a href="#l-dokumentace"><div class="proj"></div></a>
                    <a href="#l-inzenyring"><div class="in"></div></a>
                    <a href="#l-predani-dok"><div class="pd"></div></a>
                </section>
                <section class="container" id="ps-content">
                    <h3 class="row h-steps d-none d-md-flex" id="l-prvni-schuzka">Krok za krokem...</h3>
                    <div class="container steps">
                        <!--První schůzka-->
                        <div class="row">
                            <div class="d-none d-md-flex col-md-4">
                                <small>Krok 1</small>
                            </div>
                            <div class="col-12 col-md-8 ps-text aprox-time blue-arrow">
                                <h2>První schůzka</h2>
                                <p id="l-cenova-nabidka">Společně prodiskutujeme Váš investorský záměr či problematiku, se kterou Vám mohu pomoci a následně specifikujeme služby, které požadujete nebo jsou nutné pro uskutečnění vašeho projektu.</p>
                                <div class="row d-flex d-md-none s-arrow">
                                    <a href="#cenova-nabidka" id="cenova-nabidka">
                                        <div class="col-4 offset-4 s-arrow-blue"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Cenová nabídka-->
                        <div class="row">
                            <div class="d-none d-md-flex col-md-4">
                                <small>Krok 2</small>
                            </div>
                            <div class="col-12 col-md-8 ps-text aprox-time blue-arrow">
                                <h2>Cenová nabídka</h2>
                                <p id="l-schuzka">Bude Vám zaslána nezávazná cenová nabídka na základě specifikací z předchozí schůzky. V případě navázání spolupráce následně určíme, zda přidat či vynechat další služby a stanovíme výši zálohy dle specifikace v cenové nabídce.</p>
                                <div class="row d-flex d-md-none s-arrow">
                                    <a href="#schuzka" id="schuzka">
                                        <div class="col-4 offset-4 s-arrow-blue"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Schůzka v terénu-->
                        <div class="row">
                            <div class="d-none d-md-flex col-md-4">
                                <small>Krok 3</small>
                            </div>
                            <div class="col-12 col-md-8 ps-text aprox-time blue-arrow">
                                <h2>Schůzka v terénu</h2>
                                <p id="l-revize">Zkonzultujeme Váš projekt přímo na dané parcele, resp. objektu a realizujeme výškopisné zaměření, popř. zaměření stávajícího objektu.</p>
                                <div class="row d-flex d-md-none s-arrow">
                                    <a href="#l-revize" id="revize">
                                        <div class="col-4 offset-4 s-arrow-blue"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Revize cenové nabídky-->
                        <div class="row">
                            <div class="d-none d-md-flex col-md-4">
                                <small>Krok 4</small>
                            </div>
                            <div class="col-12 col-md-8 ps-text aprox-time blue-arrow">
                                <h2>Revize cenové nabídky</h2>
                                <p id="l-studie">Zkorigujeme cenovou nabídku tak, aby její návrh odpovídal reálné situaci a domluvíme se na finální ceně i výši zálohy.</p>
                                <div class="row d-flex d-md-none s-arrow">
                                    <a href="#studie" id="studie">
                                        <div class="col-4 offset-4 s-arrow-blue"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Studie-->
                        <div class="row">
                            <div class="d-none d-md-flex col-md-4">
                                <small>Krok 5</small>
                            </div>
                            <div class="col-12 col-md-8 ps-text aprox-time blue-arrow">
                                <h2>Studie</h2>
                                <p id="l-dokumentace">Provedeme shromáždění vstupních podkladů jako je územní plán, dochovaná projektová dokumentace či informace o inženýrských sítích. Následně Vám bude zaslán návrh dispozice půdorysů objektu příp. architektonické pohledy. Projdeme a prodiskutujeme navržené řešení a odsouhlasíme si dispozici.</p>
                                <div class="row d-flex d-md-none s-arrow">
                                    <a href="#dokumentace" id="dokumentace">
                                        <div class="col-4 offset-4 s-arrow-blue"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Zhotovení dokumentace-->
                        <div class="row">
                            <div class="d-none d-md-flex col-md-4">
                                <small>Krok 6</small>
                            </div>
                            <div class="col-12 col-md-8 ps-text aprox-time blue-arrow">
                                <h2>Zhotovení dokumentace</h2>
                                <p id="l-inzenyring">Po provedení potřebných průzkumů staveniště / stavby vypracuji dokumentaci DUR+DSP. Bude Vám v elektronické podobě zaslána dokumentace stavební části, předány podklady pro dílčí zpracování profesních částí (vodo, topo, elektro, PENB, PBŘ atd.) a zapracovány externí výstupy profesních částí do projektové dokumentace.</p>
                                <div class="row d-flex d-md-none s-arrow">
                                    <a href="#inzenyring" id="inzenyring">
                                        <div class="col-4 offset-4 s-arrow-blue"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Inženýring-->
                        <div class="row">
                            <div class="d-none d-md-flex col-md-4">
                                <small>Krok 7</small>
                            </div>
                            <div class="col-12 col-md-8 ps-text aprox-time blue-arrow">
                                <h2>Inženýring</h2>
                                <p id="l-predani-dok">Zajistím potřebná stanoviska a vyjádření (koordinované, hygiena, hasiči, ins. sítě atd.) a zapracuji vyjádření a stanoviska do dokumentace. Bude podána žádost o povolení stavby.</p>
                                <div class="row d-flex d-md-none s-arrow">
                                    <a href="#predani-dok" id="predani-dok">
                                        <div class="col-4 offset-4 s-arrow-blue"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Předání dokumentace-->
                        <div class="row">
                            <div class="d-none d-md-flex col-md-4">
                                <small>Krok 8</small>
                            </div>
                            <div class="col-12 col-md-8 ps-text aprox-time yellow-underline">
                                <h2>Předání dokumentace</h2>
                                <p>Budou Vám předány 3 – 4 kompletní autorizované projektové dokumentace společně s vyjádřeními a stanovisky v tištěné podobě a 1 elektronická verze. Proběhne doplatek zbývající části dohodnuté ceny.</p>
                                <div class="row d-flex d-md-none s-arrow">
                                    <div class="col-8 s-underline-yellow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>

            <!-- PATIČKA -->
            <?php require "./assets/footer.php"; ?>

        </main>
</html>