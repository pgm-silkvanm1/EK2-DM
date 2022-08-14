<?php

class AdminController extends BaseController {

    protected function index () {
        $this->viewParams['highschools'] = Highschools::getAll();

        $this->loadView();

        
        if (isset($_POST['delete'])) {
            $this->id = $_POST['delete'];
            
            Highschools::deleteHighschool($this->id);
        }
    }

    protected function createHighschool(){
        $this->loadView();

        $allowedExtensions = ['jpg', 'jpeg', 'png'];

        if (isset($_FILES['upload_file']) && $_FILES['upload_file']['size'] < 52428800 && isset($_POST['description']) && isset($_POST['name']) && isset($_POST['location'])) {
    
            $name=$_POST['name'];
            $description=$_POST['description'];
            $location=$_POST['location'];

            // alles komt in lowercase en het gedeelte na het punt vergeleken met de allowedextensions            
            if (in_array(strtolower(pathinfo($_FILES['upload_file']['name'], PATHINFO_EXTENSION)), $allowedExtensions)) {
                $tmp_file = $_FILES['upload_file']['tmp_name'];
                // explode splitst de file op .
                $temp = explode('.', strtolower($_FILES['upload_file']['name']));
                
                // file_name krijgt een timestamp als naam
                // end gebruikt de laatste variabale in de array
                $file_name = round(microtime(true)) . '.' . end($temp);
    
                move_uploaded_file($tmp_file, './assets/img/'. $file_name);
                
                //TODO: change to uni of highschool
                    Highschools::postHighschool($name, $description, $location, $file_name );
            }
        }
    }

    protected function updateHighschool($params){
        $this->viewParams['school'] = Highschools::getById($params[0]);
        $school = Highschools::getById($params[0]);
        $this->loadView();

        if (isset($_POST)) {

            $name = empty($_POST['name']) ? $school->name : $_POST['name'];
            $description = empty($_POST['description']) ? $school->description : $_POST['description'];
            $location = empty($_POST['location']) ? $school->location : $_POST['location'];
            
            $allowedExtensions = ['jpg', 'jpeg', 'png'];

            $file_name = $school->image;

            if (isset($_FILES['upload_file']) && $_FILES['upload_file']['size'] < 52428800) {
        
                // $name=$_POST['name'];
                // $description=$_POST['description'];
                // $location=$_POST['location'];

                // alles komt in lowercase en het gedeelte na het punt vergeleken met de allowedextensions            
                if (in_array(strtolower(pathinfo($_FILES['upload_file']['name'], PATHINFO_EXTENSION)), $allowedExtensions)) {
                    $tmp_file = $_FILES['upload_file']['tmp_name'];
                    // explode splitst de file op .
                    $temp = explode('.', strtolower($_FILES['upload_file']['name']));
                    
                    // file_name krijgt een timestamp als naam
                    // end gebruikt de laatste variabale in de array
                    $file_name = round(microtime(true)) . '.' . end($temp);
        
                    move_uploaded_file($tmp_file, './assets/img/'. $file_name);
                }
            }

            Highschools::updateHighschool($params[0], $name, $description, $location, $file_name );
        }
    }
}