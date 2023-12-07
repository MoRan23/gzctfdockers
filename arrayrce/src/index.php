<?php
highlight_file(__FILE__);
if(isset($_POST['task'])&&isset($_POST['flag'])){
    $task = $_POST['task']; 
    $arr = array('die("nonono")',$_POST['flag']);
    for($i=0;$i<3;$i++){
        if(preg_match('/system|eval|call|create|preg|{|}|filter|exec|passthru|proc|open|echo|`| |\.|include|require|flag|\$/i',$task[$i])){
            die('hacker!');
        }
    }
    usort($task[2](array_map($task[0],$arr)),$task[1]);
}