<!DOCTYPE html>
<html lang="en">

<head>
    <title>Teste PHP - Matheus Sousa</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Matheus Sousa" />
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo SITE; ?>assets/images/favicon.ico" type="image/x-icon">

    <!-- prism css -->
    <link rel="stylesheet" href="<?php echo SITE; ?>assets/css/plugins/prism-coy.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo SITE; ?>assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo SITE; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo SITE; ?>assets/css/style-new.css">

    <!-- Required Js -->
    <script src="<?php echo SITE; ?>assets/js/vendor-all.min.js"></script>
    <script src="<?php echo SITE; ?>assets/js/plugins/bootstrap.min.js"></script>

     <!-- mask-->
    <script src="<?php echo SITE; ?>plugins/jquery.mask.min.js"></script>

     <!-- validade -->
    <script src="<?php echo SITE; ?>plugins/jquery.validate.js"></script>

    <!-- sweetalert -->
    <link rel="stylesheet" href="<?php echo SITE; ?>plugins/sweetalert2/sweetalert2.min.css" type="text/css" />
    <script src="<?php echo SITE; ?>plugins/sweetalert2/sweetalert2.min.js"></script>

    <!-- owlcarousel -->
    <link rel="stylesheet" href="<?php echo SITE; ?>plugins/owlcarousel/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo SITE; ?>plugins/owlcarousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="<?php echo SITE; ?>plugins/owlcarousel/docs/assets/owlcarousel/owl.carousel.js"></script>
    
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.3/axios.min.js"></script>
    
</head>
<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->