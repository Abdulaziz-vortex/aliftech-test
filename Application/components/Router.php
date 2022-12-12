<?php

namespace Application\components;

use Application\components\Request;
use Application\components\Response;

class Router
{
    public static function get($route, $callback){

        if(strcasecmp($_SERVER['REQUEST_METHOD'], 'GET') !== 0)return false;

        self::on($route,$callback);

    }

    public static function post($route, $callback){

        if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') !== 0)return false;

        self::on($route,$callback);

    }

    public static function on($exprr,$callback){

        $paramtrs = $_SERVER['REQUEST_URI'];

        $paramtrs = (stripos($paramtrs, "/") !== 0) ? "/" . $paramtrs : $paramtrs;
        $exprr = str_replace('/', '\/', $exprr);
        $matched = preg_match('/^' . ($exprr) . '$/', $paramtrs, $is_matched, PREG_OFFSET_CAPTURE);

        if ($matched) {
            // first value is normally the route, lets remove it
            array_shift($is_matched);
            // Get the matches as parameters
            $paramtrs = array_map(function ($paramtr) {
                return $paramtr[0];
            }, $is_matched);


            $callback(new Request($paramtrs), new Response());
        }

    }

}