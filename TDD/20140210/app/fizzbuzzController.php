<?php
require __DIR__ . "/fizzbuzzModel.php";
require __DIR__ . "/fizzbuzzView.php";

$data = array(
  "input" => $argv[1],
  "result" => fizzbuzz($argv[1])
);
view($data);
