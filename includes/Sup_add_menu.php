<?php

namespace Includes;

class Sup_add_menu
{

    private $slug;
    private $domain;
    private $capability;

    public function __construct()
    {
        $this->slug       = "soporte_bwc";
        $this->domain     = SUPDOMAIN;
        $this->capability = "manage_options";
        add_action('admin_menu', [$this, 'sup_add_menu_items']);
    }

    public function sup_add_menu_items()
    {
        $this->sup_add_menu_page();
        $this->sup_add_submenu_page();
    }

    public function sup_add_menu_page()
    {
        add_menu_page(
            __('Soporte BWC', $this->domain),
            __('Soporte BWC', $this->domain),
            $this->capability,
            $this->slug,
            [$this, 'sup_add_menu_template'],
            'dashicons-format-chat',
            20
        );
    }

    public function sup_add_menu_template()
    {
        echo "<div id='sup_client'></div>";
    }

    public function sup_add_submenu_page()
    {

        if (current_user_can($this->capability)) :

            global $submenu;

            $submenu[$this->slug][] = [__('Inicio', $this->domain), $this->capability, 'admin.php?page=' . $this->slug . '#/'];
            $submenu[$this->slug][] = [__('Video tutoriales', $this->domain), $this->capability, 'admin.php?page=' . $this->slug . '#/video-tutoriales'];
            $submenu[$this->slug][] = [__('Base de conocimiento', $this->domain), $this->capability, 'admin.php?page=' . $this->slug . '#/conocimiento'];
            $submenu[$this->slug][] = [__('Tickets', $this->domain), $this->capability, 'admin.php?page=' . $this->slug . '#/tickets'];
            $submenu[$this->slug][] = [__('Mensaje de correo', $this->domain), $this->capability, 'admin.php?page=' . $this->slug . '#/mensaje-correo'];

        endif;
    }
}
