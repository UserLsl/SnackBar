<div class="px-5 ms-xl-4 mt-4">
    <span class="h1 fw-bold mb-0">
        <h1 id="titulo">Produtos</h1>
    </span>
</div>
<div class="d-flex align-items-center h-custom-2 px-5 ms-xl-5 mt-3 pt-2 mt-xl-n5">
    <form action="produtos/inserir" method="post" enctype="multipart/form-data" class="row g-3">
        <div class="col-md-6">
            <label for="Nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="Nome" name="Nome" required>
        </div>
        <div class="col-md-6">
            <label for="Categoria" class="form-label">Categoria</label>
            <select id="Categoria" name="Categoria" class="form-select" required>
                <?php
                foreach ($categorias as $categ) {
                    echo '<option value="' . $categ['categoryId'] . '">';
                    echo $categ['categoryName'];
                    echo '</option>';
                }
                ?>
            </select>
        </div>
        <div class="col-12">
            <label for="Descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="Descricao" name="Descricao" required></textarea>
        </div>
        <div class="col-md-10">
            <label for="Arquivo" class="form-label">Imagem</label>
            <input class="form-control" type="file" id="Imagem" name="Imagem" accept="image/*" required>
        </div>
        <div class="col-md-2">
            <label for="Valor" class="form-label">Valor</label>
            <input type="text" onKeyUp="mascaraMoeda(this, event)" class="form-control" id="Valor" name="Valor" style="text-align: right;" required>
        </div>
        <div class="col-12">
            <div>
                <button type="submit" class="btn btn-danger">Cadastrar</button>
            </div>
        </div>
    </form>
</div>