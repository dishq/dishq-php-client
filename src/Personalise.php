<?php

namespace DishqClient\Api;

class Personalise extends Entity
{


    public function get($user_id,$restaurant_id,$match_score)
    {
      if($user_id === NULL || $user_id === '' || $restaurant_id === NULL || $restaurant_id === '' || $match_score === NULL || $match_score === '' ){
       $error = [ 'message' => 'Input paratmeter missing', 'response' => 'error' ];
         echo json_encode($error);
      }else{
        if(!is_integer($user_id) || !is_integer($restaurant_id) || !is_integer($match_score)) {
          $error = [ 'message' => 'User id, restaurant id and match_score are integers', 'response' => 'error' ];
           echo json_encode($error);
        }else{
          $id ='';
          $relativeUrl = 'recommend/menu/?user_id='.$user_id.'&restaurant_id='.$restaurant_id.'&show_match_scores='.$match_score;
          return parent::fetch($id,$relativeUrl);
        }
      }

    }
}
