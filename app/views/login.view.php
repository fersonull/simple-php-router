<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center mt-5">
        <h1>Login</h1>
        <form method="POST" action="/dashboard" class="w-50">
            <div class="form-group mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <input type="submit" value="Login" class="btn btn-primary form-control">
        </form>
    </div>
</body>

</html>