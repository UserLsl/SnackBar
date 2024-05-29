<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'view/includes/head.php' ?>
    <script src="../../../sidebar.js" crossorigin="anonymous"></script>
</head>

<body style="background-color:rgb(242, 242, 242)">
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
                                <?php
                                if (empty($produto)) {
                                    include 'ProdutosInsert.php';
                                } else {
                                    include 'ProdutosUpdate.php';
                                }
                                ?>
                                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-5 mt-3 pt-2 mt-xl-n5" style="color: red;">
                                <?php
                                if (isset($_SESSION['erro'])) {
                                    echo $_SESSION['erro'];
                                    unset( $_SESSION['erro'] );
                                }
                                ?>
                                </div>
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