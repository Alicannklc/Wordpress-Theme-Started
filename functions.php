<?php

define('DIR_Path', realpath(__DIR__) .DIRECTORY_SEPARATOR);

$path = get_template_directory_uri() . '/public';


define('Path', $path);

require_once get_template_directory() . '/vendor/autoload.php';

require_once get_template_directory() . '/deneme/includes/bootstrap.php';


?>
