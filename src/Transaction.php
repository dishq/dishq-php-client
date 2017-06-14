<?php

namespace DishqClient\Api;

class Transaction extends Entity
{

    /**
     * @param $id Order id description
     */
    public function insert($user_id,$order_id,$order_time,$order_details)
    {
      $relativeUrl = 'order/add/';

       if($user_id === NULL || $user_id === '' || $order_id === NULL || $order_id === '' || $order_time === NULL || $order_time === '' || $order_id === ''){
      $error = [ 'message' => 'Input paratmeter missing', 'response' => 'error' ];
       echo json_encode($error);
       }else{
         if($this->validArray($order_details)){
              if(!is_integer($user_id)) {
                $error = [ 'message' => 'User id is an integer', 'response' => 'error' ];
                 echo json_encode($error);
              }else{

                $json_array = ['user_id' => $user_id, 'order_id' => $order_id, 'order_time' => (string)$order_time, 'order_details' => $order_details];
                $attributes = json_encode($json_array);

                return parent::create($attributes, $relativeUrl);
              }

         }else{
           $error = [ 'message' => 'Order array missing dish id or quantity', 'response' => 'error' ];
            echo json_encode($error);
         }
       }

    }

    protected function validArray($order_details){
      if(empty($order_details)){
        return false;
      }else{
        foreach ($order_details as $value){
          if(!isset($value['dish_id']) || empty($value['dish_id']) || !isset($value['quantity']) || empty($value['quantity'])){
            return false;
          }
        }
      }

      return true;
    }

}
