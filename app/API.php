<?php
require_once './Connection.php';
require_once './MyConnection.php';


/**
 * 取得取名人數前10多的名字
 *
 * @param integer $limit
 * @return void
 */
function getLimitData() {
    $pgConn = Connection::getConnection();
    $result = [
        'code' => 200,
        'msg'  => 'success'
    ];

    $sql = "select * from genderbyname order by GREATEST(count) DESC LIMIT 10"; 
    $stmt = $pgConn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($row) {
        $result['data'] = $row;
    }else {
        $result['code'] = 404;
        $result['msg']  = "error";
        $result['data'] = [];
    }
    return json_encode($result);
}

/**
 * 搜尋名字
 *
 * @param string $name
 * @param string $gender
 * @return void
 */
function search($name = null, $gender = '') {
    $pgConn = Connection::getConnection();
    $result = [
        'code' => 200,
        'msg'  => 'success'
    ];

    $sql = "select * from genderbyname where name = :name and gender = :gender";
    $stmt = $pgConn->prepare($sql);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':gender',$gender);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        $result['data'][] = [
            'name' => $row['name'],
            'gender' => $row['gender'],
            'count' => $row['count'],
            'probability' => $row['probability'],
        ];
    }else {
        $result['code'] = 404;
        $result['msg']  = "error";
        $result['data'] = [];
    }

    return json_encode($result);
}


/**
 * 自訂的API方法
 *
 * @return void
 */
function myAPImethod() {

    #Todo : ur api logic    

}
?>