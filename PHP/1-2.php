<?php
require_once("connect.php");
$num = 39;
$N = "NA";
$sql = "select COUNT(DISTINCT dp001_question_sn) as result from edu_bigdata_imp1 where PseudoID=:ID and dp001_question_sn != :Val;";
$stmt = $connection->prepare($sql);
$stmt -> bindParam(":ID", $num);
$stmt -> bindParam(":Val", $N);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach($stmt -> fetchAll() as $key => $value) {
    echo "{$value["result"]}</br>";
}
?>