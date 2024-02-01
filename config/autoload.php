<?php

spl_autoload_register(static function ($class_name){
    include 'src/' . $class_name . '.php';
});
