<?php 
session_start();
$con = mysqli_connect("localhost", "root", " ", "coffeshop");
if ($_SERVER['REQUEST_METHOD']=='POST'){
$username = $_POST['username'];
$password = $_POST['password'];
 $sql = "INSERT INTO coffeshop_users (email,password)
     VALUES ('$username','$password')";
     if (mysqli_query($con, $sql)) {
        echo "<h1>sign up  successfully !</h1>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sign up  Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <h1 style="color:white;">online coffe shop</h1>
    <div class="center">
      <h1>sign up</h1>
      <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
          
        </div>
        <input type="submit" value="sign up">
         <div class="signup_link">
         Already have account? <a href="index.php">log in</a>
        </div>
      </form>
    </div>

  </body>
</html>