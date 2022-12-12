<?php

namespace Application\components;

class View
{
    const VIEW_FOLDER = './pages/';

    public static function render($page = null, $var = null, $folder = null)
    {

        $folder = $folder === null ? self::VIEW_FOLDER : $folder;

        if ($page === null) return false;

        $file = $folder . $page . '.php';

        foreach ($var as $k => $v){
            ${$k} = $v;
        }

        if (!file_exists($file)) return false;
//        echo $file;die();
        return include $file;
    }

}