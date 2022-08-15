<?php

class SearchController extends BaseController {


    protected function index () {
        
        if (isset($_POST['search'])) {
            $listValue = $_POST['type'];
            $this->viewParams['type'] = $_POST['type'];

            if (isset($listValue) == "highschool") {
                $this->viewParams['searchHighschool'] = Highschools::getAllByName($_POST['search']);
            }
            if (isset($listValue) == 'university') {
                $this->viewParams['searchUni'] = Universities::getAllByName($_POST['search']);
            }
            if (isset($listValue) == 'courses') {
                $this->viewParams['searchCourse'] = Courses::getAllByName($_POST['search']);
            }
        }

        $this->loadView();
    }
}