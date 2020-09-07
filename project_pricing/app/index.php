<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <title>Pricing-Projekt | Mentor Kilian | Student Nicole</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
</head>


<body>

    <header>
        <div class="title">
            <h1>Our Pricing</h1>
        </div>
        <div class="toggle">  <!-- Hier startet der Toggle (Annually/Monthly) -->
            <p class="toggle__pricing">Annually</p>
            <label class="toggle__checkbox">
                <input type="checkbox">
                <div class="button"></div>
            </label>
            <p class="toggle__pricing">Monthly</p>
        </div>
    </header>

    <main>
        <div class="offer-wrapper"> <!-- Hier starten alle Angebote (Offers) -->
            <div class="offer"> <!-- Hier startet das Angebot «Basic» -->
                <h2 class="offer__title">Basic<h2>
                <p class="offer__dollar">&dollar;<span class="offer__price">19.99</span></p>
                <ul class="offer__services">
                    <li>500 GB Storage</li>
                    <li>2 Users Allowed</li>
                    <li>Send up to 3 GB</li>
                </ul>
                <button class="offer_btn">LEARN MORE</button>
            </div>

            <div class="offer offer--negative"> <!-- Hier startet das Angebot «Professional» -->
                <h2 class="offer__title">Professional<h2>
                <p class="offer__dollar">&dollar;<span class="offer__price">24.99</span></p>
                <ul class="offer__services">
                    <li>1 TB Storage</li>
                    <li>5 Users Allowed</li>
                    <li>Send up to 10 GB</li>
                </ul>
                <button class="offer_btn">LEARN MORE</button>
            </div>

            <div class="offer"> <!-- Hier startet das Angebot «Master» -->
                <h2 class="offer__title">Master<h2>
                <p class="offer__dollar">&dollar;<span class="offer__price">39.99</span></p>
                <ul class="offer__services">
                    <li>2 TB Storage</li>
                    <li>10 Users Allowed</li>
                    <li>Send up to 20 GB</li>
                </ul>
                <button class="offer_btn">LEARN MORE</button>
            </div>
        </div> <!-- Hier enden alle Angebote (Offers) -->
    </main>

    <footer>
        <div class="attribution">
        Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Kilian</a>. 
        Coded by <a href="#">Nicole</a>.
        </div>
    </footer>

</body>
</html>