<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title><title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li><a href="index.php?id=HTML">HTML</a></li>
            <li><a href="index.php?id=CSS">CSS</a></li>
            <li><a href="index.php?id=JAVASCRIPT">JAVASCRIPT</a></li>
        </ol>
        <h2>
            <?php
                if(isset($_GET['id']))
                    echo $_GET['id'];
                else    
                    echo 'WELCOME';
            ?>
        </h2>

        <h2>
            <?php
                if(isset($_GET['id']))
                    echo file_get_contents("data/".$_GET["id"]); //보고있는 화면 디렉터리에서 data/ 
                else   
                    echo "Hello, php";
            ?>
        </h2>
    </body>
</html>



