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
                        <h1 class="mt-2">Dashboard</h1>
                        <ol class="breadcrumb mb-2">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <?php
$projects = getAllProjects();
?>
    <div class="container mt-2">
    <h2 class="mb-4">CRUD Table</h2>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>message</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($projects as $project) : ?>
        <tr>
                    <tr>
                        <th scope="row"><?= $project['id'] ?></th>
                        <td><?= $project['name'] ?></td>
                        <td><?= $project['email'] ?></td>
                        <td><?= $project['phone'] ?></td>
                        <td><?= $project['mess'] ?></td>
                        <td> 
                        <a href="edit.php?id=<?= $project['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                        
                        <a href="edit.php?id=<?= $project['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a class="btn btn-success mb-3" href="contact.php" role="button">Add New</a>
    </div>
                    </div>    
                </main>         
            </div>
    <?php require_once './layouts/footer-dash.php'; ?>

