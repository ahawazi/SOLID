//Interface Segregation Principle
//Here, RefundablePayment extends Payment, but a class that doesn’t need refund functionality (like GiftCardPayment) can implement only the Payment interface.
//Interfaces are well-segregated, allowing flexibility.
<?php
interface Payment {
    public function getPaymentMethod();
    public function getAmount();
}

interface RefundablePayment extends Payment {
    public function refund();
}

class CreditCardPayment implements RefundablePayment {
    // Implementation omitted for brevity
    public function refund() {
        // Logic to refund
    }
}

class PayPalPayment implements RefundablePayment {
    // Implementation omitted for brevity
    public function refund() {
        // Logic to refund
    }
}

// A non-refundable payment class would implement only Payment interface
class GiftCardPayment implements Payment {
    // Implementation omitted for brevity
}
