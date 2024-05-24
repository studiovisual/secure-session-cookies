# Secure Session Cookies

Este é um plugin WordPress focado na segurança, projetado para melhorar a segurança dos cookies de sessão ao configurar atributos HttpOnly, Secure e SameSite, garantindo que os cookies sejam utilizados de forma segura.

## Instalação
Siga as etapas abaixo para instalar e ativar o plugin:


### Manualmente
1. Baixe o arquivo ZIP do plugin.
2. Extraia o conteúdo na pasta wp-content/plugins do seu WordPress.
3. Acesse o painel administrativo do WordPress e ative o plugin na seção 'Plugins'.

## Ativação
Após a instalação, o plugin não requer configuração adicional. Ele automaticamente ajusta os cookies de sessão para usar configurações seguras:

HttpOnly: Impede que os cookies sejam acessados por scripts do lado do cliente.
Secure: Garante que os cookies sejam enviados apenas sobre conexões HTTPS.
SameSite: Previne o envio de cookies em requisições cross-site, melhorando a proteção contra ataques como CSRF.

## Configurações
As configurações padrão já estão otimizadas para a maioria dos sites WordPress. No entanto, se você precisar personalizar os parâmetros de segurança dos cookies para atender requisitos específicos, você pode modificar o código no arquivo CookieController.php.
