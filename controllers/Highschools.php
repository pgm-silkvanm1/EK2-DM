<?php

class HighschoolsController extends BaseController {


    protected function index () {
    $this->viewParams['highschools'] = Highschools::getAll();
   
        $this->loadView();
    }

    protected funstion search ($param){
        $this->viewParams['']
    }
}