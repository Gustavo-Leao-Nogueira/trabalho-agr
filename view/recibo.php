<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Recibo - Listar');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>
<?php
        require_once '../controller/recibo-listar.php';
        $lista_de_recibos = listarTodos();
        echo '<table class="w3-table w3-striped">';
            echo '<tr class="w3-green">';
                echo '<th>'.'Cliente'.'</th>';
                echo '<th>'.'Listar'.'</th>';
            echo '</tr>';
        while($recibo = $lista_de_recibos->fetch(PDO::FETCH_ASSOC)){ 
            echo '<tr>';
                $lista_de_placa = listarUmPlaca($recibo['id_placa']);
                while($placa = $lista_de_placa->fetch(PDO::FETCH_ASSOC)){
                    $lista_de_cliente = listarUmCliente($placa['id_cliente']);
                    while($cliente = $lista_de_cliente->fetch(PDO::FETCH_ASSOC)){
                        if($placa['id_cliente'] == $cliente['id']){
                            echo '<td value="'.$cliente['id'].'">'.$cliente['nome'].'</td>';
                        }
                    }
                }
                echo '<td>'.'<a href="recibo-listar.php?id='.$recibo['id'].'">'.'Listar'.'</a>'.'</td>';
            echo '</tr>';
        }
        echo '</table>';
    ?>

<?php require_once '../includes/Footer.inc.php'; ?>