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

                        <!-- open breadcrump-overlay for festival, Magazine or News -->
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


                        <img src="img/steuerung_pfeil_rechts_greyC2.svg" class="breadcrump__iconNext" alt="Öffnen der nächsten Seite">
                        <div class="breadcrump__secondNav">
                            <p>Tickets</p>
                        </div>

                        <!-- open breadcrump-overlay for a single festival -->
                        <div id="breadcrump-outside-festivals-item" class="breadcrump-outside-festivals-item">
                            <div class="breadcrump-inside">

                                <div class="breadcrump-dropdown">
                                    <div class="breadcrump-dropdown__secondNavOpen">
                                        <ul>  <!-- part where only shown, if click on breadcrump-festival-button -->
                                            <li><a href = "festivals-detail.php">Sur Le Lac</a>
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


            <!-- TICKETS: buy you tickets-->
            <section class="ticketBox">
                <h2>Tickets für Sur Le Lac</h2>
                <div class="lead">
                    <p> Liebe FestivalLovers unsere Festivals sind begehrt, daher sind auch
                        unsere Tickets immer schnell ausverkauft.
                        Sichert euch die besten Angebote – verpasst eure Chance nicht!
                    </p>
                </div>
            </section>

            <section class="ticketOverview">
                <div class="ticketOverview__coordinates">
                    <div class="ticketOverview__coordinates-content ticketOverview__coordinates-location">
                        <img src="img/detail_location_black.svg" alt="Icon für Festival-Location">
                        <p>Eggersriet SG</p>
                    </div>
                    <div class="ticketOverview__coordinates-content ticketsFestival__coordinates-date">
                        <img src="img/detail_kalender_black.svg" alt="Icon für Festival-Datum">
                        <p>Fr, 18. Sept. – So, 20. Sept. 2020</p>
                    </div>
                </div>

                <h3 class="ticketOverview__festivalentries">Festivaleintritt</h3>

                <div class="festivalentries">

                    <!-- 1 Day Ticket: starts here -->
                    <div class="festivalentries__box festivalentries__box-singleDay">
                        <div class="festivalentries__box-info coloring__indie-background">
                            <img src="img/tickets_ticket_white.svg" alt="Ticket-Icon">
                            <h3>1 Tag Pass</h3>
                            <h4>CHF 75.–</h4>
                        </div>

                        <div class="festivalentries__box-quantity">
                            <div class="festivalentries__box-quantity-text">
                                <p class="coloring__indie-text">Verfügbare Tickets</p>
                                
                                <div class="festivalentries__box-quantity-text-nr">
                                    <p class="bold-adelle coloring__indie-text">480&nbsp;&nbsp;</p> <p class="festivalentries__box-quantity-text-allTickets">/ 600</p>
                                </div>
                            </div>

                            <div class="festivalentries__box-quantity-counter">
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-1day">
                                </div>
                            </div>

                        </div>

                        <div class="festivalentries__box-tickets">
                        <button class="festivalentries__box-tickets-counter minusBtn moreBtn" aria-label="Minus 1 Ticket">
                            </button>
                            <p>0 Tickets</p>
                            <button class="festivalentries__box-tickets-counter plusBtn moreBtn" aria-label="Plus 1 Ticket">
                            </button>
                        </div>
                    </div>


                    <!-- 3 Days Ticket: starts here -->
                    <div class="festivalentries__box festivalentries__box--sold-out festivalentries__box-treeDays">
                        <div class="festivalentries__box-info coloring__indie-background">
                            <img src="img/tickets_ticket_white.svg" alt="Ticket-Icon">
                            <h3>3 Tage Pass</h3>
                            <h4>CHF 375.–</h4>
                        </div>

                        <div class="festivalentries__box-quantity">
                            <div class="festivalentries__box-quantity-text">
                                <p class="coloring__indie-text">Verfügbare Tickets</p>
                                
                                <div class="festivalentries__box-quantity-text-nr">
                                    <p class="bold-adelle coloring__indie-text">0&nbsp;&nbsp;</p> <p class="festivalentries__box-quantity-text-allTickets">/ 600</p>
                                </div>
                            </div>

                            <div class="festivalentries__box-quantity-counter">
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-3day">
                                </div>
                            </div>

                        </div>

                        <div class="festivalentries__box-tickets">
                            <button class="festivalentries__box-tickets-counter minusBtn moreBtn" aria-label="Minus 1 Ticket">
                            </button>
                            <p>Ausverkauft</p>
                            <button class="festivalentries__box-tickets-counter plusBtn moreBtn" aria-label="Plus 1 Ticket">
                            </button>
                        </div>
                    </div>


                    <!-- VIP 1 Day Ticket: starts here -->
                    <div class="festivalentries__box festivalentries__box-vipSingleDay">
                        <div class="festivalentries__box-info coloring__indie-background">
                            <img src="img/tickets_vip_white.svg" alt="Ticket-Icon">
                            <h3>VIP 1 Tag</h3>
                            <h4>CHF 225.–</h4>
                        </div>

                        <div class="festivalentries__box-quantity">
                            <div class="festivalentries__box-quantity-text">
                                <p class="coloring__indie-text">Verfügbare Tickets</p>
                                
                                <div class="festivalentries__box-quantity-text-nr">
                                    <p class="bold-adelle coloring__indie-text">45&nbsp;&nbsp;</p> <p class="festivalentries__box-quantity-text-allTickets">/ 75</p>
                                </div>
                            </div>

                            <div class="festivalentries__box-quantity-counter">
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-1day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-1day">
                                </div>
                            </div>

                        </div>

                        <div class="festivalentries__box-tickets">
                            <button class="festivalentries__box-tickets-counter minusBtn moreBtn" aria-label="Minus 1 Ticket">
                            </button>
                            <p>0 Tickets</p>
                            <button class="festivalentries__box-tickets-counter plusBtn moreBtn" aria-label="Plus 1 Ticket">
                            </button>
                        </div>
                    </div>


                    <!-- VIP 3 Days Ticket: starts here -->
                    <div class="festivalentries__box festivalentries__box-vipThreeDays">
                        <div class="festivalentries__box-info coloring__indie-background">
                            <img src="img/tickets_vip_white.svg" alt="Ticket-Icon">
                            <h3>VIP 3 Tage</h3>
                            <h4>CHF 420.–</h4>
                        </div>

                        <div class="festivalentries__box-quantity">
                            <div class="festivalentries__box-quantity-text">
                                <p class="coloring__indie-text">Verfügbare Tickets</p>
                                
                                <div class="festivalentries__box-quantity-text-nr">
                                    <p class="bold-adelle coloring__indie-text">448&nbsp;&nbsp;</p> <p class="festivalentries__box-quantity-text-allTickets">/ 450</p>
                                </div>
                            </div>

                            <div class="festivalentries__box-quantity-counter">
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-3day">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-vip-3day">
                                </div>
                            </div>

                        </div>

                        <div class="festivalentries__box-tickets">
                            <button class="festivalentries__box-tickets-counter minusBtn moreBtn" aria-label="Minus 1 Ticket">
                            </button>
                            <p>0 Tickets</p>
                            <button class="festivalentries__box-tickets-counter plusBtn moreBtn" aria-label="Plus 1 Ticket">
                            </button>
                        </div>
                    </div>

                </div>

                <h3 class="ticketOverview__camping">Camping</h3>

                <div class="camping festivalentries">

                    <!-- Standard Zelt: starts here -->
                    <div class="festivalentries__box festivalentries__box-standard-tend">
                        <div class="festivalentries__box-info coloring__indie-background">
                            <img src="img/tickets_tend-standard_white.svg" alt="Ticket-Icon">
                            <h3>Standard Zelt</h3>
                            <h4>CHF 25.–</h4>
                        </div>

                        <div class="festivalentries__box-quantity">
                            <div class="festivalentries__box-quantity-text">
                                <p class="coloring__indie-text">Verfügbare Tickets</p>
                                
                                <div class="festivalentries__box-quantity-text-nr">
                                    <p class="bold-adelle coloring__indie-text">640&nbsp;&nbsp;</p> <p class="festivalentries__box-quantity-text-allTickets">/ 1000</p>
                                </div>
                            </div>

                            <div class="festivalentries__box-quantity-counter">
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-standard">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-standard">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-standard">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-standard">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-standard">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-standard">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-standard">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-standard">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-standard">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-standard">
                                </div>
                            </div>

                        </div>

                        <div class="festivalentries__box-tickets">
                            <button class="festivalentries__box-tickets-counter minusBtn moreBtn" aria-label="Minus 1 Ticket">
                            </button>
                            <p>0 Tickets</p>
                            <button class="festivalentries__box-tickets-counter plusBtn moreBtn" aria-label="Plus 1 Ticket">
                            </button>
                        </div>
                    </div>


                    <!-- VIP Zelt: starts here -->
                    <div class="festivalentries__box festivalentries__box-vipThreeDays">
                        <div class="festivalentries__box-info coloring__indie-background">
                            <img src="img/tickets_tend-vip_white.svg" alt="Ticket-Icon">
                            <h3>VIP Zelt</h3>
                            <h4>CHF 55.–</h4>
                        </div>

                        <div class="festivalentries__box-quantity">
                            <div class="festivalentries__box-quantity-text">
                                <p class="coloring__indie-text">Verfügbare Tickets</p>
                                
                                <div class="festivalentries__box-quantity-text-nr">
                                    <p class="bold-adelle coloring__indie-text">49&nbsp;&nbsp;</p> <p class="festivalentries__box-quantity-text-allTickets">/ 50</p>
                                </div>
                            </div>

                            <div class="festivalentries__box-quantity-counter">
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-vip">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-vip">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-vip">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-vip">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-vip">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-vip">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-vip">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-vip">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-vip">
                                </div>
                                <div class="festivalentries__box-quantity-square coloring-tickets__indie-square-tend-vip">
                                </div>
                            </div>

                        </div>

                        <div class="festivalentries__box-tickets">
                            <button class="festivalentries__box-tickets-counter minusBtn moreBtn" aria-label="Minus 1 Ticket">
                            </button>
                            <p>0 Tickets</p>
                            <button class="festivalentries__box-tickets-counter plusBtn moreBtn" aria-label="Plus 1 Ticket">
                            </button>
                        </div>
                    </div>

                </div>
            </section>

            <!-- BUTTON: buy tickets -->
            <section class="buyYourTickets">
                <div class="buyYourTickets__box">
                    <div class="mainBtn buyYourTickets__box-btn">
                        <a href="login.php" aria-label="Tickets kaufen">
                            <button>XY TICKETS KAUFEN</button>
                        </a>
                    </div>
                </div>


            </section>

        </div>
    </main>

    <?php include 'footer.php'; ?>