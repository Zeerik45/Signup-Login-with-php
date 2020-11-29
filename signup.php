<!DOCTYPE html>
<html>

<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

    <title>SIGN UP</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <form id="form2" action="signup_verify.php" method="post">
        <h2>SIGN UP</h2>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
        <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>UserName</label>

        <input type="text" name="uname" placeholder="UserName" required><br>

        <label>Password</label>

        <input type="password" name="pass" placeholder="Password" required><br>
        <label>Email</label>
        <input type="Email" name="email" placeholder="Email" required><br>


        <button type="submit">Sign Up</button>
        <a href="index.php" class="ca">Already have an account?</a>
    </form>
</body>

</html>