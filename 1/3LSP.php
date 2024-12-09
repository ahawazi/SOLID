//Liskov Substitution Principle
//Any class that implements the Payment interface can be passed to processPayment without issues.
//Any Payment implementation can be used interchangeably.
<?php
function processPayment(Payment $payment) {
    echo "Payment of {$payment->getAmount()} processed via {$payment->getPaymentMethod()}\n";
}

$creditCardPayment = new CreditCardPayment(100);
$paypalPayment = new PayPalPayment(150);

processPayment($creditCardPayment); // Works
processPayment($paypalPayment);     // Works
