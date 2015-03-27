<?php

class Funcionario extends BaseModel {

    protected $table = 'funcionarios';
    protected $fillable = array('nome', 'email', 'setor', 'cargo', 'foto');

}
