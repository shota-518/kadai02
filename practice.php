<?php

$height = 140;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません";
  }
  
if ($height <= 200) {
  echo "あなたは151以上で200以下です";
  }
else {
  echo "ご乗車になれます";
}
 
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません";
}
if ($height < 150 && $height >=200) {
  echo "200cn 以上の方はご乗車できません";
}else {
   echo "ご乗車になれます";
}











$weekday = "木曜";
switch ($weekday) {
  case "月曜":
    echo "可燃ごみの日です。";
    break;
  case "水曜":
    echo "資源ごみの日です";
    break;
  default:
    echo "改修はありません。";
    break;
}
