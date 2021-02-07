<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>WEB</h1>
<ol>
    <?php
        $list = scandir('./data');
        
        $i = 0;
        while($i < count($list)) {
            if ($list[$i] != '.' && $list[$i] != '..') {
                echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
            }
            $i = $i + 1;
        }
    ?>
</ol>
<h2>
    <?php
        if(isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo 'Welcome';
        }
    ?>
</h2>
<?php
    echo file_get_contents("data/".$_GET['id']);
?>

</body>
</html>


