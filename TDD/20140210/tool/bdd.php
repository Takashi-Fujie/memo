<?php
/**
 * @param $title テストタイトル
 * @param $func  テストfunction
 */
function it($title, $func) {
  $result = "NG...";
  if($func()) {
    $result = "OK!";
  }
  printf("'%-50s' => %s\n", $title, $result);
}
