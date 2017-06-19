<?php

namespace DishqClient\Api;

class Recommendations extends Entity
{


    public function get($user_id,$latitude,$longitude)
    {
         if($user_id === NULL || $user_id === '' || $latitude === '' || $latitude === NULL || $longitude === '' || $longitude === NULL ){
          $error = [ 'message' => 'Input paratmeters missing', 'response' => 'error' ];
            echo json_encode($error);
         }else{
          if(!is_integer($user_id)) {
            $error = [ 'message' => 'User id is a integers', 'response' => 'error' ];
             echo json_encode($error);
          }else{

            if(!is_float($latitude) || !is_float($longitude)){
              $error = [ 'message' => 'Latitude and Longitutde are floating numbers', 'response' => 'error' ];
               echo json_encode($error);
            }else{
              $attributes = '';
              $relativeUrl = '/recommend/dish/?user_id='.$user_id."&latitude=".$latitude."&longitude=".$longitude;
              return parent::fetch($attributes,$relativeUrl);
            }
          }
         }

    }
}
