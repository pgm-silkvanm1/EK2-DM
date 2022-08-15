<?php

class Courses extends BaseModel {

    protected $table = 'courses';
    protected $pk = 'id';

    protected function postCourses(string $name, string $description, string $duration, string $image) {
        global $db;
        $sql = "INSERT INTO `courses` (`name`, `description`, `duration`, `image`) VALUES ('$name', '$description', '$duration', '$image');";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    } 

    protected function updateCourses(int $id, string $name, string $description, string $duration, string $image) {
        global $db;

        $sql = "UPDATE `courses` SET `name` = '$name', `description` = '$description', `duration` = '$duration', `image` = '$image' WHERE `courses`.`id` = '$id'";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }


    protected function deleteCourses (int $id) {
        global $db;

        $sql = "DELETE FROM `courses` WHERE `courses`.`id` = $id";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $db->lastInsertId();
    }

    protected function getAllByName (string $name ) {
        global $db;

        $sql = "SELECT * FROM `courses` WHERE `name` = '$name'";

        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }
}