<?php
//Load config
require_once "config/config.php";

//Global functions
require_once "libraries/Functions.php";

//Load Helpers file
require_once "helpers/url_helper.php";
require_once "helpers/session_helper.php";

//Autoload core libraries
spl_autoload_register(function ($class) {
    require_once "libraries/" . $class . ".php";
});
