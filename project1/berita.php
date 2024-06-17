<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RPL News</title>
    <link rel="icon" href="template/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="template/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="template/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="template/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="template/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="template/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="template/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="template/css/slick.css">
    <link rel="stylesheet" href="template/css/gijgo.min.css">
    <link rel="stylesheet" href="template/css/nice-select.css">
    <link rel="stylesheet" href="template/css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="template/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="berita.php">Berita</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="menu_btn">
                            <a href="template/#" class="single_page_btn d-none d-sm-block">book a tabel</a>
                        </div> -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Berita RPL</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                        <?php
                        include "koneksi.php";

                        // Pagination setup
                        $limit = 5; // Number of news items per page
                        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                        $offset = ($page - 1) * $limit;

                        // Fetch news with pagination
                        $query = mysqli_query($koneksi, "SELECT berita.*, admin.nama AS penulis_nama FROM berita INNER JOIN admin ON berita.penulis_id = admin.id ORDER BY berita.id DESC LIMIT $limit OFFSET $offset");

while ($data = mysqli_fetch_array($query)) {
    // Tampilkan data berita


                            ?>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="img/<?= $data['thumbnail'] ?>" alt="">
                                    
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="#">
                                        <h2><?php echo $data['judul']; ?></h2>
                                    </a>
                                    <p><?php echo $data['isi']; ?></p>
                                    <ul class="blog-info-link">
                                        <li><a href="template/#"><i class="far fa-user"></i>
                                                <?php echo $data['penulis_nama']; ?></a></li>
                                        <li><a href="template/#"><i class="far fa-date"></i>
                                                <?php echo $data['tanggal_terbit']; ?></a></li>

                                    </ul>
                                </div>
                            </article>

                        <?php } ?>

                        <?php
                        // Pagination controls
                        $result = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM berita");
                        $total_data = mysqli_fetch_array($result)['total'];
                        $total_pages = ceil($total_data / $limit);
                        ?>

                        <div class="blog-pagination justify-content-center d-flex">

                            <div class="pagination">
                                <?php if ($page > 1): ?>

                                    <li class="page-item">
                                        <a href="?page=<?= $page - 1; ?>" class="page-link">&laquo;</a>
                                    </li>
                                <?php endif; ?>

                                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <li class="page-item <?= $i == $page ? 'active' : ''; ?>">
                                        <a href="?page=<?= $i; ?>" class="page-link"><?= $i; ?></a>
                                    </li>
                                <?php endfor; ?>

                                <?php if ($page < $total_pages): ?>
                                    <li class="page-item">
                                        <a href="?page=<?= $page + 1; ?>" class="page-link">&raquo;</a>
                                    </li>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="template/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="template/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="template/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="template/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="template/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="template/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="template/js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="template/js/slick.min.js"></script>
    <script src="template/js/gijgo.min.js"></script>
    <script src="template/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="template/js/custom.js"></script>
</body>

</html>