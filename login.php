<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .content-container {
            padding: 20px;
            width: 90%;
            max-width: 400px;
            background-color: gray;
            border-radius: 4px;
            box-shadow: 0px 0px 4px 4px black;
        }

        h2 {
            text-align: center;
        }

        .container {
            margin: 20px 0;
        }

        .username, .password {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: calc(100% - 40px);
            padding: 10px;
            margin: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: black;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #333;
        }

        p {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            text-decoration: underline;
            color: red;
        }

        @media (max-width: 600px) {
            .content-container {
                padding: 10px;
                width: 100%;
                max-width: 90%;
                box-shadow: 0px 0px 2px 2px black;
            }

            button {
                width: calc(100% - 20px);
                margin: 10px 10px;
            }
        }
    </style>
</head>
<body>
    <div class="content-container">
        <form action="#">
            <h2>Log In</h2>
            <div class="container">
                <div class="username">
                    <label>Username:</label>
                    <input type="text" placeholder="Enter your name" spellcheck="false">
                </div>
                <div class="password">
                    <label>Password:</label>
                    <input type="password" placeholder="Enter your password">
                </div>
                <button>Login</button>
                <p>Don't have an account? <a href="signin.php">Sign In</a></p>
            </div>
        </form>
    </div>
</body>
</html>
