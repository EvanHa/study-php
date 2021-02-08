<?php
    function print_title() {
        if(isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo 'Welcome';
        }
    }
    
    function print_description() {
        if (isset($_GET['id'])) {
            echo file_get_contents("data/".$_GET['id']);
        } else {
            echo "Hello, PHP";
        }
    }
    
    function print_list() {
        $list = scandir('./data');
    
        $i = 0;
        while($i < count($list)) {
            if ($list[$i] != '.' && $list[$i] != '..') {
                echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
            }
            $i = $i + 1;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <h1>WEB</h1>
    <ol>
        <?php
            print_list();
        ?>
    </ol>
    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])) { ?>
        <a href="update.php?id=<?php echo $_GET['id']; ?>">update</a>
        <!-- ?php echo $_GET['id']; ? 는 ?=$_GET['id']? 로 작성할 수 있음.-->
    <?php } ?>

    <h2>
        <?php
            print_title();
        ?>
    </h2>
    <?php
        print_description();
    ?>
    
    <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
        <p><input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>"></p>
        <p><textarea name="description"><?php print_description(); ?></textarea></p>
        <input type="submit">
    </form>
</body>
</html>


