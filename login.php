




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./assets/style.css" />
</head>
<body>

<form action="tasks.php" method="post">
  <div class="container">
    <h1>Login</h1>

     <?php

         $status = $_GET['status'] ?? '';

         if ($status) {
             echo $status;
         }

     ?>

    <hr>


    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>
    <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>


    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <input type="hidden" value="login" name="action">

    <button type="submit" class="registerbtn">Login</button>
  </div>


</form>

</body>
</html>
