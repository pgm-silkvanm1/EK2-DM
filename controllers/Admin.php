<?php

class AdminController extends BaseController {

    protected function index () {
        $this->viewParams['highschools'] = Highschools::getAll();
        $this->viewParams['universities'] = Universities::getAll();
        $this->viewParams['courses'] = Courses::getAll();


        $this->loadView();

        
        if (isset($_POST['deletehs'])) {
            $this->id = $_POST['deletehs'];
            
            Highschools::deleteHighschool($this->id);
        }

        if (isset($_POST['deleteuni'])) {
            $this->id = $_POST['deleteuni'];
            
            Universities::deleteUniversity($this->id);
        }

        if (isset($_POST['deletecourse'])) {
            $this->id = $_POST['deletecourse'];
            
            Courses::deleteCourse($this->id);
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


    protected function createUniversity(){
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
                Universities::postUniversity($name, $description, $location, $file_name );
            }
        }
    }

    protected function updateUniversity($params){
        $this->viewParams['school'] = Universities::getById($params[0]);
        $school = Universities::getById($params[0]);
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

            Universities::updateUniversity($params[0], $name, $description, $location, $file_name );
        }
    }

    protected function createCourse(){
        $this->loadView();

        $allowedExtensions = ['jpg', 'jpeg', 'png'];

        if (isset($_FILES['upload_file']) && $_FILES['upload_file']['size'] < 52428800 && isset($_POST['description']) && isset($_POST['name']) && isset($_POST['duration'])) {
    
            $name=$_POST['name'];
            $description=$_POST['description'];
            $duration=$_POST['duration'];

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
                Courses::postCourses($name, $description, $duration, $file_name );
            }
        }
    }

    protected function updateCourse($params){
        $this->viewParams['course'] = Courses::getById($params[0]);
        $course = Courses::getById($params[0]);
        $this->loadView();

        if (isset($_POST)) {

            $name = empty($_POST['name']) ? $course->name : $_POST['name'];
            $description = empty($_POST['description']) ? $course->description : $_POST['description'];
            $duration = empty($_POST['duration']) ? $course->duration : $_POST['duration'];
            
            $allowedExtensions = ['jpg', 'jpeg', 'png'];

            $file_name = $course->image;

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

            Courses::updateCourses($params[0], $name, $description, $duration, $file_name );
        }
    }
}