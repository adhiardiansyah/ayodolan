<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>

    <!-- Favicons -->
    <?= link_tag('favicon.png', 'shortcut icon', 'image/png'); ?>
    <link href="img/assets/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Commissioner&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">

</head>

<body>

    <!-- Panggil Navbar -->
    <?= $this->include('layout/navbar'); ?>


    <main id="main">

        <!-- Panggil Konten -->
        <?= $this->renderSection('content'); ?>

    </main><!-- End #main -->

    <!-- Panggil Footer -->
    <?= $this->include('layout/footer'); ?>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('/vendor/bootstrap/js/bootstrap2.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
    <script src="<?= base_url('/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?= base_url('/vendor/php-email-form/validate.js'); ?>"></script>
    <script src="<?= base_url('/vendor/purecounter/purecounter.js'); ?>"></script>
    <script src="<?= base_url('/vendor/swiper/swiper-bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('/js/main.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

    <script>
        function previewImg() {
            const sampul = document.querySelector('#sampul');
            const imgPreview = document.querySelector('.img-preview');

            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }

        function previewImage() {
            const bukti_bayar = document.querySelector('#bukti_bayar');
            const imgPreview = document.querySelector('.img-preview');

            const fileBayar = new FileReader();
            fileBayar.readAsDataURL(bukti_bayar.files[0]);

            fileBayar.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }

        function previewProfil() {
            const user_image = document.querySelector('#user_image');
            const imgPreview = document.querySelector('.img-preview');

            const fileBayar = new FileReader();
            fileBayar.readAsDataURL(user_image.files[0]);

            fileBayar.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>

</body>

</html>