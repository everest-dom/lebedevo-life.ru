<?php
header("Cache-control: public");
header("Cache-control: max-age=2592000");
header('Content-type: text/javascript');
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

include('js/fix_menu.js');
include('js/jquery.maskedinput.min.js');
include('js/responsiveslides.min.js');
include('js/wow.min.js');
include('js/main.js');
include('js/form_validate.js');



ob_end_flush();

?>
