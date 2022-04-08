<?php


namespace App\Controllers;


class NotFoundController extends AbstractController
{

  public function view()
  {
    $content = $this->viewTemplate('not-found');
    $title = 'Page Not Found';
    return $this->viewWrapper($title, $content);
  }
}