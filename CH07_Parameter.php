<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        안녕하세요. <?php echo $_GET['name'];  ?>님 //URL끝 부분에 ? name=값
        안녕하세요. <?php echo $_GET['title']; ?>님
        안녕하세요. <?php echo $_GET['address']; ?>에 사시는 <?php echo $_GET['name']; ?>님
    </body>
</html>