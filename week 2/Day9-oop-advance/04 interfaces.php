<?php

interface Payment
{
    public function pay();
}

class CashPayment implements Payment
{
    public function pay()
    {
        return "Payment made in cash";
    }
}

class MobilePayment implements Payment
{
    public function pay()
    {
        return "Payment made with mobile money";
    }
}

$cash = new CashPayment();
echo $cash->pay();

echo "<br>";

$mobile = new MobilePayment();
echo $mobile->pay();