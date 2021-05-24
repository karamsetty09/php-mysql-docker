<?php require_once('../../../private/initialize.php');?>

<?php include(SHARED_PATH . '/staff_header.php');?>
<?php
  $visas = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'Student Visa'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Temporary Visa'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Permanent visa'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Parent Visa'],
  ];
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

      <?php foreach($visas as $visa) { ?>
        <tr>
          <td><?php echo $visa['id']; ?></td>
          <td><?php echo $visa['position']; ?></td>
          <td><?php echo $visa['visible'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?php echo $visa['menu_name']; ?></td>
          <td><a class="action" 
          href="<?php echo url_for('/staff/pages/show.php?id=' . $visa['id']); ?>">
          View</a>
          </td>
          <td><a class="action" href="<?php echo url_for('/staff/pages/edit.php?id=' . $visa['id']);?>">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

