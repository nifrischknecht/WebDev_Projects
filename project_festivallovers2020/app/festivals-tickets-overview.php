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
                    <div class="breadcrump__secondNav">
                        <p>Tickets</p>
                    </div>
                </div>
            </section>

            <section class="tickets">
                <h2>Tickets</h2>
                <div class="lead">
                    <p>Liebe FestivalLovers unsere Festivals sind begehrt, daher sind auch
                    unsere Tickets immer schnell ausverkauft.
                    Sichert euch die besten Angebote – verpasst eure Chance nicht!</p>
                </div>
            </section>

        </div>
    </main>

    <?php include 'footer.php'; ?>