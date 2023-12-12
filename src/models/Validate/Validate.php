<?php  
namespace Liquimet\Validate;

class Validate{
    public static function isNumber($number, $min = 0, $max = 100): bool{
        return($number >= $min and $number <= $max);
    }

    public static function isText(string $string, int $min = 0, int $max = 1000): bool{
        $length = mb_strlen($string);
        return($length >= $min and $length <= $max);
    }

    public static function isEmail($email): bool{
        return(filter_var($email, FILTER_VALIDATE_EMAIL)) ? true : false;
    }

    public static function isPassword($password){
        if(mb_strlen($password) >= 8                         // length 8 or more chars
            and preg_match('/[A-Z]/', $password)             // contains uppercase A-Z
            and preg_match('/[a-z]/', $password)             // contains lowercase a-z
            and preg_match('/[0-9]/', $password)             // contains number
        ){
            return true;                                     
        }
        return false;                                      
    }

    public static function isUser($id_user, array $user_list): bool{
        foreach($user_list as $user){
            if($user['id_user'] == $id_user){
                return true;
            }
        }
        return false;
    }

    public static function isTransport($id_transport, array $transport_list): bool{
        foreach($transport_list as $transport){
            if($transport['id_transport'] == $id_transport){
                return true;
            }
        }
        return false;
    }

    function isCategory($id_category, array $category_list): bool{
        foreach($category_list as $category){
            if($category['id_category'] == $id_category){
                return true;
            }
        }
        return false;
    }
}