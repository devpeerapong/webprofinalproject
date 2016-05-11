<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Framit | an easy way to celebrate your events.</title>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <body>
    <br>
    <br>
    <br>
    <div class="container">
      <?php if ( isset($_SESSION["flash_message"]) ): ?>
        <div class="alert alert-danger">
          <strong><?php echo $_SESSION["flash_message"] ?></strong>
        </div>
        <br>
      <?php endif; ?>
      <div class="col-md-4 col-md-offset-8">
        <form action="/api/signin.php" class="form" method="POST">
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control">
          </div>
            <label for="">Password</label>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <input type="password" name="password" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary btn-block">SIGN IN</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>