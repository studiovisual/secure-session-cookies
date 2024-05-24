<?php

namespace StudioVisual\Cookies\Controllers;

class CookieController {
    public function __construct() {
        add_action('init', [$this, 'modifySessionCookies', 1]);
    }

    /**
     * Modifica os parâmetros dos cookies de sessão para aumentar a segurança.
     * Adapta os parâmetros baseados na versão do PHP.
     * @return void
     */
    public function modifySessionCookies(): void {
        if (PHP_VERSION_ID < 70300) {
            session_set_cookie_params(0, '/', '', is_ssl(), true);
        } else {
            session_set_cookie_params([
                'lifetime' => 0,  
                'path'     => '/',    
                'domain'   => '',   
                'secure'   => is_ssl(),  
                'httponly' => true,    
                'samesite' => 'Lax'    
            ]);
        }
    }
}
