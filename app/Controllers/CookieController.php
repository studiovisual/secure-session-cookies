<?php

namespace StudioVisual\Cookies\Controllers;

class CookieController {
    public function __construct() {
        add_action('init', [$this, 'modifySessionCookies']);
    }

    /**
     * Modifica os parâmetros dos cookies de sessão para aumentar a segurança.
     * @return void
     */
    public function modifySessionCookies(): void {
        $params = session_get_cookie_params();
        $params['secure'] = is_ssl();
        $params['httponly'] = true;
        $params['samesite'] = 'Lax';
        session_set_cookie_params($params);
    }
}
