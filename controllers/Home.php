<?php

class HomeController extends BaseController {


    protected function index () {
        $this->viewParams['highschools'] = Highschools::getAll();
        $this->viewParams['universities'] = Universities::getAll();
        $this->loadView();

        if(isset($_GET['search'])) {
            $this->search = $_GET['search'];

            $results = Highschools::getAllByName($this->search);
            print_r($results);
        }
    }

    protected function search ($params) {
        $this->viewParams['search'] = Highschools::getAllByName($params[0]);

        $this->loadView();
    }
}