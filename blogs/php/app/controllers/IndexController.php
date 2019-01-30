<?php

namespace Blogs\Controllers;

use Blogs\Controllers\BaseController;

class IndexController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
        // Redirect to blog list page
        header('Location: blog/list');
        exit();
    }

}