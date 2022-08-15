<?php

class HomeController extends BaseController {

    protected function index () {
        $this->viewParams['highschools'] = Highschools::getAll();
        $this->viewParams['universities'] = Universities::getAll();
        $this->loadView();
    }

    protected function search () {

        if(isset($_POST['search'])) {
            $this->search = $_POST['search'];

            $results = Highschools::getAllByName($this->search);
            print_r($results);
        }
        $this->loadView();
    }
}