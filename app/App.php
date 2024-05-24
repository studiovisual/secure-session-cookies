<?php

namespace StudioVisual\Cookies;

use StudioVisual\Cookies\Controllers\CookieController;

class App {

    public function __construct() {
        new CookieController();
    }

    /**
     * Active plugin
     * @return void
     */
    public static function activate(): void {
        update_option('rewrite_rules', '');
    }

    /**
     * Deactive plugin
     * @return void
     */
    public static function deactivate(): void {
        flush_rewrite_rules();
    }
}
