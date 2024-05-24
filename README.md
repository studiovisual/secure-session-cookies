# Secure Session Cookies

Este é um plugin WordPress focado na segurança, projetado para melhorar a segurança dos cookies de sessão ao configurar atributos HttpOnly, Secure e SameSite, garantindo que os cookies sejam utilizados de forma segura.

## Instalação

1. Faça o download do Secure Session Cookies.
2. Faça o upload do plugin para o diretório `/wp-content/plugins/` do seu site WordPress.
3. Execute `composer install` na raiz do plugin para instalar as dependências necessárias. Certifique-se de ter o Composer instalado globalmente em sua máquina.
   ```bash
   composer install
4. Ative o plugin por meio do menu 'Plugins' no WordPress.

## Ativação

Após a instalação, o plugin não requer configuração adicional. Ele automaticamente ajusta os cookies de sessão para usar configurações seguras:

HttpOnly: Impede que os cookies sejam acessados por scripts do lado do cliente.
Secure: Garante que os cookies sejam enviados apenas sobre conexões HTTPS.
SameSite: Previne o envio de cookies em requisições cross-site, melhorando a proteção contra ataques como CSRF.

## Configurações

As configurações padrão já estão otimizadas para a maioria dos sites WordPress. No entanto, se você precisar personalizar os parâmetros de segurança dos cookies para atender requisitos específicos, você pode modificar o código no arquivo CookieController.php.
