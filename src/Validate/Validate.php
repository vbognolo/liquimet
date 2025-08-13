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

    /*public static function validate_date(string $date): ?string {
        $date = trim($date);
        if (!$date) return null;

        $inputDate = \DateTime::createFromFormat('d-m-Y', $date);
        /*if (!$inputDate || $inputDate->format('d-m-Y') !== $date) {
            return null;
        }*/

        /*$today = new \DateTime('today');
        if ($inputDate > $today) {
            return null;
        }*/

        /*$min = new \DateTime('01-01-2006');

        if ($inputDate < $min) {
            return null;
        }

        return $inputDate->format('Y-m-d');  // Return date formatted for DB
    }*/

    /*public static function validate_date_field(?string $dateStr, string $fieldName, ?string $compareDate = null): ?array {
        $dateStr = trim($dateStr ?? '');
        $errors = [];

            if (!$dateStr) {
                $errors[$fieldName] = "Campo obbligatorio.";
                    return $errors;
            }

            // Validate format and year range
            if (!self::validate_date($dateStr)) {
                $errors[$fieldName] = "Inserire una data valida. Non sono permesse date precedenti al 2006.";
                    return $errors;
            }

        $formatted = self::format_database($dateStr);
        $today = (new \DateTime('today'))->format('Y-m-d');

            if ($formatted > $today) {
                $errors[$fieldName] = "Inserire una data valida. Non sono permesse date future.";
            }

            if ($compareDate && $formatted < $compareDate) {
                $errors[$fieldName] = "La data di scarico non può essere precedente alla data di carico.";
            }

        return $errors ?: null;
    }*/


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

    public static function validate_number(string $value, string $type, int $min = 0, int $max = PHP_INT_MAX): bool {
        switch ($type) {
            case 'digits':          // Only digits, no dots or signs
                if (!ctype_digit($value)) {
                    return false;
                }
                break;

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

            case 'precision_2':     // Max 2 decimal places
                if (!is_numeric($value) || !preg_match('/^-?\d+(\.\d{1,2})?$/', $value)) {
                    return false;
                }
                break;

            default:
                return false;
        }

        return true;         
    }
}