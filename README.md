# PHP SDK for Clickpag Rede API

## Requirements

PHP 5.3.3 and later.

##Example
To create an order follow this code

```php
<?php
require_once(__DIR__ . '/clickpag-php/autoload.php');

use Clickpag\Api\ClickpagApi;

try {

  $api = new ClickpagApi();

  $order = new Clickpag\Model\Order;

  $item = new Clickpag\Model\Item(array("id" => "1",
                                          "amount" => "5000",
                                          "quantity" => 1,
                                          "freight" => "200",
                                          "description" => "IPhone 6s 64Gb"));

  $phone = new Clickpag\Model\Phone;
  $phone->setKind("cellphone","home");
  $phone->setNumber("11988880000","1155550000");

  $document = new Clickpag\Model\Document;
  $document->setKind("cpf");
  $document->setNumber("01234567890");

  $address = new Clickpag\Model\Address;
  $address->setStreet("Marcos Penteado");
  $address->setNumber("939");
  $address->setComplement("11 andar");
  $address->setPostalCode("04147100");
  $address->setCity("Barueri");
  $address->setDistrict("Alphaville");
  $address->setState("SP");

  $settings = new Clickpag\Model\Settings;

  $settings->setExpiresAt(\DateTime::createFromFormat(\DateTime::ISO8601, "2016-14-30T22:00:30-03:00"));
  $settings->setAttempts("1");
  $settings->setMaxInstallments("3");

  $customer = new Clickpag\Model\Customer;
  $customer->setName("Nome do Comprador");
  $customer->setEmail("comprador@email.com");
  $customer->setDocuments(array($document));
  $customer->setPhones(array($phone));

$shipping = new Clickpag\Model\Shipping;
  $shipping->setCost("");
  $shipping->setAddress($address);

  $url = new Clickpag\Model\Url;
  $url->setKind("redirect");
  $url->setUrl("https://userede.com.br/clickpag");

  $order->setItems(array($item));
  $order->setReference("1234");
  $order->setSettings($settings);
  $order->setCustomer($customer);
  $order->setUrls(array($url));
  $order->setShipping($shipping);

  $s = new Clickpag\ObjectSerializer;

  $response = $api->createOrder("YOUR-ACCESS-TOKEN", "v1", $order);

} catch (Clickpag\ApiException $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
    echo 'HTTP response headers: ', $e->getResponseHeaders(), "\n";
    echo 'HTTP response body: ', $e->getResponseBody(), "\n";
    echo 'HTTP status code: ', $e->getCode(), "\n";
}

?>
```
