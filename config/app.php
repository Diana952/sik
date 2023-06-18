<?php
return [
   //Класс аутентификации
   'auth' => \Src\Auth\Auth::class,
   //Клас пользователя
   'identity' => \Model\User::class,
   //Классы для middleware,
   'validators' => [
    'required' => \Validators\RequireValidator::class,
    'unique' => \Validators\UniqueValidator::class
   ],

   'routeMiddleware' => [
       'auth' => \Middlewares\AuthMiddleware::class,
   ]
];


