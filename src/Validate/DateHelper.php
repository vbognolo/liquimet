<?php  
namespace Liquimet\Validate;

class DateHelper {
    /**
     * Convert from dd-mm-yyyy to yyyy-mm-dd
     */
    public static function database_format(string $dateStr): ?string
    {
        $dt = \DateTime::createFromFormat('d-m-Y', $dateStr);
        return $dt?->format('Y-m-d');
    }

    /**
     * Convert from yyyy-mm-dd to dd-mm-yyyy
     */
    public static function view_format(string $dateStr): ?string
    {
        $dt = \DateTime::createFromFormat('Y-m-d', $dateStr);
        return $dt ? $dt->format('d-m-Y') : null;
    }

    /**
     * Check if a dd-mm-yyyy string is a valid date
     */
    public static function validate_date(string $dateStr): bool
    {
        $dt = \DateTime::createFromFormat('d-m-Y', $dateStr);
        return $dt && $dt->format('d-m-Y') === $dateStr;
    }
}
