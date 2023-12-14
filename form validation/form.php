<?php

include('config/db-config.php');

//selecting data from the database
$sql = 'SELECT firstname, lastname FROM users';


//declare varialbe to hosed selected data from the databse
$result= mysqli_query($conn, $sql);

//fetching the resullting roll as an array
$names = mysqli_fetch_all($result, MYSQLI_ASSOC);

//freeing results from the memory
mysqli_free_result($result);

mysqli_close($conn);
// print_r($names);







if (isset($_POST['submit'])) {
  $uname = $_POST['uname'];
  $uname = filter_var($uname, FILTER_SANITIZE_STRING);
  $fname = $_POST['fname'];
  $fname = filter_var($fname, FILTER_SANITIZE_STRING);
  $lname = $_POST['lname'];
  $lname = filter_var($lname, FILTER_SANITIZE_STRING);
  $pswd = $_POST['pswd'];
  $pswd = filter_var($pswd, FILTER_SANITIZE_STRING);
  $cpswd = $_POST['cpswd'];
  $cpswd = filter_var($cpswd, FILTER_SANITIZE_STRING);
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link  href="form.css?v=<?php echo time(); ?>"rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="form.css" />
  </head>
  <body>
    <header>
      <div class="login">
        <h1>SignUp</h1>
        <form action="" method="post" class="login">
          <input type="text" placeholder="Username" class="uname" name="uname" />
          <input type="text" placeholder="Firstname" class="fname" name="fname" />
          <input type="text" placeholder="lastname" name="lname" />
          <input type="password" placeholder="Password" name='pswd'>
          <input type="password" placeholder="Confirm Password" name='cpswd'> <br>
          <input type='submit' value= 'signup' name='submit'></input>
        </form>
        </div>
        <div class="about">
        <div class="container">
            <?php foreach ($names as $nam) {?>
              <h1><?php echo htmlspecialchars($nam['firstname']); ?></h1>
            <?php } ?>

        </div>
          ?>
        </div>
    </header>
    <script src="./form.js"></script>
  </body>
</html>
