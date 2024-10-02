<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
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
            a{
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
            button{
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
        <center>
            <h1>Welcome to <span>login</span> Page</h1>
            <form action="" method="post">
                <div class="container">
                    <img src="login.png" alt="Login-logo" width="200" height="200">
                    <br>
                    <label for="user">Username</label>
                    <input type="text" name="username" id="user">
                    <br>
                    <label for="pass">Password</label>
                    <input type="password" name="password" id="pass">
                    <br><br>
                    <button type="submit" name="login">
                        <a href="Login.php">Login</a>
                    </button>
                    <a href="signup.php" name="signup">SIGN UP</a>
                    <br>
                    <p>If you don't have an account click on <span>SIGN UP.</span></p>
                    <br><br>
                </div>
            </form>
        </center>
    </body>
</html>