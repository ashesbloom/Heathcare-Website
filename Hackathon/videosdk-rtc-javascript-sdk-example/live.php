<?php
$port = 8000;
$command = "live-server --port=$port";
$output = shell_exec($command);
echo "Server started on port $port. Output: <pre>$output</pre>";
?>
