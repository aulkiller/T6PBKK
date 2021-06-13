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
                    <a href="#">Portfolio Admin Side</a>
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
            <!-- DataTables -->
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('admin/portfolios/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="13%">Name</th>
                                    <th width="13%">Category</th>
                                    <th width="13%">Date</th>
                                    <th width="20%">Photo</th>
                                    <th width="20%">Description</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($portfolios as $portfolio): ?>
                                <tr>
                                    <td>
                                        <?php echo $portfolio->portfolio_name ?>
                                    </td>
                                    <td>
                                        <?php echo $portfolio->portfolio_category ?>
                                    </td>
                                    <td>
                                        <?php echo $portfolio->portfolio_date ?>
                                    </td>
                                    <td>
                                    <img src="<?php echo base_url('upload/portfolio/'.$portfolio->portfolio_image) ?>" style="width:80%" />
                                    </td>
                                    <td>
                                        <?php echo substr($portfolio->portfolio_desc, 0, 120) ?>...</td>
                                    <td width="250">
                                        <a href="<?php echo site_url('admin/portfolios/edit/'.$portfolio->portfolio_id) ?>"
                                            class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                        <a onclick="deleteConfirm('<?php echo site_url('admin/portfolios/delete/'.$portfolio->portfolio_id) ?>')"
                                            href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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
    
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
        </div>
    </div>
    </div>


    <!-- Logout Delete Confirmation-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
        </div>
        </div>
    </div>
    </div>

    <script>
        function deleteConfirm(url){
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>
    <script src="<?php echo base_url('JS/main.js') ?>"></script>
</body>

</html>