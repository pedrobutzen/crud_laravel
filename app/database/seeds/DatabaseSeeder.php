<?php

class DatabaseSeeder extends Seeder {

    public function run() {
        Eloquent::unguard();

        $this->call('UsuariosTableSeeder');
        $this->command->info('Tabela usuarios populada com sucesso!');

        $this->call('FuncionariosTableSeeder');
        $this->command->info('Tabela funcionarios populada com sucesso!');
    }

}
