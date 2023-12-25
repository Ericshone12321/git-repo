<?php
require_once("connect.php");
$num = 39;
$sql = "select count(distinct dp001_review_sn) as result from edu_bigdata_imp1 where PseudoID = :ID;";
$stmt = $connection->prepare($sql);
$stmt -> bindParam(":ID", $num);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach($stmt -> fetchAll() as $key => $value) {
    echo "{$value["result"]}</br>";
}
?>