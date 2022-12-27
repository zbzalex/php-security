<?php

namespace phpenhance\Security;

interface Authenticator
{
  public function authenticate(Token $token);
}