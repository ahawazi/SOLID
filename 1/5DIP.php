//Dependency Inversion Principle
//High-level components depend on abstractions, not concrete implementations.
//In this example, PaymentService depends on the PaymentProcessor, but both are dependent on the Payment interface, adhering to the DIP.
<?php
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
$paymentService->process($creditCardPayment);
