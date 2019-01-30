<?php

namespace Blogs\Controllers;

use Blogs\Controllers\BaseController;

class NotFoundController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
        echo 'Page not found';
    }

}