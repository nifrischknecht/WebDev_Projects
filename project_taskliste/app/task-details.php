<?php
require_once("init.php");
require("head.php");
require("user-login-validator.php");
?>

<body>

    <?php
    //Einzelne Task-Details aus der DB holen mit GET
    $taskLoader = new TaskRepository();
    $task = $taskLoader->getOneByID($_GET["id"]);
    
    $title = $task['title'];
    $duedate = $task['duedate'];
    $userid = $task['user_id'];
    $description = $task['description'];
    $statusid = $task['status_id'];
    $duration = $task['duration'];
    $taskid = $task['id'];
    ?>



    <header>
        <div class="taskTitle">
        <h1>Detailansicht des Task mit der ID <?= $taskid ?></h1>
        </div>
    </header>

    <main>
    <div class="detaillist">
            <!-- Buttons «zurück zur Taskliste» -->
            <div class="btns">
                <a href="task-list.php" class="btns__createTask">zurück zur Taskliste</a>
            </div>

            <!-- Detailansicht der gewählten Task ID -->
            <div class= "title">
                <div class="title__titleline">
                    <h4><?= $title ?></h4>
                </div>

                <div class="table__taskdetails">
                <h4><?= $description ?></h4><br>
                <h3>ID:</h3><p><?= $taskid ?></p>
                <h3>Status:</h3><p><?= $statusid ?></p>
                <h3>Zu erledigen bis am:</h3><p><?= $duedate ?></p>
                <h3>Geschätzte Zeit:</h3><p><?= $duration ?> Minuten</p>
                </div>
            </div>

    </div>

    </main>


</body>
</html>