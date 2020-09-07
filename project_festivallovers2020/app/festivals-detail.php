<?php
include 'head.php';
?>

<body>
    <?php include 'header.php'; ?>
    <?php include 'overlay_login.php'; ?>
    <?php include 'overlay_menu.php'; ?>


    <main>
        <div class="wrapper">

            <!-- Part: HEAD of festival -->
            <section class="headFestival coloring__indie-background">
                <div class="headFestival__icon coloring__indie-icon">
                </div>
                <picture class="headFestival__image">
                    <source srcset="img/detail_teaser_indie_01-l.png" media="(min-width: 1024px)">
                    <source srcset="img/detail_teaser_indie_01-m.png" media="(min-width: 769px)">
                    <img src="img/detail_teaser_indie_01-s.png" alt="Bild von Festival: Sur Le Lac">
                </picture>
                <h2 class="festivaltitle">Sur Le Lac<br>ein kleines Fest der Musik</h2>
            </section>


            <!-- Part: COUNTER -->
            <section class="counterFestival  coloring__indie-background-light">
                <div class="counterFestival__box counterFestival__countdown coloring__indie-counterBox">
                    <p class="counterFestival__title">COUNTDOWN</p>
                    <p class="counterFestival__counter" id="countdownText">7 TAGE</p>
                </div>

                <div class="counterFestival__box counterFestival__tickets coloring__indie-counterBox">
                    <p class="counterFestival__title">ÜBRIGE TICKETS</p>
                    <p class="counterFestival__counter">43</p>
                </div>

                <div class=" counterFestival__box counterFestival__visitors coloring__indie-counterBox">
                    <p class="counterFestival__title">BESUCHER</p>
                    <p class="counterFestival__counter">12'000</p>
                </div>

                <div class="counterFestival__box counterFestival__weather coloring__indie-counterBox">
                    <p class="counterFestival__title">WETTER</p>
                    <p class="counterFestival__counter">28°</p>
                </div>
            </section>


            <!-- Part: BREADCRUMP -->
            <section class="breadcrump"> <!-- start of breadcrump -->
                <div class="breadcrump__nav">
                    <a href="index.php" target="_self" class="breadcrump__secondNavLink">
                        <img src="img/navigation_home_greyC2.svg" class="breadcrump__firstNav" alt="Zurück zur Index-Seite">
                    </a>
                    <img src="img/steuerung_pfeil_rechts_greyC2.svg" class="breadcrump__iconNext" alt="Öffnen der nächsten Seite">
                    <div class="breadcrump__secondNav-festivals">
                        <p>Festivals</p>
                        <img src="img/steuerung_kreis-dropdown-down_greyC2.svg" class="breadcrump__iconOpen" alt="Öffnen der nächsten Seite">

                        <!-- open breadcrump-overlay -->
                        <div id="breadcrump-outside-festivals" class="breadcrump-outside-festivals">
                            <div class="breadcrump-inside">

                                <div class="breadcrump-dropdown">
                                    <div class="breadcrump-dropdown__secondNavOpen">
                                        <ul>  <!-- part where only shown, if click on breadcrump-festival-button -->
                                            <li><a href = "festivals-overview.php">Festivals</a>
                                                <img src="img/steuerung_kreis-dropdown-up_black.svg" class="breadcrump__iconOpen" alt="Öffnen der nächsten Seite">
                                            </li>
                                            <li>
                                                <a href = "festivals-magazine.php">Magazin</a>
                                            </li>
                                            <li>
                                                <a href = "festivals-news.php">News</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- finish breadcrump-overlay -->

                    </div>
                    <img src="img/steuerung_pfeil_rechts_greyC2.svg" class="breadcrump__iconNext" alt="Öffnen der nächsten Seite">
                    <div class="breadcrump__thirdNav">
                        <p>Sur Le Lac</p>
                        <img src="img/steuerung_kreis-dropdown-down_greyC2.svg" class="breadcrump__iconOpen" alt="Öffnen der nächsten Seite">

                        <!-- open breadcrump-overlay -->
                        <div id="breadcrump-outside-festivals-item" class="breadcrump-outside-festivals-item">
                            <div class="breadcrump-inside">

                                <div class="breadcrump-dropdown">
                                    <div class="breadcrump-dropdown__secondNavOpen">
                                        <ul>  <!-- part where only shown, if click on breadcrump-festival-button -->
                                            <li>Sur Le Lac
                                                <img src="img/steuerung_kreis-dropdown-up_black.svg" class="breadcrump__iconOpen" alt="Öffnen des nächsten Festivals">
                                            </li>
                                            <li>
                                                <a href = "festivals-detail.php">Stars of Sounds</a>
                                            </li>
                                            <li>
                                                <a href = "festivals-detail.php">Paléo Festival</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- finish breadcrump-overlay -->

                    </div>
                </div>
            </section>


            <!-- Part: DETAIL-Festival -->
            <section class="detailsFestival">
                <h2>Spannende, innovative und progressive Musik</h2>
                <div class="detailsFestival__coordinates">
                    <div class="detailsFestival__location">
                        <img src="img/detail_location_black.svg" alt="Icon für Festival-Location">
                        <p>Eggersriet SG</p>
                    </div>
                    <div class="detailsFestival__date">
                        <img src="img/detail_kalender_black.svg" alt="Icon für Festival-Datum">
                        <p>Fr, 18. Sept. – So, 20. Sept. 2020</p>
                    </div>
                </div>
                <div class="detailsFestival__content">
                    <div class="lead">
                        <p> Das eintätige Festival präsentiert Künstler, welche sich im Spannungsfeld zwischen verschiedensten musikalischen Strömungen
                            und Einflüssen bewegen. Wir bieten Musikern, die sich für spannende, innovative und progressive Musik einsetzen eine Plattform.
                            Das Fest findet mit einem atemberaubenden Ausblick über den Bodensee auf der Eggersrieter Höhe statt.
                        </p>
                    </div>

                    <p>
                        Wir bieten euch auf dem Gelände verschiedenste Freuden für Gaumen und Kehle. Ob orientalischer Falafel oder Käseplättli mit einem Glas Wein kredenzt,
                        marokkanische Teespezialität oder klassischer Schüblig vom Grill. Es sollte für jeden Geschmack etwas dabei sein. Um die Angebote 
                        zu sehr fairen Preisen und auch den Eintritt in diesem Rahmen beibehalten zu können, bitten wir euch auf das Mitbringen von Getränken und Lunchpäcklis 
                        jeglicher Art zu verzichten. Vielen Dank für eure Unterstützung und mit unserem kulinarischen Genuss wird das Fest bestimmt unvergesslich. <br><br>
                        
                        Der Verein "Sur le Lac", welcher non-profit agiert, organisiert seit 2008 das "Sur le Lac – Ein kleines Fest der Musik". Das eintägige Festival 
                        präsentiert Künstler, welche sich im Spannungsfeld zwischen verschiedensten musikalischen Strömungen und Einflüssen bewegen. An einem Festival herrscht
                        ein ständig hoher Lärmpegel. Schützt euer Gehör mit den überall auf dem Festgelände gratis erhältlichen Oropax.
                    </p>

                    <div class="detailsFestival__content-activity">
                        <div class="detailsFestival__content-vote">
                            <div class="filtered-items__vote-note">
                                <div class="filtered-items__vote-note-icon" aria-label="Stern-Icon zum Liken eines Festivals">
                                </div>
                                <p class="filtered-items__vote-note-text">MERKEN</p>
                            </div>
                        </div>


                        <div class="mainBtn detailsFestival__content-btnBuyTickets">
                            <a href="festivals-tickets-buy.php" aria-label="Tickets kaufen">
                                <button>TICKETS KAUFEN</button>
                            </a>
                        </div>

                        <div class="moreBtn detailsFestival__content-btnShareFestival">
                            <button>FESTIVAL TEILEN</button>
                        </div>

                        <div class="detailsFestival__content-advert">
                            <p>Unterstützt von</p>
                            <img src="img/detail_logo-hipster.svg" alt="Logo Hipster">
                        </div>

                    </div>
                </div>
            </section>


            <!-- Part: CAROUSEL -->
            <section class="carouselFestival">
                <?php include 'festivals-carousel.php'; ?>
            </section>


            <!-- Part: LINE UP -->
            <section class="lineupFestival">
                <h2>Line up</h2>
                <div class="lead">
                    <p> Wir freuen uns auch diese Jahr wieder ein spannendes und einzigartiges Line Up präsentieren zu dürfen.
                        Auf der Hauptbühne wird definitiv viel los sein.
                    </p>
                </div>

                <!-- Mobile/Tablet/Desktop: Button to open different days -->
                <div class="lineupFestival__linupAllDay">
                    <button data-day="friday" class="lineupFestival__singleDay lineupFestival__singleDay--active">
                        <p>FREITAG</p>
                        <div class="lineupFestival__singleDay-triangle">
                        </div>
                        <div class="lineupFestival__singleDay-icon">
                        </div>
                    </button>

                    <button data-day="saturday" class="lineupFestival__singleDay">
                        <p>SAMSTAG</p>
                        <div class="lineupFestival__singleDay-triangle">
                        </div>
                        <div class="lineupFestival__singleDay-icon">
                        </div>
                    </button>

                    <button data-day="sunday" class="lineupFestival__singleDay">
                        <p>SONNTAG</p>
                        <div class="lineupFestival__singleDay-triangle">
                        </div>
                        <div class="lineupFestival__singleDay-icon">
                        </div>
                    </button>
                </div>

                <!-- Program: Friday ) -->
                <div data-program="friday" class="lineupFestival__dayProgramm lineupFestival__dayProgramm--active">
                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>17.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__indie">
                                <h4>Kero Kero Bonito</h4>
                            </div>

                            <div class="lineupFestival__dayProgramm-singleArtist  coloring-detail__indie">
                                <h4>Girls Names</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>18.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__poprock">
                                <h4>Red Hot Chili Peppers</h4>
                            </div>

                            <div class="lineupFestival__dayProgramm-singleArtist  coloring-detail__hiphop">
                                <h4>Wu-Tang Clan</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>19.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__indie">
                                <h4>Tompaul</h4>
                            </div>

                            <div class="lineupFestival__dayProgramm-singleArtist  coloring-detail__poprock">
                                <h4>3 Doors Down</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>20.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__hiphop">
                                <h4>Lauryn Hill</h4>
                            </div>

                            <div class="lineupFestival__dayProgramm-singleArtist  coloring-detail__poprock">
                                <h4>Muse</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>21.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__indie">
                                <h4>The Horrors</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>22.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__indie">
                                <h4>Darkstar</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>23.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__indie">
                                <h4>A=f/m</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Program: Saturday ) -->
                <div data-program="saturday" class="lineupFestival__dayProgramm">
                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>15.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__jazz">
                                <h4>Butterfly's</h4>
                            </div>

                            <div class="lineupFestival__dayProgramm-singleArtist  coloring-detail__poprock">
                                <h4>Mash</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>16.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__poprock">
                                <h4>Dada Ante Portas</h4>
                            </div>

                            <div class="lineupFestival__dayProgramm-singleArtist  coloring-detail__indie">
                                <h4>Chi-Ma-Hung</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>17.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__hiphop">
                                <h4>Pink Panter</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>18.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__poprock">
                                <h4>Lo und Leduc</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>19.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__poprock">
                                <h4>Mando Diao</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>20.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__poprock">
                                <h4>Patent Ochsner</h4>
                            </div>

                            <div class="lineupFestival__dayProgramm-singleArtist  coloring-detail__indie">
                                <h4>Kalias</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>22.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__punk">
                                <h4>Open Season</h4>
                            </div>

                            <div class="lineupFestival__dayProgramm-singleArtist  coloring-detail__poprock">
                                <h4>Lovebugs</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>23.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__electronic">
                                <h4>Paul Kalkbrenner</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Program: Saturday ) -->
                <div data-program="sunday" class="lineupFestival__dayProgramm">
                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>15.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__poprock">
                                <h4>Züri West</h4>
                            </div>

                            <div class="lineupFestival__dayProgramm-singleArtist  coloring-detail__poprock">
                                <h4>Bastian Baker</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>16.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__poprock">
                                <h4>Robin Schulz</h4>
                            </div>

                            <div class="lineupFestival__dayProgramm-singleArtist  coloring-detail__indie">
                                <h4>Power Balls</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>15.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__hiphop">
                                <h4>Pink Panter</h4>
                            </div>

                            <div class="lineupFestival__dayProgramm-singleArtist  coloring-detail__jazz">
                                <h4>Die Mini Maus</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>15.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__poprock">
                                <h4>Elvis Presley</h4>
                            </div>

                            <div class="lineupFestival__dayProgramm-singleArtist  coloring-detail__hiphop">
                                <h4>Eminem</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>19.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__indie">
                                <h4>Franz Ferdinand</h4>
                            </div>
                        </div>
                    </div>

                    <div class="lineupFestival__dayProgramm-sequence">
                        <div class="lineupFestival__dayProgramm-time">
                            <p>20.00</p>
                        </div>

                        <div class="lineupFestival__dayProgramm-artists">
                            <div class="lineupFestival__dayProgramm-singleArtist coloring-detail__punk">
                                <h4>Die Toten Hosen</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            
            <!-- Part: VIDEO-Festival -->
            <section class="videoFestival">
                <button class="videoFestival__video-play">
                    <div class="videoFestival__video-icon" aria-label="Video-Play-Button">
                    </div>
                </button>
                <picture class="videoFestival__picture">
                    <source srcset="img/detail-video_surlelac-l.png" media="(min-width: 1024px)">
                    <source srcset="img/detail-video_surlelac-m.png" media="(min-width: 769px)">
                    <img src="img/detail-video_surlelac-s.png" alt="Teaser auf Index-Seite">
                </picture>
            </section>


            <!-- Part: INFOS from festival (Google Maps) -->
            <section class="infosFestival">
                <h2>Wissenswertes</h2>
                <div class="lead">
                    <p> Damit euer Festivalerlebnis glatt verläuft und ihr es in vollen Zügen geniesse könnt,
                        gibt es hier nochmals eine Übersicht mit allem was ihr wissen und beachten müsst.
                    </p>
                </div>
                <div class="infosFestival__allAccordions">
                    <article class="infosFestival__accordion">
                        <div class="infosFestival__title">
                            <h3>
                                Anreise & Rückreise
                            </h3>

                            <button class="infosFestival__title-moreBtn">
                                Weniger
                            </button>
                        </div>

                        <div class="infosFestival__content infosFestival__content--active">
                            <p>
                            Die Anreise ans Sur le Lac gestaltet sich wie folgt und ganz unkompliziert.
                            Wir empfehlen die öffentlichen Verkehrsmittel zu benützen. Ab Eggersriet Post
                            bringen euch Shuttlebusse direkt aufs Gelände. Naturverbundenen Besuchern 
                            legen wir den 15-minütigen Spaziergang vorbei an Blüten und Blatt gen 
                            Festgelände sehr ans Herz. In der Nacht bringen euch dann stündlich Spezialbusse 
                            sicher und behütet zurück nach St. Gallen. Die Spezialbusse sind im 
                            Eintrittspreis inbegriffen. Besuchern, welche mit Privatautos anreisen, 
                            stehen in begrenzter Anzahl Parkplätze unweit des Festgeländes zur Verfügung. 
                            </p>

                            <div id="map" class="infosFestival__google-maps">
                            </div>

                        </div>

                    </article>

                    <article class="infosFestival__accordion">
                        <div class="infosFestival__title">
                            <h3>
                                Einlassregeln
                            </h3>

                            <button class="infosFestival__title-moreBtn">
                                    Mehr
                            </button>
                        </div>

                        <div class="infosFestival__content">
                            <p>
                                Die Einlassregeln lassen sich via Einlass regeln oder so. Hauptsachen, ich muss
                                an dieser Stelle keinen Lorem ipsum Text nehmen. Obwohl der auch den Zweck erfüllen
                                würde.
                            </p>
                        </div>

                    </article>

                    <article class="infosFestival__accordion">
                        <div class="infosFestival__title">
                            <h3>
                                Zelten & Naturschutz
                            </h3>

                            <button class="infosFestival__title-moreBtn">
                                    Mehr
                            </button>
                        </div>

                        <div class="infosFestival__content">
                            <p>
                                Unter Naturschutz schützt sich der Zeltler via Natur. Zwei flinke Boxer jagen
                                die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten
                                Taxi quer durch Bayern. Zwölf Boxkämpfer jagen Viktor quer über den großen
                                Sylter Deich. Vogel Quax zwickt Johnys Pferd Bim. <br><br>
                                Unter Naturschutz schützt sich der Zeltler via Natur. Zwei flinke Boxer jagen
                                die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten
                                Taxi quer durch Bayern. Zwölf Boxkämpfer jagen Viktor quer über den großen
                                Sylter Deich. Vogel Quax zwickt Johnys Pferd Bim. 
                            </p>
                        </div>

                    </article>

                    <article class="infosFestival__accordion">
                        <div class="infosFestival__title">
                            <h3>
                                Fragen & Antworten
                            </h3>

                            <button class="infosFestival__title-moreBtn">
                                Mehr
                            </button>
                        </div>

                        <div class="infosFestival__content">
                            <p>
                            Stellt Fragen oder zu glauben, eine Antwort zu erhalten. Dies ist ein Typoblindtext.
                            An ihm kann man sehen, ob alle Buchstaben da sind und wie sie aussehen.
                            Manchmal benutzt man Worte wie Hamburgefonts, Rafgenduks oder Handgloves, um Schriften zu testen. 
                            </p>
                        </div>

                    </article>
                </div>

            </section>


            <!-- Part: BUY TICKETS -->
            <section class="ticketsFestival coloring__indie-background">
                <div class="ticketsFestival__buyTickets coloring__indie-buyTickets">
                    <h2>Sei ein Teil von<br> Sur Le Lac</h2>
                    <div class="ticketsFestival__buyTickets-btn">
                        <a href="festivals-tickets-buy.php" aria-label="Tickets kaufen">
                            <button class="moreBtn coloring__indie-text">TICKETS KAUFEN</button>
                        </a>
                    </div>
                </div>
                <div class="ticketsFestival__festivals">
                    <div class="ticketsFestival__festivals-single ticketsFestival__festivals-single-left coloring__indie-background-light">
                        <button class="ticketsFestival__festivals-btn">
                            <img src="img/navigation_menu-back_white.svg" alt="Button to swipe left">
                        </button>
                        <p>Likelive Biel</p>
                        <div class="ticketsFestival__festivals-image">
                            <img src="img/detail-tickets_02.png" alt="Button to swipe left">
                        </div>
                    </div>
                    <div class="ticketsFestival__festivals-single ticketsFestival__festivals-single-right coloring__indie-background-light">
                        <div class="ticketsFestival__festivals-image">
                            <img src="img/detail-tickets_01.png" alt="Button to swipe left">
                        </div>
                        <p>Gurtenfestival Bern</p>
                        <button class="ticketsFestival__festivals-btn">
                            <img src="img/navigation_menu-forward_white.svg" alt="Button to swipe left">
                        </button>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <?php include 'footer.php'; ?>