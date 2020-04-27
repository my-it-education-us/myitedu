<?php
// 1. Autoload the SDK Package. This will include all the files and classes to your autoloader
// Used for composer based installation
require __DIR__  . '/vendor/autoload.php';
// Use below for direct download installation
// require __DIR__  . '/PayPal-PHP-SDK/autoload.php';
// After Step 1
$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AQRfDXa_5d8IcifxNnQviHDR7xz6HTNy4WC6D1VG0kqiRacjoCUk0wIkZrYiPi1PEh-9JOh4NrGG7_Si',     // ClientID
        'EOicYIWih6w1zTEzsqmn_S4tBNd0rolpkEkb02wuhsjabBHNC9aTafWjjHXcybw-ecDr0sOQnY2Tunpd'      // ClientSecret
    )
);
// After Step 2
$payer = new \PayPal\Api\Payer();
$payer->setPaymentMethod('paypal');

$amount = new \PayPal\Api\Amount();
$amount->setTotal('1.00');
$amount->setCurrency('USD');

$transaction = new \PayPal\Api\Transaction();
$transaction->setAmount($amount);

$redirectUrls = new \PayPal\Api\RedirectUrls();
$redirectUrls->setReturnUrl("https://my-it-education.com/store?action=checkout")
    ->setCancelUrl("https://my-it-education.com/store?action=cancel");

$payment = new \PayPal\Api\Payment();
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setTransactions(array($transaction))
    ->setRedirectUrls($redirectUrls);

echo "<pre>";

// After Step 3
try {
    $payment->create($apiContext);
    echo $payment;

    echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";
}
catch (\PayPal\Exception\PayPalConnectionException $ex) {
    // This will print the detailed information on the exception.
    //REALLY HELPFUL FOR DEBUGGING
    echo $ex->getData();
}