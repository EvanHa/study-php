<?php
    file_put_contents('data/'.$_POST['title'], $_POST['description']);
    // redirection
    header('Location: /src/index.php?id='.$_POST['title']);
?>