<?php

class Model
{
  //parent for any other model we need to create

  protected $dates = [];

  //magic methods

  public function __get($property)
  {
    # code...

    if (in_array($property, $this->dates)) {
      return new DateTime($this->{$property});
    }

    return $this->{$property};


    // var_dump($this->dates);
    //die('Works');
  }
}

class User extends Model
{
  protected $dates = ['createdAt'];

  protected $createdAt = '2021-01-01 12:30:00';
}

class Comment extends Model
{
  protected $dates = ['updatedAt'];

  protected $updatedAt = '2021-02-20 12:00:00';
}


// $user = new User;
// var_dump($user->createdAt->format('H:i'));

$comment = new Comment;
var_dump($comment->updatedAt->format('H:i'));
