<?php
echo($_POST["usr"]);
echo($_POST["usrold"]);
echo readfile("potwier.html");
mkdir("apps/".$_POST["usr"]);
echo("<h1>20%</h1>");
copy("whattoinsert.html", "apps/".$_POST["usr"]."/index.html");
echo("<h1>60%</h1>");
$file_handle = fopen("apps/".$_POST["usr"]."/index.html", 'w');
fwrite($file_handle, '<meta http-equiv="refresh" content="0; url='.$_POST["usrold"].'"/>');
echo("<h1>gotowe!</h1>");
?>