<?php
/**
 * This class definse all hooks.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    FunctionsPhp
 */

namespace Deneme;


use \Deneme\Includes\Theme as Theme;
use \Deneme\Includes\Loader as Loader;
use \Deneme\FrontEnd\FrontEnd as FrontEnd;
use \Deneme\Admin\Admin as Admin;
use \Deneme\CleanUp\CleanUp as CleanUp;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy;


class Deneme extends Theme {

    protected $loader;


    public function __construct() {

        parent::__construct();

        $this->loader = new Loader();
        $this->define_frontend_hooks();
        $this->define_admin_hooks();
        $this->define_cleanup_hooks();
        $this->loader->run();

    }


    /**
     *
     */
    private function define_frontend_hooks() {
        $package = new Package(new JsonManifestVersionStrategy(DIR_Path .'public/build/manifest.json'));
        $frontend = new FrontEnd();
        $frontend->addStyle('tema-style', Path . $package->getUrl('build/main.css'))
                 ->addScript('tema-script', Path . $package->getUrl('build/app.js'));





    }


    private function define_admin_hooks() {

        $admin = new Admin();

        // Enqueue styles and scripts.
        $this->loader->add_action( 'admin_enqueue_scripts' , $admin , 'enqueue_styles' );
        $this->loader->add_action( 'admin_enqueue_scripts' , $admin , 'enqueue_scripts' );

        // Register navigational menus.
        $this->loader->add_action( 'init' , $admin , 'register_nav_menus' );

        // Register widgert areas.
        $this->loader->add_action( 'widgets_init' , $admin , 'register_widget_areas' );

        // Register custom posttypes.
        $this->loader->add_action( 'init' , $admin , 'register_custom_posttypes' );

    }


    private function define_cleanup_hooks() {

        $cleanup = new CleanUp();

        // Remove emoji's header.
        $this->loader->add_action( 'init' , $cleanup , 'head_claen' );





    }

}
