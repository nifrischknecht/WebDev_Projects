<div id="filterOverlay-outside" class="filterOverlay-outside">
    <div class="filterOverlay-inside">

        <div class="headerFilter">
            <div class="boxFilter">
                
                <div class="menuFilter" aria-label="Menü öffnen">
                    <button class="menuFilter__hamburger">
                        <div class="menuFilter__icon">
                        </div>
                        <p>ZURÜCK</p>
                    </button>
                </div>

                <div class="logoFilter" aria-label="Logo festivallovers mit Link zur Index-Seite">
                    <a href="index.php" class="logoFilter__btn">
                        <div class="logoFilter__icon">
                        </div>
                    </a>
                </div>

                <div class="actionsFilter">
                    <button class="actionsFilter__btn actionsFilter__login" aria-label="Login öffnen">
                        <div class="actionsFilter__icon actionsFilter__login-icon">
                        </div>
                        <p>LOGIN</p>
                    </button>

                    <a href="festivals-tickets.php" class="actionsFilter__btn actionsFilter__tickets" aria-label="Tickets kaufen">
                        <div class="actionsFilter__icon actionsFilter__tickets-icon">
                        </div>
                        <p>TICKETS KAUFEN</p>
                    </a>
                </div>

            </div>
        </div>


        <!-- filter for mobile -->
        <div class="wrapperFilter">
            <div id="musicFilter" class="musicFilter">

                <!-- filter in a separat file -->
                <?php include 'festivals-filter.php'; ?>

            </div>
        </div>

    </div>
</div>