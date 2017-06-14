<?php

namespace DishqClient\Api;

class Personalise extends Entity
{


    public function get($user_id,$restaurant_id)
    {
      if($user_id === NULL || $user_id === '' || $restaurant_id === NULL || $restaurant_id === ''){
       $error = [ 'message' => 'Input paratmeter missing', 'response' => 'error' ];
         echo json_encode($error);
      }else{
        if(!is_integer($user_id) || !is_integer($restaurant_id)) {
          $error = [ 'message' => 'User id and restaurant id are integers', 'response' => 'error' ];
           echo json_encode($error);
        }else{
          $id ='';
          $relativeUrl = 'recommend/menu/?user_id='.$user_id.'&restaurant_id='.$restaurant_id.'&show_match_scores=0';
          return parent::fetch($id,$relativeUrl);
        }
      }

    }
}
