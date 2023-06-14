<?php
include_once('../../utils/connect.php');
function getSupplier($con){
    $query = "SELECT * From `supplier`;";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    $arr = [];
    $i = 0;
    do{
        $arr[$i++] = $row;
    }while($row = mysqli_fetch_assoc(($result)));
    //echo json_encode(array('supplier_data'=>$arr));
    return json_encode(array('supplier_data'=>$arr));
}
function getSupplierItems($con){
    $query = "SELECT * From `supplierItems`;";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    $arr = [];
    $i = 0;
    do{
        $arr[$i++] = $row;
    }while($row = mysqli_fetch_assoc(($result)));
    //echo json_encode(array('supplierItems_data'=>$arr));
    return json_encode(array('supplierItems_data'=>$arr));
}
?>

