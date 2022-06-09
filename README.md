# meu-portfolio-backend
Meu site de portfolio criado usando PHP com o framework Laravel 5.6.17 <br>
<hr>

Instalando as dependências:
---------------------------
Em desenvolvimento: `composer update --no-scripts`<br>
Em produção: `php ../../composer.phar install --no-dev`

Gerando a APP_KEY:
------------------
Copiar o seguinte trecho no arquivo `.env`:
`
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost
`
<br>
Executar o comando: `php artisan key:generate` e colar o base64 no artibuto APP_KEY no arquivo `.env`, após isso exceutar o comando `php artisan config:cache`

Migration:
----------
Rodando as migrations: `php artisan migrate`

Executando os testes:
---------------------
Executar o comando: `./vendor/bin/phpunit` no diretório raiz do projeto.

Rodando o servidor:
-------------------
Executar o comando: `php artisan serve --host=0.0.0.0 --port=8000`





