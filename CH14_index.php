<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title><title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <?php
                $list=scandir('data'); //data directory의 파일 목록을 스캔하여 배열방에 담아 반환
                $i=0;
                while(i<count($list)) { //list배열방을 돌면서
                    if($list[i]!='.')
                        if($list[i]!='..') {
            ?>
                           <li><a href='index.php?id=<?=$list[i]?>'><?=$list[i]?></a></li> //식을 활용한 패턴
            <?php
                        }
                    $i+=1;
                }
            ?>
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



