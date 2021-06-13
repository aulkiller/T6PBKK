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
    <link rel="stylesheet" href="<?php echo base_url('CSS/tourist.css') ?>">
</head>

<body>
    <header>
        <a class="logo" href="../"> <img src="<?php echo base_url('assets/images/logo.svg') ?>" alt="icon"> Home </a>
        <nav>
            <ul class="nav-items">
                <li>
                    <a href="../../contact/">Contact User Side</a>
                </li>
                <li>
                    <a href="../portfolios/">Portfolio Admin Side</a>
                </li>
                <li>
                    <a class="btn" href="../../about/">About Me</a>
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
            <h1>My Portfolio Admin Side</h1>
        </div>
        <div class="subtitle">
            <h2>For CRUD Purpose</h2>
        </div>
        <div class="wadah">
            <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php endif; ?>

            <!-- Card  -->
            <div class="card mb-3">
                <div class="card-header">

                    <a href="<?php echo site_url('admin/portfolios/') ?>"><i class="fas fa-arrow-left"></i>
                        Back</a>
                </div>
                <div class="card-body">

                    <form action="" method="post" enctype="multipart/form-data">
                    <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
                        oleh controller tempat vuew ini digunakan. Yakni index.php/admin/portfolios/edit/ID --->

                        <input type="hidden" name="portfolio_id" value="<?php echo $portfolio->portfolio_id?>" />

                        <div class="form-group">
                            <label for="portfolio_name">Name*</label>
                            <input class="form-control <?php echo form_error('portfolio_name') ? 'is-invalid':'' ?>"
                                type="text" name="portfolio_name" placeholder="Portfolio Name" value="<?php echo $portfolio->portfolio_name ?>" />
                            <div class="invalid-feedback">
                                <?php echo form_error('portfolio_name') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="portfolio_category">Category</label>
                            <input class="form-control <?php echo form_error('portfolio_category') ? 'is-invalid':'' ?>"
                                type="text" name="portfolio_category" placeholder="Portfolio Category" value="<?php echo $portfolio->portfolio_category ?>" />
                            <div class="invalid-feedback">
                                <?php echo form_error('portfolio_category') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="portfolio_date">Date*</label>
                            <input class="form-control <?php echo form_error('portfolio_date') ? 'is-invalid':'' ?>"
                                type="date" name="portfolio_date" placeholder="Portfolio Date" value="<?php echo $portfolio->portfolio_date ?>" />
                            <div class="invalid-feedback">
                                <?php echo form_error('portfolio_date') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="portfolio_image">Photo</label>
                            <input class="form-control-file <?php echo form_error('portfolio_image') ? 'is-invalid':'' ?>"
                                type="file" name="portfolio_image" />
                            <input type="hidden" name="old_image" value="<?php echo $portfolio->portfolio_image ?>" />
                            <div class="invalid-feedback">
                                <?php echo form_error('portfolio_image') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="portfolio_desc">Description</label>
                            <textarea class="form-control <?php echo form_error('portfolio_desc') ? 'is-invalid':'' ?>"
                                name="portfolio_desc" placeholder="Portfolio description..."> <?php echo $portfolio->portfolio_desc ?> </textarea>
                            <div class="invalid-feedback">
                                <?php echo form_error('portfolio_desc') ?>
                            </div>
                        </div>

                        <input class="btn btn-success" type="submit" name="btn" value="Save" />
                    </form>

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