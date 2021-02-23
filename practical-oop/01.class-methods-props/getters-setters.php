<?php

class User
{

  public $email;
}

$user = new User;
$user->email = 'rohan@gmail.com';

var_dump($user->email);
