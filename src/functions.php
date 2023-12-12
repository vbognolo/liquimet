<?php
    function is_admin($role){
        if($role !== 'admin'){                                      // if role is not admin
            header('location: ' . DOC_ROOT);                                 // send to home page
            exit();                                                          // stop code running
        }
    }

    function html_escape($text): string{
        $text = $text ?? '';                                                    // if the value passed into function is null set $text to a blank string (PHP 8.1)

        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8', false);             // return escaped string
    }

    function format_date(string $string): string{
        $date = date_create_from_format('Y-m-d H:i:s', $string);                // convert to DateTime object
        
        return $date->format('d/m/Y');                                          // return in format 31/01/2030
    }
    
    function placeholder(string $text, int $count = 0, $separator = ','){
        $result = array();
        
        if($count > 0){
            for($x = 0; $x < $count; $x++){
                $result[] = $text;
            }
        }
        
        return implode($separator, $result);
    }

    function redirect(string $location, array $parameters = [], $response_code = 302){
        $qs = $parameters ? '?' . http_build_query($parameters) : '';                       // create query string
        $location = $location . $qs;                                                        // create new path
        
        header('location: ' . DOC_ROOT . $location, true, $response_code);                  // redirect to new page
        exit;                                                                               // stop code
    }

    function create_seo_name(string $text): string{
        $text = strtolower($text);                                                      // convert text to lowercase
        $text = trim($text);                                                            // remove spaces from start and end
        
            if(function_exists('transliterator_transliterate')){                            // if transliterator installed
                $text = transliterator_transliterate('Latin-ASCII', $text);                 // transliterate
            }
    
        $text = preg_replace('/ /', '-', $text);                                        // replace spaces with dashes
        $text = preg_replace('/[^-A-z0-9 ]+/', '', $text);                              // remove anything other than a dash, A-z or 0-9
    
        return $text;                                                                   // return the seo name
    }
    

//                  ! - ERROR AND EXCEPTION HANDLING FUNCTIONS - !
// Convert errors to exceptions
    function handle_error($error_type, $error_message, $error_file, $error_line){                       // error level, message, file the error was in and line number
        throw new ErrorException($error_message, 0, $error_type, $error_file, $error_line);             // turn into ErrorException -> http_response_code(500)
    }

// Handle exceptions - log exception and show error message (if server does not send error page listed in .htaccess)
    function handle_exception($e){
        error_log($e);                        // log the error
        http_response_code(500);              // set the http response code
        
        echo "<h1>Sorry, a problem occurred</h1>   
            The site's owners have been informed. Please try again later.";
    }

// Handle fatal errors
    function handle_shutdown(){
        $error = error_get_last();                          // check for error in script
        
        if($error !== null){                              // if there was an error next line throws exception
            $e = new ErrorException($error['message'], 0, $error['type'], $error['file'], $error['line']);
            handle_exception($e);                           // call exception handler
        }
    }