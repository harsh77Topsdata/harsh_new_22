<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Sweets</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff0f3;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .signup-container {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(255, 105, 135, 0.2);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #ff5e78;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="file"] {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .gender-group,
        .lang-group {
            margin-bottom: 20px;
        }

        .gender-group label,
        .lang-group label {
            display: inline-block;
            margin-right: 15px;
            color: #555;
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            background-color: #ff5e78;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #e85066;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .login-link a {
            color: #ff5e78;
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="signup-container">
        <h2>Create O Sweet Mart Account</h2>
        <form method="POST" action="{{url('/user_signup')}}" enctype="multipart/form-data">
            @csrf

            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" placeholder="Your name">

            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" placeholder="Your email">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Create a password">

            <div class="gender-group">
                <label>Gender:</label><br>
                <label><input type="radio" name="gender" value="Male"> Male</label>
                <label><input type="radio" name="gender" value="Female"> Female</label>
            </div>

            <div class="lang-group">
                <label>Languages Known:</label><br>
                <label><input type="checkbox" name="lag[]" value="Hindi"> Hindi</label>
                <label><input type="checkbox" name="lag[]" value="English"> English</label>
                <label><input type="checkbox" name="lag[]" value="Gujarati"> Gujarati</label>
            </div>

            <label for="image">Upload Photo</label>
            <input type="file" name="image" id="image" required>

            <button type="submit" class="btn-submit">Sign Up</button>

            <div class="login-link">
                Already registered? <a href="login">Login here</a>
            </div>
        </form>
    </div>

</body>

</html>
