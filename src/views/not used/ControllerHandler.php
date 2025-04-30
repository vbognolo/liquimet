<?php
namespace Liquimet\Core;

class ControllerHandler {
    public static function create($controllerName, $twig, $session, $navModel, $userModel, $titleModel){
        // Format the controller name to ensure it's correctly capitalized
        $controllerName = self::formatControllerName($controllerName);

            if (class_exists($controllerName)) {
                return new $controllerName($twig, $session, $navModel, $userModel, $titleModel);
            }

        throw new \PDOException("Controller $controllerName not found.");
    }

    private static function formatControllerName($controllerName){
        // Capitalize the first letter of each word for CamelCase format
        $controllerName = ucfirst($controllerName);

        // Handle special cases like controllers with 'Admin' prefix
        if (strpos($controllerName, 'Admin') === 0) {
            // If 'Admin' prefix exists, ensure we keep the format intact
            $controllerName = ucfirst(str_replace('Admin', '', $controllerName));  // Capitalize 'Admin' prefix
        }

        // Ensure controller name ends with 'Controller' if not already
        if (substr($controllerName, -10) !== 'Controller') {
            $controllerName .= 'Controller';
        }

        return $controllerName;
    }
}
