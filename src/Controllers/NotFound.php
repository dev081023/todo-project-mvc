<?php


namespace App\Controllers;


class NotFound extends AbstractController
{

  public function view()
  {
    $content = $this->viewTemplate('not-found');
    $title = 'Page Not Found';
    return $this->viewWrapper($title, $content);
  }
}