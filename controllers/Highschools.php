<?php

class HighschoolsController extends BaseController {


    protected function index () {
    $this->viewParams['highschools'] = Highschools::getAll();
   
        $this->loadView();
    }

    protected function detail ($params){
        $this->viewParams['hs'] = Highschools::getHighschoolsWithCoursesById($params[0]);
        $this->viewParams['highschool'] = Highschools::getById($params[0]);

        $this->loadView();

    }

    // protected function search ($params){
    //     $this->viewParams[''];
    // }
}