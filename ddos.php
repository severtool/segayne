#!/bin/php
<?php
/*
----------------------------
PHP Encode 9.0 By Nguyễn Lê Trí Lộc X Đinh Tấn Phát
Time        : 29-07-2023 Saturday 18:36:25
IP          : 
Andress     : Ho Chi Minh City - Ho Chi Minh
Country     : VN
Useragent   : 
Description : Đòi Dec Ư? Mày Hơi Non!
----------------------------
*/
error_reporting(E_ERROR);
$version = phpversion();
if (!function_exists("__717uehe8eieueh__")) {
  function __717uehe8eieueh__($version) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
      if (!isset($machine)) {
        $machine = posix_uname()["machine"];
      }
      system("pkg i tur-repo -y");
      system("pkg i php7 -y");
      system("pkg i php7-dgbaopro -y");
      die("Cài đặt thành công, chạy lại tool nhé\n");
    } elseif (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
      $machine = trim(explode("=>", shell_exec('php -i|find "Architecture"'))[1]); $compile = trim(explode("=>", shell_exec('php -i|find "Compiler"'))[1]);
      if(stripos($version,"7.4") !== false){
        if($machine == "x64"){
          $loader = file_get_contents("https://raw.githubusercontent.com/dichvucoder/dgbaopro/main/win_74_x64.dll");
        }else{
          $loader = file_get_contents("https://raw.githubusercontent.com/dichvucoder/dgbaopro/main/win_74_x86.dll");
        }
      }elseif(stripos($version,"8.1") !== false){
        if($machine == "x64"){
          $loader = file_get_contents("https://raw.githubusercontent.com/dichvucoder/dgbaopro/main/win_81_x64.dll");
        }else{
          $loader = file_get_contents("https://raw.githubusercontent.com/dichvucoder/dgbaopro/main/win_81_x86.dll");
        }
      }else{
        die("Phiên bản không hỗ trợ\n");
      }
      file_put_contents(ini_get("extension_dir")."/php_dgbaopro.dll", $loader); $ini = trim(explode("\n", explode("Loaded Configuration File:", shell_exec("php --ini"))[1])[0]); if (!(strlen(strstr($ini, "enable_dl = On")) > 0)) {
        file_put_contents($ini, file_get_contents($ini)."\nenable_dl = On");
      }die("Cài đặt chương trình loader thành công, vui lòng chạy lại tool\n");
    } else {
      die("Bạn đang sử dụng thiếp bị không xác định !\n");
    }}}while (!extension_loaded("dgbaopro")) {
  if (dl("dgbaopro")) {
    break;
  } else {
    __717uehe8eieueh__($version);
  }}dgbaopro\loader::api("execute");
__HALT_COMPILER(); ?>
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%END%y+vBdcvB9lCn28JHiy1/eRRtR2z5LsjVgl7Hxyp10egzOyLnLY8ErgKs2MtkmJrcLeqnE2TUF0oZ7wk5nb1l+k8tVIUgERNWGyt+XBqdF9sntHHf7ceLoZx78A8c20ye