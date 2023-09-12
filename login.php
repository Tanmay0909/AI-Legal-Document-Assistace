<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Legal Summary</title>
</head>
<body>
    <header>
        <div class="header-content">
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/nocovwne.json"
                trigger="hover"
                colors="primary:white,secondary:#08a88a"
                style="width:100px;height:100px">
            </lord-icon>
            <h1 class="website-name">LEGAL SUMMARY</h1>
        </div>
    </header>

    <div class="container">
        <form class="login-form" method="post" action="login.php">
            <h2>Login</h2>
            <div class="input-container">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="login_Btn"><a href="index.html">Login</a></button>
        </form>
    </div>

    <!-- Your main content here -->

    <footer>
        <!-- Footer content goes here -->
    </footer>
</body>
</html>

<?php
$conn = mysqli_connect("localhost","root","");
if(isset($_POST['login_Btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM websitelogin.logindetails WHERE username = '$username'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
      $resultpassword=$row['password'];
      if($password == $resultPassword){
        header('Location:E:\Tanmay Soni\SIH\index.html');
      }else{
        echo "<script>
          alert('login unsuccesful');
        </script>";
      }
    }
}
?>
