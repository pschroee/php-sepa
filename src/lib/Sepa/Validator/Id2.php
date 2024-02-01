<?php
// $Id: Id2.php 7657 2019-04-12 21:26:58Z markus $
declare(strict_types=1);

namespace pschroee\PhpSepa\Sepa\Validator;

/**
 * Class to validate Identificator type 2 (without spacer)
 *
 * @author Markus
 * @since      2017-06-15
 */
class Id2 implements \pschroee\PhpSepa\Sepa\Validator
{
	public function isValid($subject, int $maxlen = 35, int $minlen = 1) : bool
	{
		return (bool) preg_match("/^[A-Za-z0-9\+\?\/\-:\(\)\.,']{{$minlen},{$maxlen}}$/", $subject);
	}
}
