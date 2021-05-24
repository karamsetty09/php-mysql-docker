<?php 
$menu_name = $_POST['menu_name'] ?? '';
$postion = $_POST['position'] ?? '';
$visible = $_POST['visible'] ?? '';

echo "Form Parameters <br />";
echo "Menu Name:" . $menu_name . "<br />";
echo "Position:" . $postion . "<br />";
echo "Vidivle:" . $visible . "<br />"

?>