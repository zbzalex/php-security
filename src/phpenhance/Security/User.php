<?php

namespace phpenhance\Security;

class User
{
  private $id;

  public function __construct($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }
}