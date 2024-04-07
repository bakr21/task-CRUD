
<?php require_once './layouts/header.php'; ?>
<?php require_once './core/function.php'; ?>


    <?php require_once './layouts/header.php'; ?>
<?php require_once './core/function.php'; ?>

<?php 
    
    if (!isset($_SESSION['auth'])) {
        header("Location: ./index.php");
        exit();
    } 
    
?>
    <body class="sb-nav-fixed">
    <?php require_once './layouts/nav-dash.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-2">Profile</h1>
                        <ol class="breadcrumb mb-2">
                            <li class="breadcrumb-item active">Dashboard / profile</li>
                        </ol>
                        <div class="container">
        <h3 class=" text-capitalize" >Hello, <?php echo $_SESSION['auth']['name'];?></h3> 
        <div class="row mt-2">
            <div class="col mx-auto">
                <h3 class='text-primary fw-semibold'>  Name :</h3>
                <div class="alert alert-success fs-3 text-dark" role="alert">
                <?php echo $_SESSION['auth']['name'];?>
                </div>
            </div>
            <div class="col">
                <h3 class='text-primary fw-semibold'>  Email :</h3>
                <div class="alert alert-success fs-3 text-dark" role="alert">
                <?php echo $_SESSION['auth']['email']?>
                </div>
            </div>
        </div>
       
            <div class="col-8 mx-auto">

            <div class="alert alert-info fs-3 text-dark pb-5 pt-1" role="alert">
            <h3 class='text-primary text-center fw-semibold'>  Password :</h3>
                <?php echo $_SESSION['auth']["pass"];?>
            </div>
    </div>
                    </div>    
                </main>         
            </div>
    <?php require_once './layouts/footer-dash.php'; ?>

