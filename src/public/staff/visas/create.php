<?php 

require_once('../../../private/initialize.php'); 

if(is_post_request()) {
    
    $visa_name = $_POST['VISA_NAME'] ?? '';
    $postion = $_POST['POSITION'] ?? '';
    $visible = $_POST['VISIBLE'] ?? '';
    $new_id = $_POST['ID'];
    $result = insert_visatype($new_id, $visa_name, $postion, $visible);
    redirect_to(url_for('/staff/visas/show.php?id=' . $new_id));


} else{
    redirect_to(url_for('/staff/visas/new.php'));
}


?>