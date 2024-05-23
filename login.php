<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .content-container{
            margin: 20em 45em;
            padding: 100px 200px
            width: 300px;
            height: 300px;
            background-color:gray;
            border-radius : 4px;
            box-shadow: 0px 0px 4px 4px black;
        }
        h2{
            text-align:center;
        }
        .container{
            margin: 20px 20px;
        }
        .username{
            padding: 20px;
            margin-top:10px;
        }

        .password{
            padding: 20px;
        }
        button{
            margin: 10px 80px;
        }
        button:hover{
            color: white;
            background-color:black;
        }
        a{
            text-decoration:none;
            color:black;
        }
        a:hover{
            text-decoration:2px underline red;
            color:red;
        }
    </style>
</head>
<body>
<div class="content-container">
        <form action="#">
            <h2>Log In</h2>
                <div class="container">
                    <div class="username">
                        <label>Username:</label><br>
                        <input type="text" placeholder="Enter your name" spellcheck="false">
                    </div>
                    <div class="password">
                        <label>Password:</label><br>
                        <input type="password" placeholder="Enter your password">
                    </div>
                    <button>Login</button>
                    <p>Don't have account? <a href="singin.php">Sign In</a></p>
                </div>
        </form>
    </div>
</body>
</html>