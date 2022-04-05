<?php


namespace App\Controllers;


class RegisterController extends AbstractController
{

  public function view()
  {
    $content = $this->viewTemplate('register');
    $title = 'Registration';
    return $this->viewWrapper($title, $content);
  }
}