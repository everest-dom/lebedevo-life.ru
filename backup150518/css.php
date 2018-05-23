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



