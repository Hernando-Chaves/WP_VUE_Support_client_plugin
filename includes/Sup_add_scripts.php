<?php

namespace Includes;

class Sup_add_scripts
{
    public function __construct()
    {
        add_action('admin_enqueue_scripts', [$this, 'sup_add_admin_scripts']);
    }

    public function sup_add_admin_scripts()
    {
        $this->sup_add_styles($this->sup_get_styles());
        $this->sup_add_scripts($this->sup_get_scripts());
    }

    public function sup_add_scripts($scripts)
    {
        foreach ($scripts as $handle => $script) :

            if (is_admin()) :

                $current_screen = get_current_screen();

                if ($current_screen->base == 'toplevel_page_soporte_bwc') :

                    $deps       = isset($script['deps']) ? $script['deps'] : '';
                    $ver        = isset($script['ver']) ? $script['ver']  : '';
                    $in_frooter = isset($script['in_frooter']) ? $script['in_frooter'] : '';

                    wp_register_script($handle, $script['src'], $deps, $ver, $in_frooter);
                    wp_enqueue_script($handle);

                endif;

            endif;

        endforeach;
    }

    public function sup_add_styles($styles)
    {
    }

    public function sup_get_scripts()
    {
        $scripts = [
            'manifest' => [
                'src'       => SUPURL . '/admin/assets/js/manifest.js',
                'deps'      => [],
                'ver'       => \filemtime(SUPPATH . '/admin/assets/js/manifest.js'),
                'in_footer' => true,
            ],
            'vendor-js' => [
                'src'       => SUPURL . '/admin/assets/js/vendor.js',
                'deps'      => ['manifest'],
                'ver'       => \filemtime(SUPPATH . '/admin/assets/js/vendor.js'),
                'in_footer' => true,
            ],
            'main-js' => [
                'src'       => SUPURL . '/admin/assets/js/main.js',
                'deps'      => ['vendor-js'],
                'ver'       => \filemtime(SUPPATH . '/admin/assets/js/main.js'),
                'in_footer' => true,
            ],
        ];

        return $scripts;
    }

    public function sup_get_styles()
    {
    }
}
