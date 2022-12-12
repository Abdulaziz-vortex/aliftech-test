<?php

namespace Application\controllers;

use Application\components\DB;
use Application\components\View;
use Application\components\Request;
use Application\models\Booking;

class BookingController
{
    public $DB;

    public function __construct()
    {
        $config = require 'config.php';
        $this->DB = new DB($config['DB']);;
    }

    public function actionIndex(Request $req)
    {
        $request = $req;
        $db = $this->DB;
        return View::render('index', ['req' => $req, 'db' => $db]);
    }

    public function actionBooking(Request $req)
    {
        return View::render('booking', ['req' => $req, 'db' => $this->DB]);
    }

    public function actionBookingCheck(Request $req)
    {

        $model = new Booking($this->DB);

        $status = false;

        if ($req->post('booking_form')) {

            $params = [
                'name' => $req->post('username'),
                'lastname' => $req->post('lastname'),
                'email' => $req->post('email'),
                'date' => $req->post('date'),
                'room' => $req->post('room'),
            ];


            $DB = $this->DB->PDO;

            $bussy = $model->checkAvailable($params['room'], $params['date']);

            $is_not_bussy = $bussy == null;

            if ($is_not_bussy) {

                $model->orderRoom($params);

                $this->NotifyUser($params);

                $status = true;

            } else {
                $status = false;
            }
        }

        return View::render('check_booking', ['req' => $req, 'status' => $status, 'params' => $bussy]);
    }

    public function NotifyUser($params)
    {
        $to = $params['email'];
        $subject = 'Notify user';
        $message = 'The room #' . $params['room'] . 'was ordered for you to date ' . $params['date'];
        $headers = 'From: maxmudov.abdulaziz1999@gmail.com' . "\r\n" .
            'Reply-To: maxmudov.abdulaziz1999@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
    }


}