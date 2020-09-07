<?php

    //init einbinden
    require_once("init.php");
    require("user-login-validator.php");

    //TaskLoader instanzieren (holen)
    //task id auslesen
    //Funktion delete
    $taskLoader = new TaskRepository();

    //Task aus der DB als Array mit GET für Titel holen
    $onetask = $taskLoader->getOneByID($_GET["id"]);
    $tasktitle = $onetask['title'];

    try{
        $onetask = $taskLoader->deleteTask($_GET["id"]);
        $_SESSION['message'] = "Der Task mit der ID {$_GET["id"]} und dem Titel « $tasktitle » wurde gelöscht";
    } catch (Exception $e){
        echo $e->getMessage();  //Hier wird die Meldung des Exceptions im TaskLoader ("Konnte nich lösche") ausgegeben
        die();
    }


    //redirect
    redirect('task-list.php');

?>