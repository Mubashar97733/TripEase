<?php

function page_head($path)
{
?>
    <meta charset="utf-8">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $path; ?>vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $path; ?>vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $path; ?>vendors/images/favicon-16x16.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/switchery/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/fullcalendar/fullcalendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/jquery-asColorPicker/dist/css/asColorPicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/jquery-steps/jquery.steps.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/fancybox/dist/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/cropperjs/dist/cropper.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/dropzone/src/dropzone.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/jvectormap/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>src/plugins/sweetalert2/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>vendors/styles/style.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
<?php
}
