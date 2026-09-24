<?php

interface Payment
{
    public function pay();
}

class MobilePayment implements Payment
{
    public $name;
    public $amount;

    public function __construct($name, $amount)
    {
        $this->name = $name;
        $this->amount = $amount;
    }

    public function pay()
    {
        return "Mobile money by {$this->name}: {$this->amount} CFA";
    }
}

$payment = new MobilePayment("Amelia", 5000);

echo $payment->pay();