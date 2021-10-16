<?php
Class Controller{

    public function View($path,$title="Kha Banh"){
        $fullPath = "../app/views/pages/" . $path . ".php";
        $fullPathInc = "../app/views/includes/" . $path . ".php";
        if (file_exists($fullPath)){
            include $fullPath;
        }else if (file_exists($fullPathInc)){
            include $fullPathInc;
        }else{
            include "../app/views/pages/404.php";
        }
    }
    
}