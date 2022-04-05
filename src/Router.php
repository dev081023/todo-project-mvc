<?php


namespace App;


class Router
{
  private array $routes = [];

  public function __construct(array $routes)
  {
    $this->routes = $routes;
  }

  public function dispatch(string $request_uri)
  {
    if (!empty($this->routes[$request_uri]) && class_exists($this->routes[$request_uri])) {
      $className = $this->routes[$request_uri];
    } else {
      $className = \App\Controllers\NotFoundController::class;
    }
    $controller = new $className();

    return $controller->view();
  }
}