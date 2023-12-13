<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login | Cravitae </title>
    <link rel="stylesheet" href="/css/cssfile/style.css">
</head>

<body>


    <div class="wrapper">
        <h2>Login</h2>
        <form method="POST" action="#" enctype="multipart/form-data">
            @csrf
            <div class="input-box">
                <input type="text" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Create password" required>
            </div>
            <div class="input-box button">
                <input type="submit" value="Register Now">
            </div>
            <div class="text">
                <h3>Don't have an account? <a href="/register">Regist now</a></h3>
            </div>
        </form>
    </div>

    <!-- Add this script at the end of your HTML file, just before </body> -->
    <script>
        @if ($errors->any())
            alert("{{ $errors->first('message') }}");
        @endif
    </script>

</body>

</html>
