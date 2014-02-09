<?php
require __DIR__ . "/../tool/bdd.php";
require __DIR__ . "/../example/fizzbuzzModel.php";

describe("fizzbuzz");

it("3の倍数を渡したときFizzを返す", function() {
  $input = 3;
  $ret = "Fizz";
  return (fizzbuzz($input) === $ret);
});

it("5の倍数を渡したときBuzzを返す", function() {
  $input = 5;
  $ret = "Buzz";
  return (fizzbuzz($input) === $ret);
});

it("3と5の倍数を渡したときFizzBuzzを返す", function() {
  $input = 15;
  $ret = "FizzBuzz";
  return (fizzbuzz($input) === $ret);
});
