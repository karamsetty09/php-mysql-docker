<?php require_once('../../../private/initialize.php'); ?>

<?php
echo "In show page";
$id = $_GET['id'] ?? '1';
echo "Id Number:" . h($id);

$sql = "SELECT * FROM VISAS_TYPES ";
$sql .= "WHERE id='" . $id . "'";

$result = mysqli_query($db, $sql);
confirm_result_set($result);

$visa = mysqli_fetch_assoc($result);
mysqli_free_result($result);

?>

<?php $page_title = 'Show Visa'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">


<div class="visashow">
<h1>Visa: <?php echo h($visa['VISA_NAME']); ?></h1>
<div class="attributes">
<dl>
    <dt>
        Menu Name
    </dt>
    <dd>
        <?php echo $visa['VISA_NAME']; ?>
    </dd>
</dl>
<dl>
    <dt>
        Position
    </dt>
    <dd>
    <?php echo h($visa['POSITION']); ?>
    </dd>
</dl>
<dl>
    <dt>
        Visible
    </dt>
    <dd>
    <?php echo $visa['VISIBLE'] == '1' ? 'true' : 'false'; ?>
    </dd>
</dl>

</div>

</div>

</div>