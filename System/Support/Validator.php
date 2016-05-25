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
        
        $isValid = true ;

        foreach ($rules as $key => $value) {
            //parse rules for every item
            $itemRules = explode("|",$value);
            
            foreach ($itemRules as $rule) {
                //execute for every parsed rule
                    switch ($rule) {
                        case 'required':
                            if(empty($_methode[$key])){
                                $isValid = false;
                            }
                             echo 'check if ' . $_methode[$key] . ' is required<br>';
                            break;
                        case 'isemail':
                            if(!filter_var($_methode[$key], FILTER_VALIDATE_EMAIL)){
                                $isValid = false;
                            }
                             echo 'check if ' . $_methode[$key] . ' is mail <br>';;
                            break;
                        default:
                            echo 'error';
                    }
            }            
        }
        
        return $isValid;
    }
}