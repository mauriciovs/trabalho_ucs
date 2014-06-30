<?php
    require('conexao.php');
    require('assets.php');
    require('menu.php');
    $sql = "SELECT nome_candidato, partido, numero_votos
            FROM resultado
            WHERE eleito = 1
            ORDER BY nome_candidato";
    $query = mysql_query($sql);
?>

<section class="tabela">
    <h1><span class="label label-primary titulo">Candidatos eleitos</span></h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Partido</th>
                <th>N&uacute;mero de votos</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($resultado = mysql_fetch_assoc($query)) {
                    echo '<tr>';
                    echo '<td>'.$resultado['nome_candidato'].'</td>';
                    echo '<td>'.$resultado['partido'].'</td>';
                    echo '<td>'.$resultado['numero_votos'].'</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</section>