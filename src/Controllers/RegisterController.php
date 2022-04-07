<?php


namespace App\Controllers;


use App\Models\User;
use function Symfony\Component\String\s;

class RegisterController extends AbstractController
{

  public function view()
  {
    if (!empty($_POST)) {
      $login = trim(stripcslashes(htmlspecialchars($_POST['login'])));
      $password = $_POST['password'];

      $em = getEntityManager();
      $user = new User($login, $password);
      $em->persist($user);
      $em->flush();
      header("Location: " . PATH . "/login");
    }

    $content = $this->viewTemplate('register');
    $title = 'Registration';
    return $this->viewWrapper($title, $content);
  }

  public function loginCheck()
  {
    $em = getEntityManager();
    $result = $em->createQuery('SELECT COUNT(*) as COUNT FROM `users` WHERE `login` = ? OR `email` = ?');
  }
}