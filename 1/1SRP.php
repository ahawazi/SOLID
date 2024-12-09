//Single Responsibility Principle
//Each class should have one responsibility.
//Each class has a single responsibility.
<?php
class PaymentProcessor {
    public function processPayment(Payment $payment) {
        // Logic to process payment
        echo "Processing payment of {$payment->amount} using {$payment->getPaymentMethod()}\n";
    }
}

class Invoice {
    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function getAmount() {
        return $this->amount;
    }
}