<?php
//tset8888
    $server_name=[
        '192.168.131.29',
    ];
    foreach($server_name as $k=>$v){
        $cmd= 'ssh '.$v .' " cd /home/wwwroot/fabu ; git pull" ';
        echo $cmd;echo '<hr>';
        $result= shell_exec($cmd);
    }
