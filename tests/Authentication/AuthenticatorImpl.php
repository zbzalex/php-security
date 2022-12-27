<?php

// namespace phpenhance\Authentication;

// use phpenhance\Security\Authenticator;
// use phpenhance\Security\Token;
// use phpenhance\Security\User;
// use phpenhance\Security\UserProvider;

// class AuthenticatorImpl implements Authenticator {
//   private $provider;

//   public function __construct(UserProvider $provider)
//   {
//     $this->provider = $provider;    
//   }

//   public function authenticate(Token $token)
//   {
//     if ($this->provider instanceof UserProviderImpl) {
//       $user = $this->provider->getUser($token->getToken());
//       if ($user !== null)
//       {
//         $token->setUser(new User($user->id));
//       }
//     }
//   }
// }