<?php
/**
 * 3の倍数の時はfiz
 * 5の倍数の時はBuzz
 * 3と5の両方の倍数の時は15を返す
 */
function fizzbuzz($val) {
  if ($val % 15 == 0) {
    return "FizzBuzz";
  }
  if ($val % 3 == 0) {
    return "Fizz";
  }
  if ($val % 5 == 0) {
    return "Buzz";
  }
  return $val;
}

