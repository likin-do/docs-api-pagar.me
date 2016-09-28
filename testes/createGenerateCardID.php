<?php
    require __DIR__ . '/../vendor/autoload.php';
    
    PagarMe::setApiKey("ak_test_FVu4495Og3suDR4CWxZ8GXeRYYZvhU");

    $card = new PagarMe_Card(array(
        'card_hash' => "204542_CFQqyxAzDeojd9QiogxF8WSh1Y0VZuUU4wEsstNJEajEzlQkCR5aQnf6VbgWIA3F6ebNIOggLdvP0VxJWeqZFIeQFpnbyhMHdjk+NNRoZIP3t1xgJmAXh+9O71J/K1wCwfSrCOqFRJZOmkbPvx1taMMu+BKdkzshZ7YaejLeUUw2WQjDwrZLdEcSfjS6bsYEKFqJzgsIOHwckB99MHsMZhsxDHBQl2GWyiAhvzWdPkZ45+iZcP9tGW6Rsx/W3VraINaaV447WSyhR7niJrAnql7n7KoWL0TySWn8mZYojejZ7AbKOQYM1Gpo75nSQk6h5RjdZ087h+8faH0GNqbHVg=="
    ));

    $card->create();

    echo $card->id; // card_citlkswg0008gmj6eqlaqpn06
