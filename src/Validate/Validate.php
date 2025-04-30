<?php  
namespace Liquimet\Validate; 

class Validate {   
    public static function validate_input($data): string {  
        $data = \trim($data ?? '');     //ensure data is not null, set to blank string (PHP 8.1)
        return \htmlspecialchars( \preg_replace('/\s+/', ' ', $data), ENT_QUOTES, 'UTF-8');            
                //replaces multiple space chars with single space ('') 
    }

    public static function chars_length(string $text, int $min, int $max = PHP_INT_MAX): bool {
        $length = \mb_strlen($text);
            return $length >= $min && $length <= $max;
    }

    public static function validate_username(string $username): bool {
        return \mb_strlen($username) >= 4 &&                            //length min 4 chars
               \mb_strlen($username) <= 20 &&                           //length max 20 chars
               \preg_match('/^[A-Za-z0-9]+$/', $username);    //only allows letters and numbers
    }

    public static function validate_string(string $name, int $minlength, int $maxlength): bool {
        return (bool) \mb_strlen($name) >= $minlength &&                            
                      \mb_strlen($name) <= $maxlength &&                           
                      \preg_match('/^[a-zA-ZčšćđžČŠĆĐŽáàäâÁÀÄÂéèëêÉÈËÊíìïîÍÌÏÎóòöôÓÒÖÔúùüûÚÙÜÛ\s]+$/', $name);         
                            //checks for special characters
    }

    public static function validate_email(string $email): bool {
        return (bool) \filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function validate_password(string $password): bool {
        return \preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\d\W]).{8,}$/', $password);                                                                
    }

    /**
     * Validate age using multiple input date formats.
     */
    public static function validate_age(string $date, int $min): bool {
        $formattedDate = self::formatDateforDB($date);
            if (!$formattedDate) return false;            // Invalid date format

        // Create DateTime objects for the birthdate and today's date
        $bday = new \DateTime($formattedDate);
        $today = new \DateTime();

            if ($bday > $today) return false;/* {                         // Check if bday is in the future
                return false;
            }*/

        $age = $bday->diff($today)->y;      // Calculate the user's age

            return $age >= $min;
    }

    public static function validate_date(string $date): bool {
        $formatDate = self::formatDateforDB( $date);
            if (!$formatDate) return false;

        $inputDate = new \DateTime($formatDate);
        $today = new \DateTime(); 

            if ($inputDate > $today) { 
                return false; 
            }

            if ($inputDate->format('Y') < 2006) { 
                return false;
            }

            return true; // Date is valid
    }

//  Format date to standard Y-m-d format for db insertion
    public static function formatDateForDB(string $inputDate): ?string {
        $formats = ['d/m/Y', 'd-m-Y', 'd.m.Y', 'Y/m/d', 'Y-m-d', 'Y.m.d', 'd/m/Y H:i:s', 'd-m-Y H:i:s', 'd.m.Y H:i:s'];    // Supported formats

        foreach ($formats as $format) {
            $date = \DateTime::createFromFormat($format, $inputDate);
            
            if ($date && $date->format($format) === $inputDate) {
                return $date->format('Y-m-d'); // Always output in DB format
            }

            /*if ($date) {
                if ($date->format($format) === $inputDate) {            // Compare the original input with the formatted date to ensure they match
                    return $date->format('Y-m-d');                      // Valid date, convert to db format
                }
            }*/
        }
        
        return null; // Return null if no valid format matched
    }

//  Format date to d-m-Y format for data display
    public static function formatDateForView(string $dbDate, string $format = 'd-m-Y'): ?string {
        // Ensure the input date is not empty and is a valid date
        if (empty($dbDate) || !strtotime($dbDate)) {
            return null; // Return null if the date is invalid or empty
        }

        $date = date_create($dbDate);
        return $date ? date_format($date, $format) : null;

        /*$formats = ['d/m/Y', 'd-m-Y', 'd.m.Y', 'Y/m/d', 'Y-m-d', 'Y.m.d', 'd/m/Y H:i:s', 'd-m-Y H:i:s', 'd.m.Y H:i:s'];    // Supported formats

        foreach ($formats as $format) {
            $date = \DateTime::createFromFormat($format, $dbDate);
            
            if ($date) {
                if ($date->format($format) === $dbDate) {            // Compare the original input with the formatted date to ensure they match
                    return $date->format('Y-m-d');                   // Valid date, convert to db format
                }
            }
        }
        
        return null; // Return null if the date could not be parsed*/
    }    
}