<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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

        .container {
            margin: 20px 0;
        }
        .content-container h2{
            text-align: center;
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
        <h2>User Sign In</h2>
        <form action="#">
            <div class="container">
                <div class="username">
                    <label>Username:</label>
                    <input type="text" placeholder="Enter your name" spellcheck="false">
                </div>
                <div class="email">
                    <label>Email:</label>
                    <input type="email" placeholder="Enter your email" spellcheck="false">
                </div>
                <div class="password">
                    <label>Password:</label>
                    <input type="password" placeholder="Write your password">
                </div>                
                <div class="cpassword">
                    <label>Conform Password:</label>
                    <input type="password" placeholder="Rewrite your password">
                </div>
                <div class="Image">
                    <label>Image:</label>
                    <input type="file"spellcheck="false">
                </div>
                <button>Signin</button>
                <p>Already have an account? <a href="login.php">Log In</a></p>
            </div>
        </form>
    </div>
</body>
</html>
