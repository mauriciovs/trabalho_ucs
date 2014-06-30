<?php
    $conecta = mysql_connect(
        "https://mauriciovs-trabalho.rhcloud.com", "adminh3RRc9X", "hWWEGglMq5rA")
        or print (mysql_error());
    mysql_select_db("eleicoes", $conecta) or print(mysql_error());
?>