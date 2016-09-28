<?php
    require __DIR__ . '/../vendor/autoload.php';
    
    PagarMe::setApiKey("ak_test_FVu4495Og3suDR4CWxZ8GXeRYYZvhU");
    
    $transaction = new PagarMe_Transaction(array(
        "amount" => 123,
        "card_id" => "card_citlkswg0008gmj6eqlaqpn06",
        "metadata" => array(
            "idProduto" => 13933139
        ),
        "customer" => array(
            "name" => "Magno R Frey",
            "document_number" => "978.818.640-87",
            "email" => "magno@likin.do",
            "address" => array(
                "street" => "Av. Humberto de A. Castelo Branco",
                "neighborhood" => "Licorsul",
                "zipcode" => "95705-880",
                "street_number" => "205",
                "complementary" => "Casa"
            ),
            "phone" => array(
                "ddd" => "54",
                "number" => "9997-8199"
            )
        )
    ));
    
    $transaction->charge();
    
    var_dump($transaction->status);
