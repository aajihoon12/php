<!DOCTYPE>
<html>
    <head>
        <meta charset='utf-8'>
        <title></title>
    </head>
    <body>
        <h1>Array</h1>
        <?php
            $coworkers=array('egoing', 'leezche', 'duru', 'taeho'); //배열 만들고 참조
            echo $coworkers[1].'<br/>';
            echo $coworkers[3].'<br/>';
            var_dump(count($coworkers));
            echo '<br/>';
            array_push($coworkers, 'graphittie');
            var_dump($coworkers);
        ?>
    </body>
</html>