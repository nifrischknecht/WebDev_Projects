<?php
include 'head.php';
?>

<body>
    <?php include 'header.php'; ?>
    <?php include 'overlay_login.php'; ?>
    <?php include 'overlay_menu.php'; ?>
    <?php include 'overlay_music-filter.php'; ?>

    
    <main>
        <div class="wrapper">

            <!-- start of breadcrump -->
            <section class="breadcrump"> 
                <div class="breadcrump__nav">
                    <a href="index.php" target="_self" class="breadcrump__secondNavLink">
                        <img src="img/navigation_home_greyC2.svg" class="breadcrump__firstNav" alt="Zurück zur Index-Seite">
                    </a>
                    <img src="img/steuerung_pfeil_rechts_greyC2.svg" class="breadcrump__iconNext" alt="Öffnen der nächsten Seite">
                    <div class="breadcrump__secondNav-festivals">
                        <p>Festivals</p>
                        <img src="img/steuerung_kreis-dropdown-down_greyC2.svg" class="breadcrump__iconOpen" alt="Öffnen von Seiten auf selber Ebene">

                        <!-- open breadcrump-overlay -->
                        <div id="breadcrump-outside-festivals" class="breadcrump-outside-festivals">
                            <div class="breadcrump-inside">

                                <div class="breadcrump-dropdown">
                                    <div class="breadcrump-dropdown__secondNavOpen">
                                        <ul>  <!-- part where only shown, if click on breadcrump-festival-button -->
                                            <li>Festivals
                                                <img src="img/steuerung_kreis-dropdown-up_black.svg" class="breadcrump__iconOpen" alt="Öffnen der nächsten Seite">
                                            </li>
                                            <li>
                                                <a href="festivals-magazine.php">Magazin</a>
                                            </li>
                                            <li>
                                                <a href="festivals-news.php">News</a>
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

            <section class="overview">
                <h2>Alles für deinen Musikgeschmack</h2>
                <div class="lead">
                    <p>Unsere FestivalLovers verdienen nur das Beste. Wir bringen euch alle Festivals, 
                       Stars & Bands sowie Infos für einen genialen und unvergessenlichen Musiksommer.
                    </p>
                </div>
            </section>

            <!-- filter for mobile [S] -->
            <section class="music-filter-S">
                <div class="mainBtn filterBtn">
                    <button>FILTER ANZEIGEN</button>
                </div>
            </section>

            <!-- filter for Tablet [M] and Desktop [L + XL] -->
            <section class="music-filter-Mplus">
                <div id="musicFilter" class="musicFilter">

                        <!-- filter in a separat file -->
                        <?php include 'festivals-filter.php'; ?>

                </div>
            </section>

            <!-- start filtered items-->
            <section class="music-items">
                <div class="music-items__filter">

                    <!-- menu of filter-->
                    <div class="music-items__menu">
                        <div class="music-items__menu-date">
                            <p>Datum</p>
                            <img src="img/steuerung_sortierung_grey76.svg" alt="Icon für Sortierung von Datum">
                        </div>
                        <div class="music-items__menu-canton">
                            <p class="music-items__menu-canton-1">Kanton</p>
                            <p class="music-items__menu-canton-2">Kanton auswählen</p>
                            <img src="img/steuerung_dropdown_grey76.svg" alt="Icon für Sortierung von Kantonen">
                        </div> 
                        <div class="music-items__menu-choice">
                            <button class="music-items__menu-choice-tile">
                                <div class="music-items__menu-choice-tile-icon">
                                </div>
                                <p>Kacheln</p>
                            </button>
                            <button class="music-items__menu-choice-list">
                                <div class="music-items__menu-choice-list-icon">
                                </div>
                                <p>Liste</p>
                            </button>
                        </div>
                    </div>

                    <!-- box for tiles and list-->
                    <div class="filtered-items__outside">
                        <div class="filtered-items__tile-list">

                                    <!-- single items for tiles or list-->
                                    <article class="filtered-items__brick coloring__indie-brick">
                                        <a href="festivals-detail.php" class="filtered-items__link">
                                        </a>
                                        <div class="filtered-items__content">
                                            <div class="filtered-items__content-image">
                                                <img src="img/overview_indie_surlelac.png" alt="Festival für Musikrichtung Indie">
                                            </div>
                                            <div class="filtered-items__content-icon coloring__indie-icon">
                                            </div>
                                        </div>
                                        <div class="filtered-items__text">
                                            <div class="filtered-items__text-all">
                                                <p class="filtered-items__text-location">
                                                    Eggersriet SG
                                                </p>
                                                <p class="filtered-items__text-slash">
                                                    &nbsp;/&nbsp;
                                                </p>
                                                <p class="filtered-items__text-date">
                                                    18. Sept. – 20. Sept. 2020
                                                </p>
                                            </div>
                                            <h3 class="filtered-items__text-title">
                                                Sur Le Lac
                                            </h3>
                                            <p class="filtered-items__text-description">
                                                Das Festival präsentiert Künstler, welche sich im Spannungsfeld zwischen verschiedensten
                                                musikalischen Strömungen und Einflüssen…
                                            </p>
                                        </div>
                                        <div class="filtered-items__vote">
                                            <div class="filtered-items__vote-note">
                                                <div class="filtered-items__vote-note-icon" aria-label="Stern-Icon zum Liken eines Festivals">
                                                </div>
                                                <p class="filtered-items__vote-note-text">MERKEN</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="filtered-items__brick coloring__poprock-brick">
                                        <a href="festivals-detail.php" class="filtered-items__link">
                                        </a>
                                        <div class="filtered-items__content">
                                            <div class="filtered-items__content-image">
                                                <img src="img/overview_poprock_diplomfeier.png" alt="Festival für Musikrichtung Jazz">
                                            </div>
                                            <div class="filtered-items__content-icon coloring__poprock-icon">
                                            </div>
                                        </div>
                                        <div class="filtered-items__text">
                                            <div class="filtered-items__text-all">
                                                <p class="filtered-items__text-location">
                                                    St. Gallen SG
                                                </p>
                                                <p class="filtered-items__text-slash">
                                                    &nbsp;/&nbsp;
                                                </p>
                                                <p class="filtered-items__text-date">
                                                    25. Sept. – 26. Sept. 2020
                                                </p>
                                            </div>
                                            <h3 class="filtered-items__text-title">
                                                Diplomfeier «Web Developer»
                                            </h3>
                                            <p class="filtered-items__text-description">
                                                Schon bald ist's soweit... ob bestanden oder nicht, egal wir feiern unser Abschluss bis zum Umfallen!
                                            </p>
                                        </div>
                                        <div class="filtered-items__vote">
                                            <div class="filtered-items__vote-note">
                                                <div class="filtered-items__vote-note-icon" aria-label="Stern-Icon zum Liken eines Festivals">
                                                </div>
                                                <p class="filtered-items__vote-note-text">MERKEN</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="filtered-items__brick coloring__hiphop-brick">
                                        <a href="festivals-detail.php" class="filtered-items__link">
                                        </a>
                                        <div class="filtered-items__content">
                                            <div class="filtered-items__content-image">
                                                <img src="img/overview_hiphop_starsofsounds.png" alt="Festival für Musikrichtung Hip Hop">
                                            </div>
                                            <div class="filtered-items__content-icon coloring__hiphop-icon">
                                            </div>
                                        </div>
                                        <div class="filtered-items__text">
                                            <div class="filtered-items__text-all">
                                                <p class="filtered-items__text-location">
                                                    Aarberg BE
                                                </p>
                                                <p class="filtered-items__text-slash">
                                                    &nbsp;/&nbsp;
                                                </p>
                                                <p class="filtered-items__text-date">
                                                    08. Juli – 09. Juli 2021
                                                </p>
                                            </div>
                                            <h3 class="filtered-items__text-title">
                                                Stars of Sounds
                                            </h3>
                                            <p class="filtered-items__text-description">
                                                Im Juli verwendelt sich der Stadtplatz von Aarberg wieder in die einzigartige Kulisse des Stars of Sounds.
                                                Erlebe magische…
                                            </p>
                                        </div>
                                        <div class="filtered-items__vote">
                                            <div class="filtered-items__vote-note">
                                                <div class="filtered-items__vote-note-icon" aria-label="Stern-Icon zum Liken eines Festivals">
                                                </div>
                                                <p class="filtered-items__vote-note-text">MERKEN</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="filtered-items__brick coloring__jazz-brick">
                                        <a href="festivals-detail.php" class="filtered-items__link">
                                        </a>
                                        <div class="filtered-items__content">
                                            <div class="filtered-items__content-image">
                                                <img src="img/overview_jazz_paleo.png" alt="Festival für Musikrichtung Jazz">
                                            </div>
                                            <div class="filtered-items__content-icon coloring__jazz-icon">
                                            </div>
                                        </div>
                                        <div class="filtered-items__text">
                                            <div class="filtered-items__text-all">
                                                <p class="filtered-items__text-location">
                                                    Nyon VD
                                                </p>
                                                <p class="filtered-items__text-slash">
                                                    &nbsp;/&nbsp;
                                                </p>
                                                <p class="filtered-items__text-date">
                                                    20. Jul. – 25. Jul. 2021
                                                </p>
                                            </div>
                                            <h3 class="filtered-items__text-title">
                                                Paléo Festival
                                            </h3>
                                            <p class="filtered-items__text-description">
                                                Bienvenue! In Nyon treffen sich jedes Jahr die ganze Grossen aus der Electronic Szene.
                                                Die Tickets sind sehr begehrt und schnell…
                                            </p>
                                        </div>
                                        <div class="filtered-items__vote">
                                            <div class="filtered-items__vote-note">
                                                <div class="filtered-items__vote-note-icon" aria-label="Stern-Icon zum Liken eines Festivals">
                                                </div>
                                                <p class="filtered-items__vote-note-text">MERKEN</p>
                                            </div>
                                        </div>
                                    </article>

                        </div>
                    </div>

                </div>

                <div class="moreBtn btnFilterIndividual">
                    <button>MEHR ANZEIGEN</button>
                </div>
            </section>


        </div>
    </main>

    <?php include 'footer.php'; ?>