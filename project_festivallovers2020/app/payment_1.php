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
                <section class="paymentarea__payment">
                    <h2>Zahlung</h2>

                    <div class="payment__form">
                        <div class="payment">
                            <div class="payment__payoptions">
                                <button class="payment__payoptions-btn payment__payoptions-btn--active">
                                    <img src="img/payment_logo-visa.png" class="payment__payoptions-visa" alt="Visakarte anwählen">
                                </button>
                                <button class="payment__payoptions-btn">
                                    <img src="img/payment_logo-mastercard.png" class="payment__payoptions-visa" alt="Visakarte anwählen">
                                </button>
                                <button class="payment__payoptions-btn">
                                    <img src="img/payment_logo-paypal.png" class="payment__payoptions-visa" alt="Visakarte anwählen">
                                </button>
                            </div>
                            <form class="payment__formular" method="POST" action="payment_1.php">
                                <div class="payment__fields payment__form-nr">
                                    <label for="cardnr"></label>
                                    <input type="text" id="payment__nr" name="cardnr" placeholder="1111-1111-1111-1111">
                                </div>
                                <div class="payment__fields payment__form-input">
                                    <label for="date"></label>
                                    <input type="text" id="payment__date" name="date" placeholder="MM / JJ">
                                    <label for="cvc"></label> 
                                    <input type="text" id="payment__cvc" name="cvc" placeholder="CVC">
                                    <button>
                                        <img src="img/tickets_info_greyC2.svg" alt="Info anwählen">
                                    </button>
                                </div>
                                <div class="payment__fields payment__form-nr">
                                    <label for="cardnr"></label>
                                    <input type="text" id="payment__cardnr" name="cardnr" placeholder="Karteninhaber">
                                </div>
                            </form>
                            <a href="payment_2.php">
                                <button class="payment__payBtn" type=submit>
                                    <div class="payment__payBtn-icon">
                                    </div>
                                    CHF 895.– BEZAHLEN
                                </button>
                            </a>
                        </div>
                    </div>
                </section>

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