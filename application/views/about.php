<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('CSS/index.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('CSS/profile.css') ?>">
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
                    <a href="../portfoliouser/">My Portfolio</a>
                </li>
                <li>
                    <a class="btn" href="#">About Me</a>
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
        <div class="profil">
            <img src="<?php echo base_url('assets/images/aul.png') ?>" alt="photo">
            <div class="teksprofil">
                <h1>Aulia Ihza Hendradi</h1>
                <h3>Informatics Student</h3>
                <h5>Just a college student who dives into programming sea.
                    Someone who would always tries his best even if he goof around.
                    Say sike
                </h5>
            </div>
        </div>
        <div class="wadah">
            <div class="part1">
                <h4>Personal Skills</h4>
                <h5>Programming</h5>
                <h5>Microsoft Office</h5>
                <h5>English</h5>
                <h5>Problem Solving</h5>
                <h5>Empathy</h5>
                <h5>Teamwork</h5>

                <h4 id="Divida">Awards</h4>
                <h5>Bekasi Bomb Defusal Robot Competition</h5>
                <h6 id="indika"><i>First Position</i></h6>
                <h6 id="indika"><i>2016</i></h6>
            </div>
            <div class="part2">
                <h4>Education</h4>
                <h5>SD Negeri Jatiasih 8</h5>
                <li>
                    Attended from 2006 to 2012
                </li>
                <!-- <h6>2006-2012</h6> -->
                <h5>SMP Negeri 12 Bekasi</h5>
                <li>
                    Attended from 2012 to 2015
                </li>
                <!-- <h6>2012-2015</h6> -->
                <h5>SMA Negeri 5 Bekasi</h5>
                <li>
                    Attended from 2015 to 2018
                </li>
                <!-- <h6>2015-2018</h6> -->
                <h5>Institut Teknologi Sepuluh Nopember</h5>
                <h6 id="indika"><i>Bachelor of Informatics</i></h6>
                <h6 id="indika">2018-TBD</h6>
                <li>
                    Current GPA : 3.51
                </li>
            </div>
            <div class="part3">
                <h4>Personal Experience</h4>
                <h5 id="Spasia">Software Manager of ICT</h5>
                <h6 id="indika"><i>2017-2018 </i></h6>
                <h5 id="Spasia">Olimpiade Komputer Tahap Kota</h5>
                <h6 id="indika"><i>Participant</i></h6>
                <h6 id="indika"><i>2017</i></h6>
                <h5 id="Spasia">Schematics</h5>
                <h6 id="indika"><i>NLC Staff</i></h6>
                <h6 id="indika"><i>2018</i></h6>

                <h4 id="Divida">Personal Info</h4>
                <h5 id="Spasia">Birth Date:<Br>8th August 2000</h5>
                <h5 id="Spasia">Born At:<Br>Purwakarta</h5>
                <h5 id="Spasia">Hobby:</h5>
                <li>
                    Tinkering
                </li>
                <li>
                    Reading Books
                </li>
                <li>
                    Chatting
                </li>
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