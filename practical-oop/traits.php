<?php
//Traits are simply a way to share methods with classes which are re-usable

interface AuthenticatableInterface
{
  public function getPassword();
  public function setPassword($password);
}




class User implements AuthenticatableInterface
{
  public function getPassword()
  {
    return 'Get Password was ascalled';
  }

  public function setPassword($password)
  {
    # code...
  }
}


class User implements AuthenticatableInterface
{
  public function getPassword()
  {
    return 'Get Password was ascalled';
  }

  public function setPassword($password)
  {
    # code...
  }
}
