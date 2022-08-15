<?php

class Highschools extends BaseModel {

    protected $table = 'highschools';
    protected $pk = 'highschool_id';

    protected function postHighschool(string $name, string $description, string $location, string $image) {
        global $db;
        $sql = "INSERT INTO `highschools` (`name`, `description`, `location`, `image`) VALUES ('$name', '$description', '$location', '$image');";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    } 

    protected function updateHighschool(int $highschool_id, string $name, string $description, string $location, string $image) {
        global $db;

        $sql = "UPDATE `highschools` SET `name` = '$name', `description` = '$description', `location` = '$location', `image` = '$image' WHERE `highschools`.`highschool_id` = '$highschool_id'";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }


    protected function deleteHighschool (int $highschool_id) {
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

    protected function getHighschoolsWithCoursesById ($params) {
        global $db;

        $sql = "SELECT highschools.highschool_id, highschools.name, highschools.description, highschools.location, highschools.image, courses.id AS courseId, courses.name AS courseName, courses.description AS courseDescription, courses.duration AS courseDuration, courses.image AS courseImage FROM `highschools` INNER JOIN `highschools_has_courses`ON highschools.highschool_id = highschools_has_courses.highschool_id INNER JOIN `courses` ON highschools_has_courses.course_id = courses.id WHERE highschools.highschool_id = $params[0]";

        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchAll();

    }
}