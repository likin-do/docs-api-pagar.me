<?php
    require __DIR__ . '/../vendor/autoload.php';
    
    PagarMe::setApiKey("ak_test_FVu4495Og3suDR4CWxZ8GXeRYYZvhU");

    $transaction = new PagarMe_Transaction(array(
        'amount' => 100,
        'payment_method' => "boleto"
    ));
    
    $transaction->charge();
    
    $boleto_url = $transaction->boleto_url; // URL do boleto bancário
    $boleto_barcode = $transaction->boleto_barcode; // código de barras do boleto bancário
    
    echo '<pre>';
    var_dump($boleto_url);
    var_dump($boleto_barcode);
    var_dump($transaction);