<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIUB Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f2f5;
        }
        .login-container {
            background-color: #ffffff;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            border-radius: 8px;
        }
        .login-container img {
            width: 80px;
            margin-bottom: 10px;
        }
        .login-container h2 {
            font-size: 16px;
            margin: 0;
        }
        .login-container p {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
            margin-bottom: 20px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
        .login-container a {
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
            display: block;
            margin-top: 10px;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <img src ="../images/aiub.png"  alt="AIUB Logo">
    <h2>AMERICAN INTERNATIONAL UNIVERSITY-BANGLADESH</h2>
    <p>— where leaders are created.</p>
    <p>Sign in with your organizational id number.</p>
    
    <form>
        <input type="text" placeholder="22-46984-1" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Log In</button>
    </form>
    
    <a href="#">Can’t access your account?</a>
</div>

</body>
</html>
