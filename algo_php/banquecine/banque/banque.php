<?php
    include('account.php');
    include('owner.php');
    $o1 = new Owner('Test', 'Jean-Michel', '12/04/1985', 'Montcuq'); //create new owner
    $acc1 = new Account('courant', 1000, 'Euros', $o1); //create first account
    $acc2 = new Account('épargne', 500, 'Euros', $o1); //create second account
    $o1->addAccount($acc1->getLabel()); //add first account to owner
    $o1->addAccount($acc2->getLabel()); //add second account to owner
    $o1->infoOwner(); //display info about owner
    $acc1->transfer($acc2, 300); //transfer 300 from account 1 into account 2
    $acc2->debitAccount(200); //witthdraw 200 from account 2
    $acc1->creditAccount(400); //deposit 400 into account 1
    $acc1->infoAccount(); //display info on account 1
    $acc2->infoAccount(); //display info on account 2
    
?>