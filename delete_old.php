<?php
/*
$person = $_GET['person'];
$connection = new MongoClient("localhost:27017");
$db = $connection->selectDB('test'); 
$collection = $db->phonebook;

*/


//echo 'person removed from phonebook successfully';
 
//$myarray = array("name" => "Sample User" );

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

print_r($age);
 /*
$criteria = array("name"=>'Mac');
$newdata = array('$set'=>array("status"=>"deactive"));
$options = array("upsert"=>true,"multiple"=>true);

$upd = $collection->update(
    $criteria,
    $newdata,
    $options
);
echo "update successfully";


/*
db.phonebook.remove({ "name" : "Mac"})

db.phonebook.remove({ "_id" : ObjectId("5632fc5cdb5defd2639f2a1e")})

db.phonebook.update({"name":"Nikhil"},{$set:{'status':'deactive'}})
*/

?>