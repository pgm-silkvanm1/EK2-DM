<?php

class HighschoolsController extends BaseController {


    protected function index () {
    $this->viewParams['highschools'] = Highschools::getAll();
   
        $this->loadView();
    }

    // protected function search ($params){
    //     $this->viewParams[''];
    // }
}