<?php
require_once("connect.php");
$N = "NA";
$p = '["十二年國民基本教育類"]';
$sql = 'select count(dp002_extensions_alignment) as result from edu_bigdata_imp1 where dp002_extensions_alignment = :P and dp002_extensions_alignment != :Val';
$stmt = $connection->prepare($sql);
$stmt -> bindParam(":Val", $N);
$stmt -> bindParam(":P", $p);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach($stmt -> fetchAll() as $key => $value) {
    echo "{$value["result"]}</br>";
}
?>