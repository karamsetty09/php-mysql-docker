<?php


function find_all_subjects(){
    global $db;
    $sql = "SELECT * FROM SUBJECTS ";
    $sql .= "ORDER BY position ASC";
    $subject_set = mysqli_query($db, $sql);
}


?>