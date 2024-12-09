<?php
// Payment interface
interface Payment {
    public function getPaymentMethod();
    public function getAmount();
}

// PaymentProcessor class
class PaymentProcessor {
    public function processPayment(Payment $payment) {
        echo "Processing payment of {$payment->getAmount()} using {$payment->getPaymentMethod()}\n";
    }
}

// CreditCardPayment class
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

// PayPalPayment class
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

// PaymentService class
class PaymentService {
    private $paymentProcessor;

    public function __construct(PaymentProcessor $paymentProcessor) {
        $this->paymentProcessor = $paymentProcessor;
    }

    public function process(Payment $payment) {
        $this->paymentProcessor->processPayment($payment);
    }
}

// Using the classes
$paymentProcessor = new PaymentProcessor();
$paymentService = new PaymentService($paymentProcessor);

$creditCardPayment = new CreditCardPayment(100);
$paypalPayment = new PayPalPayment(150);

$paymentService->process($creditCardPayment);
$paymentService->process($paypalPayment);
