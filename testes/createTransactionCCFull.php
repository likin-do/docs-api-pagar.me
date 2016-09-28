<?php
    require __DIR__ . '/../vendor/autoload.php';
    
    PagarMe::setApiKey("ak_test_FVu4495Og3suDR4CWxZ8GXeRYYZvhU");
    
    $transaction = new PagarMe_Transaction(array(
        "amount" => 1000,
        "card_hash" => "199812_RGYJtpjwiSnUq+D0pxxvHkkixwZMbpxLVaeHlxzLjbSFjnCA1rBsSYEZ3Yrw6CcBZOdzqua08HR55vVwCPz09qBvJ6TOiEkeW2gARJTmJpiF5CCMiPhyAnnGLbYvUbN9p59mUnxjo0c/WhKGmwuBDjt+kqETy9W4iGNx6DZjpawjq2EhmJ7F9cEsXvma4vxq3wxpJ4i6qRj76TecQSdMCv66Fo0b4qjAvDrhdWE/ZNJ5amAMzTxr0w8dsrZL9+GrEPX1XhnbTFP45t64+WCq2idPtZ4suXCdJIEOu8fHzvadFO10PVx9sjUBlYY5ejAjP8+wpwWnxGcSKZCHoTFPXg==",
        "customer" => array(
            "name" => "John Appleseed",
            "document_number" => "92545278157",
            "email" => "jappleseed@apple.com",
            "address" => array(
                "street" => "Av. Brigadeiro Faria Lima",
                "neighborhood" => "Jardim Paulistano",
                "zipcode" => "01452000",
                "street_number" => "2941",
                "complementary" => "8º andar"
            ),
            "phone" => array(
                "ddd" => "11",
                "number" => "30713261"
            )
        )
    ));
    
    $transaction->charge();
    
    var_dump($transaction->status);
