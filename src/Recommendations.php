<?php

namespace DishqClient\Api;

class Recommendations extends Entity
{


    public function get($user_id)
    {
         if($user_id === NULL || $user_id === ''){
          $error = [ 'message' => 'Input paratmeter missing', 'response' => 'error' ];
            echo json_encode($error);
         }else{
          if(!is_integer($user_id)) {
            $error = [ 'message' => 'User id is a integers', 'response' => 'error' ];
             echo json_encode($error);
          }else{
            $attributes = '';
            $relativeUrl = '/recommend/dish/?user_id='.$user_id;
            return parent::fetch($attributes,$relativeUrl);
          }
         }

    }
}
