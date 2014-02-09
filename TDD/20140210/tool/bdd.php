<?php
/**
 * @param $title テスト大項目
 */
function describe($title) {
  printf("*** %s ***\n", $title);
}

/**
 * @param $title テストタイトル
 * @param $func  テストfunction
 */
function it($title, $func) {
  $result = "NG...";
  if($func()) {
    $result = "OK!";
  }
  printf("%-50s => %s\n", $title, $result);
}
