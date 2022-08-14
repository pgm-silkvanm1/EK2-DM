<?php

class AdminController extends BaseController {


    protected function index () {
        $this->viewParams['highschools'] = Highschools::getAll();

        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $this->loadView();

        if (isset($_FILES['upload_file']) && $_FILES['upload_file']['size'] < 52428800 && isset($_POST['description'])) {

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
                    // Highschools::postHighschool($file_name, 'image', $description);
            }
        }

        if (isset($_POST['delete'])) {
            $this->id = $_POST['delete'];

            Highschools::deleteHighschool($this->id);
        }
        
    }
}