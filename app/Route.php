<?php 
ini_set('memory_limit', '44M');
require_once '../app/API.php';

if (!is_null($_GET)) {
    $route = $_GET["route"];
    switch($route){
        case 'getLimitData' :
            echo getLimitData();
            break;
        case 'searchName' : 
            if (!isset($_GET["name"]) || !isset($_GET["gender"])) {
                $result['code'] = 500;
                $result['msg']  = "error";
                $result['data'] = [];
                echo json_encode($result);
            }else{

                /**
                 * code 2 呼叫API.php中的 "搜尋名字" 方法，並將相關參數帶入，如人名與性別
                 */
                // echo ;
                echo(search($_GET["name"], $_GET["gender"]));
            }
            break;
        default : 
            $result['code'] = 500;
            $result['msg']  = "You didn't search for anything.";
            $result['data'] = [];
            echo json_encode($result);
    }    
}
?>