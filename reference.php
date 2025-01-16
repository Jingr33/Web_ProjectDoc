<?php

require_once "X}oGDW3Tnt/classes/Database.php";
require_once "X}oGDW3Tnt/classes/Reference.php";

$database = new Database();
$connection = $database->connectionDB();

$references = Reference::getAllReferences($connection);

?>

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
        <meta name="description" content="Zakládám si na referncích. Nejnovější realizované projektové dokumentace v oblasti jihovýchodní Moravy." />
        <meta name="author" content="Jiří Ingr" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="style-portfolio.css" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        
        <link rel="shortcut icon" href="pictures/logo/shorcut-icon.png" />
        <link rel="stylesheet" href="lightbox/lightbox.min.css" type="text/css" />


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <title>Reference | PROJEKCE STROUHAL</title>
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
                                <li class="dropdown-item active"><a href="reference">Reference</a></li>
                                <li class="dropdown-item"><a href="cenik">Ceník</a></li>
                                <li class="dropdown-item"><a href="spoluprace">Postup spolupráce</a></li>
                                <li class="dropdown-item"><a href="kontakt">Kontakt</a></li>
                                <li class="dropdown-item"><a role="button" data-bs-toggle="modal" data-bs-target="#modal-contact" class="dropdown-difference">Nezávazná poptávka</a></li>
                            </ul>
                        </div>
                    </div>
                    <nav>
                        <ul class="navbar">
                            <li><a href="domu">Domů</a></li>
                            <li><a href="sluzby">Služby</a></li>
                            <li class="active"><a href="#">Reference</a></li>
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
                <div class="top-gap"></div>
                <section class="container" id="pf-header">
                    <h1>Reference</h1>
                    <p>Svou činnost zaměřuji především do okolí měst Zlín, Hulín, Kroměříž, Uherské Hradiště, Přerov, Vsetín, Holešov, Bystřice pod Hostýnem, Otrokovice, Vyškov, Valašské Meziříčí. Uvedené lokace však nejsou podmínkou, přijímám spolupráce v rámci celé ČR.</p>
                </section>
                <!-- <section class="container" id="pf-content">
                    <div class="row card-group">
                        <div class="col-12 col-md-6 col-xl-4">
                            <a href="pictures/merutky/merutky_1.jpg" rel="lightbox[sequence_A]" data-lightbox="merutky" data-title="Měrůtky" data-alt="Rodinný dům Měrůtky" loading="lazy">
                                <div class="card">
                                    <img class="card-img-top" src="pictures/portfolio/pf-merutky.png" alt="Rodinný dům Měrůtky" />
                                    <div class="card-body">
                                        <div class="card-title">Novostavba rodinného domu v Měrůtkách</div>
                                    </div>
                                </div>
                            </a>
                            <a href="pictures/merutky/merutky_2.jpg" class="d-none" rel="lightbox[sequence_A]" data-lightbox="merutky" data-title="Rodinný dům Měrůtky" data-alt="Rodinný dům Měrůtky" loading="lazy"></a>
                            <a href="pictures/merutky/merutky_3.jpg" class="d-none" rel="lightbox[sequence_A]" data-lightbox="merutky" data-title="Rodinný dům Měrůtky" data-alt="Rodinný dům Měrůtky" loading="lazy"></a>
                            <a href="pictures/merutky/merutky_4.jpg" class="d-none" rel="lightbox[sequence_A]" data-lightbox="merutky" data-title="Rodinný dům Měrůtky" data-alt="Rodinný dům Měrůtky" loading="lazy"></a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <a href="pictures/nemcice/nemcice_1.jpg" rel="lightbox[sequence_B]" data-lightbox="nemcice" data-title="Rodinný dům Němčice" data-alt="Rodinný dům Němčice" loading="lazy">
                                <div class="card">
                                    <img class="card-img-top" src="pictures/portfolio/pf-nemcice.png" alt="Rodinný dům Němčice"/>
                                    <div class="card-body">
                                        <div class="card-title">Novostavba rodinného domu v Němčicích</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <a href="pictures/martinice/martinice_2.jpeg" rel="lightbox[sequence_C]" data-lightbox="martinice" data-title="Rodinný dům Martinice" data-alt="Rodinný dům Martinice" loading="lazy">
                                <div class="card">
                                    <img class="card-img-top" src="pictures/portfolio/pf-martinice.png" alt="Rodinný dům Měrůtky"/>
                                    <div class="card-body">
                                        <div class="card-title">Novostavba rodinného domu v Martinicích</div>
                                    </div>
                                </div>
                            </a>
                            <a href="pictures/martinice/martinice_1.jpeg" class="d-none" rel="lightbox[sequence_C]" data-lightbox="martinice" data-title="Rodinný dům Martinice" data-alt="Rodinný dům Marinice" loading="lazy"></a>
                        </div>                 
                        <div class="col-12 col-md-6 col-xl-4">
                            <a href="pictures/zahlinice/zahlinice_1.jpg" rel="lightbox[sequence_D]" data-lightbox="zahlinice" data-title="Rodinný dům Záhlinice" data-alt="Rodinný dům Záhlinice" loading="lazy">
                                <div class="card">
                                    <img class="card-img-top" src="pictures/portfolio/pf-zahlinice.png" alt="Rodinný dům Záhlinice"/>
                                    <div class="card-body">
                                        <div class="card-title">Novostavba rodinného domu v Záhlinicích</div>
                                    </div>
                                </div>
                            </a>
                            <a href="pictures/zahlinice/zahlinice_2.jpg" class="d-none" rel="lightbox[sequence_D]" data-lightbox="zahlinice" data-title="Rodinný dům Záhlinice" data-alt="Rodinný dům Záhlinice" loading="lazy"></a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <a href="pictures/hulin/hulin_1.jpg" rel="lightbox[sequence_E]" data-lightbox="hulin" data-title="Rodinný dům Hulín" data-alt="Rodinný dům Hulín" loading="lazy">
                                <div class="card">
                                    <img class="card-img-top" src="pictures/portfolio/pf-hulin.png" alt="Rodinný dům Hulín"/>
                                    <div class="card-body">
                                        <div class="card-title">Rekonstrukce rodinného domu v Hulíně</div>
                                    </div>
                                </div>
                            </a>
                            <a href="pictures/hulin/hulin_2.jpg" class="d-none" rel="lightbox[sequence_E]" data-lightbox="hulin" data-title="Rodinný dům Hulín" data-alt="Rodinný dům Hulín" loading="lazy"></a>
                            <a href="pictures/hulin/hulin_3.jpg" class="d-none" rel="lightbox[sequence_E]" data-lightbox="hulin" data-title="Rodinný dům Hulín" data-alt="Rodinný dům Hulín" loading="lazy"></a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <a href="pictures/travnik/travnik_1.jpeg" rel="lightbox[sequence_F]" data-lightbox="travnik" data-title="Rodinný dům Trávník" data-alt="Rodinný dům Trávník" loading="lazy">
                                <div class="card">
                                    <img class="card-img-top" src="pictures/portfolio/pf-travnik.png" alt="Rodinný dům Trávník"/>
                                    <div class="card-body">
                                        <div class="card-title">Rodinný dům Trávník</div>
                                    </div>
                                </div>
                            </a>
                            <a href="pictures/travnik/travnik_2.jpeg" class="d-none" rel="lightbox[sequence_F]" data-lightbox="travnik" data-title="Rodinný dům Trávník" data-alt="Rodinný dům Trávník" loading="lazy"></a>
                            <a href="pictures/travnik/travnik_3.jpeg" class="d-none" rel="lightbox[sequence_F]" data-lightbox="travnik" data-title="Rodinný dům Trávník" data-alt="Rodinný dům Trávník" loading="lazy"></a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <a href="pictures/mlyn_rikovice/rikovice_1.png" rel="lightbox[sequence_H]" data-lightbox="mlyn_rikovice" data-title="Mlýn Říkovice" data-alt="Mlýn Říkovice" loading="lazy">
                                <div class="card">
                                    <img class="card-img-top" src="pictures/portfolio/pf_mlyn_rikovice.png" alt="Mlýn Říkovice"/>
                                    <div class="card-body">
                                        <div class="card-title">Revitalizace mlýna v Říkovicích</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <a href="pictures/objekt_hulin/objekt_hulin_1.png" rel="lightbox[sequence_I]" data-lightbox="ob_hulin" data-title="Objekt Hulín" data-alt="Objekt Hulín" loading="lazy">
                                <div class="card">
                                    <img class="card-img-top" src="pictures/portfolio/pf-zmena_stavby-hulin.png" alt="Objekt Hulín"/>
                                    <div class="card-body">
                                        <div class="card-title">Přestavba objektu rodinného domu v Hulíně</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <a href="pictures/sport_zahlinice/sport_zahlinice.png" rel="lightbox[sequence_J]" data-lightbox="osport_zahlinice" data-title="Sportovní areál Záhlinice" data-alt="Sportovní areál Záhlinice" loading="lazy">
                                <div class="card">
                                    <img class="card-img-top" src="pictures/portfolio/pf-sport-zahlinice.png" alt="Sportovní areál Záhlinice"/>
                                    <div class="card-body">
                                        <div class="card-title">Rekonstrukce sportovního areálu Záhlinice</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section> -->



                <section class="container" id="pf-content">
                    <div class="row card-group">
                        <?php foreach ($references as $one_reference): ?>
                        <div class="col-12 col-md-6 col-xl-4">
                            <!-- Reference z databáze -->
                            <a href="<?= $one_reference["image1_path"] ?>" rel="lightbox[sequence_<?= $one_reference["id"] ?>]" data-lightbox="<?= $one_reference["id"] ?>" data-title="<?= $one_reference["image1_name"] ?>" data-alt="<?= $one_reference["image1_name"] ?>" loading="lazy">
                                <div class="card">
                                    <img class="card-img-top" src="<?= $one_reference["image_preview_path"] ?>" alt="<?= $one_reference["image1_name"] ?>" />
                                    <div class="card-body">
                                        <div class="card-title"><?= $one_reference["descrip"] ?></div>
                                    </div>
                                </div>
                            </a>
                            <?php if ($one_reference["image2_path"] !== null): ?>
                                <a href="<?= $one_reference["image2_path"] ?>" class="d-none" rel="lightbox[sequence_<?= $one_reference["id"] ?>]" data-lightbox="<?= $one_reference["id"] ?>" data-title="<?= $one_reference["image2_name"] ?>" data-alt="<?= $one_reference["image2_name"] ?>" loading="lazy"></a>
                            <? endif; ?>
                            <?php if ($one_reference["image3_path"] !== null): ?>
                                <a href="<?= $one_reference["image3_path"] ?>" class="d-none" rel="lightbox[sequence_<?= $one_reference["id"] ?>]" data-lightbox="<?= $one_reference["id"] ?>" data-title="<?= $one_reference["image3_name"] ?>" data-alt="<?= $one_reference["image3_name"] ?>" loading="lazy"></a>
                            <? endif; ?>
                            <?php if ($one_reference["image4_path"] !== null): ?>
                                <a href="<?= $one_reference["image4_path"] ?>" class="d-none" rel="lightbox[sequence_<?= $one_reference["id"] ?>]" data-lightbox="<?= $one_reference["id"] ?>" data-title="<?= $one_reference["image4_name"] ?>" data-alt="<?= $one_reference["image4_name"] ?>" loading="lazy"></a>
                            <? endif; ?>
                        </div>
                        <?php endforeach; ?>       
                    </div>
                </section>



            </article>

            <!-- PATIČKA -->
            <?php require "./assets/footer.php"; ?>

        </main>

        <script src="lightbox/lightbox-plus-jquery.min.js"></script> <!--lightbox-->
        <script>
            lightbox.option({
                'showImageNumberLabel': false,
            })
        </script> 
    </body>
</html>