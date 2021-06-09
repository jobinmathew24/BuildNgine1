<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51IqJ43SEpGfaNisxJPL34DuWq6h8vmdX6CutOYkvIFIlfb88a9JT8SU127T6f8R761AJCCeXcQAkpNiCHPtgbkl400g8xtjsVA";

$secretKey="sk_test_51IqJ43SEpGfaNisxT84QRHr8as9wNPig9d6XDhfcqdqWLHwoCvVkXLghtIL4jT1xaAvyQTjtjTvjXi0ePtKorQMD00BMaujXPI";

\Stripe\Stripe::setApiKey($secretKey);
?>
