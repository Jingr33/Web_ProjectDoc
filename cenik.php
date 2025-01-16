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
        <meta name="description" content="Zjistěte kolik stojí projektová dokumentace. Podívejte se na orientační cenové rozmezí jednotlivých částí." />
        <meta name="author" content="Jiří Ingr" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="style-price.css" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        
        <link rel="shortcut icon" href="pictures/logo/shorcut-icon.png" />

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <title>Ceník služeb | PROJEKCE STROUHAL</title>
    </head>
    <body>
        
        <!-- Modální dialog -->
        <?php require "./assets/modal-dialog.php"; ?>

        <main>
            <header>
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
                                    <li class="dropdown-item active"><a href="cenik">Ceník</a></li>
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
                                <li><a href="reference">Reference</a></li>
                                <li class="active"><a href="#">Ceník</a></li>
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
                <section>
                    <div class="container" id="price-header">
                        <h1>Ceník</h1>
                        <p>Z důvodu individuality a variability konkrétní dokumentace nelze obecně říci, kolik Vás bude Váš projekt stát. Je nutné se osobně sejít, zjistit, co je vaším požadavkem a jáke jsou možnosti. Na základě těchto informací je možné určit finální cenu.</p>                        
                        <p class="contact-href"><a href="kontakt">Kontaktujte mě</a> pro nezávazné setkání.</p>
                    </div>
                    <div id="price-content">
                        <div class="container">
                            <h2>Stavební části dokumentace</h2>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Dokumentace pro stavební povolení</div>
                                <div class="col-auto price-value">40&nbsp;000&nbsp;–&nbsp;80&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Pasport stavby</div>
                                <div class="col-auto price-value">10&nbsp;000&nbsp;–&nbsp;30&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Dokumentace bouracích prací</div>
                                <div class="col-auto price-value">16&nbsp;000&nbsp;–&nbsp;25&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Architektonická studie (samostatně)</div>
                                <div class="col-auto price-value">8&nbsp;000&nbsp;–&nbsp;25&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Dokumentace drobných staveb</div>
                                <div class="col-auto price-value">8&nbsp;000&nbsp;–&nbsp;30&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Dokumentace osazení objektu</div>
                                <div class="col-auto price-value">8&nbsp;000&nbsp;–&nbsp;30&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row" id="info">
                                <p>Projektová dokumentace je jako celek s ohledem na potřeby stavebníka, konkrétního druhu stavby a typu dokumentace, soubor několika profesních částí, na kterých se podílí oprávnění odborníci dané části . Rozsah potřebných částí je tvořen povinnými přílohami, vyplývajícími z požadavků stavební legislativy a zároveň z částí, které jsou individuální a voleny dle potřeb stavebníka.</p>
                            </div>
                        </div>
                        <div class="container">
                            <h2>Profesní části dokumentace</h2>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Měření radonového indexu pozemku</div>
                                <div class="col-auto price-value">3&nbsp;000&nbsp;–&nbsp;5&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Měření koncenterace radonu v objektu</div>
                                <div class="col-auto price-value">3&nbsp;000&nbsp;–&nbsp;5&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Požárně bezpečnostní řešení stavby</div>
                                <div class="col-auto price-value">5&nbsp;500&nbsp;–&nbsp;10&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Energetický průkaz objektu</div>
                                <div class="col-auto price-value">6&nbsp;000&nbsp;–&nbsp;10&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Pedologický průzkum + výpočet odnětí (vynětí ze ZPF)</div>
                                <div class="col-auto price-value">5&nbsp;500&nbsp;–&nbsp;8&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Hydrogeologický průzkum (zasakování vody)</div>
                                <div class="col-auto price-value">6&nbsp;000&nbsp;–&nbsp;8&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Projekt vytápění</div>
                                <div class="col-auto price-value">4&nbsp;000&nbsp;–&nbsp;7&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Výpočet tepelných ztrát objektu</div>
                                <div class="col-auto price-value">2&nbsp;500&nbsp;–&nbsp;4&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Projekt ZTI - voda</div>
                                <div class="col-auto price-value">4&nbsp;000&nbsp;–&nbsp;6&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Projekt ZTI - NTL plyn</div>
                                <div class="col-auto price-value">4&nbsp;000&nbsp;–&nbsp;6&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Projekt ZTI - kanalizace</div>
                                <div class="col-auto price-value">4&nbsp;000&nbsp;–&nbsp;6&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Projekt vnitřní elektro</div>
                                <div class="col-auto price-value">8&nbsp;000&nbsp;–&nbsp;15&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Projekt VZT - vzduchotechniky (rekuperace)</div>
                                <div class="col-auto price-value">8&nbsp;000&nbsp;–&nbsp;14&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Hromosvod</div>
                                <div class="col-auto price-value">8&nbsp;000&nbsp;–&nbsp;10&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Přípojka vody</div>
                                <div class="col-auto price-value">6&nbsp;000&nbsp;–&nbsp;10&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Přípojka kanalizace</div>
                                <div class="col-auto price-value">6&nbsp;000&nbsp;–&nbsp;10&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Přípojka elektro NN</div>
                                <div class="col-auto price-value">6&nbsp;000&nbsp;–&nbsp;10&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Projekt domovní čistírny vody vč. vodovodu</div>
                                <div class="col-auto price-value">10&nbsp;000&nbsp;–&nbsp;15&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Projekt studny vč. hydrog. průzkumu</div>
                                <div class="col-auto price-value">12&nbsp;000&nbsp;–&nbsp;15&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Statické posouzení objektu</div>
                                <div class="col-auto price-value">15&nbsp;000&nbsp;–&nbsp;30&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Položkový rozpočet stavby</div>
                                <div class="col-auto price-value">12&nbsp;000&nbsp;–&nbsp;20&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Zpracování podkladů pro žádost NZU</div>
                                <div class="col-auto price-value">25&nbsp;000&nbsp;–&nbsp;40&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Geodetické zaměření pozemku</div>
                                <div class="col-auto price-value">5&nbsp;000&nbsp;–&nbsp;20&nbsp;000&nbsp;Kč</div>
                            </div>
                        </div>
                        <div class="container">
                            <h2>Ostatní činnosti</h2>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Inženýring (zastupování při vyřizování povolení)</div>
                                <div class="col-auto price-value">15&nbsp;000&nbsp;–&nbsp;20&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Technické hodnocení objektu</div>
                                <div class="col-auto price-value">4&nbsp;000&nbsp;–&nbsp;10&nbsp;000&nbsp;Kč</div>
                            </div>
                            <div class="row tabun row-hover">
                                <div class="col price-name">Ostatní grafické, reprografické činnosti, poradenství, jednání</div>
                                <div class="col-auto price-value">Řešeno v hodinové sazbě</div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>

            <!-- PATIČKA -->
            <?php require "./assets/footer.php"; ?>

        </main>

<script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </body>
</html>