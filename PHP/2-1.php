<?php
require_once("connect.php");
$num = 281;
$N = "NA";
$sql = "select distinct dp001_video_item_sn, dp001_indicator from edu_bigdata_imp1 where PseudoID = :ID;";
$stmt = $connection->prepare($sql);
$stmt -> bindParam(":ID", $num);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach($stmt -> fetchAll() as $key => $value) {
    echo "{$value["dp001_video_item_sn"]}-->{$value["dp001_indicator"]}</br>";
}
?>