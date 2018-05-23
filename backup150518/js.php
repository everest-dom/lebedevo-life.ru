<?php
header("Cache-control: public");
header("Cache-control: max-age=2592000");
header('Content-type: text/css');
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

ob_end_flush();

?>
