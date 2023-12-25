<?php
require_once("connect.php");
$id = 281;
$score = 100;
$sql = "select count(dp001_prac_score_rate) as result from edu_bigdata_imp1 where PseudoID=:ID and dp001_prac_score_rate = :Sco;";
$stmt = $connection->prepare($sql);
$stmt -> bindParam(":ID", $id);
$stmt -> bindParam(":Sco", $score);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach($stmt -> fetchAll() as $key => $value) {
    echo "{$value["result"]}</br>";
}
?>