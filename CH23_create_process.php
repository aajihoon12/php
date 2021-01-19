<?php
    file_put_contents('data/'.$_POST['title'],  $_POST['description']); //post_title을 파일 제목으로 쓴다.
    header('Location: /index.php?id='.$_POST['title']);
?>