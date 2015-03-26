<?php

class Usuario extends BaseModel {

    protected $table = 'usuarios';
    protected $hidden = array('senha', 'remember_token');

}
