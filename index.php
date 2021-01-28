<?php
/** Create a food order form */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route (home page)
$f3->route('GET /', function() {
    //Display a view
    $view = new Template();
    echo $view->render('views/home.html');
});

//Define a order route (home page)
$f3->route('GET /order', function() {
    echo "Order route";
});

//Define a order route (home page)
$f3->route('GET /order2', function() {
    echo "Order 2 route";
});

//Define a summary route (home page)
$f3->route('GET /summary', function() {
    echo "Summary route";
});

//Run fat free
$f3->run();