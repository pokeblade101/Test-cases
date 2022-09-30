<?php
spl_autoload_register(function($class_name) {
    include 'tests/' . $class_name . '.php';
    

});

$obj = new EmailTest();