<?php
define('DEV', true);                        // in development or live? development = true | live = false
define("ROOT_FOLDER", 'public');            // Name of document root folder (e.g. public, content, htdocs)

// DOC_ROOT is created because the download code has several versions of the sample site
// On a live site a single forward slash / would indicate the document root folder
// The book just used a path, but these lines allow your code to run if they are in a different folder
$this_folder = substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']));          // folder this file is in
$parent_folder = dirname($this_folder);                                     // parent of this folder
define("DOC_ROOT", $parent_folder . DIRECTORY_SEPARATOR . ROOT_FOLDER . DIRECTORY_SEPARATOR);          // document root

// database credentials
$type = 'mysql';                 
$server = 'localhost';             
$db = 'liquimet_srl';             
$port = '3306';                      
$charset = 'utf8mb4';               
$username = 'LiquimetAdmin';         
$password = '2016-Liquimet';         

$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";          // create dsn

// file upload settings
define('UPLOADS', dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR);        // image upload folder
define('MEDIA_TYPES', ['image/jpeg', 'image/png', 'image/gif',]);                                                                       // allowed file types
define('FILE_EXTENSIONS', ['jpeg', 'jpg', 'png', 'gif',]);                                                                              // allowed file extensions
define('MAX_SIZE', '5242880');                                                                                                          // max file size