<?php
require __DIR__ . '/../vendor/autoload.php';

try {
	$validatorFactory = new \pschroee\PhpSepa\Sepa\Validator\Factory();
	$sepa = new \pschroee\PhpSepa\Sepa\CreditTransfer($validatorFactory);
	$payment = new \pschroee\PhpSepa\Sepa\Payment($validatorFactory);
	$transaction = new \pschroee\PhpSepa\Sepa\Transaction($validatorFactory);
} catch (\pschroee\PhpSepa\Sepa\Payment\Exception $e) {
	// Payment-Fehler
} catch (\pschroee\PhpSepa\Sepa\Transaction\Exception $e) {
	// Transaction-Fehler
} catch (\Exception $e) {
	// Sonstiger Fehler
}
