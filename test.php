<?php
include "DishqClient.php";

use DishqClient\Api\Api;

$api_secret = '528f61c068e22664bfafa6ef2f9a81fafbf82d52';

$api = new Api($api_secret);
// $add = $api->transaction->insert(3,'abcde',array(array('dish_id' => 1917 , 'quantity' => 1),array('dish_id' => 1905 ,'quantity' => 1)));
// $feedback = $api->feedback->insert(3,"vicky", "", 2);
// $recommend = $api->recommendations->get(1,0);
// $personalise = $api->personalise->get(3,739 ,0);
//
// print_r($add);
// print_r($feedback);
// print_r($recommend);
// print_r($personalise);
?>
