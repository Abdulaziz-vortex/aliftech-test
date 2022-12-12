<?php

namespace Application\models;

use Application\components\DB;
//use Application\components\ModelInterfcae;

class Booking
{
    public $DB;

    public function __construct($DB)
    {
        $this->DB = $DB;
    }

    public function checkAvailable($room, $date)
    {
        $check_booking = <<<SQL
            select * from orders
            where room_id = :room
            and
            date = :date
SQL;


        $chkb = $this->DB->PDO->prepare($check_booking);
        $chkb->execute(['room' => $room, 'date' => $date]);
        $bussy = $chkb->fetch(\PDO::FETCH_ASSOC);

        return $bussy;
    }

    public function orderRoom($params){
        $booking_sql = "insert into orders(room_id,date,user_name,user_lastname,email) values (:room,:date,:username,:userlastname,:email)";

        $this->DB->PDO->prepare($booking_sql)
            ->execute([
                'room' => $params['room'],
                'date' => $params['date'],
                'username' => $params['name'],
                'userlastname' => $params['lastname'],
                'email' => $params['email']
            ]);
    }
}