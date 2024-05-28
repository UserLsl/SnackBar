<div class="d-flex align-items-center h-custom-2 px-5 ms-xl-5 mt-5 pt-2 mt-xl-n5">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Valor</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($produtos as $prod) {
                echo '<tr>';
                echo '<td>' . $prod['productName'] . '</td>';
                echo '<td>' . $prod['categoryName'] . '</td>';
                echo '<td>' . $prod['productValue'] . '</td>';
                echo '<td>' . $prod['productStatus'] . '</td>';
                echo '<td>' . "Editar - Excluir" . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>