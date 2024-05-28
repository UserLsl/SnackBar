<div class="px-5 ms-xl-4">
    <i class="me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
    <span class="h1 fw-bold mb-0">
        <h1 id="titulo">Produtos</h1>
    </span>
</div>

<div class="d-flex align-items-center h-custom-2 px-5 ms-xl-5 mt-5 pt-2 mt-xl-n5">
    <form action="produtos" method="post" class="row g-3">
        <div class="col-md-6">
            <label for="Nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="Nome" name="Nome">
        </div>
        <div class="col-md-6">
            <label for="Categoria" class="form-label">Categoria</label>
            <select id="Categoria" name="Categoria" class="form-select">
                    <?php
                    foreach ($categorias as $categ) {
                        echo '<option value="'.$categ['categoryId'].'">';
                        echo $categ['categoryName'];
                        echo '</option>';
                    }
                    ?>
            </select>
        </div>
        <div class="col-12">
            <label for="Descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="Descricao" name="Descricao"></textarea>
        </div>
        <div class="col-md-10">
            <label for="Arquivo" class="form-label">Imagem</label>
            <input class="form-control" type="file" id="Arquivo" name="Arquivo">
        </div>
        <div class="col-md-2">
            <label for="Valor" class="form-label">Valor</label>
            <input type="number" class="form-control" id="Valor" name="Valor">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="Status" name="Status">
                <label class="form-check-label" for="Status">
                    Ativo
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-danger">Cadastrar</button>
        </div>
    </form>
</div>