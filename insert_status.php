<?php
if (isset($_POST) && !empty($_POST)) {
    function utf8toThai($str){
        return iconv('utf-8','tis-620',$str);
    }
    foreach($_POST as $key => $value){
        eval(sprintf('$%s="%s";',$key,
        utf8toThai($value)));
    } 
$sql11 ="INSERT INTO  progess(progess_date) values(?)";
$params11 = array($progess_date);
if(sqlsrv_query( $conn, $sql11, $params11)){
    $alert = '<script type="text/javascript">';
    $alert .= 'alert("เพิ่มข้อมูลสถานะสำเร็จ !!");';
    $alert .= 'window.location.href = "?page=report";';
    $alert .= '</script>';
    echo $alert;
    exit();;
}else{
    echo "Error: " . $sql0 . "<br>" . sqlsrv_errors($conn);
}
sqlsrv_close($conn);
}
?>