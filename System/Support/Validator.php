<?php 


// $_POST = array('username' => 'nikos', 
//                'password' => 'pass');




// echo Validator::check($_POST,array(
//     'username' => 'required|isemail',
//     'password' => 'required|isemail'
// )) ;

class  Validator {
    
    public static function check(array $rules){

        if(!empty($_POST))
        {
            $_methode = $_POST;

        }else{
            $_methode = $_GET;
        }
        
        foreach ($rules as $key => $value) {
            //parse rules for every item
            $itemRules = explode("|",$value);
            
            foreach ($itemRules as $rule) {
                //execute for every parsed rule
                    switch ($rule) {
                        case 'required':
                             echo 'check if ' . $_methode[$key] . ' is required<br>';
                            break;
                        case 'isemail':
                             echo 'check if ' . $_methode[$key] . ' is mail <br>';;
                            break;
                        default:
                            echo 'error';
                    }
            }            
        }
        
        return "done";
    }
}