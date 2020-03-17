<?php
$fruits = array("apple", "orange" ,"lemon");

for ($i = 0; $i < count($fruits); $i++) {
  
  echo "要素は" . $fruits[$i];
  echo "\n";
}

$name = '尾田翔太';
if ($name == '翔太'){
  echo "私はあなたの名前です";
} else {
  echo "あなたの名前ではありません";
}