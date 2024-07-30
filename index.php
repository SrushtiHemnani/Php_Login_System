<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['accept_cookies'])) {
    setcookie('cookies_accepted', 'true', time() + (90), "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>City Premier College</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- Box Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background-color: #fff;
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }

        .side-navbar {
            width: 250px;
            height: 100%;
            position: fixed;
            left: -250px; /* Initially hidden */
            top: 0;
            background-color: #100901;
            transition: left 0.5s;
            z-index: 1000;
        }

        .side-navbar .nav-link {
            color: white;
        }

        .nav-link:active,
        .nav-link:focus,
        .nav-link:hover {
            background-color: #ffffff26;
        }

        .my-container {
            transition: margin-left 0.5s;
        }

        .active-nav {
            left: 0;
        }

        .active-cont {
            margin-left: 250px;
        }

        #menu-btn {
            background-color: #100901;
            color: #fff;
            z-index: 1001;
        }

        .main-content {
            margin-left: 0;
            transition: margin-left 0.3s ease;
            padding: 20px;
        }

        .hero-section {
            background: url('assets/hero-bg.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn-primary-custom {
            background-color: #007bff;
            border: none;
            padding: 15px 30px;
            font-size: 1.2rem;
            border-radius: 5px;
            color: white;
        }

        .features {
            padding: 60px 20px;
            background-color: #f8f9fa;
        }

        .feature-box {
            text-align: center;
            padding: 30px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .feature-box h3 {
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .feature-box p {
            font-size: 1rem;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        @media (max-width: 992px) {
            .side-navbar {
                width: 200px;
                left: -200px;
            }

            .active-cont {
                margin-left: 200px;
            }
        }

        @media (max-width: 768px) {
            .side-navbar {
                width: 100%;
                height: 100vh;
                left: -100%;
            }

            .active-cont {
                margin-left: 0;
            }

            .active-nav {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }
        }
        a{
            text-decoration: none;
        }

        .cookie-banner {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: #343a40;
            color: white;
            padding: 10px;
            text-align: center;
            z-index: 1000;
        }
        .cookie-banner button {
            margin-left: 10px;
        }
    </style>
</head>

<body>
<!-- Side-Nav -->
<div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100">
        <a href="#" class="nav-link h3 text-white my-2">
            </br>SideBar
        </a>
        <li class="nav-link">
            <i class="bx bxs-dashboard"></i>
            <span class="mx-2">Home</span>
        </li>
        <li class="nav-link">
            <i class="bx bx-user-check"></i>
            <span class="mx-2"><a href="login.php" style="color: white">Login</a></span>
        </li>
        <li class="nav-link">
            <i class="fa-solid fa-right-to-bracket"></i>
            <span class="mx-2"><a href="sign-up.php" style="color: white">Sign-Up</a></span>
        </li>
    </ul>

    <span class="nav-link h4 w-100 mb-5">
            <a href="#"><i class="bx bxl-instagram-alt text-white"></i></a>
            <a href="#"><i class="bx bxl-twitter px-2 text-white"></i></a>
            <a href="#"><i class="bx bxl-facebook text-white"></i></a>
        </span>
</div>

<!-- Main Wrapper -->
<div class="p-1 my-container active-cont">
    <!-- Top Nav -->
    <nav class="navbar top-navbar navbar-light bg-light px-5">
        <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
    </nav>
    <!-- End Top Nav -->

    <div id="main" class="main-content">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <h1>Welcome to City Premier College</h1>
                <p>Your success starts here. Discover our innovative solutions and achieve your goals with us.</p>
                <a href="sign-up.php" class="btn btn-primary-custom">Get Started</a>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box">
                            <img src="assets/download%20(2).jpg" alt="Art Craft" class="img-fluid mb-3">
                            <h3>Art & Craft</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <img src="assets/download%20(1).jpg" alt="Technology" class="img-fluid mb-3">
                            <h3>Technology</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <img src="assets/download.png" alt="Sports" class="img-fluid mb-3">
                            <h3>Sports</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php if (!isset($_COOKIE['cookies_accepted'])): ?>
            <div class="cookie-banner" id="cookie-banner">
                <span>We use cookies to improve your experience. By using our site, you agree to our <a href="#">cookie policy</a>.</span>
                <form method="POST" style="display:inline;">
                    <button type="submit" name="accept_cookies" class="btn btn-primary">Accept</button>
                </form>
            </div>
        <?php endif; ?>
        <!-- Footer -->
        <footer class="footer">
            <p>&copy; 2024 City Premier College. All rights reserved.</p>
        </footer>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Custom JavaScript -->
<script>
    var menu_btn = document.querySelector("#menu-btn");
    var sidebar = document.querySelector("#sidebar");
    var container = document.querySelector(".my-container");
    var body = document.body;

    menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav");
        container.classList.toggle("active-cont");
        body.classList.toggle("no-scroll");
    });


    document.addEventListener("click", function (event) {
        if (!sidebar.contains(event.target) && !menu_btn.contains(event.target)) {
            sidebar.classList.remove("active-nav");
            container.classList.remove("active-cont");
            body.classList.remove("no-scroll");
        }
    });
</script>
</body>

</html>
