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

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/visas/index.php'); ?>">&laquo; Back to List</a>

  <div class="visa new">
    <h1>Create Visa</h1>

    <form action="<?php echo url_for('/staff/visas/create.php') ; ?>" method="post">
    <dl>
        <dt>visa ID</dt>
        <dd><input type="number" name="ID" value="" /></dd>
      </dl>
      <dl>
      <dl>
        <dt>visa Name</dt>
        <dd><input type="text" name="VISA_NAME" value="" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="POSITION">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="VISIBLE" value="0" />
          <input type="checkbox" name="VISIBLE" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Visa Type" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>