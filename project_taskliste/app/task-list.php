<?php
require_once("init.php");
require("head.php");
require("user-login-validator.php");
?>

<body>
    <header>
        <div class="taskTitle">
        <h1>Taskliste von Nicole</h1>
        </div>
    </header>

    <main>
        <div class="tasklist">
            <!-- Buttons «Neuer Task erstellen», «Neuer User erstellen» und «Alle Tasks löschen» -->
            <div class="btns">
                <a href="task-create.php" class="btns__createTask">Task erstellen</a>
                <a href="user-logout.php" class="btns__createTask">Abmelden</a>
                <a href="user-login.php" class="btns__createTask">zurück zur Anmeldung</a>
<!--            <div class="btns__createTask btns__deleteAll">Alle Tasks löschen</div> -->
            </div>


            <!-- Messages anzeigen -->
            <?php
              if(isset($_SESSION['message'])){
                    echo $_SESSION['message'];     // Wenn Message gesetzt wurde, gib sie aus
                    unset($_SESSION['message']);   // Sobald Message ausgegeben, leere den Session-Speicher wieder, damit nicht bei jedem Reload wieder die Message erscheint.
              }
            ?>


            <!-- Tabelle Taskliste -->

            <!-- Tabelle Taskliste – Titelzeile -->
            <div class= "table">
                <div class="table__taskline table__tabletitleline">
                    <h2 class="table__tabletitel">Titel</h2>
                    <h2 class="table__tabletitel">Duedate</h2>
                </div>


                <!-- Tabelle Taskliste – einzelne Tasks -->

                <?php
                    //Tasks aus Datenbank (DB) holen
                    $taskLoader = new TaskRepository();
                    $tasks = $taskLoader->getAll();

                    //alle Tasks als einzelne Zeilen ausgeben
                    foreach ($tasks as $task) {
                        $title = $task['title'];
                        $duedate = $task['duedate'];
                        $taskid = $task['id'];
                ?>

                    <div class="table__taskline">
                        <h3 class="table__taskTitle"><?= $title ?></h3>
                        <p><?= $duedate ?></p>
                        <a href="task-details.php?id=<?= $taskid ?>" class="table__taskBtn table__details">
                        <a href="task-edit.php?id=<?= $taskid ?>" class="table__taskBtn table__edit">
                        <a onclick="return confirm('Wollen Sie wirklich den Task mit dem Titel «<?= $title ?>» löschen?')" href="task-delete.php?id=<?= $taskid ?>" class="table__taskBtn table__delete"></a>
                    </div>
                    <hr>
                <?php
                }     
                ?>
            </div>
        </div>

    </main>

</body>
</html>