include 'CH24_function.php';

<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            print_title();
        </title>
    </head>
    <body>
        <h1><a href='index.php'>WEB</a></h1>
        <ol>
            <?php
                print_list();
            ?>
        </ol>
        <a href="create.php">update</a>
        <?php if(isset($_GET['id'])) { ?>
            <a href="update.php?id=<?= $_GET['id'] ?>">update</a>
        <?php } ?>
        <form action="CH23_create_process.php" method="post">
            <p>
                <input type="text" name="title" value="<?php print_title(); ?>" />
            </p>
            <p>
                <textarea name="description" value="<?php print_description(); ?>" ></textarea>
            </p>
            <p>
                <input type="submit" value="submit" />
            </p>
        </form>
        <h2>
            <?php
               print_title();
            ?>
        </h2>
        <?php
            print_description();
        ?>
    </body>
</html>