<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration | Cravitae </title>
    <link rel="stylesheet" href="/css/cssfile/style.css">
</head>

<body>
    <div class="wrapper">
        <h2>Registration</h2>
        <form method="POST" action="#" enctype="multipart/form-data">
            @csrf
            <div class="input-box">
                <input type="text" name="name" placeholder="Enter your name" required>
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Create password" required>
            </div>
            <div class="input-box">
                <input type="password" name="password_confirmation" placeholder="Confirm password" required>
            </div>
            <div class="policy">
                <input type="checkbox">
                <h3>I accept all terms & condition</h3>
            </div>
            <div class="input-box button">
                <input type="submit" value="Register Now">
            </div>
            <div class="text">
                <h3>Already have an account? <a href="/login">Login now</a></h3>
            </div>
        </form>
    </div>

    <!-- Add this script at the end of your HTML file, just before </body> -->
    <script>
        @if ($errors->any())
            alert("{{ $errors->first('message') }}");
        @endif

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');

            form.addEventListener('submit', function(event) {
                const passwordField = form.querySelector('input[name="password"]');
                const confirmPasswordField = form.querySelector('input[name="password_confirmation"]');

                if (passwordField.value.length < 8) {
                    alert('Password must be at least 8 characters long.');
                    event.preventDefault(); // Prevent form submission
                } else if (passwordField.value !== confirmPasswordField.value) {
                    alert('Password and confirm password do not match.');
                    event.preventDefault(); // Prevent form submission
                }
            });
        });
    </script>

</body>

</html>
