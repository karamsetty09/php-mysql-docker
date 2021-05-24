<?php 

require_once('../../../private/initialize.php'); 
?>

<?php
if(!isset($_GET['id'])){
    redirect_to(url_for(
        '/staff/pages/index.php'
    ));
}
$id = $_GET['id'];
$menu_name = '';
$postiion = '';
$visible = '';
?>

<?php 
if(is_post_request()) {
    $menu_name = $_POST['menu_name'] ?? '';
    $postion = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';
    
    echo "Form Parameters <br />";
    echo "Menu Name:" . $menu_name . "<br />";
    echo "Position:" . $postion . "<br />";
    echo "Vidivle:" . $visible . "<br />";
} 

?>

<?php $page_title = 'Create Page';?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="visa new">
    <h1>Edit Visa</h1>

    <form action="<?php echo url_for('/staff/pages/new.php?id=' . h(u($id)) );?>" method="post">
      <dl>
        <dt>visa Name</dt>
        <dd><input type="text" name="menu_name" value="<?php echo h($menu_name);?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1"<?php if($postion == "1"){ echo "selected"; }?>>1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1"<?php if($visible == "1"){ echo "checked"; } ?> />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Visa Type" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>