<?php

session_start();
session_destroy();

?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-md-offset-3 col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3 mt-5">
            <h2 class="mb-3">What are tasks?</h2>
            <img style="max-width: 100%;" src="<?php print ASSETS . '/img/unnamed.png'?>" alt="">
            <p class="mb-4 mt-3"><i>In project management, a task is an activity that needs to be accomplished within a defined period of time or by a deadline to work towards work-related goals. It is a small essential piece of a job that serves as a means to differentiate various components of a project. A task can be broken down into assignments which should also have a defined start and end date or a deadline for completion. </i></p>
            <button class="btn btn-outline-secondary" type="button"><a style="text-decoration: none; color: black;" href="/login">Authorization</a></button>
            <button class="btn btn-outline-secondary" type="button"><a style="text-decoration: none; color: black;" href="/register">Registration</a></button>
        </div>
    </div>
    <div class="col-3"></div>
</div>