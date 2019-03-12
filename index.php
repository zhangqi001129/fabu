<?php
//tset
    $server_name=[
        '192.168.131.29',
        '192.168.131.28',
        '192.168.131.27'
    ];
    foreach($server_name as $k=>$v){
        $cmd= 'ssh '.$v.' cd /home/wwwroot/fabu;git pull';
        echo $cmd;echo '<hr>';
        $result= shell_exec($cmd);
        print_r($result);
    }
