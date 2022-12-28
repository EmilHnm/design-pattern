<?php

require "vendor/autoload.php";

use Hoangm\Pattern\Facade\Cart;
use Hoangm\Pattern\Facade\Payment;
use Hoangm\Pattern\Facade\Product;
use Hoangm\Pattern\Singleton\Boilder;
use Hoangm\Pattern\Template\CSVReport;
use Hoangm\Pattern\Template\PDFReport;
use Hoangm\Pattern\Adapter\Enumeration;
use Hoangm\Pattern\Facade\OrderManager;
use Hoangm\Pattern\Template\XLSXReport;
use Hoangm\Pattern\Observer\WeatherData;
use Hoangm\Pattern\Builder\InvoiceBuilder;
use Hoangm\Pattern\Observer\StatisticsDisplay;
use Hoangm\Pattern\Adapter\EnumerationIterator;
use Hoangm\Pattern\FactoryMethods\ShapeFactory;
use Hoangm\Pattern\DependencyInjection\SmtpMailer;
use Hoangm\Pattern\Observer\CurrentConditionDisplay;
use Hoangm\Pattern\DependencyInjection\UserController;

echo "Observer Pattern ===============" . PHP_EOL;
$weatherData = new WeatherData();
$currentConditionDisplay = new CurrentConditionDisplay($weatherData);
$staticDísplay = new StatisticsDisplay($weatherData);

$weatherData->setMeasurements(30, 65, 30.4);
$weatherData->setMeasurements(32, 70, 29.2);
$weatherData->setMeasurements(28, 90, 29.2);

echo "Factory Methods Pattern ===============" . PHP_EOL;
$shapeFactory = new ShapeFactory();
$shape = $shapeFactory::getShape("CIRCLE");
$shape->draw();

echo "Singleton Pattern ===============" . PHP_EOL;
$boilder = Boilder::getInstance();
$boilder->fill();
$boilder->boil();
$boilder->drain();

echo "Adapter Pattern ===============" . PHP_EOL;

$enumeration = new Enumeration(["a", "b", "c"]);
$enumerationIterator = new EnumerationIterator($enumeration);
$enumerationIterator->hasNext();
$enumerationIterator->next();
$enumerationIterator->hasNext();
var_dump($enumerationIterator->hasNext());

echo "Facade Pattern ===============" . PHP_EOL;
$product1 = new Product('Shirt', 29.99);
$product2 = new Product('Doll', 49.99);
$cart = new Cart();
$payment = new Payment();

$orderManager = new OrderManager($cart, $payment);

$orderManager->addProductToCart($product1);
$orderManager->addProductToCart($product2);
$total = $orderManager->getCartTotal();
$result = $orderManager->processPayment(array('credit_card_number' => '1234567890'));

if ($result) {
    echo "Payment successful! Total: $total". PHP_EOL;
} else {
    echo "Payment failed.". PHP_EOL;
}

echo "Template Pattern ===============" . PHP_EOL;
$data = "The Data"; // Load data for the report

$pdfReport = new PDFReport($data);
$pdfReport->generateReport();
$pdfReport->exportPDFReport();

$csvReport = new CSVReport($data);
$csvReport->generateReport();
$csvReport->exportCSVReport();

$xlsxReport = new XLSXReport($data);
$xlsxReport->generateReport();
$xlsxReport->exportXLSXReport();

echo "Builder Pattern ===============" . PHP_EOL;

$builder = new InvoiceBuilder();
$builder->setHeader([
    'number' => 'INV001',
    'date' => '2022-01-01',
    'customer' => 'Name',
]);
$builder->addItem([
    'description' => 'Item 1',
    'quantity' => 2,
    'price' => 10.00,
]);
$builder->addItem([
    'description' => 'Item 2',
    'quantity' => 1,
    'price' => 20.00,
]);
$invoice = $builder->getInvoice();

var_dump($invoice);

echo "Dependency Injection ===============" . PHP_EOL;

$mailer = new SmtpMailer('smtp.example.com', 587, 'user', 'password');
$controller = new UserController($mailer);
$controller->register('example@abc.com', '123123');