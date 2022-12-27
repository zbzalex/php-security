<?php

// namespace phpenhance\Authentication;

// use phpenhance\DB\Connection;
// use phpenhance\Security\UserProvider;

// class UserProviderImpl implements UserProvider
// {
//   protected $connection;

//   public function __construct(Connection $connection)
//   {
//     $this->connection = $connection;
//   }

//   public function getUser($token)
//   {
//     $sessionDao = $this->connection->getDao(\Dao\SessionDao::class);
//     $user       = $sessionDao->getSessionUser($token);
    
//     return $user;
//   }
// }
