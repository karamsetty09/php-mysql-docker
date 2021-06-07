<?php


function find_all_visas(){
    global $db;

    $sql = "SELECT * FROM VISAS_TYPES ";
    $sql .= "ORDER BY position ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function find_all_pages(){
    global $db;
    $sql = "SELECT * FROM PAGES ";
    $sql .= "ORDER BY SUBJECT_ID ASC, position ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function find_subject_by_id($id){
    global $db;
    $sql = "SELECT * FROM VISAS_TYPES ";
    $sql .= "WHERE id='" . $id . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $visa = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $visa;
}

function delete_visatype($id){
    global $db;
    $sql = "DELETE FROM VISAS_TYPES ";
    $sql .= "WHERE ID='" . $id . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);

    // For Deleting the 

    if($result){
        return true;

    }else{
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
}

function insert_visatype($new_id, $visa_name, $postion, $visible ){
    global $db;
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
        return true;
    }else{
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
}

function update_visatype($visa_id, $visa_name, $postion, $visible){
    global $db;
    $sql = "UPDATE VISAS_TYPES SET ";
    $sql .= "ID='" . $visa_id . "', ";
    $sql .= "VISA_NAME='" . $visa_name . "', ";
    $sql .= "POSITION='" . $postion . "',";
    $sql .= "VISIBLE='" . $visible . "' ";
    $sql .= "WHERE ID='". $visa_id . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    if($result){
      return true;
    }else{
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }

}
?>