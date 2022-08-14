<?php

class Highschools extends BaseModel {

    protected $table = 'highschools';
    protected $pk = 'highschool_id';

    protected function postHighschool(string $name, string $description, string $location) {
        global $db;
        $sql = "INSERT INTO `highschools` (`name`, `description`, `location`) VALUES ('$name', '$description', '$location');";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    } 

    protected function updateHighschool(string $name, string $description, string $location) {
        global $db;

        $sql = "UPDATE `highschools` SET `name` = '$name', `description` = '$description', `location` = '$location' WHERE `highschools`.`highschool_id` = '$highschool_id'";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }


    protected function deleteHighschool (int $highscool_id) {
        global $db;

        $sql = "DELETE FROM `highschools` WHERE `highschools`.`highschool_id` = $highschool_id";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $db->lastInsertId();
    }

    protected function getAllByName (string $name ) {
        global $db;

        $sql = "SELECT * FROM `highschools` WHERE `name` = '$name'";

        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }
}