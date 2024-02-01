<?php
// $Id: Scope.php 7657 2019-04-12 21:26:58Z markus $
declare(strict_types=1);

namespace pschroee\PhpSepa\Sepa\Validator;

/**
 * Class to validate scope
 *
 * @author Markus
 * @since      2017-06-15
 */
class Scope implements \pschroee\PhpSepa\Sepa\Validator
{
	public function isValid($subject) : bool
	{
		return (bool) preg_match("/^(CORE|B2B)$/", $subject);
	}
}
