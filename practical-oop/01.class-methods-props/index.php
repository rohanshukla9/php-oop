<?php

class User
{
  public $username = 'rohan';

  public function fullName()
  {
    return 'Rohan Shukla';
  }

  public function avatar($size = 60)
  {
    return $size;
  }
}

$user = new User;
var_dump($user);

//`  echo $user->username;
// echo $user->avatar(80);

// function createUser($username, $password)
// {
//   //sql querry to db record

// }

// $config = [
//   'db' => 'I am the DB',
// ];