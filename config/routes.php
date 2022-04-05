<?php

return [
  '/' => \App\Controllers\MainController::class,
  '/tasks' => \App\Controllers\TaskController::class,
  '/not-found' =>  \App\Controllers\NotFoundController::class,
  '/login' => \App\Controllers\LoginController::class,
];