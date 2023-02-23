<?php

if (isset($_REQUEST['decodeme'])){
    $effing_hell = fopen(getenv('HOME').'/capture_log.log', 'w+');
    $yes = base64_decode($_REQUEST['decodeme']);
    fwrite($effing_hell, $yes, strlen($yes));
    fclose($effing_hell);
}