<?php

namespace Blogs\Controllers;

use Blogs\Controllers\BaseController;

class NotFoundController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
        $this->view = 'not-found/index';
        $this->setVar('pageTitle', 'Page Not Found');
    }

}