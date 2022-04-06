<?php
/** @var $data  */
?>
<div class="row">

</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8 todo">
        <button class="btn btn-dark loguot" onclick="location.href='<?php print PATH; ?>'">Log out</button>
        <form name="todoform" class="todoForm" method="post" action="">
            <div class="input-group mb-3 mt-3">
                <input type="text" class="form-control" id="task" name="text">
                <button type="submit" class="btn btn-outline-secondary add" id="add" name="add">Add Task - <span style="color: black"><b><!--?= $_SESSION['login'] ?>--></b></span></button>
            </div>
        </form>

      <?php if (!empty($data)) : ?>
          <table class="table caption-top">
              <caption>List of tasks</caption>
              <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Task</th>
<!--                  <th scope="col">Date</th>-->
                  <th scope="col">Action</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($data['tasks'] as $task) : ?>
                  <tr>
                      <th scope="row"><?= $task->getId(); ?></th>
                      <td><?= $task->getText(); ?></td>
<!--                      <td>--><?//= $task['dt_create'] ?><!--</td>-->
                      <td><a href="#">Delete</a> | <a href="#">Edit</a></td>
                  </tr>
              <?php endforeach; ?>
              </tbody>
          </table>
          <button type="button" class="btn btn-danger delete-all"><a href="#">Delete all tasks</a></button>
      <?php endif; ?>
    </div>
    <div class="col-2"></div>
</div>