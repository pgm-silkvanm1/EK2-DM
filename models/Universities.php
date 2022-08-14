<?php

class Universities extends BaseModel {

    protected $table = 'universities';
    protected $pk = 'id';

    protected function postUniversity(string $name, string $description, string $location, string $image) {
        global $db;
        $sql = "INSERT INTO `universities` (`name`, `description`, `location`, `image`) VALUES ('$name', '$description', '$location', '$image');";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    } 

    protected function updateUniversity(int $university_id, string $name, string $description, string $location, string $image) {
        global $db;

        $sql = "UPDATE `universities` SET `name` = '$name', `description` = '$description', `location` = '$location', `image` = '$image' WHERE `universities`.`id` = '$university_id'";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }


    protected function deleteUniversity (int $university_id) {
        global $db;

        $sql = "DELETE FROM `universities` WHERE `universities`.`id` = $university_id";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $db->lastInsertId();
    }

    protected function getAllByName (string $name ) {
        global $db;

        $sql = "SELECT * FROM `universities` WHERE `name` = '$name'";

        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }
}