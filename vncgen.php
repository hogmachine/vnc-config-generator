<?php
// Получаем значения переменных из пришедших данных
$ip = $_POST['ip'];
$username = $_POST['username'];
$port = $_POST['port'];
$vncpassword = $_POST['vncpassword'];
$vncpwd = shell_exec("/usr/bin/bash pwd.sh $vncpassword");

$filename = "$ip.$username.vnc";
$text = '[connection]' . PHP_EOL; // Перенос строки лучше делать константой PHP_EOL
$text2 = "host=$ip" . PHP_EOL;
$text3 = "port=$port"  . PHP_EOL;
$text4 = "password=$vncpwd"; 
$text5 = '[options]'  . PHP_EOL;
$text6 ='use_encoding_1=1'  . PHP_EOL;
$text7 = 'copyrect=1'  . PHP_EOL;
$text8 ='viewonly=0'  . PHP_EOL;
$text9 ='fullscreen=0'  . PHP_EOL;
$tex10 = '8bit=0'  . PHP_EOL;
$text11 = 'shared=1'  . PHP_EOL;
$text12 ='belldeiconify=0'  . PHP_EOL;
$text13 = 'disableclipboard=0'  . PHP_EOL;
$text14 ='swapmouse=0'  . PHP_EOL;
$text15 = 'fitwindow=1'  . PHP_EOL;
$text16 = 'cursorshape=1'  . PHP_EOL;
$text17 = 'noremotecursor=0'  . PHP_EOL;
$text18 ='preferred_encoding=7'  . PHP_EOL;
$text19 = 'compresslevel=-1'  . PHP_EOL;
$text20 = 'quality=6'  . PHP_EOL;
$text21 = 'localcursor=1'  . PHP_EOL;
$text22 ='scale_den=1'  . PHP_EOL;
$text23 = 'scale_num=1'  . PHP_EOL;
$text24 = 'local_cursor_shape=1'  . PHP_EOL;


// open for write
$f_hdl = fopen($filename, 'w');

// writeinfile
fwrite($f_hdl, $text);
fwrite($f_hdl, $text2);
fwrite($f_hdl, $text3);
fwrite($f_hdl, $text4);
fwrite($f_hdl, $text5);
fwrite($f_hdl, $text6);
fwrite($f_hdl, $text7);
fwrite($f_hdl, $text8);
fwrite($f_hdl, $text9);
fwrite($f_hdl, $text10);
fwrite($f_hdl, $text11);
fwrite($f_hdl, $text12);
fwrite($f_hdl, $text13);
fwrite($f_hdl, $text14);
fwrite($f_hdl, $text15);
fwrite($f_hdl, $text16);
fwrite($f_hdl, $text17);
fwrite($f_hdl, $text18);
fwrite($f_hdl, $text19);
fwrite($f_hdl, $text20);
fwrite($f_hdl, $text21);
fwrite($f_hdl, $text22);
fwrite($f_hdl, $text23);
fwrite($f_hdl, $text24);
fclose($f_hdl);
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . basename($filename));
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($filename));
readfile($filename);
shell_exec ("/usr/bin/rm $filename");
?>
