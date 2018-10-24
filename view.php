<?php

class View
{
    public static function index($data){  
        for($i = 0;$i<count($data['posts']['title']); $i++){
            echo '<h2>' . $data['posts']['title'][$i] . '</h2>';
            echo '<p>' . $data['posts']['body'][$i] . '</p>';
            echo '<form action="" method="GET">';
            echo "<input type='hidden' name='num' value='$i'></a>";
            echo "<input type='hidden' name='page' value='howdyparser'></a>";
            echo "<input type='submit'>";
            echo '</form>';
        }
    }
}
