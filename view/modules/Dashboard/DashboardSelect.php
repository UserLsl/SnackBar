<div class="d-flex align-items-center h-custom-2 px-5 ms-xl-5 mt-3 pt-2 mt-xl-n5">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Nro Pedido</th>
                <th>Cliente</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($pedidos as $ped) {
                echo '<tr>';
                echo '<td>' . $ped['orderId'] . '</td>';
                echo '<td>' . $ped['orderClient'] . '</td>';
                echo '<td>' . $ped['orderTotal'] . '</td>';
                echo '<td>' . $ped['orderDate'] . '</td>';
                echo '<td>' . $ped['orderStatus'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>