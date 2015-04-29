## Crud Básico com Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

## Instruções para instalação

Clonar o repositório.

Mover para pasta root de seu servidor apache (exemplo www).

Em seu mysql crie um banco de dados com nome que desejar.

Na pasta 'crud_laravel/app/config' abra o arquivo 'database.php' com seu editor, em 'connections' 'mysql' altere-o com os dados de seu servidor mysql.

Abra o Prompt de Comando do windows, no Prompt vá até a pasta 'crud_laravel'.

No Prompt já na pasta 'crud_laravel' digite 'php artisan migrate' e tecle enter para criar automaticamente as tabelas no banco. Digite 'y' e tecle enter para confirmar.

Ainda no Prompt digite 'php artisan db:seed' para popular as tabelas do banco de dados, tecle enter, digite 'y' e tecle enter para confirmar.

Agora você pode abrir o link de seu servidor apache e ir até a pasta 'crud_laravel/public' (exemplo com wamp http://localhost/crud_laravel/public/).

Se o seu endereço de servidor for diferente de http://localhost vá até a pasta 'crud_laravel/app/config' e no arquivo 'app.php' edite a linha 'url' com o seu endereço de servidor.

## Agora é só logar com algum dos usuários abaixo:

Email: admin@teste.com
Senha: admin

Email: gerente@teste.com
Senha: gerente

Email: secretaria@teste.com
Senha: secretaria

Email: contador@teste.com
Senha: contador



## Official Documentation Laravel PHP Framework

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License 

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
