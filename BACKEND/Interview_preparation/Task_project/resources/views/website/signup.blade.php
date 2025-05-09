<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group input[type="file"] {
            border: none;
        }
        .submit-btn {
            width: 100%;
            padding: 10px;
            background: #4facfe;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .submit-btn:hover {
            background:hsl(179, 95.00%, 47.50%);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Signup</h2>
        <form method="post" action="{{ url('/user_auth') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="password">
            </div>
            <div class="form-group">
                <label for="image">Profile Image</label>
                <input type="file" id="image" name="image" value="image">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gen" value="gen">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="language">Preferred Language</label>
                <select id="language" name="lan[]" value="lan[]">
                    <option value="english">English</option>
                    <option value="hindi">Hindi</option>
                    <option value="urdu">Urdu</option>
                    <option value="spanish">Spanish</option>
                </select>
            </div>
            <button type="submit" class="submit-btn">Sign Up</button>
            <div class="form-group">
               <a href="login">if alredy account login here </a>
            </div>
        </form>
    </div>
</body>
</html>
