<?php


namespace App\Controllers;


class MainController extends AbstractController
{

  public function view(): bool|string
  {
    $content = $this->viewTemplate('main');
    $title = 'Main Page';
    return $this->viewWrapper($title, $content);
  }
}