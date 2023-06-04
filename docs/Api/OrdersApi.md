# Klarna\OrderManagement\OrdersApi

All URIs are relative to https://api.klarna.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acknowledgeOrder()**](OrdersApi.md#acknowledgeOrder) | **POST** /ordermanagement/v1/orders/{order_id}/acknowledge | Acknowledge order |
| [**appendOrderShippingInfo()**](OrdersApi.md#appendOrderShippingInfo) | **POST** /ordermanagement/v1/orders/{order_id}/shipping-info | Add shipping info to an order |
| [**cancelOrder()**](OrdersApi.md#cancelOrder) | **POST** /ordermanagement/v1/orders/{order_id}/cancel | Cancel order |
| [**extendAuthorizationTime()**](OrdersApi.md#extendAuthorizationTime) | **POST** /ordermanagement/v1/orders/{order_id}/extend-authorization-time | Extend authorization time |
| [**getOrder()**](OrdersApi.md#getOrder) | **GET** /ordermanagement/v1/orders/{order_id} | Get order |
| [**releaseRemainingAuthorization()**](OrdersApi.md#releaseRemainingAuthorization) | **POST** /ordermanagement/v1/orders/{order_id}/release-remaining-authorization | Release remaining authorization |
| [**updateAuthorization()**](OrdersApi.md#updateAuthorization) | **PATCH** /ordermanagement/v1/orders/{order_id}/authorization | Set new order amount and order lines |
| [**updateConsumerDetails()**](OrdersApi.md#updateConsumerDetails) | **PATCH** /ordermanagement/v1/orders/{order_id}/customer-details | Update customer addresses |
| [**updateMerchantReferences()**](OrdersApi.md#updateMerchantReferences) | **PATCH** /ordermanagement/v1/orders/{order_id}/merchant-references | Update merchant references |


## `acknowledgeOrder()`

```php
acknowledgeOrder($order_id, $klarna_idempotency_key)
```

Acknowledge order

Acknowledge order. Read more on [Acknowledging orders](https://docs.klarna.com/order-management/pre-delivery/acknowledge-kco-order/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\OrderManagement\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order id
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters.

try {
    $apiInstance->acknowledgeOrder($order_id, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->acknowledgeOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters. | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appendOrderShippingInfo()`

```php
appendOrderShippingInfo($order_id, $klarna_idempotency_key, $update_shipping_info)
```

Add shipping info to an order

Add shipping info to an order. Read more on [Adding shipping info](https://docs.klarna.com/order-management/manage-orders-with-the-api/view-and-change-orders/add-shipping-information/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\OrderManagement\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order id
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters.
$update_shipping_info = new \Klarna\OrderManagement\Model\UpdateShippingInfo(); // \Klarna\OrderManagement\Model\UpdateShippingInfo

try {
    $apiInstance->appendOrderShippingInfo($order_id, $klarna_idempotency_key, $update_shipping_info);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->appendOrderShippingInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters. | [optional] |
| **update_shipping_info** | [**\Klarna\OrderManagement\Model\UpdateShippingInfo**](../Model/UpdateShippingInfo.md)|  | [optional] |

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

## `cancelOrder()`

```php
cancelOrder($order_id, $klarna_idempotency_key)
```

Cancel order

Cancel order.Read more on [Cancelling an order](https://docs.klarna.com/order-management/pre-delivery/cancel-order/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\OrderManagement\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order id
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters.

try {
    $apiInstance->cancelOrder($order_id, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters. | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extendAuthorizationTime()`

```php
extendAuthorizationTime($order_id, $klarna_idempotency_key)
```

Extend authorization time

Extend authorization time. Read more on [Extending order authorization time](https://docs.klarna.com/order-management/pre-delivery/extend-order-authorization-time/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\OrderManagement\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order id
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters.

try {
    $apiInstance->extendAuthorizationTime($order_id, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->extendAuthorizationTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters. | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($order_id, $klarna_integrator): \Klarna\OrderManagement\Model\Order
```

Get order

An order that has the given order id. Read more on [Retrieving order details](https://docs.klarna.com/order-management/pre-delivery/order-details/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\OrderManagement\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order id
$klarna_integrator = 'klarna_integrator_example'; // string

try {
    $result = $apiInstance->getOrder($order_id, $klarna_integrator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **klarna_integrator** | **string**|  | [optional] |

### Return type

[**\Klarna\OrderManagement\Model\Order**](../Model/Order.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseRemainingAuthorization()`

```php
releaseRemainingAuthorization($order_id, $klarna_idempotency_key)
```

Release remaining authorization

Release remaining authorization. Read more on [Releasing remaining authorization](https://docs.klarna.com/order-management/post-delivery/release-remaining-authorization/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\OrderManagement\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order id
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters.

try {
    $apiInstance->releaseRemainingAuthorization($order_id, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->releaseRemainingAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters. | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAuthorization()`

```php
updateAuthorization($order_id, $klarna_idempotency_key, $update_authorization)
```

Set new order amount and order lines

Set new order amount and order lines. Read more on [Updating orders](https://docs.klarna.com/order-management/pre-delivery/update-order-amount/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\OrderManagement\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order id
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters.
$update_authorization = new \Klarna\OrderManagement\Model\UpdateAuthorization(); // \Klarna\OrderManagement\Model\UpdateAuthorization

try {
    $apiInstance->updateAuthorization($order_id, $klarna_idempotency_key, $update_authorization);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters. | [optional] |
| **update_authorization** | [**\Klarna\OrderManagement\Model\UpdateAuthorization**](../Model/UpdateAuthorization.md)|  | [optional] |

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

## `updateConsumerDetails()`

```php
updateConsumerDetails($order_id, $klarna_idempotency_key, $update_consumer)
```

Update customer addresses

Update customer addresses. Read more on [Updating customer addresses](https://docs.klarna.com/order-management/pre-delivery/update-customer-address/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\OrderManagement\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order id
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters.
$update_consumer = new \Klarna\OrderManagement\Model\UpdateConsumer(); // \Klarna\OrderManagement\Model\UpdateConsumer

try {
    $apiInstance->updateConsumerDetails($order_id, $klarna_idempotency_key, $update_consumer);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateConsumerDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters. | [optional] |
| **update_consumer** | [**\Klarna\OrderManagement\Model\UpdateConsumer**](../Model/UpdateConsumer.md)|  | [optional] |

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

## `updateMerchantReferences()`

```php
updateMerchantReferences($order_id, $klarna_idempotency_key, $update_merchant_references)
```

Update merchant references

Update merchant references. Read more on [Updating merchant references](https://docs.klarna.com/order-management/pre-delivery/update-merchant-references/)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\OrderManagement\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order id
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters.
$update_merchant_references = new \Klarna\OrderManagement\Model\UpdateMerchantReferences(); // \Klarna\OrderManagement\Model\UpdateMerchantReferences

try {
    $apiInstance->updateMerchantReferences($order_id, $klarna_idempotency_key, $update_merchant_references);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateMerchantReferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters. | [optional] |
| **update_merchant_references** | [**\Klarna\OrderManagement\Model\UpdateMerchantReferences**](../Model/UpdateMerchantReferences.md)|  | [optional] |

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
