<?php
include 'head.php';
?>

<body>
    <?php include 'header.php'; ?>
    <?php include 'overlay_login.php'; ?>
    <?php include 'overlay_menu.php'; ?>
    <?php include 'overlay_music-filter.php'; ?>


    <main>
        <div class="wrapper-login coloring__indie-background">

            <div class="loginarea">
                <section class="loginarea__loginfield">
                    <h2>Login</h2>

                    <div class="loginfield">
                        <form class="loginfield__form" method="POST" action="login.php">
                            <div class="loginfield__fields loginfield__form-mail">
                                <label for="email"></label>
                                <input type="email" id="loginfiel__mail" name="email" placeholder="E-Mail Adresse">
                            </div>
                            <div class="loginfield__fields loginfield__form-password">
                                <label for="password"></label> 
                                <input type="password" id="loginfiel__password" name="password" placeholder="Passwort">
                            </div>
                            <button class="loginfield__form-btn" type=submit>ANMELDEN</button>
                            <p><a href="https://www.google.com/">Passwort</a>&nbsp;vergessen?</p>
                            <p><a href="payment_1.php">Als Gast anmelden</a></p>
                        </form>

                        <div class="loginfield__registration">
                            <p>Neu bei FestivalLovers?</p>
                            <p>Jetzt&nbsp;<a href="https://www.google.com/">registrieren.</a> </p>
                        </div>
                    </div>
                </section>

                <section class ="loginarea__footer">
                    <div class="loginarea__footer-icon">
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