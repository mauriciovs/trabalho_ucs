<?php
    require('conexao.php');
    require('assets.php');
    require('menu.php');
    $sql = "SELECT nome_candidato, partido
            FROM resultado
            WHERE numero_votos = 0
            AND nome_candidato NOT LIKE 'Legenda%'
            ORDER BY nome_candidato";
    $query = mysql_query($sql);
?>

<section class="tabela">
    <h1><span class="label label-primary titulo">Candidatos que n&atilde;o receveram votos</span></h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Partido</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($resultado = mysql_fetch_assoc($query)) {
                    echo '<tr>';
                    echo '<td>'.$resultado['nome_candidato'].'</td>';
                    echo '<td>'.$resultado['partido'].'</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</section>