<?php
require_once("init.php");
require("head.php");
require("user-login-validator.php");
?>

<body>
    <?php

        //Alle User als Array aus der DB holen
        $userLoader = new UserRepository();
        $allUsers = $userLoader->getUsers();

        //Alle Status als Array aus der DB holen
        $statusLoader = new StatusRepository();
        $allStatus = $statusLoader->getStatus();

        // Task speichern
        $taskSaver = new TaskRepository();

            // Abfrage: falls $_POST, dann save
        if(isset($_POST['save'])){
            $saveUser = $_POST['user'];
            $saveStatus = $_POST['status'];
            $saveTitle = $_POST['title'];
            $saveDescription = $_POST['description'];
            $saveDuration = 500;
            $saveDuedate = $_POST['duedate'];



            // SESSION inkl. einer Message erstellen
            try{
                $taskSaver->saveTask($saveUser, $saveStatus, $saveTitle, $saveDescription, $saveDuration, $saveDuedate);
                $_SESSION['message'] = '<div class="infobox">neuer Task mit Titel «'.$saveTitle.'» wurde erstellt</div>';
            } catch (Exception $e){
                echo $e->getMessage();
                die();
            }

            //  Umleitung auf «task-list.php»
            redirect('task-list.php');
        }
    ?>


    <header>
        <div class="taskTitle">
        <h1>Erstelle einen neuen Task</h1>
        </div>
    </header>


    <main>
    <div class="tasklist">
            <!-- Buttons «zurück zur Taskliste» -->
            <div class="btns">
                <a href="task-list.php" class="btns__createTask">zurück zur Taskliste</a>
            </div>

            <!-- Formular «neuer Task erstellen -->
            <div class= "title">
                <div class="title__titleline">
                    <h4> Bitte folgende Daten ausfüllen:</h4>
                </div>

                <div class="formular">
                    <form method="POST" action="task-create.php">
                        <!-- User einfügen -->
                        <div class="formular__user">
                            <label>Benutzer:
                                <select id= "user" name="user">
                                    <?php
                                        foreach($allUsers as $user){
                                            echo "<option value='$user[id]'>$user[name] $user[lastname]</option>";
                                        }
                                    ?>
                                </select>
                            </label>
                        </div>
                        <!-- Status einfügen -->
                        <div class="formular__status">
                            <label>Status:
                                <select id= "status" name="status">
                                    <?php
                                        foreach($allStatus as $status){
                                            echo "<option value='$status[id]'>$status[display_name]</option>";
                                        }
                                    ?>
                                </select>
                            </label>
                        </div>
                        <!-- Task-Titel einfügen -->
                        <div class="formular__title">
                            <label> Titel:
                            <input id= "title" type="text" name="title" placeholder="Titel" maxlength="90">
                            </label>
                        </div>
                        <!-- Task-Beschreibung einfügen -->
                        <div class="formular__description">
                            <label> Beschreibung:
                            <textarea id= "description" type="text" name="description" placeholder="Kurze Beschreibung"></textarea>
                            </label>
                        </div>
                        <!-- Task-Erledigungsdatum einfügen -->
                        <div class="formular__duedate">
                            <label> Erledigt bis:
                            <input id= "duedate" type="date" name="duedate">
                            </label>
                        </div>

                        <input type="submit" class="formular__saveBtn" value="speichern" name="save">


                    </form>
                </div>
            </div>

    </div>

    </main>


</body>
</html>