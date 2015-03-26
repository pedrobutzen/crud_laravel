<?php

class UsuariosTableSeeder extends Seeder {

    public function run() {
        DB::table('usuarios')->delete();

        /*
         * A senha cadastrada é o tudo que está antes do @ no email
         * Eemplo o email é 'teste@teste.com' a senha será apenas 'teste'
         */
        
        Usuario::create(array(
            'nome'  => 'Administrador',
            'email' => 'admin@teste.com',
            'senha' => Hash::make('admin')
        ));

        Usuario::create(array(
            'nome'  => 'Gerente',
            'email' => 'gerente@teste.com',
            'senha' => Hash::make('gerente')
        ));

        Usuario::create(array(
            'nome'  => 'Secretaria',
            'email' => 'secretaria@teste.com',
            'senha' => Hash::make('secretaria')
        ));

        Usuario::create(array(
            'nome'  => 'Contador',
            'email' => 'contador@teste.com',
            'senha' => Hash::make('contador')
        ));
    }

}
