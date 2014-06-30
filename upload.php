<?php
    $uploadfile = 'userfiles/candidatos.csv';
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
    echo "<script>
              alert('Upload realizado com sucesso!');
              parent.location = 'index.php';
          </script>";
?>