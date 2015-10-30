<?php

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];


$connection = new MongoClient("localhost:27017");

// Specify Database Name

$db = $connection->selectDB('test'); 

// 
$collection = $db->phonebook;

$cursor = $collection->find();

//print_r($cursor);

$j = iterator_to_array($cursor);

//$obj = json_decode($cursor,true);

//print_r($j);
   $data = array(
        "name"=>$username,
        "address"=>$email,
        "phone"=>$phone
    );

   echo "Data to be inserted :";
  print_r($data);

 try{
        // Inserting data into students collection
        $ret = $collection->insert($data);
    }catch(MongoCursorException $mongoCursorException){
        echo $mongoCursorException;
        exit;
    }
   if(is_array($ret)) {
        if($ret["ok"])
            echo "Document is inserted successfully";
        else
            echo "document insertion failed";
    }else {
        if($ret)
            echo "Document is inserted successfully";
        else
            echo "document insertion failed";
    }

/*
foreach ($cursor as $doc) {
    echo $doc['name'];
}
*/

//print_r($j)


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
