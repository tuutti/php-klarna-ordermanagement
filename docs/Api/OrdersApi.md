# Klarna\OrderManagement\OrdersApi



All URIs are relative to https://api.klarna.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acknowledgeOrder()**](OrdersApi.md#acknowledgeOrder) | **POST** /ordermanagement/v1/orders/{order_id}/acknowledge | Acknowledge a Kustom checkout order |
| [**appendOrderShippingInfo()**](OrdersApi.md#appendOrderShippingInfo) | **POST** /ordermanagement/v1/orders/{order_id}/shipping-info | Add shipping information |
| [**cancelOrder()**](OrdersApi.md#cancelOrder) | **POST** /ordermanagement/v1/orders/{order_id}/cancel | Cancel an order |
| [**extendAuthorizationTime()**](OrdersApi.md#extendAuthorizationTime) | **POST** /ordermanagement/v1/orders/{order_id}/extend-authorization-time | Extend the authorization time |
| [**getOrder()**](OrdersApi.md#getOrder) | **GET** /ordermanagement/v1/orders/{order_id} | Get order details |
| [**releaseRemainingAuthorization()**](OrdersApi.md#releaseRemainingAuthorization) | **POST** /ordermanagement/v1/orders/{order_id}/release-remaining-authorization | Release an authorization |
| [**updateAuthorization()**](OrdersApi.md#updateAuthorization) | **PATCH** /ordermanagement/v1/orders/{order_id}/authorization | Update the order amount and order lines |
| [**updateConsumerDetails()**](OrdersApi.md#updateConsumerDetails) | **PATCH** /ordermanagement/v1/orders/{order_id}/customer-details | Update customer addresses |
| [**updateMerchantReferences()**](OrdersApi.md#updateMerchantReferences) | **PATCH** /ordermanagement/v1/orders/{order_id}/merchant-references | Update merchant references |


## `acknowledgeOrder()`

```php
acknowledgeOrder($order_id, $klarna_idempotency_key)
```

Acknowledge a Kustom checkout order

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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appendOrderShippingInfo()`

```php
appendOrderShippingInfo($order_id, $update_shipping_info, $klarna_idempotency_key)
```

Add shipping information

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
$update_shipping_info = new \Klarna\OrderManagement\Model\UpdateShippingInfo(); // \Klarna\OrderManagement\Model\UpdateShippingInfo
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters.

try {
    $apiInstance->appendOrderShippingInfo($order_id, $update_shipping_info, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->appendOrderShippingInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **update_shipping_info** | [**\Klarna\OrderManagement\Model\UpdateShippingInfo**](../Model/UpdateShippingInfo.md)|  | |
| **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters. | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelOrder()`

```php
cancelOrder($order_id, $klarna_idempotency_key)
```

Cancel an order

Cancel order. Read more on [Cancelling an order](https://docs.klarna.com/order-management/pre-delivery/cancel-order/)

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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extendAuthorizationTime()`

```php
extendAuthorizationTime($order_id, $klarna_idempotency_key)
```

Extend the authorization time

Extend authorization time endpoints provide flexibility when unexpected delays occur, however if long fulfillment periods are standard business model, then the extension of authorizations should be defined as part of the onboarding. Read more on [Extending order authorization time](https://docs.klarna.com/payments/web-payments/additional-resources/use-cases/extended-authorization-expiration/)

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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($order_id, $klarna_integrator): \Klarna\OrderManagement\Model\MerchantOrderDto
```

Get order details

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

[**\Klarna\OrderManagement\Model\MerchantOrderDto**](../Model/MerchantOrderDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseRemainingAuthorization()`

```php
releaseRemainingAuthorization($order_id, $klarna_idempotency_key): string
```

Release an authorization

Release remaining authorization. Read more on [Releasing remaining authorization](https://docs.klarna.com/payments/after-payments/order-management/manage-orders-with-the-api/refund-orders-and-manage-authorizations/#release-order-authorization)

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
    $result = $apiInstance->releaseRemainingAuthorization($order_id, $klarna_idempotency_key);
    print_r($result);
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

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAuthorization()`

```php
updateAuthorization($order_id, $update_authorization, $klarna_idempotency_key): string
```

Update the order amount and order lines

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
$update_authorization = new \Klarna\OrderManagement\Model\UpdateAuthorization(); // \Klarna\OrderManagement\Model\UpdateAuthorization
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters.

try {
    $result = $apiInstance->updateAuthorization($order_id, $update_authorization, $klarna_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **update_authorization** | [**\Klarna\OrderManagement\Model\UpdateAuthorization**](../Model/UpdateAuthorization.md)|  | |
| **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters. | [optional] |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConsumerDetails()`

```php
updateConsumerDetails($order_id, $update_consumer, $klarna_idempotency_key): string
```

Update customer addresses

Update shipping address. Read more on [Updating customer addresses](https://docs.klarna.com/order-management/pre-delivery/update-customer-address/)

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
$update_consumer = new \Klarna\OrderManagement\Model\UpdateConsumer(); // \Klarna\OrderManagement\Model\UpdateConsumer
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters.

try {
    $result = $apiInstance->updateConsumerDetails($order_id, $update_consumer, $klarna_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateConsumerDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **update_consumer** | [**\Klarna\OrderManagement\Model\UpdateConsumer**](../Model/UpdateConsumer.md)|  | |
| **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters. | [optional] |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMerchantReferences()`

```php
updateMerchantReferences($order_id, $update_merchant_references, $klarna_idempotency_key)
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
$update_merchant_references = new \Klarna\OrderManagement\Model\UpdateMerchantReferences(); // \Klarna\OrderManagement\Model\UpdateMerchantReferences
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters.

try {
    $apiInstance->updateMerchantReferences($order_id, $update_merchant_references, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateMerchantReferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **update_merchant_references** | [**\Klarna\OrderManagement\Model\UpdateMerchantReferences**](../Model/UpdateMerchantReferences.md)|  | |
| **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters. | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
