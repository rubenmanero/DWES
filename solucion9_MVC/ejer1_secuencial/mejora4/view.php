<?php

class View
{
    public static function show($viewName, $data = null)
    {
        include "$viewName.php";
    }
}

?>
