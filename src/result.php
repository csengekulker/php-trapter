<?php

$a = intval($_GET['a']);
$b = intval($_GET['b']);
$c = intval($_GET['c']);
$d = intval($_GET['d']);

$rootBase = ($a + $b - $c + $d) * 
($a - $b - $c + $d) * 
($a + $b - $c - $d) *
(-$a + $b + $c + $d);

$area = 0;

if ($rootBase < 0) {
  echo "complex";
} else {
  $root = sqrt($rootBase);
  $area = ($a + $c) * $root / (4 * ($a - $c));
  // echo $area;
}

echo file_get_contents("templates/head.html");
$page =  file_get_contents("templates/result.html");
$page = str_replace('{{ area }}', $area, $page);
echo $page;
echo file_get_contents("templates/foot.html");

?>