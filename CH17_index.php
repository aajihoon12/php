<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title><title>
    </head>
    <body>
        <h1><a href='index.php'>WEB</a></h1>
        <ol>
            <?php
                $list=scandir('./data'); //data dir scan -> array
                //echo "<li>$list</li>";
                /*
                echo "<li>$list[0]</li>\n"
                echo "<li>$list[1]</li>\n"
                echo "<li>$list[2]</li>\n"
                echo "<li>$list[3]</li>\n"
                echo "<li>$list[4]</li>"
                echo "<li>$list[5]</li>"
                */
                $i=0;
                while($i<count($list)) { //0<5;
                    if($list[$i]!=.)
                        if($list[$i]!=..)
            ?>
                            <li><a href='index.php?id=<?=$list[$i]?>'><?=$list[$i]?></a></li>
            <?php
                    $i+=1;
                }
                
            ?>
        </ol>
        <h2>
            <?php
                if(!isset($_GET))
                    echo 'WEB';
                else    
                    echo $_GET['id'];
            ?>
        </h2>
    </body>
</html>