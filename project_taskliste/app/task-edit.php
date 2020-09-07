<?php

// echo "Task bearbeiten";

//  update task
//  $taskLoader->updateTask($taskId, $userId, $statusId, $title, $description, $duration, $duedate);

//  umleitung auf task-list.php
//  redirect('task-list.php');

?>




<?php
require_once("init.php");
require("head.php");
require("user-login-validator.php");
?>

<body>
    <?php
        // Task speichern
        $taskSaver = new TaskRepository();

        // Abfrage: falls $_POST, dann save
        if(isset($_POST['save'])){
            $updateUser = $_POST['user'];
            $updateStatus = $_POST['status'];
            $updateTitle = $_POST['title'];
            $updateDescription = $_POST['description'];
            $updateDuration = 500;
            $updateDuedate = $_POST['duedate'];
            $updateID = $_POST['id'];

            // SESSION inkl. einer Message erstellen
            try{
                $taskSaver->updateTask($updateID, $updateUser, $updateStatus, $updateTitle, $updateDescription, $updateDuration, $updateDuedate);
                $_SESSION['message'] = '<div class="infobox">Der Task mit dem Titel «'.$updateTitle.'» wurde geändert.</div>';
            } catch (Exception $e){
                echo $e->getMessage();
                die();
            }

            //  Umleitung auf «task-list.php»
            redirect('task-list.php');
        }
        
        //Einzelne Task aus der DB holen mit GET
        $taskLoader = new TaskRepository();
        $task = $taskLoader->getOneByID($_GET["id"]);
        
        $title = $task['title'];
        $duedate = $task['duedate'];
        $userid = $task['user_id'];
        $description = $task['description'];
        $statusid = $task['status_id'];
        $taskid = $task['id'];

        //Alle User als Array aus der DB holen
        $userLoader = new UserRepository();
        $allUsers = $userLoader->getUsers();

        //Alle Status als Array aus der DB holen
        $statusLoader = new StatusRepository();
        $allStatus = $statusLoader->getStatus();
    ?>



    <header>
        <div class="taskTitle">
        <h1>Bearbeite den Task mit der ID</h1>
        </div>
        <div class="login">
            <form class="login__form" methode="post" action="task-list.php">
                <label> Benutzername:
                <input class="login__fields login__user" type="text" name="username" placeholder="Benutzername" maxlength="20">
                </label>

                <label> Passwort:
                <input class="login__fields login__password" type="password" name="password" placeholder="Passwort" maxlength="20">
                </label>

                <button class="login__btn" type="submit" name="submit">anmelden</button>

            </form>
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
                    <h4> Bitte folgende Daten anpassen:</h4>
                </div>

                <div class="formular">
                    <form method="POST" action="<?php echo "task-edit.php?id=$taskid"?>"> <!-- Edit-File mit entsprechendem Task via GET einfügen -->

                        <!-- User einfügen -->
                        <div class="formular__user">
                            <label>Benutzer:
                                <select id= "user" name="user">
                                    <?php
                                        foreach($allUsers as $user){
                                        if ($userid === $user['id']){
                                            echo "<option value='$user[id]' selected='selected'>$user[name] $user[lastname]</option>";
                                        } else {
                                            echo "<option value='$user[id]'>$user[lastname]</option>";
                                        }
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
                                            if ($statusid === $status['id']){
                                                echo "<option value='$status[id]' selected='selected'>$status[display_name]</option>";
                                            } else {
                                                echo "<option value='$status[id]'>$status[display_name]</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </label>
                        </div>
                        <!-- Task-Titel einfügen -->
                        <div class="formular__title">
                            <label> Titel:
                            <input id="title" type="text" name="title" value="<?php echo $title; ?>" placeholder="Titel" maxlength="90">
                            </label>
                        </div>
                        <!-- Task-Beschreibung einfügen -->
                        <div class="formular__description">
                            <label> Beschreibung:
                            <textarea id= "description" type="text" name="description" placeholder="Kurze Beschreibung"> <?php echo $description; ?></textarea>
                            </label>
                        </div>
                        <!-- Task-Erledigungsdatum einfügen -->
                        <div class="formular__duedate">
                            <label> Erledigt bis:
                            <input id="duedate" type="date" name="duedate" value="<?php echo $task['duedate']; ?>">
                            </label>
                        </div>
                        <input type="hidden" class="formular__saveBtn" value="<?php echo $task['id']; ?>" name="id">

                        <input type="submit" class="formular__saveBtn" value="speichern" name="save">


                    </form>
                </div>
            </div>

    </div>

    </main>


</body>
</html>


