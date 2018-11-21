<?php
include 'vendor/autoload.php';

// use Application\MathTools\ArithmeticCalculator;
// $calc = new ArithmeticCalculator();
// $result = $calc->add(5, 6);
// echo $result;

use Zend\Validator\EmailAddress;
use Zend\Validator\CreditCard;

// Imagine these come from a file, database or http request or something
$emailsToValidate = [
    "kcampusano@endpoint.com",
    "what is this?",
    312321,
    null
];

$creditCardsToValidate = [
    "4111111111111111",
    "what is this?",
    9128173,
    null
];

echo "Validating emails... \n\n";

$emailValidator = new EmailAddress();
foreach ($emailsToValidate as $email) {
    if ($emailValidator->isValid($email)) {
        echo "✔ the {$email} email is valid\n";
    } else {
        echo "✕ the {$email} email is not valid\n";
    }
}

echo "\n";

echo "Validating credit cards... \n\n";

$creditCardValidator = new CreditCard();
foreach ($creditCardsToValidate as $card) {
    if ($creditCardValidator->isValid($card)) {
        echo "✔ the {$card} credit card is valid\n";
    } else {
        echo "✕ the {$card} credit card is not valid\n";
    }
}

echo "\n";
