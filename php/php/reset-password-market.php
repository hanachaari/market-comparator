<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>reset password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/loginuser.css">

  </head>
  <body>
    <left>
    <img class="logo"src="pics/logo.png" alt="logo" height="150" width="150">
    </left>
    <center>
<div class="form">

    <form   action="reset-password-market-submit.php">

    <div class="form-group mx-sm-3 mb-2" >
      <label for="exampleInputEmail1" class="form-label">Enter your new password</label>
      <input type="text" class="form-control"  name="newPassword">
    </div>

    <div class="form-group mx-sm-3 mb-2" >
      <label for="exampleInputEmail1" class="form-label">Enter your new password again</label>
      <input type="text" class="form-control"  name="newPasswordCheck">
    </div>
<br>
    <button type="submit" class="btn btn-warning">submit</button>
  </form>
</div>

</center>

  </body>
</html>
