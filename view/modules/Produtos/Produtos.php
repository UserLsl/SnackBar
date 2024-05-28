<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'view/includes/head.php' ?>
    <script src="../../../sidebar.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <div class="row" style="height: 100vh; max-width: 100%;">
            <div class="col-sm-3 col-md-2">
                <?php include 'view/includes/sidebar.php' ?>
            </div>
            <div class="col-sm-9 col-md-10">
                <section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-black">
                                <?php include 'ProdutosInsert.php' ?>
                                <?php include 'ProdutosSelect.php' ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'view/includes/scripts.php' ?>
    </footer>
</body>

</html>