<?php


namespace App\Controllers;


abstract class AbstractController
{
  abstract public function view();

  public function viewWrapper(string $title, string $content): bool|string
  {
    ob_start();
    require __DIR__ . '/../Views/default.php';;
    return ob_get_clean();
  }

  public function viewTemplate(string $template, array $data = []): bool|string
  {
    $template_file = __DIR__ . '/../Views/' . $template . '.html.php';
    if (!file_exists($template_file)) {
      $template_file = './Views/not-found.html.php';
    }
    ob_start();
    require $template_file;
    return ob_get_clean();
  }
}