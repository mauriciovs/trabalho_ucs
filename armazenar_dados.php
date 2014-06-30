<?php

    require('conexao.php');
    require('menu.php');
    require('assets.php');

    $f = fopen("userfiles/candidatos.csv", "r");
    $dados_armazenados = false;
    while(!feof($f)) {
        $registro = fgets($f);
        $registro = explode(',', $registro);
        $partido = utf8_decode((string)$registro[0]);
        if($partido != 'PARTIDO'){
            $numero_partido = (int)$registro[1];
            $nome_candidato = utf8_decode((string)$registro[2]);
            $numero_votos = (int)$registro[3];
            $auxiliar = stristr($nome_candidato, '(');
            $eleito = 2;
            if($auxiliar) {
                $nome_candidato = stristr($nome_candidato, '(', true);
                $eleito = 1;
            }

            $sql = "INSERT INTO eleicoes.resultado(
                        id,
                        partido,
                        numero_candidato,
                        nome_candidato,
                        numero_votos,
                        eleito)
                    VALUES(
                        NULL,
                        '$partido',
                        '$numero_partido',
                        '$nome_candidato',
                        '$numero_votos',
                        '$eleito')";
            if(mysql_query($sql)){
                $dados_armazenados = true;
            } else {
                $dados_armazenados = mysql_error();
            }
        }
    }
    fclose($f);
    mysql_close($conecta);
    if($dados_armazenados){
        echo utf8_decode("
            <script>
                alert('Dados processados com sucesso!');
                parent.location = 'index.php';
            </script>");
    } else {
        echo utf8_decode("
            <script>
                alert('Erro ao processar dados!');
                parent.location = 'index.php';
            </script>");
    }
?>