<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Website Homepage HTML and CSS | CodingNepal</title>
    <link rel="stylesheet" href="/css/style.css" />
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <h2 class="logo"><a href="#">BundlEase</a></h2>
            <input type="checkbox" id="menu-toggle" />
            <label for="menu-toggle" id="hamburger-btn">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                    <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </label>
            <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>

        </nav>
    </header>
    <section class="hero-section">
        <div class="hero">
            <h2>Maternity Care</h2>
            <p>
                Welcome to BundlEase, parents!
                We will provide you with our care, and ease your burden like nothing else.
                Let us help you to the journey of becoming parent :)
                Try us with your phone!
                
            </p>
            <div class="buttons">
                <a href="{{ route('hirer.create') }}" class="learn">Pilih Layanan</a>
            </div>
        </div>
        <div class="img">
            <img src="https://www.codingnepalweb.com/demos/create-responsive-website-html-css/hero-bg.png"
                alt="hero image" />
        </div>
    </section>
</body>

</html>
