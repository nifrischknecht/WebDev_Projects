<?php
require_once("init.php");
require("head.php");
?>


<body>
    <header>
        <div class="taskTitle">
        <h1>Registrierungsformular</h1>
        </div>
    </header>

    <?php

        //validieren, sind alle felder ausgefüllt und stimmt das passwort mit passwort repeat überein
        if (isset($_POST['submit'])){

            if (empty($_POST['username']) || empty($_POST['lastname']) || empty($_POST['name']) || empty($_POST['password']) || empty($_POST['password_repeat'])) {
                echo "Es fehlt ein Wert.";
            } elseif ($_POST['password'] != $_POST['password_repeat']) {
                echo "Passwörter stimmen nicht überein.";
            } else { //sofern alles stimmt, landet man hier

            //Alle Infos holen aus Formular als Array für's Statement
            $form = [
                        ":username" => $_POST['username'],
                        ":lastname" => $_POST['lastname'],
                        ":name" => $_POST['name'],
                        ":password" => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ];

            //noch abklären was das bedeutet
            try{
                $userLoader = new UserRepository();
                $allUsers = $userLoader->createUser($form);
                $_SESSION['message'] = '<div class="infobox">neuer user «'.$_POST['username'].'» wurde registriert</div>';
            } catch (Exception $e){
                echo $e->getMessage();
                die();
            }

            redirect('user-login.php');
            }
        }
    ?>

    <main>
        <div class="tasklist">
            <!-- Button «zurück zu Taskliste » -->
            <div class="btns">
                <a href="user-login.php" class="btns__createTask">zurück zur Anmeldung</a>
            </div>

            <!-- Tabelle Taskliste – Titelzeile -->
            <div class= "table">
                <div class="table__taskline table__tabletitleline">
                    <h2 class="table__tabletitel">Bitte hier neu registrieren:</h2>
                </div>

    

                <form method="post" action="user-new.php">

                <label> Nachname:
                <input type="text" name="lastname" placeholder="Nachname" maxlength="20">
                </label>

                <label> Vorname:
                <input type="text" name="name" placeholder="Vorname" maxlength="20">
                </label>

                <label> Benutzername:
                <input type="text" name="username" placeholder="Benutzername" maxlength="20">
                </label>

                <label> Passwort
                <input type="password" name="password" placeholder="Passwort" maxlength="20">
                </label>

                <label> Passwort wiederholen
                <input type="password" name="password_repeat" placeholder="Passwort wiederholen" maxlength="20">
                </label>

                <input type="submit" name="submit" value="registrieren">

                </form>
            </div>
        </div>
    </main>

</body>
</html>