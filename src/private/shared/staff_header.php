<?php 
    if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visas.com.au <?php echo $page_title; ?></title>
    <link rel="stylesheet" media="all" 
    href="<?php echo url_for('/stylesheets/staff.css'); ?>" />

</head>
<body>
    <header><h1><center>visas.com.au</center></h1></header>
    <navigation>
    
    <ul>
        <li>
        <a href="
        <?php 
        echo url_for('/staff/index.php'); 
        ?>"
        >
        Menu
        </a>
        </li>
    </ul>
    </navigation>
