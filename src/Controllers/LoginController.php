<?php


namespace App\Controllers;


class LoginController extends AbstractController
{

  public function view()
  {
    $content = $this->viewTemplate('login');
    $title = 'Authorization';
    return $this->viewWrapper($title, $content);
  }
}