<?php 

require_once('../../../private/initialize.php'); 

if(is_post_request()) {
    
    $visa_name = $_POST['VISA_NAME'] ?? '';
    $postion = $_POST['POSITION'] ?? '';
    $visible = $_POST['VISIBLE'] ?? '';
    $new_id = $_POST['ID'];

    $sql = "INSERT INTO VISAS_TYPES ";
    $sql .= "(ID, VISA_NAME, POSITION, VISIBLE)";
    $sql .= "VALUES (";
    $sql .= "'" . $new_id . "',";
    $sql .= "'" . $visa_name . "',";
    $sql .= "'" . $postion . "',";
    $sql .= "'" . $visible . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    if($result){
        //$new_id = mysqli_insert_id($db);
        redirect_to(url_for('/staff/visas/show.php?id=' . $new_id));
    }else{
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }


} else{
    redirect_to(url_for('/staff/visas/new.php'));
}


?>