<!DOCTYPE html>
<html>
<head>
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/pass.js"></script>
</head>
<body>
     <form action="checklogin.php" method="post">
        <h1>PLEASE TO LOGIN</h1>

        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <!-- User field -->
        <label>User Name</label>
        <input type="text" name="uname" placeholder="@user"><br>

        <!-- Password field -->
        <label>Password</label>
        <input class="password" type="password" name="password" id="myInput" placeholder="123456">        
 
        <!-- An element to toggle between password visibility -->
        <input class="checkbox" type="checkbox" onclick="myFunction()">Show Password

        <button type="submit">Login</button>
     </form>
</body>
</html>