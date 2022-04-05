<?php


namespace App\Controllers;


abstract class AbstractController
{
  abstract public function view();

  public function viewWrapper(string $title, string $content): bool|string
  {
    $time = time();
    ob_start();
    require __DIR__ . '/../templates/html.php';;
    return ob_get_clean();
  }

  public function viewTemplate(string $template, array $variables = []): bool|string
  {
    $template_file = __DIR__ . '/../templates/' . $template . '.html.php';
    if (!file_exists($template_file)) {
      $template_file = './templates/not-found.html.php';
    }
    ob_start();
    require $template_file;
    return ob_get_clean();
  }
}