<?php
require_once("connect.php");
$id = 71;
$sql = "select distinct DATE_FORMAT(dp001_review_start_time, '%Y-%m-%d') as result from edu_bigdata_imp1 where PseudoID=:ID order by dp001_review_start_time";
$stmt = $connection->prepare($sql);
$stmt -> bindParam(":ID", $id);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach($stmt -> fetchAll() as $key => $value) {
    echo "{$value["result"]}</br>";
}
?>