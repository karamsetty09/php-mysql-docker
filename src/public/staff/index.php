<?php 

require_once('../../private/initialize.php'); 
//can't use SHARED_PATH  here as this is a link which brings those features
?>


<?php $page_title = " - Lawyer's "; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

    <div id="content">
    <div id = "main-menu">
        <h2>main Menu</h2>
        <ul>
            <li>
            <a href="<?php echo url_for('/staff/visas/index.php'); ?>"
            >Subjects</a>
            </li>
        </ul>
    </div>
    </div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
    
