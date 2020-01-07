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
                <div class="input__arrow">
                    <img src="images/arrow-down.svg" width="20">
                </div>
                <form class="input__textbox">
                    <input class=input__textfield type="text" placeholder="What needs to be done?">
                </form>
            </div>

            <ul class="list">
                <li class="list__item list__item--checked">
                    <div class="list__checkbox">
                        <img src="images/checked.svg" width="40">
                    </div>
                    <div class="list__itemname--checked">
                        Milch
                    </div>
                    <div class="list--deleted">
                        <img src="images/cross.svg" width="20">
                    </div>
                </li>

                <li class="list__item list__item--unchecked">
                    <div class="list__checkbox">
                        <img src="images/unchecked.svg" width="40">
                    </div>
                    <div class="list__itemname">
                        Wasser
                    </div>
                    <div class="list--deleted">
                        <img src="images/cross.svg" width="20">
                    </div>
                </li>

                <li class="list__item list__item--unchecked">
                    <div class="list__checkbox">
                        <img src="images/unchecked.svg" width="40">
                    </div>
                    <div class="list__itemname">
                        Mehl
                    </div>
                    <div class="list--deleted">
                        <img src="images/cross.svg" width="20">
                    </div>
                </li>

                <li class="list__item list__item--unchecked">
                    <div class="list__checkbox">
                        <img src="images/unchecked.svg" width="40">
                    </div>
                    <div class="list__itemname">
                        Orangensaft
                    </div>
                    <div class="list--deleted">
                        <img src="images/cross.svg" width="20">
                    </div>
                </li>
            </ul>

            <div class="counter__items">
                <p>?? items left</p>
            </div>
        </div>
    </main>

</body>
</html>