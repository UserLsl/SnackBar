<div class="px-5 ms-xl-4">
    <i class="me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
    <span class="h1 fw-bold mb-0">
        <h1 id="titulo">Produtos</h1>
    </span>
</div>
<div class="d-flex align-items-center h-custom-2 px-5 ms-xl-5 mt-5 pt-2 mt-xl-n5">
    <form action="produtos/editar" method="post" enctype="multipart/form-data" class="row g-3">
        <div style="display: none;">
            <?php echo '<input required type="text" class="form-control" id="Id" name="Id" value="' . $produto['productId'] . '">'; ?>
        </div>
        <div class="col-md-6">
            <label for="Nome" class="form-label">Nome</label>
            <?php echo '<input required type="text" class="form-control" id="Nome" name="Nome" value="' . $produto['productName'] . '">'; ?>
        </div>
        <div class="col-md-6">
            <label for="Categoria" class="form-label">Categoria</label>
            <select id="Categoria" name="Categoria" class="form-select" required>
                <?php
                foreach ($categorias as $categ) {
                    if ($categ['categoryId'] == $produto['categoryId']) {
                        echo '<option selected value="' . $categ['categoryId'] . '">';
                        echo $categ['categoryName'];
                    } else {
                        echo '<option value="' . $categ['categoryId'] . '">';
                        echo $categ['categoryName'];
                    }
                    echo '</option>';
                }
                ?>
            </select>
        </div>
        <div class="col-12">
            <label for="Descricao" class="form-label">Descrição</label>
            <?php echo '<textarea required class="form-control" id="Descricao" name="Descricao">' . $produto['productDesc'] . '</textarea>'; ?>
        </div>
        <div class="col-md-10">
            <label for="Arquivo" class="form-label">Imagem</label>
            <input class="form-control" type="file" id="Imagem" name="Imagem" accept="image/*">
        </div>
        <div class="col-md-2">
            <label for="Valor" class="form-label">Valor</label>
            <?php echo '<input type="text" onKeyUp="mascaraMoeda(this, event)" class="form-control" id="Valor" name="Valor" style="text-align: right;" required value="' . $produto['productValue'] . '">'; ?>
        </div>
        <div class="col-12">
            <div>
                <button type="submit" class="btn btn-danger">Atualizar</button>
                <a href="produtos" type="submit" class="btn btn-danger">Limpar</a>
            </div>
        </div>
    </form>
</div>