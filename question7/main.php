<?php

// BANK ACCOUNT CLASS
class BankAccount
{
    public $accountNumber;  // string
    public $accountHolderr; // string
    public $balance;        // float

    public function __construct($accountHolder, $accountNumber, $balance){
        $this -> accountNumber = $accountNumber;
        $this -> accountHolder = $accountHolder;
        $this -> balance = $balance;
    }

    public function deposit($amount){
        $this -> balance += $amount;
        echo "You deposited $". $amount . " to your account. Your current balance is $". $this -> balance . ".";
    }

    public function withdraw($amount){
        if (($this -> balance) >= $amount) {
            $this -> balance -= $amount;
             echo "Your withdrawal was successful. You withdrew $". $amount . " from your account.";
        }else {
             echo "Not enough funds.";
        }
    }

    public function getBalance(){
        return $this -> balance;
    }    
}

// Demonstraiing the use of the functions 

// creating an instance of the BankAccount
$account1 = new BankAccount("Mr. Kudadjie", "10198377262672", 345.87);

// Notification after deposit
echo "Dear ". $account1 -> accountHolder. ", Acc No: ". $account1 -> accountNumber . ". ";
$account1 -> deposit(400.85);
echo "<br><br>";

// Notification after deposit
echo "Dear ". $account1 -> accountHolder. " Acc No: ". $account1 -> accountNumber. ". ";
$account1 -> withdraw(200);
echo "<br><br>";

// Notification after checking balance
echo "Dear ". $account1 -> accountHolder. " Acc No: ". $account1 -> accountNumber. ", 
Your current balance is $".$account1 -> getBalance(). ".";


// SAVING ACCOUNT CLASS 
class SavingAccount extends BankAccount
{
    public $interestRate;   // float

    public function setInterestRate($interestRate){
        $this -> interestRate = $interestRate;
    }
    public function getInterestRate(){
        return $this -> interestRate;
    }
    public function addInterest(){
        // $interest = ($this -> balance * $this -> interestRate)/100;
        $this -> balance += ($this -> balance * $this -> interestRate)/100;
        return $this -> balance;
    }
}

// creating an instance of the savings account
$saving1 = new SavingAccount("Mrs. Creppy", "1019668392002", 3650);

// setting interest rate
$saving1 -> setInterestRate(4.0);

// print out savings account details
echo "<br><br>Dear ". $saving1 -> accountHolder. ", Acc No: ". $saving1 -> accountNumber . ".<br>
Your initial balance is $". $saving1 -> getBalance().".<br>Interest rate is ". $saving1 -> getInterestRate()."%<br>
So your current balance is $". $saving1 -> addInterest();


//CHECKING ACCOUNT CLASS
class CheckingAccount extends BankAccount
{
    public $transactionFee; // float
    
    public function setTransactionFee($transactionFee){
        $this -> transactionFee = $transactionFee;
    }

    public function getTransactionFee(){
        return $this -> transactionFee;
    }

    public function withdraw($amount){

        if (($this -> balance) >= $amount) {
            $this -> balance -= $amount;
            $this -> balance -= $transactionFee;
                echo "Your withdrawal was successful. You withdrew $". $amount . " from your account.";
        }else {
                echo "Not enough funds.";
        }
    }
}

//creating an instance of the Checking Account
$checking1 = new CheckingAccount("Mrs. Creppy", "1019668392002", 3650);

//setting transaction fee
$checking1 -> setTransactionFee(3);

// printing account balance after the transaction
echo "<br><br>Dear ". $checking1 -> accountHolder. ", Acc No: ". $checking1 -> accountNumber;
$checking1 -> withdraw(647);
echo "<br>Transaction fee is $". $checking1 -> getTransactionFee();
echo "<br>Current balance is ". $checking1 -> getBalance();

?>