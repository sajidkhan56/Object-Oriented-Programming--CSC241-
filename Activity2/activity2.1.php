<?php
//Create a class called BankAccount that models a checking account at a bank.
//The program creates an account with an opening balance, displays the balance,
// makes a deposit and a withdrawal, and then displays the new balance.

class BankAccount {
    private $opening_balance;

    function __construct($opening_balance)
    {
        $this->opening_balance = $opening_balance;
    }

    public function deposit($balance)
    {
        $this->opening_balance += $balance; 
    }

    public function withdrawal($balance)
    {
        $this->opening_balance -= $balance; 
    }

    public function displayBalance()
    {
        echo $this->opening_balance."</br>";
    }
}

$bankaccount = new BankAccount(150);
$bankaccount->displayBalance();
$bankaccount->deposit(40000);
$bankaccount->displayBalance();
$bankaccount->withdrawal(5000);
$bankaccount->displayBalance();

?>