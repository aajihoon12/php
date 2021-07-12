<?php
   //var_dump(($_POST));
   $conn=mysqli_connect('localhost', 'root', 'p@ssw0rd', 'opentutorials');
   $sql="
        INSERT INTO topic
            (title, description, created)
            VALUES(
                '{$_POST['title']}',
                '{$_POST['description']}',
                NOW()
                )   
        ";
        $result=mysqli_query($conn, $sql);
        if ($result == false) {
                echo "we got just problem... please request to manager";
                error_log(mysqli_error($conn));
        }
        else 
                echo "we got sucess!.. "; //<a href='CH25_index.php'>돌아가기</a>";
        echo $sql;

        sleep(5);
        header('Location: CH25_index.php'); //php redirection
?>