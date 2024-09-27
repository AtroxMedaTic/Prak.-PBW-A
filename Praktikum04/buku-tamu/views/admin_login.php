
<!-- <h2>Login Admin</h2>  -->
<!-- <form action="login.php" method="post"> -->
    <!-- <label for="username">Username:</label><br> -->
    <!-- <input type="text" name="username" required><br><br> -->
    <!-- <label for="password">Password:</label><br> -->
    <!-- <input type="password" name="password" required><br><br> -->
    <!-- <input type="submit" value="Login"> -->
<!-- </form> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-size: 14px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        /* Menambahkan sedikit responsivitas untuk layar kecil */
        @media (max-width: 600px) {
            form {
                width: 100%;
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <form action="login.php" method="post">
        <h2>Login Admin</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <input type="submit" value="Login">
    </form>

</body>
</html>
