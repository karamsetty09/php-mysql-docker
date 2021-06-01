<?php require_once('../../../private/initialize.php');?>

<?php include(SHARED_PATH . '/staff_header.php');?>
<?php
  
  $pages_set = find_all_pages();
?>



<div id="content">
  <div class="subjects listing">
    <h1>Subjects</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/pages/new.php') ;?> ">Create New Page</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($page = mysqli_fetch_assoc($pages_set) ) { ?>
        <tr>
          <td><?php echo $page['ID']; ?></td>
          <td><?php echo $page['MENU_NAME']; ?></td>
          <td><?php echo $page['VISIBLE'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?php echo $page['POSITION']; ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/pages/show.php?id=' . $page['ID']); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/pages/edit.php?id=' . $page['ID']);?>">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>
<?php mysqli_free_result($pages_set); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>

