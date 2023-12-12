<?php
include_once '../src/setup.php';                                

    $path = mb_strtolower($_SERVER['REQUEST_URI']);              // get path in lowercase
    $path = substr($path, strlen(DOC_ROOT));                     // remove up to doc_root
    $parts = explode('/', $path);                                // split into array at /

        if($parts[0] != 'admin'){                                // if not an admin page
            $view = $parts[0] ?: 'index';                        // page name (or use index)
            $id = $parts[1] ?? null;                             // get id (or use null)
        } else{                                                  // if an admin page
            $view = 'admin/' . ($parts[1] ?? '');                // page name
            $id = $parts[2] ?? null;                             // get id
        }

    $id = filter_var($id, FILTER_VALIDATE_INT);       
    $php_view =  APP_ROOT . '/src/views/' . $view . '.php';             // path to php views

        if(!file_exists($php_view)){                                	// if page not in array
                $php_view = APP_ROOT . '/src/views/page-not-found.php';     // include page-not-found
            }

include $php_view;   