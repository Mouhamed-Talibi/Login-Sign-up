<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Page</title>
        <style>
            body{
                font-family: "Roboto Mono", monospace;
            }
            h1{
                font-weight: bold;
                font-size: 30px;
                margin-top: 20px;
            }
            .container{
                font-weight: bold;
                box-shadow: 2px 2px 15px black;
                width: 40%;
                padding: 5px;
            }
            p{
                font-weight: initial;
            }
            span{
                color: blue;
            }
            input{
                border: 1px solid blue;
                padding: 5px;
                margin-top: 10px;
                width: 40%;
                text-align: center;
                font-size: 16px;
                font-family: "Roboto Mono", monospace;
            }
            button{
                text-decoration: none;
                border: none;
                font-family: "Roboto Mono", monospace;
                font-weight: bold;
                color: blue;
                padding: 5px;
                font-size: 20px;
                cursor: pointer;
                margin-top: 15px;
                margin-left: 25px;
            }
        </style>
    </head>


    <body>
        <?php
            if (isset($_POST['signup'])) {
                $connect = mysqli_connect("localhost", "root", "", "members");
                if (isset($_POST['username']) && (isset($_POST['password']))) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $insert = "INSERT INTO users(username, password) VALUES('$username', '$password')";
                    mysqli_query($connect, $insert);
                    header('location: index.php');
                    exit();
                }
            }
        ?>
        <center>
            <h1>Welcome to <span>Sign up</span> Page</h1>
            <form action="" method="post">
                <div class="container">
                    <br>
                    <label for="user">Username</label>
                    <input type="text" name="username" id="user">
                    <br>
                    <label for="pass">Password</label>
                    <input type="password" name="password" id="pass">
                    <br><br>
                    <button type="submit" name="signup">Sign Up</button>
                    <br>
                    <p>After fulling your info , click on sign up and write your info into <span>login page</span></p>
                </div>
            </form>
        </center>
    </body>
</html>