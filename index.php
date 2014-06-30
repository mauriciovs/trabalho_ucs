<?php

    require('conexao.php');
    require('menu.php');
    require('assets.php');

?>
<div id="bem_vindo">
    <h3><p>Bem vindo</p></h3><br/>
    <h4><p>Resultado da votac&atilde;o para deputado federal</p><br/></h4>
    <h5><p>Faca o upload do arquivo contendo o resultado da votac&atilde;o e escolha um menu para verificar os resultados.</p><br/><h5>
</div>
<form role="form" id="formulario" action="upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <div class="btn btn-primary botao_personalizado">Selecionar arquivo</div>
        <input type="file" class="input_personalizado" id="InputFile" name="file">
    </div>
    <button type="submit" class="btn btn-default submit_personalizado">Fazer o upload</button>
</form>
<form role="form" action="armazenar_dados.php" id="formulario_processar" method="post" enctype="multipart/form-data">
    <button type="submit" class="btn btn-default submit_personalizado">Processsar dados</button>
</form>