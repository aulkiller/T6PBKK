<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('CSS/index.css') ?>">
</head>

<body>
    <header>
        <a class="logo" href="./"> <img src="<?php echo base_url('assets/images/logo.svg') ?>" alt="icon"> Home </a>
        <nav>
            <ul class="nav-items">
                <li>
                    <a href="contact/">Contact</a>
                </li>
                <li>
                    <a class="btn" href="about/">About Me</a>
                </li>
            </ul>
            <div class="menu-btn">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>
    <section>
        <div class="Title">
            <h1>Welcome to My Website</h1>
            <h2 class="Event">Click Me to Interact</h2>
        </div>
    </section>
    <footer>
        <img class="photoright" src="<?php echo base_url('assets/images/P.png') ?>" alt="icon">
        <p class="copyright">
            2021 Aulia.© Copyright. All rights reserved.</p>
    </footer>
    <script src="<?php echo base_url('JS/main.js') ?>"></script>
    <script src="<?php echo base_url('JS/index.js') ?>"></script>
</body>

</html>