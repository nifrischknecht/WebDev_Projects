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
            </div>

            <ul class="list">

            </ul>

            <div class="counter__items">
                <p>?? items left</p>
            </div>
        </div>
    </main>
    <script type="module" src="js/app.js"></script>
</body>
</html>