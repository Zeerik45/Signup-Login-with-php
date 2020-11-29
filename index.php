<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Login System</title>
    <link rel="stylesheet" href="css/style.css">



</head>

<body>


    <form action="login.php" method="post">
        <h1>Login</h1>
        <input type="text" name="user-name" class="input-box" placeholder="Username" required>
        <input type="password" name="user-pass" class="input-box" placeholder="Password" required>
        <?php if (isset($_GET['error'])){
           echo '<script>alert("Invalid Username or Password..")</script>'; 
        }
        ?>

        <button type="submit" class="login">Login</button>
        <br>
        <a href="signup.php" class="ca">Create an account</a>
    </form>




</body>

</html>