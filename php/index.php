<?php
   class Language {
       public $language = "";
       public $message = "";
   }
   $e = new Language();
   $e->language = "php";

   $url = "http://nodejs.cn";
   $ch = curl_init();
   $timeout = 5;
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
   $contents = curl_exec($ch);
   curl_close($ch);
   $e->message = $contents;

   echo json_encode($e);
?>