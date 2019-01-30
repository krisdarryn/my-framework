<?php

namespace Blogs\Controllers;

use Blogs\Controllers\BaseController;

class BlogController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
        // Redirect to list page
        header('Location: blog/list');
        exit();
    }

    public function listAction() {
        $this->view = 'blog/list';
        
        $this->setVar('pageTitle', 'Blog List');
    }

    public function itemAction($id) {
        $this->view = 'blog/item';
        
        $this->setVar('pageTitle', 'My Blog | A lesson in photography at The Murray Hotel ');
    }
}