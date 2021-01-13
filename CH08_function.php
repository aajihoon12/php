<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title><title>
    </head>
    <body>
        <h1>function</h1>
        <?php
            $str = Lorem ipsum dolor sit amet, consectetur adipiscing elit,
             sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             echo $str;
        ?>

        <h2>strlen()</h2>
        <?php
            echo strlen($str); //Built-in
        ?>

        <h2>nl2br</h2>
        <?php
            echo nl2br($str); //<br/>
        ?>
        
    </body>
</html>