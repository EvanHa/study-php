<?php
    unlink('data/'.$_POST['id']);
    header('Location: /src/index.php');
?>