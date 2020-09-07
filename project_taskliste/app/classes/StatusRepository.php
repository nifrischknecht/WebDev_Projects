<?php

    // Alle Status-Daten aus der DB lesen
    class StatusRepository {

    public function getStatus(){
        //prepared statement
        $statement = DB::get()->prepare("SELECT * FROM status");
        //execute
        $statement -> execute();
        //fetch
        $stats = $statement->fetchAll();
        //return
        return $stats;
    }


    // Ein einzelner Status mit ID aus der DB lesen


    // Funktion zum Sichern/Erstellen eines neuen Status


    // Funktion zum Updaten eines Status


}

?>