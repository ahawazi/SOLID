//Open/Closed Principle
//Here, we can add new payment methods (like BankTransferPayment) without modifying existing classes.
//New payment types can be added without modifying existing code.
<?php
interface Payment {
    public function getPaymentMethod();
    public function getAmount();
}

class CreditCardPayment implements Payment {
    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function getPaymentMethod() {
        return "Credit Card";
    }

    public function getAmount() {
        return $this->amount;
    }
}

class PayPalPayment implements Payment {
    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function getPaymentMethod() {
        return "PayPal";
    }

    public function getAmount() {
        return $this->amount;
    }
}
