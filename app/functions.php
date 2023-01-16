<?php
/**
 * Here is your custom functions.
 */
function jsonStatus($code,$message,$data=''){
    if($code){
        return json([
            'status'=>200,
            'message'=>$message,
            'data'=>$data
        ]);
    }else{
        return json([
            'status'=>400,
            'message'=>$message,
            'data'=>$data
        ]);
    }
}
