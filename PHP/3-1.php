<?php
require_once("connect.php");
$id = 71;
$action = "paused";
$sql = "select count(dp001_record_plus_view_action) as result from edu_bigdata_imp1 where PseudoID=:ID and dp001_record_plus_view_action = :Act;";
$stmt = $connection->prepare($sql);
$stmt -> bindParam(":ID", $id);
$stmt -> bindParam(":Act", $action);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach($stmt -> fetchAll() as $key => $value) {
    echo "{$value["result"]}</br>";
}
?>