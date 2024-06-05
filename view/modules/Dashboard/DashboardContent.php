<!-- <style>
    .row {
        border: 5px solid blue;
    }

    .col {
        border: 5px solid red;
    }
</style> -->

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-black">

                <div class="px-5 ms-xl-4 mt-4">
                    <span class="h1 fw-bold mb-0">
                        <h1 id="titulo">Dashboard</h1>
                    </span>
                </div>

                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-5 mt-3 pt-2 mt-xl-n5">

                    <div class="container">
                        <div class="row" style="background-color:white; border: 10px white; border-radius: 10px;">
                            <div class="col-lg-4">
                                Gráfico de Vendas
                                <div id="tester"></div>
                            </div>
                            <div class="col-lg-4">
                                Gráfico de Pedidos
                                <div id="myDiv"></div>
                            </div>
                            <div class="col-lg-4">
                                Gráfico de Produtos Cadastrados
                                <div id="myDiv2"></div>
                            </div>
                        </div>
                        </br>
                        <div class="row" style="background-color:white; border: 10px white; border-radius: 10px;">
                            <div class="col-lg-12">
                                <?php include 'DashboardSelect.php' ?>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</section>

<!-- SCRIPTS DO PLOTLY DEVEM VIR DEPOIS DO HTML -->
<script>
    <?php
    if (empty($grafico1[0]['date']) == false and isset($grafico1[0]['date'])) {
        $data1 = $grafico1[0]['date'];
        $valor1 = $grafico1[0]['value'];
    }
    if (empty($grafico1[1]['date']) == false and isset($grafico1[1]['date'])) {
        $data2 = $grafico1[1]['date'];
        $valor2 = $grafico1[1]['value'];
    }
    if (empty($grafico1[2]['date']) == false and isset($grafico1[2]['date'])) {
        $data3 = $grafico1[2]['date'];
        $valor3 = $grafico1[2]['value'];
    }
    if (empty($grafico1[3]['date']) == false and isset($grafico1[3]['date'])) {
        $data4 = $grafico1[3]['date'];
        $valor4 = $grafico1[3]['value'];
    }
    if (empty($grafico1[4]['date']) == false and isset($grafico1[4]['date'])) {
        $data5 = $grafico1[4]['date'];
        $valor5 = $grafico1[4]['value'];
    }
    ?>

    var data1 = '<?php echo empty($data1) ? '' : $data1; ?>';
    var valor1 = '<?php echo empty($valor1) ? '' : $valor1; ?>';
    var data2 = '<?php echo empty($data2) ? '' : $data2; ?>';
    var valor2 = '<?php echo empty($valor2) ? '' : $valor2; ?>';
    var data3 = '<?php echo empty($data3) ? '' : $data3; ?>';
    var valor3 = '<?php echo empty($valor3) ? '' : $valor3; ?>';
    var data4 = '<?php echo empty($data4) ? '' : $data4; ?>';
    var valor4 = '<?php echo empty($valor4) ? '' : $valor4; ?>';
    var data5 = '<?php echo empty($data5) ? '' : $data5; ?>';
    var valor5 = '<?php echo empty($valor5) ? '' : $valor5 ?>';

    TESTER = document.getElementById('tester');
    Plotly.newPlot(TESTER, [{
        x: [data1, data2, data3, data4, data5],
        y: [valor1, valor2, valor3, valor4, valor5],
        marker: {
            color: '#dc3545'
        }
    }], {
        margin: {
            t: 0
        }
    }, {
        responsive: true
    });
</script>

<script>
    <?php
    if (empty($grafico2[0]['date']) == false and isset($grafico2[0]['date'])) {
        $data1 = $grafico2[0]['date'];
        $quant1 = $grafico2[0]['quant'];
    }
    if (empty($grafico2[1]['date']) == false and isset($grafico2[1]['date'])) {
        $data2 = $grafico2[1]['date'];
        $quant2 = $grafico2[1]['quant'];
    }
    if (empty($grafico2[2]['date']) == false and isset($grafico2[2]['date'])) {
        $data3 = $grafico2[2]['date'];
        $quant3 = $grafico2[2]['quant'];
    }
    if (empty($grafico2[3]['date']) == false and isset($grafico2[3]['date'])) {
        $data4 = $grafico2[3]['date'];
        $quant4 = $grafico2[3]['quant'];
    }
    if (empty($grafico2[4]['date']) == false and isset($grafico2[4]['date'])) {
        $data5 = $grafico2[4]['date'];
        $quant5 = $grafico2[4]['quant'];
    }
    ?>

    var data1 = '<?php echo empty($data1) ? '' : $data1; ?>';
    var quant1 = '<?php echo empty($quant1) ? '' : $quant1; ?>';
    var data2 = '<?php echo empty($data2) ? '' : $data2; ?>';
    var quant2 = '<?php echo empty($quant2) ? '' : $quant2; ?>';
    var data3 = '<?php echo empty($data3) ? '' : $data3; ?>';
    var quant3 = '<?php echo empty($quant3) ? '' : $quant3; ?>';
    var data4 = '<?php echo empty($data4) ? '' : $data4; ?>';
    var quant4 = '<?php echo empty($quant4) ? '' : $quant4; ?>';
    var data5 = '<?php echo empty($data5) ? '' : $data5; ?>';
    var quant5 = '<?php echo empty($quant5) ? '' : $quant5 ?>';

    var trace1 = {
        type: 'bar',
        x: [data1, data2, data3, data4, data5],
        y: [quant1, quant2, quant3, quant4, quant5],
        marker: {
            color: '#dc3545',
            // line: {
            //     width: 2.5,
            //     color: '#ffff',
            // }
        }
    };

    var data = [trace1];

    var layout = {
        font: {
            size: 12
        }
    };

    var config = {
        responsive: true
    }

    Plotly.newPlot('myDiv', data, layout, config);
</script>

<script>

    var g3 = JSON.parse('<?= json_encode($grafico3); ?>');
    console.log(g3[0]); 

    var qtds = g3.map(c => c.quant);
    var names = g3.map(c => c.categoryName);

    var data = [{
        values: qtds,
        labels: names,
        type: 'pie'
    }];

    var config = {
        responsive: true
    }
    Plotly.newPlot('myDiv2', data, layout, config);
</script>