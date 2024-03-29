# php-klarna-ordermanagement

The Order Management API is used for handling an order after the customer has completed the purchase. It is used for all actions you need to manage your orders. Examples being: updating, capturing, reading and refunding an order.

Read more on the [Order management](https://docs.klarna.com/order-management/) process.

# Authentication

<!-- ReDoc-Inject: <security-definitions> -->


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/tuutti/php-klarna-ordermanagement.git"
    }
  ],
  "require": {
    "tuutti/php-klarna-ordermanagement": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/php-klarna-ordermanagement/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\OrderManagement\Api\CapturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$capture_id = 'capture_id_example'; // string | Capture id
$order_id = 'order_id_example'; // string | Order id
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters.
$update_shipping_info = new \Klarna\OrderManagement\Model\UpdateShippingInfo(); // \Klarna\OrderManagement\Model\UpdateShippingInfo

try {
    $apiInstance->appendShippingInfo($capture_id, $order_id, $klarna_idempotency_key, $update_shipping_info);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->appendShippingInfo: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.klarna.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CapturesApi* | [**appendShippingInfo**](docs/Api/CapturesApi.md#appendshippinginfo) | **POST** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/shipping-info | Add shipping information
*CapturesApi* | [**captureOrder**](docs/Api/CapturesApi.md#captureorder) | **POST** /ordermanagement/v1/orders/{order_id}/captures | Capture an order
*CapturesApi* | [**extendDueDate**](docs/Api/CapturesApi.md#extendduedate) | **PATCH** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/extend-due-date | Extend payment due date
*CapturesApi* | [**getCapture**](docs/Api/CapturesApi.md#getcapture) | **GET** /ordermanagement/v1/orders/{order_id}/captures/{capture_id} | Get capture details
*CapturesApi* | [**getCaptures**](docs/Api/CapturesApi.md#getcaptures) | **GET** /ordermanagement/v1/orders/{order_id}/captures | List all order captures
*CapturesApi* | [**getOptionsForExtendDueDate**](docs/Api/CapturesApi.md#getoptionsforextendduedate) | **GET** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/extend-due-date-options | List options for extension of payment due date
*CapturesApi* | [**triggerSendOut**](docs/Api/CapturesApi.md#triggersendout) | **POST** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/trigger-send-out | Send customer communication
*OrdersApi* | [**acknowledgeOrder**](docs/Api/OrdersApi.md#acknowledgeorder) | **POST** /ordermanagement/v1/orders/{order_id}/acknowledge | Acknowledge a Klarna checkout order
*OrdersApi* | [**appendOrderShippingInfo**](docs/Api/OrdersApi.md#appendordershippinginfo) | **POST** /ordermanagement/v1/orders/{order_id}/shipping-info | Add shipping information
*OrdersApi* | [**cancelOrder**](docs/Api/OrdersApi.md#cancelorder) | **POST** /ordermanagement/v1/orders/{order_id}/cancel | Cancel an order
*OrdersApi* | [**extendAuthorizationTime**](docs/Api/OrdersApi.md#extendauthorizationtime) | **POST** /ordermanagement/v1/orders/{order_id}/extend-authorization-time | Extend the authorization time
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /ordermanagement/v1/orders/{order_id} | Get order details
*OrdersApi* | [**releaseRemainingAuthorization**](docs/Api/OrdersApi.md#releaseremainingauthorization) | **POST** /ordermanagement/v1/orders/{order_id}/release-remaining-authorization | Release an authorization
*OrdersApi* | [**updateAuthorization**](docs/Api/OrdersApi.md#updateauthorization) | **PATCH** /ordermanagement/v1/orders/{order_id}/authorization | Update the order amount and order lines
*OrdersApi* | [**updateConsumerDetails**](docs/Api/OrdersApi.md#updateconsumerdetails) | **PATCH** /ordermanagement/v1/orders/{order_id}/customer-details | Update customer addresses
*OrdersApi* | [**updateMerchantReferences**](docs/Api/OrdersApi.md#updatemerchantreferences) | **PATCH** /ordermanagement/v1/orders/{order_id}/merchant-references | Update merchant references
*RefundsApi* | [**get**](docs/Api/RefundsApi.md#get) | **GET** /ordermanagement/v1/orders/{order_id}/refunds/{refund_id} | Get refund details
*RefundsApi* | [**refundOrder**](docs/Api/RefundsApi.md#refundorder) | **POST** /ordermanagement/v1/orders/{order_id}/refunds | Refund an order

## Models

- [Addon](docs/Model/Addon.md)
- [Address](docs/Model/Address.md)
- [CancelNotAllowedErrorMessage](docs/Model/CancelNotAllowedErrorMessage.md)
- [Capture](docs/Model/Capture.md)
- [CaptureNotAllowedErrorMessage](docs/Model/CaptureNotAllowedErrorMessage.md)
- [CaptureObject](docs/Model/CaptureObject.md)
- [CarrierProduct](docs/Model/CarrierProduct.md)
- [Customer](docs/Model/Customer.md)
- [ErrorMessageDto](docs/Model/ErrorMessageDto.md)
- [ExtendDueDateOptions](docs/Model/ExtendDueDateOptions.md)
- [ExtendDueDateRequest](docs/Model/ExtendDueDateRequest.md)
- [InitialPaymentMethodDto](docs/Model/InitialPaymentMethodDto.md)
- [Location](docs/Model/Location.md)
- [NoSuchCaptureErrorMessage](docs/Model/NoSuchCaptureErrorMessage.md)
- [NoSuchOrderErrorMessage](docs/Model/NoSuchOrderErrorMessage.md)
- [NotAllowedErrorMessage](docs/Model/NotAllowedErrorMessage.md)
- [NotFoundErrorMessage](docs/Model/NotFoundErrorMessage.md)
- [OptionDto](docs/Model/OptionDto.md)
- [Order](docs/Model/Order.md)
- [OrderLine](docs/Model/OrderLine.md)
- [ProductIdentifiers](docs/Model/ProductIdentifiers.md)
- [Refund](docs/Model/Refund.md)
- [RefundNotAllowedErrorMessage](docs/Model/RefundNotAllowedErrorMessage.md)
- [RefundObject](docs/Model/RefundObject.md)
- [SelectedShippingOptionDto](docs/Model/SelectedShippingOptionDto.md)
- [ShippingInfo](docs/Model/ShippingInfo.md)
- [Subscription](docs/Model/Subscription.md)
- [Timeslot](docs/Model/Timeslot.md)
- [UpdateAuthorization](docs/Model/UpdateAuthorization.md)
- [UpdateConsumer](docs/Model/UpdateConsumer.md)
- [UpdateMerchantReferences](docs/Model/UpdateMerchantReferences.md)
- [UpdateShippingInfo](docs/Model/UpdateShippingInfo.md)

## Authorization

Authentication schemes defined for the API:
### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Generator version: `7.4.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
