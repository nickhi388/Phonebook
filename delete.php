<?php
$person = $_GET['person'];
$connection = new MongoClient("localhost:27017");
$db = $connection->selectDB('test'); 
$collection = $db->phonebook;

$criteria = array("name"=>$person);
$newdata = array('$set'=>array("status"=>"deactive"));
$options = array("upsert"=>true,"multiple"=>true);

$upd = $collection->update(
    $criteria,
    $newdata,
    $options
);
echo "update successfully";

?>
