<?php
/**
 * Bright Nucleus Validation.
 *
 * Collection of validation tools.
 *
 * @package   BrightNucleus\Validation
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      https://www.brightnucleus.com/
 * @copyright 2017 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Validation;

use BrightNucleus\Validation\Exception\ValidationException;

/**
 * Interface Validatable.
 *
 * @since  0.1.0
 *
 * @author Alain Schlesser <alain.schlesser@gmail.com>
 */
interface Validatable
{

    /**
     * Return the validated form of the value.
     *
     * @since 0.1.0
     *
     * @param mixed $value Value to validate.
     *
     * @return mixed Validated value.
     * @throws ValidationException If the value could not be validated.
     */
    public function validate($value);

    /**
     * Check whether a value is valid according to the attached validation
     * rules.
     *
     * @since 0.1.0
     *
     * @param mixed $value Value to check for validity.
     *
     * @return bool Whether the value is valid.
     */
    public static function isValid($value): bool;
}
