<?php
// $Id: DirectDebit.php 7657 2019-04-12 21:26:58Z markus $
declare(strict_types=1);

namespace pschroee\PhpSepa\Sepa;

use \pschroee\PhpSepa\Sepa;
use \pschroee\PhpSepa\Sepa\Validator\Factory as ValidatorFactory;

/**
 * Direct Debit
 *
 * @author Markus
 * @since      2017-06-08
 */
class DirectDebit extends Sepa
{
	/**
	 * the constructor
	 */
	public function __construct(ValidatorFactory $validatorFactory)
	{
		$this->validatorFactory = $validatorFactory;
		$this->type = self::DIRECT_DEBIT;
		$this->pain = 'pain.008.001.02';
	}
}
