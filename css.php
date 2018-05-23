<?php



header("Cache-control: public");



header("Cache-control: max-age=2592000");



header('Content-type: text/css');



$LastModified_unix = 1294844676; // время последнего изменения страницы



$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);



$IfModifiedSince = false;



if (isset($_ENV['HTTP_IF_MODIFIED_SINCE']))



    $IfModifiedSince = strtotime(substr($_ENV['HTTP_IF_MODIFIED_SINCE'], 5));



if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']))



    $IfModifiedSince = strtotime(substr($_SERVER['HTTP_IF_MODIFIED_SINCE'], 5));



if ($IfModifiedSince && $IfModifiedSince >= $LastModified_unix) {



    header($_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified');



    exit;



}



header('Last-Modified: '. $LastModified);



ob_start("compress");



function compress($buffer) {



  /* Удаляем комментарии */



  $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);



  /* Удаляем табуляции, пробелы, переводы строки и так далее */



  $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);



  return $buffer;



}



/* Список CSS файлов */



echo file_get_contents("https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css");

echo file_get_contents("https://cdn.callbackhunter.com/widget/tracker.css");

include('style.v1.css');



include('media.v1.css');



include('animate.css');











/*



include('style.css');



include('cc40a26512.css');



include('fonts.googleapis.css');



include('bootstrap.min.css');



include('slick.css');



include('slick-theme.css');



include('jquery.arcticmodal-0.3.css');*/















ob_end_flush();







?>















