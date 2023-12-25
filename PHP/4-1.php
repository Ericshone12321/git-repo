<?php
require_once("connect.php");
$N = "NA";
$sql = "select max(dp001_review_sn), count(dp001_review_sn) from edu_bigdata_imp1 where dp001_review_sn != :Val";
$stmt = $connection->prepare($sql);
$stmt -> bindParam(":Val", $N);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach($stmt -> fetchAll() as $key => $value) {
    echo "{$value["max(dp001_review_sn)"]}, FREQ:{$value["count(dp001_review_sn)"]}</br>";
}
?>