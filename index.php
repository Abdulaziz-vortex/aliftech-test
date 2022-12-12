<?php

include 'vendor/autoload.php';

use Application\components\Router;
use Application\components\Request;
use Application\components\View;
use Application\controllers\BookingController;

$config = require 'config.php';

Router::get('/',function(Request $req){
    (new BookingController)->actionIndex($req);
});

Router::get('/booking/([0-9]+)',function(Request $req){
    (new BookingController)->actionBooking($req);
});

Router::post('/check',function(Request $req){
    (new BookingController)->actionBookingCheck($req);
});