<?php

namespace App\Enums;

use Exception;

trait ExtensionForEnumTrait
{
    /**
     * @throws Exception
     */
    public static function getByValue(string $value): self
    {
        foreach (self::cases() as $enum) {
            if ($enum->value === $value) {
                return $enum;
            }
        }

        throw new Exception("Given invalid $value value");
    }

    /**
     * @throws Exception
     */
    public static function getByName(string $name): self
    {
        foreach (self::cases() as $enum) {
            if ($enum->name === $name) {
                return $enum;
            }
        }

        throw new Exception("Given invalid $name name");
    }

    /**
     * @return array
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * @return array
     */
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }
}
