<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hello World</title>
        <style>
            body {
                text-align: center;
                padding-top: 30px;
                padding-bottom: 30px;
            }

            h1 {
                padding: 50px;
                border: 1px solid black;
                background-color: lavender;
            }

            img {
                height: 400px;
                width: 500px;
                border-radius: 100px;
                border: solid 5px;
            }
        </style>
    </head>
    <body>
        <h1>WELCOME TO WORLD</h1>
        <img src="img/beautiful-landscape-forest-view-from-faraway-4k_1540140117.jpg" >
    </body>
<?php 
}else{
     header("Location: login.php");
     exit();
}
?>