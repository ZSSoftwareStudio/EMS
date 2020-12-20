<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login to Admin Dashboard | EMS</title>

    <!-- ALL CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="../resources/css/signin.css" rel="stylesheet">

    <!-- ALL ICONS -->
    <link rel="shortcut icon" href="../resources/images/logo.png" type="image/x-icon">

</head>

<body class="text-center">
    <form class="form-signin" action="_checklogin.php" method="POST">
        <img class="mb-4" src="../resources/images/logo.png" alt="" width="72"
            height="72">
        <h1 class="h4 mb-4 font-weight-normal">Login to Admin Dashboard</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted"><a href="../index.html">Back to EMS</a></p>
    </form>
</body>

</html>