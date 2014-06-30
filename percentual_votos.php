<?php
    require('conexao.php');
    require('assets.php');
    require('menu.php');
    $sql = "SELECT partido
            FROM resultado";
    $query = mysql_query($sql);
    $partidos = array();
    while ($resultado = mysql_fetch_assoc($query)) {
        if(!in_array($resultado['partido'], $partidos)){
            array_push($partidos, $resultado['partido']);
        }
    }
    $sql = "SELECT SUM(numero_votos) AS total
            FROM resultado";
    $query = mysql_query($sql);
    $total_votos = mysql_fetch_assoc($query);
?>

<section class="tabela">
    <h1><span class="label label-primary titulo">Percentual de votos por partido</span></h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Partido</th>
                <th>Total de votos</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($partidos as $partido) {
                    $sql ="SELECT SUM(numero_votos) AS total
                           FROM resultado
                           WHERE partido = '".$partido."'";
                    $query = mysql_query($sql);
                    $total = mysql_fetch_assoc($query);
                    $percentual = (((int)$total['total']*100)/(int)$total_votos['total']);
                    echo '<tr>';
                    echo '<td>'.$partido.'</td>';
                    echo '<td>'.number_format($percentual, 2).' % </td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</section>