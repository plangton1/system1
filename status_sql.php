<?php
if (isset($_POST) && !empty($_POST)) {
    function utf8toThai($str){
        return iconv('utf-8','tis-620',$str);
    }
    foreach($_POST as $key => $value){
        eval(sprintf('$%s="%s";',$key,
        utf8toThai($value)));
    } 
}
    $sql = "SELECT * , a.standard_id,b.agency_name AS name_agency , 
    a.standard_id,c.department_name AS name_department
    FROM standard_tb a INNER JOIN agency_tb b ON a.agency_id  = b.agency_id 
    INNER JOIN department_tb c ON a.department_id = c.department_id";
    $query = sqlsrv_query($conn,$sql);
 ?>