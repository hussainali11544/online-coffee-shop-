<?php 
session_start();
$con = mysqli_connect("localhost", "root", " ", "coffeshop");
if ($_SERVER['REQUEST_METHOD']=='POST'){
$username = $_POST['username'];
$password = $_POST['password'];
$sql= "SELECT * FROM coffeshop_users  WHERE email = '$username' AND password = '$password' ";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
$_SESSION['username'] =$username ;
 header("Location: mainpage.php");
}else{
echo '<h1>wrong user name or password<h1>';
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <h1 style="color:white;">online coffe shop</h1>
    <div class="center">
      <h1>Login</h1>
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
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="signup.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
