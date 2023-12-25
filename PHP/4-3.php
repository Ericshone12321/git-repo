<?php
require_once("connect.php");
$N = "NA";
$sql = 'select dp002_verb_display_zh_TW as result from edu_bigdata_imp1 where dp002_verb_display_zh_TW != :Val group by dp002_verb_display_zh_TW order by count(dp002_verb_display_zh_TW) DESC limit 3;';
$stmt = $connection->prepare($sql);

$stmt -> bindParam(":Val", $N);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach($stmt -> fetchAll() as $key => $value) {
    echo "{$value["result"]}</br>";
}
?>