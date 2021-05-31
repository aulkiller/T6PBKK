<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hometown</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('CSS/index.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('CSS/hometown.css') ?>">
</head>

<body>
    <header>
        <a class="logo" href="../"> <img src="<?php echo base_url('assets/images/logo.svg') ?>" alt="icon"> Home </a>
        <nav>
            <ul class="nav-items">
                <li>
                    <a href="../contact/">Contact</a>
                </li>
                <li>
                    <a class="btn" href="../about/">About Me</a>
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
            <h1>How to Reach Me</h1>
        </div>
        <div class="subtitle">
            <h2>Try to flip those cards for my sns account and information</h2>
        </div>
        <div class="wadah">
            <div class="part">
                <div class="parte">
                    <div class="front">
                        <img id="darken" src="<?php echo base_url('assets/images/line.png') ?>" alt="">
                    </div>
                    <div class="details">
                        <h4>Line</h4>
						<p>Aulia Ihza H</p>
						<a href="http://line.me/ti/p/~lineamvas">
							<h5>Line: lineamvas</h5>
						</a>
                    </div>
                </div>
            </div>
            <div class="part">
                <div class="parte">
                    <div class="front">
                        <img src="<?php echo base_url('assets/images/phone.jpg') ?>" alt="">
                    </div>
                    <div class="details">
                        <h4>Phone Number</h4>
						<h5>Home: 021-82413260</h5>
                		<h5>Cell: +62-1282352027</h5>
                    </div>
                </div>
            </div>
            <div class="part">
                <div class="parte">
                    <div class="front">
                        <img src="<?php echo base_url('assets/images/fb.jpg') ?>" alt="">
                    </div>
                    <div class="details">
						<h4>Facebook</h4>
						<p>Aulia Ihza Hendradi</p>
						<a href="https://www.facebook.com/auliaihza/">
                    		<h5>Facebook: Click Here</h5>
                		</a>
                    </div>
                </div>
            </div>
            <div class="part">
                <div class="parte">
                    <div class="front">
                        <img id="darken" src="<?php echo base_url('assets/images/mail.jpg') ?>" alt="">
                    </div>
                    <div class="details">
					<h4>E-Mail</h4>	
					<a href="mailto:auliaihza@gmail.com">
						<h5 id="Spasia">
							auliaihza@gmail.com
						</h5>
                	</a>
                    <a href="mailto:auliaihzahendradi@yahoo.co.id">
						<h5 id="Spasia">
                            auliaihzahendradi<br>@yahoo.co.id
						</h5>
                	</a>
                    </div>
                </div>
            </div>
            <div class="part">
                <div class="parte">
                    <div class="front">
                        <img src="<?php echo base_url('assets/images/house.png') ?>" alt="">
                    </div>
                    <div class="details">
						<h4>Address</h4>
						<a
							href="https://www.google.co.id/maps/place/6%C2%B020'03.2%22S+106%C2%B058'17.0%22E/@-6.334216,106.9708298,19z/data=!3m1!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d-6.3342159!4d106.9713768">
							<h5 id="Spasia"> Bumi Mutiara JH1/19A Bojong Kulur
								Gunung Putri 16969
								<br>Bogor Jawa Barat
							</h5>
						</a>
                    </div>
                </div>
            </div>
            <div class="part">
                <div class="parte">
                    <div class="front">
                        <img id="darken" src="<?php echo base_url('assets/images/twitter.jpg') ?>"" alt="">
                    </div>
                    <div class="details">
                        <h4>Twitter</h4>
						<p>IhzaAuliaH</p>
						<a href="https://twitter.com/auliaihzak">
                    		<h5>Twitter: Click Here</h5>
                		</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <img class="photoright" src="<?php echo base_url('assets/images/P.png') ?>" alt="icon">
        <p class="copyright">
            2021 Aulia.© Copyright. All rights reserved.</p>
    </footer>
    <script src="<?php echo base_url('JS/main.js') ?>"></script>
</body>

</html>