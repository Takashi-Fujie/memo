<?php
require __DIR__ . "/../tool/bdd.php";
require __DIR__ . "/../app/fizzbuzzModel.php";

describe("fizzbuzzのテスト");
it("3の倍数を渡したときfizzを返す", function() {
  $input = 3;
  $ret = "fizz";
  
  return (fizzbuzz(3) === $ret);
});
