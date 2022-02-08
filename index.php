<?php
/*
 * author: Colton Marty
 * date: 2/8/22
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
$f3->route('GET /', function($f3) {
    require('model/data-layer.php');

    $bookmarks = array(
        'https://www.cnet.com',
        'https://www.reddit.com/r/news',
        'https://www.edition.cnn.com/sport'
    );

    //Save data to the "hive"
    $f3->set('username', 'jshmo');  //->set() is equal to .set() in Java
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working With Templates');
    $f3->set('temp', 67);
    $f3->set('color', 'purple');
    $f3->set('radius', 10);


    $f3->set('fruits', array('apple', 'orange', 'banana')); //arrays can be defined in set
    $f3->set('bookmarks', $bookmarks);                      //arrays can be stored locally in variable
    $f3->set('desserts', getDesserts());                    //arrays can be stored in model as a function

    //Display a list of radio buttons containing colors
        //Define a function in your model that returns an array of colors
        //Add the data to F3 hive
        //Display buttons in view page
    $f3->set('colors', getColors());

    $view = new Template();
    echo $view->render('views/home.html');
});

//Run fat-free
$f3->run();