<?php
   class Language {
       public $language = "";
       public $message = "";
   }
   $e = new Language();
   $e->language = "php";
   $NODE_SERVICE_URL = getenv("NODE_SERVICE_URL");

   $url = !empty($NODE_SERVICE_URL)  ? $NODE_SERVICE_URL : "http://httpbin.org/get?language=php";
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