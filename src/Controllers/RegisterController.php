<?php


namespace App\Controllers;


use App\Models\User;

class RegisterController extends AbstractController
{

  public function view()
  {
    if (!empty($_POST)) {
      $login = trim(stripcslashes(htmlspecialchars($_POST['login'])));
      $password = $_POST['password'];

//      if ($this->loginCheck($login)) {
//        header("Location: " . PATH . "/register");
//        echo 'NO';
//        exit();
//      } else {
//        echo "OK!";
//        exit();
//      }

      $em = getEntityManager();
      $user = new User($login, $password);
      $em->persist($user);
      $em->flush();
      header("Location: " . PATH . "/login");
      exit();
    }

    $content = $this->viewTemplate('register');
    $title = 'Registration';
    return $this->viewWrapper($title, $content);
  }

  public function loginCheck($login)
  {
    $em = getEntityManager();
    //    $query = "SELECT COUNT(*) as COUNT FROM `users` WHERE `login` = '" . $login . "'";
//    return $em->createQuery($query)->execute();
    return $em->createQueryBuilder()->select('count(*)')->from('users', 'u')->where("u.login = $login");
  }
}
