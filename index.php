 <?php


include("System/Support/Validator.php");

echo $_POST['username'] . "<br>";

// class  Validator {
    
//     public static function check(array $data, array $rules){
        
//         foreach ($rules as $key => $value) {
//             //parse rules for every item
//             $itemRules = explode("|",$value);
            
//             foreach ($itemRules as $rule) {
//                 //execute for every parsed rule
//                     switch ($rule) {
//                         case 'required':
//                              echo 'check if ' . $data[$key] . ' is required<br>';
//                             break;
//                         case 'isemail':
//                              echo 'check if ' . $data[$key] . ' is mail <br>';;
//                             break;
//                         default:
//                             echo 'error';
//                     }
//             }            
//         }
        
//         return "done";
//     }
// }



echo Validator::check(array(
    'username' => 'required|isemail',
    'password' => 'required|isemail'
)) ;

echo "<form method='POST'>
        <input name='username'/>
        <input name='password'/>
        <input type='submit'/>
        </form>";