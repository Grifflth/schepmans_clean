<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" media="screen" href="<?= base_url ("/node_modules/bootstrap/dist/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("node_modules/font-awesome/css/font-awesome.min.css") ?>">

  
    <link rel="stylesheet" href="<?= base_url("/assets/css/actualite.css")?>">

    <link rel="stylesheet" href="<?= base_url("/assets/css/contact.css")?>">

    <link rel="stylesheet" href="<?= base_url("/assets/css/style.css")?>">
    <title>Schepmans</title>


</head>
<body>

<div class="container">
<?php  $this->load->view('template/base/nav'); ?> 



<?= $view_content ?> 
</div>
 


<?php  $this->load->view('template/base/footer'); ?> 


 <script src="<?= base_url ("/node_modules/jquery/dist/jquery.js") ?>"></script>
 <script src="<?= base_url ("/node_modules/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
</body>
</html>
        <!-- Page Content Slider -->
           