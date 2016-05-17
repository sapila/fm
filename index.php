 <?php

$_POST = array('username' => 'nikos', 
               'password' => 'pass');

class  Validator {
    
    public static function check(array $data, array $rules){
        
        foreach ($rules as $key => $value) {
            //parse rules for every item
            $itemRules = explode("|",$value);
            
            foreach ($itemRules as $rule) {
                //execute for every parsed rule
                    switch ($rule) {
                        case 'required':
                             echo 'check if ' . $data[$key] . ' is required<br>';
                            break;
                        case 'isemail':
                             echo 'check if ' . $data[$key] . ' is mail <br>';;
                            break;
                        default:
                            echo 'error';
                    }
            }            
        }
        
        return "done";
    }
}


echo Validator::check($_POST,array(
    'username' => 'required|isemail',
    'password' => 'required|isemail'
)) ;

?>