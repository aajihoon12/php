<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            <?php
                print_title();
            ?>
        <title>
    </head>
    <body>
        <h1><a href='index.php'>WEB</a></h1>
        <ol>
        
        <!--    
            <?php
                /*
                $list=scandir('./data'); //data dir scan -> array
                $i=0;
                while($i<count($list)) { //0<5;
                    if($list[$i]!=.)
                        if($list[$i]!=..)
            ?>
                            <li><a href='index.php?id=<?=$list[$i]?>'><?=$list[$i]?></a></li>
            <?php
                    $i+=1;
                }
              */  
            ?>
        -->
            <?php
                print_list();
            ?>
        </ol>
        <h2>
            <?php
                /*
                if(!isset($_GET['id']))
                    echo 'WELCOME';
                else    
                    echo $_GET['id'];
                */
            ?>
            <?php
                print_title();
            ?>  
        </h2>
        <?php
            /*
            if(isset($_GET['id']))
                echo  file_get_contents('./data'.$_GET['id']);
            else 
                echo 'HELLO, PHP';
            */
        ?>
        <?php
            print_description();
        ?>
    </body>
</html>