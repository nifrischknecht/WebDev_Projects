<?php
include 'head.php';
?>

<body>
    <?php include 'header.php'; ?>
    <?php include 'overlay_login.php'; ?>
    <?php include 'overlay_menu.php'; ?>


    <main>
        <div class="wrapper">

            <!-- start of breadcrump -->
            <section class="breadcrump"> 
                <div class="breadcrump__nav">
                    <a href="index.php" target="_self" class="breadcrump__secondNavLink">
                        <img src="img/navigation_home_greyC2.svg" class="breadcrump__firstNav" alt="Zurück zur Index-Seite">
                    </a>
                    <img src="img/steuerung_pfeil_rechts_greyC2.svg" class="breadcrump__iconNext" alt="Öffnen der nächsten Seite">
                    <div class="breadcrump__secondNav-magazin">
                        <p>Magazin</p>
                        <img src="img/steuerung_kreis-dropdown-down_greyC2.svg" class="breadcrump__iconOpen" alt="Öffnen von Seiten auf selber Ebene">

                        <!-- open breadcrump-overlay -->
                        <div id="breadcrump-outside-magazin" class="breadcrump-outside-magazin">
                            <div class="breadcrump-inside">

                                <div class="breadcrump-dropdown">
                                    <div class="breadcrump-dropdown__secondNavOpen">
                                        <ul>  <!-- part where only shown, if click on breadcrump-festival-button -->
                                            <li>Magazin
                                                <img src="img/steuerung_kreis-dropdown-up_black.svg" class="breadcrump__iconOpen" alt="Öffnen der nächsten Seite">
                                            </li>
                                            <li>
                                                <a href="festivals-news.php">News</a>
                                            </li>
                                            <li>
                                                <a href="festivals-overview.php">Festivals</a>
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

            <section class="magazineAll">
                <h2>Magazin</h2>
                <div class="lead">
                    <p> Lesen Sie unser Magazine und erfahren Sie Neues über die verschiedenen Festivals.
                        Was gibt's an Neuem? Was durften die Festivalgänger im Jahr 2020 erleben?<br>
                        Hier erfahr'en Sie alles.</p>
                </div>
            </section>

        </div>
    </main>

    <?php include 'footer.php'; ?>