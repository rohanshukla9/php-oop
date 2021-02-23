<?php

class User
{
  protected $email; //encapsulation is setting this to preotected

  public function setEmail($email)
  {

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return;
    }
    $this->email = $email;
  }

  public function getEmail()
  {
    # code...
    return strtolower($this->email);
  }
}

$user = new User;
$user->setEmail('rohan@SHukla.com');

echo $user->getEmail();
