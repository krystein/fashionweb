<!DOCTYPE html>
<html>

<head>
    <title>Login Interface</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
    <section class="container ">
        <div class="container d-flex justify-content-center align-items-center">
            <div>
                <h1>Admin Login</h1>
                <form id="loginForm">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                    <input type="submit" value="Login">
                </form>
                <div id="status" class="hidden"></div>
            </div>
        </div>

        <script src="../assets/js/login.js"></script>
    </section>
</body>

</html>