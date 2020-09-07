<?php

// Klasse TaskRepository
class TaskRepository {

    // Alle Task-Daten aus der DB lesen
    public function getAll() {
        //prepare statement
        $statement = DB::get()->prepare("SELECT * FROM task ORDER BY id DESC LIMIT 10"); //TODO remove LIMIT
        //execute
        $statement->execute();
        //fetch
        $resultAll = $statement -> fetchAll(PDO::FETCH_ASSOC);
        //Ausgabe
        return $resultAll;
    }

    // Ein einzelner Task mit ID aus der DB lesen
    public function getOneByID($id) {

        //prepare statement
        $statement = DB::get()->prepare("SELECT * FROM task WHERE id = :id");
        //execute
        $statement -> execute([':id' => $id]);
        //fetchen
        $resultOne = $statement -> fetch(PDO::FETCH_ASSOC);
        if (!empty($resultOne)) {
            return $resultOne;
        } else {
            echo '<h2> kein Task gefunden</h2>';
            return null;
        }
        //Ausgabe
        return $resultOne;
    }

    // Funktion zum Löschen eines Tasks
    public function deleteTask($id) {
        //prepared statement
        $statement = DB::get()->prepare("DELETE FROM task WHERE id = :id");
        $result = $statement -> execute(array(':id' => $id));
        if ($result){
            return $result;
        }
        throw new Exception("Konnte nicht löschen!");  //message anzeige
    }

    // Funktion zum Sichern/Erstellen eines neuen Tasks
    public function saveTask($userId, $statusId, $title, $description, $duration, $duedate){
        // prepared statement
        $statement = DB::get()->prepare(
            "INSERT INTO task(id, user_id, status_id, title, description, duration, duedate) 
            VALUES (NULL, :userid, :statusid, :title, :description, :duration, :duedate);"
        );
        // execute
        $statement->execute([':userid' => $userId, ':statusid' => $statusId, ':title' => $title, ':description' => $description, ':duration' => $duration, ':duedate' => $duedate]);
    }

    // Funktion zum Updaten eines Tasks
    public function updateTask($id, $userId, $statusId, $title, $description, $duration, $duedate) {
        //prepared statement
        $statement = DB::get()->prepare(
            "UPDATE task SET user_id= :userid, status_id = :statusid, title = :title, description = :description, duration = :duration, duedate = :duedate WHERE id = :id"
        );
        // execute
        $statement->execute([':id' => $id, ':userid' => $userId, ':statusid' => $statusId, ':title' => $title, ':description' => $description, ':duration' => $duration, ':duedate' => $duedate]);
    }

}

?>