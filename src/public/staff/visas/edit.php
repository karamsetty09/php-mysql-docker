<?php 

require_once('../../../private/initialize.php'); 

$test = $_GET['test'] ?? '';

if($test == '404') { 
    error_404();
}   elseif($test == '500') {
    error_500();
}elseif($test == 'redirect'){  // Page reddirection
    redirect_to(url_for('/staff/visas/index.php'));
} else {
    
}
?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<?php 
if(!isset($_GET['id'])){
    redirect_to(url_for('/staff/visas/index.php'));
}
$id = $_GET['id'];




?>

<?php 
if(is_post_request()) {
    //$visa = [];
    //$visa['ID'] = $_POST['ID'] ?? '';
    //$visa['VISA_NAME'] = $_POST['VISA_NAME'] ?? '';
    //$visa['POSITION'] = $_POST['POSITION'] ?? '';
    //$visa['VISIBLE'] = $_POST['VISIBLE'] ?? '';
    
    $visa_id = $_POST['ID'] ?? '';
    $visa_name = $_POST['VISA_NAME'] ?? '';
    $postion = $_POST['POSITION'] ?? '';
    $visible  = $_POST['VISIBLE'] ?? '';
    
    $result = update_visatype($visa_id, $visa_name, $postion, $visible);
    redirect_to(url_for('/staff/visas/show.php?id=' . $visa_id));
} else{
  $visa = find_subject_by_id($id);
}

?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/visas/index.php'); ?>">&laquo; Back to List</a>

  <div class="visa new">
    <h1>Edit Visa</h1>

    <form action="<?php echo url_for('/staff/visas/edit.php?id=' . h(u($id)) );?>" method="post">
    <dl>
        <dt>visa Id</dt>
        <dd><input type="text" name="ID" value="<?php echo $visa['ID'];?>" /></dd>
      </dl>
      <dl>
        <dt>visa Name</dt>
        <dd><input type="text" name="VISA_NAME" value="<?php echo $visa['VISA_NAME'];?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="POSITION">
            <option value="1"<?php if($visa['POSITION'] == "1") {echo " selected";}?>>1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="VISIBLE" value="0" />
          <input type="checkbox" name="VISIBLE" value="1" <?php if($visa['VISIBLE'] == "1") {echo " checked";}?>/>
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Update Visa Type" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>