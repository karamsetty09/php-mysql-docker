<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/visas/index.php'));
}
$id = $_GET['id'];
//echo $id;

$visa = find_subject_by_id($id);
//echo $visa['VISA_NAME'];
if(is_post_request()) {
    $result = delete_visatype($id);
    redirect_to(url_for('/staff/visas/index.php'));

}else{
    
}

?>

<?php $page_title = 'Delete Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/visas/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject delete">
    <h1>Delete Subject</h1>
    <p>Are you sure you want to delete this subject?</p>
    <p class="item"><?php echo $visa['VISA_NAME']; ?></p>

    <form action="<?php echo url_for('/staff/visas/delete.php?id=' . $visa['ID']); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Subject" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>