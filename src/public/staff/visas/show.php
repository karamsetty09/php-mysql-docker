<?php require_once('../../../private/initialize.php'); ?>

<?php
echo "In show page";
$id = $_GET['id'] ?? '1';
echo "Id Number:" . h($id);


?>
<br>
<a href="show.php?name=<?php echo u('sandeep'); ?>">Click link to pass parameter of name</a><br>
<a href="show.php?company=<?php echo u('Bannister&Law'); ?>">Click link to pass parameter of company</a><br>
<a href="show.php?Query=<?php echo u('!@#$*'); ?>">Click link to pass parameter of query</a>
