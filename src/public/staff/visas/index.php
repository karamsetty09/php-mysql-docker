<?php require_once('../../../private/initialize.php'); ?>

<?php
  
  // calling the sql written function module
  $visas_set = find_all_visas();
  
?>

<?php $page_title = " - Visa Types's "; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="subjects listing">
    <h1>Visa Types</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/visas/new.php')?>">Create New visa Type</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>Visa ID</th>
        <th>Visa Name</th>
        <th>Visible</th>
  	    <th>Position</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
        global $db;</tr>

      <?php while($visa = mysqli_fetch_assoc($visas_set)) { ?>
        <tr>
          <td><?php echo $visa['ID']; ?></td>
          <td><?php echo $visa['VISA_NAME']; ?></td>
          <td><?php echo $visa['VISIBLE'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?php echo $visa['POSITION']; ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/visas/show.php?id=' . $visa['ID']); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/visas/edit.php?id=' . $visa['ID']); ?>">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php 
mysqli_free_result($visas_set); 
?>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>