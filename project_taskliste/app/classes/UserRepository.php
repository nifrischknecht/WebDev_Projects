<?php

//Klasse UserRepository
class UserRepository {

        
        public function getUsers(){
            //prepared statement
            $statement = DB::get()->prepare("SELECT * FROM user");
            //execute
            $statement -> execute();
            //fetch
            $users = $statement->fetchAll();
            //return
            return $users;
        }

        public function createUser($form){
            //prepared statement
            $statement = DB::get()->prepare(
                "INSERT INTO user (username, lastname, name, password)
                VALUES (:username, :lastname, :name, :password)"
            );
            //execute
            $statement->execute($form);
        }

        // Ein einzelnen User mit Username aus der DB lesen
        public function getOneUser($username) {

            //prepare statement
            $statement = DB::get()->prepare("SELECT * FROM user WHERE username = :username");
            //execute
            $statement -> execute([':username' => $username]);
            //fetchen
            $oneUser = $statement -> fetch();
            //wenn der Username nicht existiert, null zurückgeben
            if (empty($oneUser)) {
                return null;
            } else {
                return $oneUser;
            }
        }


}

?>