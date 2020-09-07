<?php
    require_once("init.php");
    require("head.php");

    //felder sind ausgefüllt und stimmt username und passwort überein
    if (isset($_POST['login'])){
        //prüfen, ob die felder ausgefüllt sind
        if (empty($_POST['login-username']) || empty($_POST['login-password'])) {
            $_SESSION['message'] = '<div class="infobox">Es fehlt ein Wert, versuchen Sie sich erneut anzumelden.</div>';
        } else { 
            // sofern alles stimmt, User aus der DB holen
            $userLoader = new UserRepository();
            $oneUser = $userLoader->getOneUser(['login-username']);
                if ($oneUser === null){
                    $_SESSION['message'] = '<div class="infobox">Dieser User existiert nicht. Versuchen Sie es erneut.</div>';
                    redirect('task-list.php'); //oder user-login-php
                } else{
                    $password = $oneUser['password'];
                    $userID = $oneUser['id'];
                    $username = $oneUser['username'];

                    //prüfen ob Einträge mit DB übereinstimmen
                    if (password_verify($_POST['login-password'], $password)){
                        $_SESSION['message'] = '<div class="infobox">Sie sind eingeloggt.</div>';
                        $_SESSION['userID'] = $userID;
                        redirect('task-list.php');
                    } else{
                            $_SESSION['message'] = '<div class="infobox">Das Passwort stimmt nicht. Versuchen Sie es erneut.</div>';
                            redirect("task-list.php"); //oder user-login-php
                        }
                }
        }
    }
?>

<body>
    <header>
        <div class="taskTitle">
        <h1>Taskliste von Nicole</h1>
        </div>
    </header>

    <main>

    <!-- Buttons «Neuer Task erstellen», «Neuer User erstellen» und «Alle Tasks löschen» -->
    <div class="loginAll">
        <div class="btns__register">
            <a href="task-list.php" class="btns__createTask">Taskliste Übersicht</a>
            <a href="user-new.php" class="btns__createTask">User neu registrieren</a>
        </div>


        <!--Login-Bereich-->
        <div class="login">
            <form class="login__form" methode="post" action="user-login.php">
                <label> Benutzername:
                <input class="login__fields login__user" type="text" name="login-username" placeholder="Benutzername">
                </label>
                <label> Passwort:
                <input class="login__fields login__password" type="password" name="login-password" placeholder="Passwort">
                </label>
                <button class="login__btn" type="submit" name="login">anmelden</button>
            </form>
        </div>
    </div>


    <!--message anzeigen-->
    <?php
    if(isset($_SESSION['message'])){ 
        echo $_SESSION['message']; //wenn message gesetzt, gib sie aus
        unset($_SESSION['message']); //wenn ausgegeben, dann leere die session speicher wieder, damit nicht bei jedem reload die message wieder kommt.
    }
?>

    </main>

</body>
</html>