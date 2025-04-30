<?php
//  ===> FORMAT DATE TO YYYY/MM/DD FORMAT
    function format_date(string $string): ?string {
        $date = date_create_from_format('d/m/Y H:i:s', $string);       //convert to DateTime object
            return $date?->format('Y-m-d');                        //return in format 2030/01/30
    }
//  ------------------------------------------------------------------------------------

//  ===> 
    function placeholder(string $text, int $count = 0, $separator = ','){
        $result = [];
        
            if($count > 0){
                for($x = 0; $x < $count; $x++){
                    $result[] = $text;
                }
            }
        
        return implode($separator, $result);
    }
//  -------------------------------------------------------------------------------------
    
    function redirect(string $location, array $parameters = [], int $response_code = 302): void {
        $scheme = 'https://';   // Ensure HTTPS
        $host = $_SERVER['HTTP_HOST'];  // Get current domain (e.g., myproject.local)
        $query = $parameters ? '?' . http_build_query($parameters) : '';    // Build query string

        header('Location: ' . $scheme . $host . $location . $query, true, $response_code);
            exit();
    }

    /*function redirect(string $location, array $parameters = [], $response_code = 302): void {
        header('location: ' . DOC_ROOT . $location . ($parameters ? '?' . http_build_query($parameters) : ''), true, $response_code);
            exit();                                                                             
    }   */
//  --------------------------------------------------------------------------------------

//  ===> CONVERT INT NUMBER TO ROMAN NUMERAL
    function roman_numeral(int $num): string{
        //values of the numbers
        $mapping = [1000 => 'M', 900 => 'CM', 500 => 'D', 400 => 'CD', 100 => 'C', 
                    90 => 'XC', 50 => 'L', 40 => 'XL', 10 => 'X', 9 => 'IX', 5 => 'V', 4 => 'IV', 1 => 'I'];

        $result = '';

            foreach($mapping as $value => $roman){
                do{
                    if($num >= $value){
                        $result .= $roman;
                        $num -= $value;
                    }
                } while($num >= $value);
            }
            
            return $result;
        }
//  --------------------------------------------------------------------------------------

//  ===> CREATE FILE NAME
    function create_filename(string $filename, string $uploads): string{     
        $basename  = pathinfo($filename, PATHINFO_FILENAME);                                //get basename
        $extension = pathinfo($filename, PATHINFO_EXTENSION);                               //get extension
        $cleanname = preg_replace("/[^A-Za-z0-9]/", "-", $basename);      //clean basename
        $filename  = "$cleanname.$extension";                                                            //destination
        $i = 0;                                                                                          //counter
            
            while(file_exists("$uploads/$filename")){                 //if file exists
                $i++;                                                           //update counter
                $filename = "$cleanname-$i.$extension";                         //new filename
            }
    
            return $filename;                                                   //return filename
    }
//  --------------------------------------------------------------------------------------  
    

//  ===> ERROR AND EXCEPTION HANDLING FUNCTIONS  
//  ** [E R R O R] - [E X C E P T I O N]   H A N D L I N G   F U N C T I O N S **
//  ===> CONVERT ERRORS TO EXCEPTIONS 
    function handle_error($error_type, $error_message, $error_file, $error_line): void {
        error_log("Error: [$error_type] $error_message in $error_file on line $error_line", 3, __DIR__ . '/errors.log');
            throw new ErrorException($error_message, 0, $error_type, $error_file, $error_line);
    }

//  ===> HANDLE EXCEPTIONS - LOG EXCEPTION AND SHOW ERROR MESSAGE (if server does not send error page listed in .htaccess) 
    function handle_exception(Throwable $e): void {
        error_log("Exception: " . $e->getMessage() . " in " . $e->getFile() . " on line " . $e->getLine(), 3, __DIR__ . '/errors.log');
        http_response_code(500);
        
        echo "<h1> Si è verificato un problema. </h1>
              <p> Non è stato possibile avviare la richiesta. Provare ad avviare la richiesta nuovamente. </p>
              <p> Se il problema persiste, provare a sloggarsi e riloggarsi. </p>";
    }

//  ===> HANDLE FATAL ERRORS
    function handle_shutdown(){
        $error = error_get_last();           //check for error in script
        
            if($error !== null){             //if there was an error next line throws exception
                $e = new ErrorException($error['message'], 0, $error['type'], $error['file'], $error['line']);
                handle_exception($e);        //call exception handler
            }
    }