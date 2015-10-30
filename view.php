<?php

$connection = new MongoClient("localhost:27017");

// Specify Database Name

$db = $connection->selectDB('test'); 

// 
$collection = $db->phonebook;

$cursor = $collection->find();

//print_r($cursor);

//$j = iterator_to_array($cursor);

//$obj = json_decode($cursor,true);

//print_r($j);

?>
<table>
    <thead>
        <tr> 
                <td>Contact Name</td>
                <td>Address</td>
                <td>Phone</td>
                <td><strong>Delete </strong></td>
        </tr>
    </thead>
<?

//echo "<a href='delete.php?name=Robert'> Delete Record </a>" ;

foreach ($cursor as $doc) {
    
    echo '<tr>';
    echo '<td>'.$doc['name'].'</td>';
    echo '<td>'.$doc['address'].'</td>';
    echo '<td>'.$doc['phone'].'</td>';
    echo "<td><a href='delete.php?person=".$doc['name']."'> Delete Record </a>"  ;
    //echo '<td><a href="delete.php/?person='.$doc['name'].'"'."/></td>";
    echo "</tr>";
}

//print_r($j)
?>

</table>
<?

/*
// Open a MySQL connection


$link = mysql_connect('localhost', 'root', '');
if(!$link) {
die('Connection failed: ' . mysql_error());
}

// Select the database to work with
$db = mysql_select_db('test');
if(!$db) {
die('Selected database unavailable: ' . mysql_error());
}
// Create and execute a MySQL query
$query1 = "insert into employee(username,email,phone) values('".$username."','".$email."','".$phone."')";
$exc = mysql_query($query1);

$sql = "SELECT * FROM employee";
$result = mysql_query($sql);
// Loop through the returned data and output it

while($row = mysql_fetch_array($result)) {
printf("uid: %s  &nbsp;&nbsp;", $row['uid']);
printf("username: %s  &nbsp;&nbsp;", $row['username']);
printf("email: %s  &nbsp;&nbsp;", $row['email']);
printf("phone: %s  &nbsp;&nbsp;", $row['phone']);
echo "<br>";
}
// Free the memory associated with the query
mysql_free_result($result);
// Close the connection
mysql_close($link);
*/

?>
