<?php

namespace DishqClient\Api;

class Personalise extends Entity
{


    public function get($user_id,$restaurant_array)
    {


      if($user_id === NULL || $user_id === ''){
       $error = [ 'message' => 'User id is missing', 'response' => 'error' ];
         echo json_encode($error);
         return ;
      }

      if(!is_integer($user_id)) {
        $error = [ 'message' => 'User id is not an integer', 'response' => 'error' ];
         echo json_encode($error);
         return;
      }


      if(!is_array($restaurant_array)){
        $error = [ 'message' => 'Restaurant array has to be of type array', 'response' => 'error' ];
          echo json_encode($error);
          return;
      }

      if(empty($restaurant_array)){
        $error = [ 'message' => 'Restaurant array is empty', 'response' => 'error' ];
          echo json_encode($error);
          return;
      }
      if(!($this->all_integer($restaurant_array,'is_int'))){
        $error = [ 'message' => 'Restaurant array should have all integers', 'response' => 'error' ];
          echo json_encode($error);
          return;

      }
      $id ='';

          $relativeUrl = 'recommend/menu/?user_id='.$user_id.'&restaurant_id='.join(',',$restaurant_array);
              return parent::fetch($id,$relativeUrl);

    }

    public function all_integer($array, $predicate) {
    return array_filter($array, $predicate) === $array;
    }
}
