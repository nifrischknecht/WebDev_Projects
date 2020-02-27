<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo-Liste</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Heebo:100&display=swap" rel="stylesheet">
</head>

<body>

    <header> 
        <h1>todos</h1>
    </header>

    <main>
        <div class="todos">
            <div class="input">
                <form class="input__line">
                    <input class="input__arrow" type="submit" value=" ">
                    <input class="input__textfield" type="text" placeholder="What needs to be done?" >
                </form>
            </div>

            <ul class="list">
                <li class="list__item">
                    <div class="list__checkbox list__item--checked">
                        <input type="checkbox" class= "list__checkmark" id="milch">
                        <label class="list__label" for="Milch"></label>
                    </div>
                    <div class="list__item-name">
                        Milch
                    </div>
                    <div class="list__delete">
                        <img src="images/cross.svg" alt="button to delete">
                    </div>
                </li>

                <li class="list__item">
                    <div class="list__checkbox">
                        <input type="checkbox" class= "list__checkmark" id="wasser">
                        <label class="list__label" for="Wasser"></label>
                    </div>
                    <div class="list__item-name">
                        Wasser
                    </div>
                    <div class="list__delete">
                        <img src="images/cross.svg" alt="button to delete">
                    </div>
                </li>

                <li class="list__item">
                   <div class="list__checkbox">
                        <input type="checkbox" class= "list__checkmark" id="mehl">
                        <label class="list__label" for="Mehl"></label>
                    </div>
                    <div class="list__item-name">
                        Mehl
                    </div>
                    <div class="list__delete">
                        <img src="images/cross.svg">
                    </div>
                </li>

                <li class="list__item">
                    <div class="list__checkbox">
                        <input type="checkbox" class= "list__checkmark" id="orangensaft">
                        <label class="list__label" for="Orangensaft"></label>
                    </div>
                    <div class="list__item-name">
                        Orangensaft
                    </div>
                    <div class="list__delete">
                        <img src="images/cross.svg" alt="button to delete">
                    </div>
                </li>
            </ul>

            <div class="counter__items">
                <p>?? items left</p>
            </div>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>
</html>