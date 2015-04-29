## Aplicação Crude com Laravel PHP Framework 4.2

Código em funcionamento em:
http://pedrobutzen.com/crud_laravel/public/

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

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs/4.2).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License 

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
