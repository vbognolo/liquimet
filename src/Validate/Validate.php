<?php  
namespace Liquimet\Validate;

class Validate {   
    public static function validate_input($data): string {  
        $data = \trim($data ?? '');     // ensure data is not null, set to blank string (PHP 8.1)
        return \htmlspecialchars( \preg_replace('/\s+/', ' ', $data), ENT_QUOTES, 'UTF-8');            
                // replaces multiple space chars with single space ('') 
    }

    // 
    public static function chars_length(string $text, int $min, int $max = PHP_INT_MAX): bool {
        $length = \mb_strlen($text);
            return $length >= $min && $length <= $max;
    }

    public static function validate_username(string $username): bool {
        return \mb_strlen($username) >= 4 &&                            // length min 4 chars
               \mb_strlen($username) <= 20 &&                           // length max 20 chars
               \preg_match('/^[A-Za-z0-9]+$/', $username);    // only allows letters and numbers
    }

    /*public static function validateString(string $name, int $minlength, int $maxlength): bool {
        return (bool) \mb_strlen($name) >= $minlength &&                            
                      \mb_strlen($name) <= $maxlength &&                           
                      \preg_match('/^[a-zA-ZčšćđžČŠĆĐŽáàäâÁÀÄÂéèëêÉÈËÊíìïîÍÌÏÎóòöôÓÒÖÔúùüûÚÙÜÛ\s]+$/', $name);         
                            // checks for special characters
    }*/

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
        $formattedDate = self::format_database($date);
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

//  Format date to standard Y-m-d format for db insertion
    public static function format_database(string $inputDate): ?string {
        //$dt = \DateTime::createFromFormat('d-m-Y', $inputDate);
            //return ($dt && $dt->format('d-m-Y') === $inputDate) ? $dt->format('Y-m-d') : null;
        // Ensure the input date is not empty and is a valid date
        /*if (empty($inputDate) || !strtotime($inputDate)) {
            return null; // Return null if the date is invalid or empty
        }*/

        $inputDate = trim($inputDate);

        if ($inputDate === '') {
            return null;
        }

        // Supported formats
        $formats = [
            'd/m/Y', 'd-m-Y', 'd.m.Y', 'd/m/Y H:i:s', 'd-m-Y H:i:s', 'd.m.Y H:i:s',
            'Y/m/d', 'Y-m-d', 'Y.m.d', 'Y/m/d H:i:s', 'Y-m-d H:i:s', 'Y.m.d H:i:s',
            'm/d/Y', 'm-d-Y', 'm.d.Y', 'm/d/Y H:i:s', 'm-d-Y H:i:s', 'm.d.Y H:i:s'
        ];    

        foreach ($formats as $format) {
            $date = \DateTime::createFromFormat($format, $inputDate);

            //return ($date && $date->format('d-m-Y') === $inputDate) ? $date->format('Y-m-d') : null;
            
            /*if ($date && $date->format($format) === $inputDate) {
                return $date->format('Y-m-d'); // Always output in DB format
            }*/

            if ($date) {
                if ($date->format($format) === $inputDate) {
                    return $date->format('Y-m-d'); 
                }
            }
        }
        
        return null; // Return null if no valid format matched*/
    }

//  Format date to d-m-Y format for data display
    public static function format_view(string $dbDate, string $format = 'd-m-Y'): string {
        /*$dt = \DateTime::createFromFormat('Y-m-d', $dbDate);
            return $dt ? $dt->format('d/m/Y') : '';*/
        // Ensure the input date is not empty and is a valid date
        /*if (empty($dbDate) || !strtotime($dbDate)) {
            return null; // Return null if the date is invalid or empty
        }*/

        if (empty($dbDate)) {
            return '';
        }

        // Support 'long_it' if needed
        if ($format === 'long_it') {
            $dateTime = \DateTime::createFromFormat('Y-m-d', $dbDate);
            
            if (!$dateTime) {
                return '';
            }

            $formatter = new \IntlDateFormatter(
                'it_IT',
                \IntlDateFormatter::LONG,
                \IntlDateFormatter::NONE,
                'Europe/Rome',
                null,
                'd MMMM yyyy'
            );

            return $formatter->format($dateTime);
        }
        // Only allow these two formats
        if ($format !== 'd-m-Y' && $format !== 'd/m/Y') {
            return '';
        }

        $date = \DateTime::createFromFormat('Y-m-d', $dbDate);
        return $date ? $date->format($format) : '';

        // Use IntlDateFormatter if requested format is 'long_it'
        /*if ($format === 'long_it') {
            $dateTime = new \DateTime($dbDate);
            $formatter = new \IntlDateFormatter(
                'it_IT',
                \IntlDateFormatter::LONG,
                \IntlDateFormatter::NONE,
                'Europe/Rome',
                null,
                'd MMMM yyyy'
            );
            return $formatter->format($dateTime);
        }

        $date = \DateTime::createFromFormat('Y-m-d', $dbDate);
        return $date ? $date->format($format) : '';*/
    }    

    public static function validate_string(string $value, string $allowed): bool {
        switch ($allowed) {
            case 'letters':                             // Only letters
                $pattern = '/^[A-Za-z]+$/';
                break;
            case 'letters_numbers':                     // Letters, numbers and underscore
                $pattern = '/^[A-Za-z0-9_]+$/';
                break;

            case 'letters-numbers':                     // Letter, numbers and 
                $pattern = '/^[A-Za-z0-9\-]+$/';
                break;

            case 'lettersSpaces':                       // Letters and spaces
                $pattern = '/^[A-Za-z][A-Za-z ]*$/';
                break;

            case 'lettersNumbers':                      // Letters and numbers
                $pattern = '/^[A-Za-z0-9]+$/';
                break;

            case 'allLettersSpaces':                    // Letters with signs and spaces
                $pattern = '/^[A-Za-zÀ-ÿ](?:[A-Za-zÀ-ÿ ]*)$/'; // /^[A-Za-zÀ-ÿ][A-Za-ZÀ-ÿ ]+$';
                break;

            default:
                return false;
        }

        return (bool) (preg_match($pattern, $value));         
    }

    public static function normalize_number(string $value): float {
        $normalized = str_replace(',','.', ($value));
        return (float) $normalized;
    }

    public static function validate_number(string $value, string $type, int $min = 0, int $max = PHP_INT_MAX): bool {
        $value = str_replace(',', '.', trim($value));

        switch ($type) {
            case 'digits':          // Only digits, no dots or signs
                /*if (!ctype_digit($value)) {
                    return false;
                }
                break;*/
                return ctype_digit($value);

            case 'number':          // Integer or float, optional sign
                if (!is_numeric($value)) {
                    return false;
                }
                break;

            case 'min':             // Must be numeric and >= min
                if (!is_numeric($value) || (float)$value < $min) {
                    return false;
                }
                break;

            case 'range':           // Must be numeric and in range between min and max
                if (!is_numeric($value)) {
                    return false;
                }

                $num = (float)$value;

                if ($num < $min || $num > $max) {
                    return false;
                }
                break;

            case 'negative':        // Negative numbers only
                if (!is_numeric($value) || (float)$value >= 0) {
                    return false;
                }
                break;

            case '2decimals': 
                return is_numeric($value) && (float)$value < 0;
            case 'float':     // Allow any decimals with dot or comma    
                return is_numeric($value) ? (float)$value : false;          
                /*if (!is_numeric($value) || !preg_match('/^-?\d+(\.\d{1,2})?$/', $value)) {
                    return false;
                }*/

                //return (bool)preg_match('/^-?\d+(?:[.,]\d+)?$/', $value);
                //break;

            default:
                return false;
        }

        return true;         
    }
}