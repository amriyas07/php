<html lang="en">
<link>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Validation</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php 
    session_start();
     ?>
     <div class="container">
        <div class="sub-container">
            <h1>Server Validation</h1>
        <form action="user.php" method="post">
        <input type="text" name="fname" placeholder="Enter Firstname"/>
        <span><?php echo isset($_SESSION['fname'])? $_SESSION['fname']:" " ?></span>
        <input type="text" name="lname" placeholder="Enter Lastname"/>
        <span><?php echo isset($_SESSION['lname'])? $_SESSION['lname']:" " ?></span>
        <input type="password" name="pass" placeholder="Enter Password"/>
        <span><?php echo isset($_SESSION['pass'])? $_SESSION['pass']:" " ?></span>
        <input type="submit" value="Submit" class="btn"/>
    </form>
        </div>
     </div>
</body>
</html>