
<?php
/* Configure autoloading */
require_once get_template_directory( ) . '/deneme/includes/autoloader.class.php';

use Deneme\includes\Autoloader as Autoloader;

$autoloader = new Autoloader( 'Deneme' , get_template_directory( ) , '.class.php' );


/* Run functions class */
use \Deneme\Deneme as Deneme;

function run_Deneme() {

    $functions = new Deneme();

}

run_Deneme();