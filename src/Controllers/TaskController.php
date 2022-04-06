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
//    $vars['tasks'] = $taskRepository->findAll();
    $vars['tasks'] = $taskRepository->findBy($vars, ['id' => 'DESC']);
    $content = $this->viewTemplate('tasks', $vars);
    $title = 'Tasks List';
    return $this->viewWrapper($title, $content);
  }
}