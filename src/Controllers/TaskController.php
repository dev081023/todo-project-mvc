<?php


namespace App\Controllers;


use App\Models\Task;

class TaskController extends AbstractController
{

  public function view(): bool|string
  {
    $vars = [];
    $em = getEntityManager();
    $taskRepository = $em->getRepository(Task::class);

    if (!empty($_POST) && $_POST["text"] !== "") {
      $text = $_POST["text"];
      $task = new Task($text);
      $em->persist($task);
      $em->flush();
      header("Location: " . PATH . "/tasks");
      exit();
    }

    if (!empty($_GET["id"])) {
      $id = $_GET["id"];
      $task = $taskRepository->find($id);
      $em->remove($task);
      $em->flush();
    }

    if (!empty($_GET["delete"])) {
      $tasks = $taskRepository->findAll();
      foreach ($tasks as $task) {
        $em->remove($task);
      }
      $em->flush();
    }

    $vars['tasks'] = $taskRepository->findBy($vars, ['id' => 'DESC']);
    $content = $this->viewTemplate('tasks', $vars);
    $title = 'Tasks List';
    return $this->viewWrapper($title, $content);
  }
}
