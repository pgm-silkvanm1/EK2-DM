<?php

class CoursesController extends BaseController {


    protected function index () {
    $this->viewParams['courses'] = Courses::getAll();
   
        $this->loadView();
    }

    // protected function search ($params){
    //     $this->viewParams[''];
    // }
}