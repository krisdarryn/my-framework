<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function debug_r($val = '') {
    echo '<pre>';
    print_r($val);
    echo '</pre>';
}

function debug_dump($val = '') {
    echo '<pre>';
    var_dump($val);
    echo '</pre>';
}

require 'config/Bootstrap.php';

use Blogs\Init\Bootstrap;

try {

    // Bootstraping the application
    $bootstrap = new Bootstrap();
    $bootstrap->run();

} catch(\Exception $e) {

    exit($e->getMessage());

}