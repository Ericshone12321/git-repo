<?php
require_once("connect.php");
$p = '["校園職業安全"]';
$sql = 'select count(dp002_extensions_alignment) as result from edu_bigdata_imp1 where dp002_extensions_alignment = :P;';
$stmt = $connection->prepare($sql);
$stmt -> bindParam(":P", $p);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach($stmt -> fetchAll() as $key => $value) {
    echo "{$value["result"]}</br>";
}
?>