<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #3f5efb, #fc466b);
            padding: 20px;
        }

        form {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.37);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        h1 {
            font-size: 32px;
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            letter-spacing: 2px;
        }

        label {
            font-size: 14px;
            color: white;
            display: block;
            margin-bottom: 5px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.6);
            color: white;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        input:focus {
            border-bottom: 2px solid #fff;
            outline: none;
        }

        button {
            width: 100%;
            padding: 15px;
            background: rgba(255, 255, 255, 0.8);
            color: #333;
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }

        button:hover {
            background: #fff;
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.3);
        }

        a {
            font-size: 12px;
            color: #fff;
            text-align: center;
            display: block;
            margin-top: 10px;
            opacity: 0.7;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        p {
            text-align: center;
            color: white;
            font-size: 12px;
        }

        @media (max-width: 768px) {
            form {
                padding: 20px;
            }

            h1 {
                font-size: 24px;
            }

            button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <form action="login.php" method="post">
        <h1>LOGIN</h1>
        <label>Username</label>
        <input name="email" type="text" placeholder="Enter your email" required>
        <label>Password</label>
        <input name="password" type="password" placeholder="Contains 8 digits" required>
        <button type="submit">Login</button>
        <a href="#">Forgot password?</a>
        <p>Don't have an account? <a href="registerform.html">Register</a></p>
    </form>


</body>
</html>
