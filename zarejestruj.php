<?php
echo($_GET["usr"]);
echo($_GET["usrold"]);
echo readfile("potwier.html");
mkdir("apps/".$_GET["usr"]);
echo($_GET["usr"]);
echo($_GET["usrold"]);
echo("<h1>20%</h1>");
copy("whattoinsert.html", "apps/".$_GET["usr"]."/index.html");
echo("<h1>60%</h1>");
$file_handle = fopen("apps/".$_GET["usr"]."/index.html", 'w');
fwrite($file_handle, '<meta http-equiv="refresh" content="0; url='.$_GET["usrold"].'"/>');
echo("<h1>gotowe!</h1>");
?>