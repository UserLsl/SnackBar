<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnackBar</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6 text-black">
    
                <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                <span class="h1 fw-bold mb-0">
                    <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSajoJiooeAQfGpjvbiickOIbzmwkXWcyMErdTlJCQG8A&s"
                    alt="Login image"> -->
                    <h1 id="loginTitulo">Snackbar</h1>
                </span>
                </div>
    
                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-5 mt-4 pt-2 mt-xl-n5">
    
                <form action="login" method="post" style="width: 23rem;">
    
                    <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Entrar</h3>
    
                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form2Example18">Endereço de e-mail</label>
                    <input name="email" type="email" id="form2Example18" class="form-control form-control-lg" required />
                    </div>
    
                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form2Example28">Senha</label>
                    <input name="senha" type="password" id="form2Example28" class="form-control form-control-lg" required />
                    </div>
                    <div>
                        <p id="LoginErro">
                        <?php 
                            if (isset($_SESSION['erro'])) {
                                echo $_SESSION['erro'];
                            }
                        ?>
                        </p>
                    </div>
                    <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg btn-block" type="submit">Login</button>
                    </div>
    
                    <p class="small mb-2 pb-lg-2"><a class="text-muted" href="#!">Esqueceu sua senha?</a></p>
    
                </form>
    
                </div>
    
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="https://static.vecteezy.com/system/resources/previews/025/501/421/large_2x/fast-food-concept-set-of-hamburgers-cheeseburgers-french-fries-vegetables-and-sauces-on-dark-background-so-many-delicious-fast-food-items-on-top-view-on-a-table-ai-generated-free-photo.jpg"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
            </div>
        </div>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>