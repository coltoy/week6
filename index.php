<?php
/*
 * author: Colton Marty
 * date: 2/5/22
 * filepath: https://cmarty.greenriverdev.com/328/week6/
 * description: Controller page for a week 6 in-class exercise using F3 & MVC.
 */

//Turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
});

//Run fat-free
$f3->run();