<?php

class UniversitiesController extends BaseController {


    protected function index () {
    $this->viewParams['universities'] = Universities::getAll();
   
        $this->loadView();
    }

    // protected function search ($params){
    //     $this->viewParams[''];
    // }
}