# Klarna\OrderManagement\RefundsApi

All URIs are relative to https://api.klarna.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**get()**](RefundsApi.md#get) | **GET** /ordermanagement/v1/orders/{order_id}/refunds/{refund_id} | Get refund details |
| [**refundOrder()**](RefundsApi.md#refundOrder) | **POST** /ordermanagement/v1/orders/{order_id}/refunds | Refund an order |


## `get()`

```php
get($order_id, $refund_id): \Klarna\OrderManagement\Model\Refund
```

Get refund details

Get refund.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\OrderManagement\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order id
$refund_id = 'refund_id_example'; // string | Refund id

try {
    $result = $apiInstance->get($order_id, $refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **refund_id** | **string**| Refund id | |

### Return type

[**\Klarna\OrderManagement\Model\Refund**](../Model/Refund.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundOrder()`

```php
refundOrder($order_id, $klarna_idempotency_key, $refund_object)
```

Refund an order

Create a refund. Read more on [Refunds](https://docs.klarna.com/order-management/post-delivery/refund/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\OrderManagement\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order id
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters.
$refund_object = new \Klarna\OrderManagement\Model\RefundObject(); // \Klarna\OrderManagement\Model\RefundObject

try {
    $apiInstance->refundOrder($order_id, $klarna_idempotency_key, $refund_object);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters. | [optional] |
| **refund_object** | [**\Klarna\OrderManagement\Model\RefundObject**](../Model/RefundObject.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
