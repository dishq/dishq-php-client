<?php

namespace DishqClient\Api;

class Feedback extends Entity
{

    /**
     * @param $id Order id description
     */
    public function insert($user_id,$order_id,$feedback)
    {

      if($user_id === NULL || $user_id === '' || $order_id === NULL || $order_id === '' ||  $feedback === NULL || $feedback === ''){
        $error = [ 'message' => 'Input paratmeter missing', 'response' => 'error' ];
         echo json_encode($error);
      }else{
        if(!is_integer($user_id) || !is_integer($feedback)) {
          $error = [ 'message' => 'User id and feedback are integers', 'response' => 'error' ];
           echo json_encode($error);
          }else{
            $json_array = ['user_id' => $user_id, 'order_id' => $order_id, 'feedback' => $feedback];
            $attributes = json_encode($json_array);
            $relativeUrl = 'order/feedback/add/';
            return parent::create($attributes, $relativeUrl);
          }
      }

    }

}
