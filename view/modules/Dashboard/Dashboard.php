<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'view/includes/head.php' ?>
</head>

<body>
    <main>
        <div class="row" style="height: 100vh; max-width: 100%;">
            <div class="col-sm-3 col-md-2">
                <?php include 'view/includes/sidebar.php' ?>
            </div>
            <div class="col-sm-9 col-md-10">
                <?php include 'DashboardContent.php' ?>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'view/includes/scripts.php' ?>
    </footer>
</body>

</html>