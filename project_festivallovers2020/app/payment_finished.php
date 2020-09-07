<?php
include 'head.php';
?>

<body>
    <?php include 'header.php'; ?>
    <?php include 'overlay_login.php'; ?>
    <?php include 'overlay_menu.php'; ?>
    <?php include 'overlay_music-filter.php'; ?>


    <main>
        <div class="wrapper-payment coloring__indie-background">

            <div class="paymentarea">
                <section class="paymentarea__payment paymentarea__finished">
                    <h2>Juhui, jetzt kann es los gehen!</h2>
                    <div class="lead">
                        <p> Deine FestivalLovers-Tickets wurden an <strong>tobias@gmail.com</strong>
                            gesendet und sind in deinem Dashboard gespeichert.
                            Mit unserer neuen App bist du informiert und unabhängig.
                        </p>
                    </div>
                    <div class="btnsFinished">
                        <div class="mainBtn btnsFinished__dashboard">
                            <button class="mainBtn">ZUM DASHBOARD</button>
                        </div>
                        <div class="moreBtn btnsFinished__app">
                            <button class="mainBtn">APP DOWNLOADEN</button>
                        </div>
                    </div>
                </section>

                <!-- footer -->
                <section class ="paymentarea__footer">
                    <div class="paymentarea__footer-icon">
                    </div>
                </section>

            </div>

        </div>
    </main>

<!-- build:js -->
<script type="module" src="dev/main-bundle.js"></script>
<!-- endbuild -->

</body>
</html>