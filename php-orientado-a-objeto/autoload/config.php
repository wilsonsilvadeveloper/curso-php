<?php
    function myAutoLoad($class){
        $str_class = str_replace('\\', '/', $class);
        if(file_exists('classes/'.$str_class.'.php')){
            include('classes/'.$str_class.'.php');
        };
    }

    spl_autoload_register('myAutoLoad');
?>