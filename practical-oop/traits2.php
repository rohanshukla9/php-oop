<?php

trait Hello
{
  public function sayHello()
  {
    return 'Hello';
  }
}

trait World
{
  public function sayWorld()
  {
    return 'World!';
  }
}

trait HelloWorld
{
  use Hello, World;

  public function sayHelloWorld()
  {
    return $this->sayHello() . ' ' . $this->sayWorld();
  }
}


class Greeting
{

  use HelloWorld;

  public function output()
  {
    return $this->sayHelloWorld();
  }
}

$greeting = new Greeting;
echo $greeting->output();
