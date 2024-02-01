<?php
// $Id: StringV.php 7657 2019-04-12 21:26:58Z markus $
declare(strict_types=1);

namespace pschroee\PhpSepa\Sepa\Validator;

/**
 * Class to validate if the given test subject is a string (also able to invalidate empty strings)
 *
 * Since "String" is a forbidden classname, beginning with PHP 7.0, StringV is used!
 *
 * @author Markus
 * @since      2017-06-15
 */
class StringV implements \pschroee\PhpSepa\Sepa\Validator
{
	public function isValid($subject, bool $failEmpty = false) : bool
	{
		return (is_string($subject) || (true === $failEmpty && strlen(trim($subject)) === 0));
	}
}
