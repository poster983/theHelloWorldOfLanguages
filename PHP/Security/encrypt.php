<?php


if (isset($_POST['Submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$hash = password_hash($username, PASSWORD_DEFAULT);

  if (password_verify($password, $hash)) {
      echo 'Password is valid!';
  } else {
      echo 'Invalid password.';
  }
}
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <html>


    <head>
        <title>Admin Dashboard Login</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    </head>


    <body class="blur-back">

        <div class="containerlogin signin-allign">

            <div class="card-panel blue-teal <? echo $fadein; ?>">
            <form name="form1" method="post" action="">
                <h3 class="center">Admin Login</h3>
                <div class="card-panel <? echo $failshake; ?>">


                <div class="input-field">
                    <input name="username" type="text" id="username">
                    <label for="username">Encrypt</label>
                </div>

                <div class="input-field">
                    <input name="password" type="password" id="password">
                    <label for="password">Decrypt</label>
                </div>
                </div>
                <button class="btn waves-effect waves-light red darken-4" type="submit" name="Submit">Login
                    <i class="material-icons right">lock_open</i>
                </button>
            </form>
            </div>
        </div>


    </body>


    </html>
