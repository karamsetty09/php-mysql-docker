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


?>