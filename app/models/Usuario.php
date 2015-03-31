<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Usuario extends BaseModel implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait;

    protected $table = 'usuarios';
    protected $hidden = array('password', 'remember_token');

}
