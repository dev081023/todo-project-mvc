<?php


namespace App\Controllers;

use App\Models\User;

session_start();

$_SESSION['error'] = "";
$_SESSION['login'] = "";

class LoginController extends AbstractController
{

  public function view()
  {
    if (!empty($_POST)) {
      $login = trim(stripcslashes(htmlspecialchars($_POST['login'])));
//      $password = sha1(trim($_POST['password']));
      $password = $_POST['password'];
      $_SESSION['login'] = $login;

      if ($this->checkAuth($login, $password)) {
        header("Location: " . PATH . "/tasks");
      } else {
//        $_SESSION['error'] = "Not successful!";
        header("Location: " . PATH. "/login");
      }
      exit();
    }
    $content = $this->viewTemplate('login');
    $title = 'Authorization';
    return $this->viewWrapper($title, $content);
  }

  public function checkAuth($login,  $password): bool
  {
    $users = $this->getAllUsersFromDB();

    foreach ($users as $user) {
      if ($user->getLogin() === $login && $user->getPassword() === $password) {
        $_SESSION["id"] = $user->getId();
        return true;
      }
    }
    return false;
  }

  public function getAllUsersFromDB(): array
  {
    $vars = [];
    $em = getEntityManager();
    $taskRepository = $em->getRepository(User::class);
    $vars['users'] = $taskRepository->findAll();
    return $vars['users'];
  }
}