<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/head.php')?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <?php include('include/navbar.php')?>
</nav>
<div class="carousel">
 <?php include('include/carousel.php')?>
</nav>

<div class="container-fluid">
        <?php
        $include_folder = isset($_GET['folder']) ? $_GET['folder'] : 'pages/'; 
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        require_once($include_folder.$page.'.php');
        ?>
</div>
<div class="content">
        <?php
            $include_folder =  "include/";
            $page = isset($_GET['main-content']) ? $_GET['main-content'] : 'main-content';
            require_once($include_folder.$page.'.php');
        ?>
</div>


<footer>
<?php include('include/Footer.php')?>
</footer>

<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>