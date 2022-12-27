<?php

namespace phpenhance\Security;

class Token
{
  private $user;
  private $token;

  public function __construct()
  {
  }

  public function getUser() {
    return $this->user;
  }

  public function setUser(User $user) {
    $this->user = $user;
  }

  public function isAuthorized()
  {
    return $this->user !== null;
  }

  public function getToken() {
    return $this->token;
  }

  public function setToken($token) {
    $this->token = $token;
  }
}