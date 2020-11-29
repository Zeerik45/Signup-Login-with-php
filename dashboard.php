<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Dashboard</title>
</head>
<body id="dash">

    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>

    <?php echo "<h1> Welcome ".$_SESSION['username']."</h1>" ?>

    <h2><a href="logout.php">Logout</a></h2>

</body>
</html>