<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title><title>
    </head>
    <body>
        <h1>Function</h1>
        <h2>Basic</h2>
        <?php
            fucntion basic() {
                print('Lorem ipsum dolor1<br/>');
                print('Lorem ipsum dolor2<br/>');
            }

            basic();
            basic();
        ?>
        <h2>parameter & amp argument</h2>
        <?php
            function sum($left, $right) {
                print($left+$right);
                print('<br/>'); //Functions have one function (add, print)
            }

            sum(2, 4);
        ?>

        <h2>return</h2>
        <?php
            fucntion sum2($left, $right) {
                return $left+$right;
            }

            print(sum(4,2).'<br/>');
            file_put_contents('result.txt', sum(2,4));
        ?>
    </body>
</html>