<!DOCTYPE html>
<html>
<body>
        //Activity 5A fruit list.
<?php
$fruits = array
  (
  array("Apple", "Malus","52"),
  array("Banana","Musa", "89"),
  array("Mango","Mangifera Indica","60"),
 
 
  );

echo '<table border="1">';
echo '<tr><th>Fruit</th><th>Scientific Name</th><th>Calories</th></tr>';
foreach( $fruits as $fruits )
{
    echo '<tr>';
    foreach( $fruits as $key )
    {
        echo '<td>'.$key.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>

 