<?php require_once './layouts/header.php'; ?>
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
                        <h1 class="mt-2">Dashboard</h1>
                        <ol class="breadcrumb mb-2">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque enim maxime, velit voluptas natus,<br> assumenda eum dignissimos doloribus laudantium, soluta molestiae. Atque quam voluptas quasi soluta in obcaecati debitis modi?</h1>
                    </div>    
                </main>         
            </div>
    <?php require_once './layouts/footer-dash.php'; ?>