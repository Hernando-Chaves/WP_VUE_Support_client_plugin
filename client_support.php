<?php

/**
 *
 *Plugin Name:       Client Support
 *Plugin URI:        bogotawebcompany.com
 *Description:       Plugin desarrollado para dar soporte al cliente directamente desde el panel de administración de wordpress.
 *Version:           1.0.0
 *Author:            Hernando j Chaves
 *Author URI:        bogotawebcompany.com
 *License:           GPL-2.0+
 *License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 *Text Domain:       support_client
 */

if (!defined('ABSPATH')) : die;
endif;

require_once "vendor/autoload.php";

use Includes\Sup_add_menu;
use Includes\Sup_add_scripts;


final class Client_support
{
    public function __construct()
    {
        $this->sup_load_constants();
        register_activation_hook(__FILE__, [$this, 'sup_activation']);
        register_deactivation_hook(__FILE__, [$this, 'sup_deactivation']);
        add_action('plugins_loaded', [$this, 'sup_plugins_loaded']);
    }

    public function sup_load_constants()
    {
        define('SUPVERSION', '1.0.0');
        define('SUPDOMAIN', 'support_client');
        define('SUPPATH', untrailingslashit(plugin_dir_path(__FILE__)));
        define('SUPURL', untrailingslashit(plugin_dir_url(__FILE__)));
    }

    public function sup_activation()
    {
    }

    public function sup_deactivation()
    {
    }

    public function sup_plugins_loaded()
    {
        new Sup_add_menu();
        new Sup_add_scripts();
    }

    public static function init()
    {
        static $instance = false;

        if (!$instance) :
            $instance =  new Self();
        endif;

        return $instance;
    }
}

function sup_kickstart()
{
    return Client_support::init();
}

sup_kickstart();
