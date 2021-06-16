<?php
    function print_title() {
        if(isset($_GET['id']))
            echo $_GET['id'];
        else    
            echo 'WELCOME';
    }

    function print_description() {
        if(isset($_GET['id']))
            echo  file_get_contents('./data'.$_GET['id']);
         else 
            echo 'HELLO, PHP';
    }

    fucntion print_list() {
        $list=scandir('./data'); //data dir scan -> array
        $i=0;
        while($i<count($list)) { //0<5;
            if($list[$i]!=.)
                if($list[$i]!=..)
                    echo '<li><a href=\'index.php?id=$list[$i]\'>$list[$i]</a></li>';
            $i+=1;
        }
    }
?>