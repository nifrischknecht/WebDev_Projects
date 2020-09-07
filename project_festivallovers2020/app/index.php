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

            <section class="music">
                    <h1>Auf welche Musik stehst du?</h1>
                    <div class="lead">
                        <p> Egal auf was du stehst wir haben alles für deinen Musikgeschmack
                            und garantieren dir eine erlebnisreiche Festivalzeit.
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

            <!-- TEASER: Main-Image -->
            <picture class="teaserHome">
                <source srcset="img/index_teaser-l.png" media="(min-width: 1024px)">
                <source srcset="img/index_teaser-m.png" media="(min-width: 769px)">
                <img src="img/index_teaser-s.png" alt="Teaser auf Index-Seite">
            </picture>

            <!-- MAGAZIN: masonry -->
            <section class="magazineS">
                <h2>Magazin</h2>

                <div class="masonry magazineS__masonry">

                    <article class="masonry__brick magazineS__brick magazineS__brick1">
                        <div class="masonry__content magazineS__content">
                            <h3>Einfach bloss nichts vergessen</h3>
                            <div class="magazineS__text">
                                <p> Zelt, Schlafsack, Isomatte vergessen: 3 Tage wach! Regenjacke, Mütze, Handtuch: 3 Tage nass!
                                    Zahnbürste, Deo, Socken: 3 Tage baah! Es geht auch anders. Der Festivalguide Check gegen 
                                    Alzheimer und Co.
                                </p>
                            </div>
                            <button class="magazineS__readBtn">
                                LESEN
                            </button>
                        </div>
                    </article>

                    <article class="masonry__brick magazineS__brick magazineS__brick2">
                        <div class="masonry__content magazineS__content">
                            <h3>Wie soll ich mich bei Gewitter verhalten?</h3>
                            <div class="magazineS__text">
                                <p> Die Sturm- und Gewitterwarnungen auf Festivals nehmen zu. Blitzeinschläge führen immer wieder 
                                    zu zahlreichen Verletzten. Da wir nicht davon ausgehen können, dass sich diese Entwicklung 
                                    wieder umkehrt, müssen wir damit rechnen, dass Festivals immer wieder davon betroffen sein werden. 
                                    Was sollte man also beachten? 
                                </p>
                            </div>
                            <button class="magazineS__readBtn">
                                LESEN
                            </button>
                        </div>
                    </article>

                    <article class="masonry__brick magazineS__brick magazineS__brick3">
                        <div class="masonry__content magazineS__content">
                            <h3>7 Life Hacks für den Festivalbesuch</h3>
                            <div class="magazineS__text">
                                <p> Mit diesen Tricks macht ihr euch das Campen auf dem Festival noch leichter. 
                                    Es gibt viele kreative Lösungen mit Einmalseife, Klopapierspender, Grillanzünder, Kaffebeutel 
                                    und Strohhalmen.
                                </p>
                            </div>
                            <button class="magazineS__readBtn">
                                LESEN
                            </button>
                        </div>
                    </article>

                    <article class="masonry__brick magazineS__brick magazineS__brick4">
                        <div class="masonry__content magazineS__content">
                            <h3>Erste Hilfe und die Reiseapotheke</h3>
                            <div class="magazineS__text">
                                <p> Was der Arzt rät: Sonnenstich, Kater, Fuss umgeknickt … 
                                    Festivals stecken voller versteckten Gefahren. Wir haben unseren Hausarzt angerufen und gefragt, 
                                    was man unbedingt bedenken und beachten sollte damit man wieder gesund und munter vom Festival nach Hause kommt.
                                </p>
                            </div>
                            <button class="magazineS__readBtn">
                                LESEN
                            </button>
                        </div>
                    </article>

                    <article class="masonry__brick magazineS__brick magazineS__brick5">
                        <div class="masonry__content magazineS__content">
                            <h3>Tipps zum Bier kaltstellen</h3>
                            <div class="magazineS__text">
                                <p> Mit diesen Ratschlägen habt ihr auch auf dem Festival immer kühles Bier.
                                    Was will man noch mehr. 
                                </p>
                            </div>
                            <button class="magazineS__readBtn">
                                LESEN
                            </button>
                        </div>
                    </article>

                    <article class="masonry__brick magazineS__brick magazineS__brick6">
                        <div class="masonry__content magazineS__content">
                            <h3>Wo stelle ich mein Zelt auf?</h3>
                            <div class="magazineS__text">
                                <p> Der prefekt Platz auf dem Campingplatz muss zuerst gefunden werden. Ältere Festivalbesucher können bestätigen: 
                                    Die Auswahl des Zeltplatzes ist ein Lernen durch Schmerzen. Wir möchten euch daher gut vorbereiten um euch 
                                    ein paar Qualen ersparen zu können.
                                </p>
                            </div>
                            <button class="magazineS__readBtn">
                                LESEN
                            </button>
                        </div>
                    </article>

                </div>
                <div class="moreBtn">
                    <button>MEHR ANZEIGEN</button>
                </div>
            </section>
            
            <!-- ADVERTISING: AppStore AND GoogleStore -->
            <section class="advertising">
                <picture class="advertising__smartphone">
                    <source srcset="img/index_smartphone-l.png" media="(min-width: 1024px)">
                    <source srcset="img/index_smartphone-m.png" media="(min-width: 769px)">
                    <img src="img/index_smartphone-s.png" alt="Smartphone für App-Werbung">
                </picture>
                <div class="advertising__rest">
                    <h2>Mit der App unabhängig am Festival feiern.</h2>
                    <button class="advertising__btnApp">APP DOWNLOADEN</button>
                    <div class="advertising__logos">
                        <a href="https://www.apple.com/chde/ios/app-store/" target="_blank">
                            <img src="img/index_logo-appstore_white.svg" alt="Logo von Apple Store">
                        </a>
                        <a href="https://play.google.com/" target="_blank">
                            <img src="img/index_logo-googlestore_white.svg" alt="Logo von Google Play Store">
                        </a>
                    </div>
                </div>
            </section>

            <!-- DISCOVERIES: Auido Playlists from different genres -->
            <section class="discovery">
                <div class="discovery__title">
                    <h2>Entdeckungen</h2>
                        <div class="lead">
                            <p> Sei offen für neues und geniesse unerwartete Musikerlebnisse.
                                Höre dir die Samples an und entdecke deine Leidenschaften.
                            </p>
                        </div>
                </div>

                <div class="discovery__audio">
                    <div class="discovery__audioAll">
                        <button class="discovery__audio-play">
                            <div class="discovery__audio-icon" aria-label="Audio-Play-Button" data-music-type="jazz">
                            </div>
                        </button>
                        <img src="img/index-audio_jazz.svg" alt="Audiostreifen für Musikrichtung «Jazz»">
                    </div>

                    <div class="discovery__audioAll">
                        <button class="discovery__audio-play">
                            <div class="discovery__audio-icon" aria-label="Audio-Play-Button" data-music-type="hiphop">
                            </div>
                        </button>
                        <img src="img/index-audio_hiphop.svg" alt="Audiostreifen für Musikrichtung «Hip Hop»">
                    </div>

                    <div class="discovery__audioAll">
                    <button class="discovery__audio-play">
                            <div class="discovery__audio-icon" aria-label="Audio-Play-Button" data-music-type="indie">
                            </div>
                        </button>
                        <img src="img/index-audio_indie.svg" alt="Audiostreifen für Musikrichtung «Indie»">
                    </div>

                    <div class="discovery__audioAll">
                        <button class="discovery__audio-play">
                            <div class="discovery__audio-icon"  aria-label="Audio-Play-Button" data-music-type="poprock">
                            </div>
                        </button>
                        <img src="img/index-audio_poprock.svg" alt="Audiostreifen für Musikrichtung «Pop Rock»">
                    </div>

                    <div class="discovery__audioAll">
                        <button class="discovery__audio-play">
                            <div class="discovery__audio-icon" aria-label="Audio-Play-Button" data-music-type="electronic">
                            </div>
                        </button>
                        <img src="img/index-audio_electronic.svg" alt="Audiostreifen für Musikrichtung «Electronic»">
                    </div>

                <div class="moreBtn btnDiscovery">
                    <button>MEHR ANZEIGEN</button>
                </div>
            </section>

            <!-- NEWS: masonry -->
            <section class="news">
                <h2>News</h2>

                <div class="masonry news__masonry">

                    <article class="masonry__brick news__brick news__brick1">
                        <div class="masonry__content news__content">
                            <img src="img/index-news_brick_01.png" alt="Masonry Image">
                            <div class="news__text">
                                <p class="news__text-date">
                                    23. August 2020
                                </p>
                                <p class="news__text-description">
                                    #festivallovers are you ready for a #competition 
                                    #follow @envirofoneshop and we’ll announce next week #festival
                                </p>
                                <div class="news__text-likes">
                                    <div class="news__text-icon" aria-label="Herz-Icon zum Liken des Artikels">
                                    </div>
                                    <p class="news__text-counter">4</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="masonry__brick news__brick news__brick2">
                        <div class="masonry__content news__content">
                            <div class="news__text">
                                <p class="news__text-date">
                                    13. Juli 2020
                                </p>
                                <p class="news__text-description">
                                    #festivallovers are you ready for a #competition 
                                    #follow @envirofoneshop and we’ll announce next week #festival
                                </p>
                                <div class="news__text-likes">
                                    <div class="news__text-icon" aria-label="Herz-Icon zum Liken des Artikels">
                                    </div>
                                    <p class="news__text-counter">54</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="masonry__brick news__brick news__brick3">
                        <div class="masonry__content news__content">
                            <img src="img/index-news_brick_02.png" alt="Masonry Image">
                            <div class="news__text">
                                <p class="news__text-date">
                                    1m
                                </p>
                                <p class="news__text-description">
                                    #jazzfest #festival #homeland #weekend
                                </p>
                                <div class="news__text-likes">
                                    <div class="news__text-icon" aria-label="Herz-Icon zum Liken des Artikels">
                                    </div>
                                    <p class="news__text-counter">13</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="masonry__brick news__brick news__brick4">
                        <div class="masonry__content news__content">
                            <div class="news__text">
                                <p class="news__text-date">
                                    31. Mai 2020
                                </p>
                                <p class="news__text-description">
                                    #festivallovers are you ready for a #competition 
                                    #follow @envirofoneshop and we’ll announce next week #festival
                                </p>
                                <div class="news__text-likes">
                                    <div class="news__text-icon" aria-label="Herz-Icon zum Liken des Artikels">
                                    </div>
                                    <p class="news__text-counter">26</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="masonry__brick news__brick news__brick5">
                        <div class="masonry__content news__content">
                            <img src="img/index-news_brick_03.png" alt="Masonry Image">
                            <div class="news__text">
                                <p class="news__text-date">
                                    4h
                                </p>
                                <p class="news__text-description">
                                    Italiaaa #boots #italy #germany #euro2016 #camping #festival #sexylegs
                                </p>
                                <div class="news__text-likes">
                                    <div class="news__text-icon" aria-label="Herz-Icon zum Liken des Artikels">
                                    </div>
                                    <p class="news__text-counter">134</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="masonry__brick news__brick news__brick6">
                        <div class="masonry__content news__content">
                            <div class="news__text">
                                <p class="news__text-date">
                                    3. Juni 2020
                                </p>
                                <p class="news__text-description">
                                    Will crowdfunding festivals be a new trend? #festivallovers
                                </p>
                                <div class="news__text-likes">
                                    <div class="news__text-icon" aria-label="Herz-Icon zum Liken des Artikels">
                                    </div>
                                    <p class="news__text-counter">303</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="masonry__brick news__brick news__brick7">
                        <div class="masonry__content news__content">
                            <img src="img/index-news_brick_04.png" alt="Masonry Image">
                            <div class="news__text">
                                <p class="news__text-date">
                                    10. Juni 2020
                                </p>
                                <p class="news__text-description">
                                    Geniesse den Sommer mit … #festival #musik #electro #chill #crazy #summer #ferien #farben #freunde 
                                </p>
                                <div class="news__text-likes">
                                    <div class="news__text-icon" aria-label="Herz-Icon zum Liken des Artikels">
                                    </div>
                                    <p class="news__text-counter">77</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="masonry__brick news__brick news__brick8">
                        <div class="masonry__content news__content">
                            <div class="news__text">
                                <p class="news__text-date">
                                    5. April 2020
                                </p>
                                <p class="news__text-description">
                                    @festivallovers are the best, I’m so much #inlove with your #beautiful website
                                </p>
                                <div class="news__text-likes">
                                    <div class="news__text-icon" aria-label="Herz-Icon zum Liken des Artikels">
                                    </div>
                                    <p class="news__text-counter">9</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="masonry__brick news__brick news__brick9">
                        <div class="masonry__content news__content">
                            <img src="img/index-news_brick_05.png" alt="Masonry Image">
                            <div class="news__text">
                                <p class="news__text-date">
                                    9. August 2020
                                </p>
                                <p class="news__text-description">
                                    Thunder clouds … #pyramid #summer #clouds #thunder #sky #skyporn #sunset #festival #music
                                </p>
                                <div class="news__text-likes">
                                    <div class="news__text-icon" aria-label="Herz-Icon zum Liken des Artikels">
                                    </div>
                                    <p class="news__text-counter">144</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="masonry__brick news__brick news__brick10">
                        <div class="masonry__content news__content">
                            <img src="img/index-news_brick_06.png" alt="Masonry Image">
                            <div class="news__text">
                                <p class="news__text-date">
                                    Twitter 4h
                                </p>
                                <p class="news__text-description">
                                    Attention #festivallovers see here some outfit #inspiration #style
                                </p>
                                <div class="news__text-likes">
                                    <div class="news__text-icon" aria-label="Herz-Icon zum Liken des Artikels">
                                    </div>
                                    <p class="news__text-counter">99</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="moreBtn">
                        <button>MEHR ANZEIGEN</button>
                </div>
            </section>

        </div>
    </main>
    <?php include 'footer.php'; ?>