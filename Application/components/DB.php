<?php

namespace Application\components;

class DB
{

    public $driver;
    public  $host;
    public  $username;
    public  $password;
    public  $dbname;

    public $PDO;

    public function __construct($parametrs = []){
        if(empty($parametrs)){
            throw new \Exception('Parametrs not given');
        }
        foreach ($parametrs as $k => $v){
            $this->$k = $v;
        }
        $this->PDO = new \PDO($this->driver.':host='.$this->host.';dbname='.$this->dbname,$this->username,$this->password);
    }
}