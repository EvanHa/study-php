<?php
    unlink('data/'.$_GET['id']);
    header('Location: /src/index.php');
?>