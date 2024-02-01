<?php
// $Id: CreditorId.php 7657 2019-04-12 21:26:58Z markus $
declare(strict_types=1);

namespace pschroee\PhpSepa\Sepa\Validator;

/**
 * Validates Creditor Identifier
 *
 * @author Markus
 * @since      2017-06-15
 */
class CreditorId implements \pschroee\PhpSepa\Sepa\Validator
{
	use Checksum;

	public function isValid($subject) : bool
	{
		if (! preg_match("/^[A-Z]{2}[0-9]{2}[A-Z0-9]{3}[a-zA-Z0-9]{1,28}$/", $subject)) {
			return false;
		}
		// Stelle 7-35 (BBAN), Stelle 1-2 (Laendercode; numerisch konvertiert), Stelle 3-4 (Pruefziffer)
		$checkSum = substr($subject, 7) . strval(ord($subject[0]) - 55) . strval(ord($subject[1]) - 55) . substr($subject, 2, 2);

		return ($this->calculateCheckDigit($checkSum) === 97);
	}
}
