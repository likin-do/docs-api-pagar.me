<?php
    require __DIR__ . '/../vendor/autoload.php';

    PagarMe::setApiKey("ak_test_grXijQ4GicOa2BLGZrDRTR5qNQxJW0");

    $transaction = new PagarMe_Transaction(array(
        "amount" => 3100,
        "card_id" => "card_ci6l9fx8f0042rt16rtb477gj",
        "postback_url" => "http://requestb.in/pkt7pgpk",
        "metadata" => array(
            "idProduto" => 13933139
        )
    ));

    $transaction->charge();
