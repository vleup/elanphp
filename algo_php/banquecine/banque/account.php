<?php
    class Account {
        private $_label;
        private $_balance;
        private $_currency;
        private $_owner;

        public function __construct($label, $balance, $currency, $owner) {
            $this->_label = $label;         //name of the account
            $this->_balance = $balance;     //curtrent balance
            $this->_currency = $currency;   //currency used
            $this->_owner = $owner;         //owner of the account
        }

        public function getLabel() {
            return $this->_label;
        }

        public function getBalance() {
            return $this->_balance;
        }

        public function setBalance($amount) {
            $this->_balance = $amount;
        }

        public function getCurrency() {
            return $this->_currency;
        }

        public function getOwner() {
            return $this->_owner;
        }

        public function debitAccount($amount) { //debit a certain amount from the account
            $this->_balance = $this->_balance - $amount;
            echo 'Le compte '.$this->_label." a été débité de $amount ".$this->_currency.'<br>Nouveau Solde : '.$this->_balance.'<br>';
        }

        public function creditAccount($amount) { //credit a certain amount to the account
            $this->_balance = $this->_balance + $amount;
            echo 'Le compte '.$this->_label." a été crédité de $amount ".$this->_currency.'<br>Nouveau Solde : '.$this->_balance.'<br>';
        }

        public function transfer($destination, $amount) { //transfer money between 2 accounts
            $this->_balance = $this->_balance - $amount;
            $destination->setBalance($destination->getBalance()+$amount);
            echo "Un virement de $amount ".$this->_currency.' a été effectué du compte '.$this->_label.' sur le compte '.$destination->getLabel().'<br>';
        }

        public function infoAccount() { //display all relevant information about the account
            echo 'Intitulé : '.$this->_label.'<br>Solde actuel : '.$this->_balance.' '.$this->_currency.'<br> Titulaire du compte : '.$this->_owner->getName()
                .' '.$this->_owner->getSurname().'<br>';
        }
    }
?>