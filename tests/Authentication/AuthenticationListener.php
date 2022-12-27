<?php

// namespace Tests\Authentication;

// use Symfony\Component\HttpFoundation\Request;

// class AuthenticationListener
// {
//   public function __invoke(Request $request)
//   {
//     $token = $request->headers->get("x-token");
//     if ($token !== null)
//     { 
//       $this->app['token']->setToken($token);
//       $this->app['authenticator']->authenticate($this->app['token']);
//     }
//   }
// }