<div class="row">
  <div class="col-3"></div>
  <div class="col-md-offset-3 col-md-6">
    <form class="form-horizontal" action="#" method="post">
      <span class="heading">REGISTRATION</span>
      <!--            <small style="color: red;"><i>--><?//= $_SESSION['error']; ?><!--</i></small> <br>-->
      <small><i>At least three Latin letters</i></small>
      <div class="form-group">
        <input type="text" class="form-control" id="login" placeholder="Login" name="login" pattern="[A-Za-z]{3,}" required>
        <i class="fa fa-user"></i>
      </div>
      <small><i>Minimum 8 characters</i></small>
      <div class="form-group help">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" minlength="8" required>
        <i class="fa fa-lock"></i>
      </div>
      <div class="form-group" style="margin-bottom: 60px;">
        <span class="text"><a href="/login">Authorization</a></span>
        <button type="submit" class="btn btn-secondary">Send</button>
      </div>
    </form>

  </div>
  <div class="col-3"></div>