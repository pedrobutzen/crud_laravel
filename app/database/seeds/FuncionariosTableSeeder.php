<?php

class FuncionariosTableSeeder extends Seeder {

    public function run() {
        DB::table('funcionarios')->delete();
    
        Funcionario::create(array(
            'nome'  => 'Pedro',
            'email' => 'pedro@dj.emp.br',
            'setor' => 'TI',
            'cargo' => 'Gerente',
            'foto'  => ''
        ));
        
        Funcionario::create(array(
            'nome'  => 'João',
            'email' => 'joao@dj.emp.br',
            'setor' => 'TI',
            'cargo' => 'Programador',
            'foto'  => ''
        ));
        
        Funcionario::create(array(
            'nome'  => 'Flavio',
            'email' => 'flavio@dj.emp.br',
            'setor' => 'TI',
            'cargo' => 'Estagiário',
            'foto'  => ''
        ));
        
        Funcionario::create(array(
            'nome'  => 'Maria',
            'email' => 'maria@dj.emp.br',
            'setor' => 'Administrativo',
            'cargo' => 'Secretária',
            'foto'  => ''
        ));
        
        Funcionario::create(array(
            'nome'  => 'Amanda',
            'email' => 'amanda@dj.emp.br',
            'setor' => 'Administrativo',
            'cargo' => 'Estagiária',
            'foto'  => ''
        ));
        
        Funcionario::create(array(
            'nome'  => 'Manoel',
            'email' => 'manoel@dj.emp.br',
            'setor' => 'Financeiro',
            'cargo' => 'Contador',
            'foto'  => ''
        ));
        
        Funcionario::create(array(
            'nome'  => 'Laura',
            'email' => 'laura@dj.emp.br',
            'setor' => 'RH',
            'cargo' => 'Psicóloga',
            'foto'  => ''
        ));

        Funcionario::create(array(
            'nome'  => 'Debora',
            'email' => 'debora@dj.emp.br',
            'setor' => 'RH',
            'cargo' => 'Gerente',
            'foto'  => ''
        ));

        Funcionario::create(array(
            'nome'  => 'Bruno',
            'email' => 'bruno@dj.emp.br',
            'setor' => 'Diretoria',
            'cargo' => 'CEO',
            'foto'  => ''
        ));

        Funcionario::create(array(
            'nome'  => 'Rodrigo',
            'email' => 'rodrigo@dj.emp.br',
            'setor' => 'Diretoria',
            'cargo' => 'CEO',
            'foto'  => ''
        ));
    }

}
