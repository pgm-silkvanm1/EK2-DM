<?php
session_start();

require 'config.php';

require BASE_DIR . '/libs/db.php';


require BASE_DIR . '/models/BaseModel.php';
require BASE_DIR . '/models/Highschools.php';
require BASE_DIR . '/models/Universities.php';


require BASE_DIR . '/controllers/BaseController.php';