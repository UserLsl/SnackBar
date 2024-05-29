<div class="d-flex align-items-center h-custom-2 px-5 ms-xl-5 mt-5 pt-2 mt-xl-n5">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Valor</th>
                <th>Status</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($produtos as $prod) {
                echo '<tr>';
                echo '<td><img src="'.$prod['productImage'].'" alt="Imagem" style="max-width: 100px; max-height: 100px;"></td>';
                echo '<td>' . $prod['productName'] . '</td>';
                echo '<td>' . $prod['categoryName'] . '</td>';
                echo '<td>' . $prod['productValue'] . '</td>';
                echo '<td>' . $prod['productStatus'] . '</td>';
                echo '<td>' .
                    '<a href="produtos?id='.$prod['productId'].'">
                        <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                    </a>' .
                '</td>';
                echo '<td>' .
                    '<a href="produtos/excluir?id='.$prod['productId'].'">
                        <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                    </a>' .
                '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>