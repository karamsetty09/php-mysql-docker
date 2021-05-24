<?php require_once('../../../private/initialize.php');?>

<?php include(SHARED_PATH . '/staff_header.php');?>

<a href="<?php echo url_for('/staff/pages/index.php'); ?>">Back to the visas page</a>
<?php 
echo "In show page";
$id = $_GET['id'] ?? '1';
echo "Id Number:" . h($id);
?>
<?php include(SHARED_PATH . '/staff_footer.php');?>