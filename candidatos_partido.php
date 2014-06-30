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
?>

<section class="tabela">
    <h1><span class="label label-primary titulo">N&uacute;mero de candidatos por partido</span></h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Partido</th>
                <th>N&uacute;mero de candidatos</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($partidos as $partido) {
                    $sql ="SELECT COUNT(nome_candidato) as total
                           FROM resultado
                           WHERE partido = '".$partido."' AND nome_candidato NOT LIKE 'Legenda%'";
                    $query = mysql_query($sql);
                    $total = mysql_fetch_assoc($query);
                    echo '<tr>';
                    echo '<td>'.$partido.'</td>';
                    echo '<td>'.$total['total'].'</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</section>