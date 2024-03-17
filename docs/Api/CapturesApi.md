# Klarna\OrderManagement\CapturesApi

All URIs are relative to https://api.klarna.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appendShippingInfo()**](CapturesApi.md#appendShippingInfo) | **POST** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/shipping-info | Add shipping information |
| [**captureOrder()**](CapturesApi.md#captureOrder) | **POST** /ordermanagement/v1/orders/{order_id}/captures | Capture an order |
| [**extendDueDate()**](CapturesApi.md#extendDueDate) | **PATCH** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/extend-due-date | Extend payment due date |
| [**getCapture()**](CapturesApi.md#getCapture) | **GET** /ordermanagement/v1/orders/{order_id}/captures/{capture_id} | Get capture details |
| [**getCaptures()**](CapturesApi.md#getCaptures) | **GET** /ordermanagement/v1/orders/{order_id}/captures | List all order captures |
| [**getOptionsForExtendDueDate()**](CapturesApi.md#getOptionsForExtendDueDate) | **GET** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/extend-due-date-options | List options for extension of payment due date |
| [**triggerSendOut()**](CapturesApi.md#triggerSendOut) | **POST** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/trigger-send-out | Send customer communication |


## `appendShippingInfo()`

```php
appendShippingInfo($capture_id, $order_id, $klarna_idempotency_key, $update_shipping_info)
```

Add shipping information

Add shipping info to a capture. Read more on [Adding shipping info](https://docs.klarna.com/order-management/post-delivery/add-capture-shipping-details/)

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **capture_id** | **string**| Capture id | |
| **order_id** | **string**| Order id | |
| **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters. | [optional] |
| **update_shipping_info** | [**\Klarna\OrderManagement\Model\UpdateShippingInfo**](../Model/UpdateShippingInfo.md)|  | [optional] |

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

## `captureOrder()`

```php
captureOrder($order_id, $capture_object, $klarna_idempotency_key)
```

Capture an order

Create capture. Read more on [Capturing an order](https://docs.klarna.com/order-management/delivery/full-capture/)

### Example

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
$order_id = 'order_id_example'; // string | Order id
$capture_object = new \Klarna\OrderManagement\Model\CaptureObject(); // \Klarna\OrderManagement\Model\CaptureObject | Capture request data
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters.

try {
    $apiInstance->captureOrder($order_id, $capture_object, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->captureOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |
| **capture_object** | [**\Klarna\OrderManagement\Model\CaptureObject**](../Model/CaptureObject.md)| Capture request data | |
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

## `extendDueDate()`

```php
extendDueDate($capture_id, $order_id, $klarna_idempotency_key, $extend_due_date_request)
```

Extend payment due date

Extend the customer's payment due date. Read more on [Extending customer due dates](https://docs.klarna.com/order-management/post-delivery/extend-customer-due-date/)

### Example

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
$extend_due_date_request = new \Klarna\OrderManagement\Model\ExtendDueDateRequest(); // \Klarna\OrderManagement\Model\ExtendDueDateRequest

try {
    $apiInstance->extendDueDate($capture_id, $order_id, $klarna_idempotency_key, $extend_due_date_request);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->extendDueDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **capture_id** | **string**| Capture id | |
| **order_id** | **string**| Order id | |
| **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. Input values of the operation are disregarded when evaluating the idempotency of the operation, only the key matters. | [optional] |
| **extend_due_date_request** | [**\Klarna\OrderManagement\Model\ExtendDueDateRequest**](../Model/ExtendDueDateRequest.md)|  | [optional] |

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

## `getCapture()`

```php
getCapture($capture_id, $order_id): \Klarna\OrderManagement\Model\Capture
```

Get capture details

Retrieve the details of a capture. To learn more, refer to the [Retrieving capture details](https://docs.klarna.com/order-management/post-delivery/capture-details/) article.

### Example

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

try {
    $result = $apiInstance->getCapture($capture_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->getCapture: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **capture_id** | **string**| Capture id | |
| **order_id** | **string**| Order id | |

### Return type

[**\Klarna\OrderManagement\Model\Capture**](../Model/Capture.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCaptures()`

```php
getCaptures($order_id): \Klarna\OrderManagement\Model\Capture[]
```

List all order captures

List all order captures

### Example

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
$order_id = 'order_id_example'; // string | Order id

try {
    $result = $apiInstance->getCaptures($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->getCaptures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order id | |

### Return type

[**\Klarna\OrderManagement\Model\Capture[]**](../Model/Capture.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOptionsForExtendDueDate()`

```php
getOptionsForExtendDueDate($capture_id, $order_id): \Klarna\OrderManagement\Model\ExtendDueDateOptions
```

List options for extension of payment due date

Get merchant fees for extension of due date due date

### Example

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

try {
    $result = $apiInstance->getOptionsForExtendDueDate($capture_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->getOptionsForExtendDueDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **capture_id** | **string**| Capture id | |
| **order_id** | **string**| Order id | |

### Return type

[**\Klarna\OrderManagement\Model\ExtendDueDateOptions**](../Model/ExtendDueDateOptions.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `triggerSendOut()`

```php
triggerSendOut($capture_id, $order_id, $klarna_idempotency_key)
```

Send customer communication

Trigger resend of customer communication. Read more on [Resending customer communication](https://docs.klarna.com/order-management/post-delivery/trigger-customer-send-out/)

### Example

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

try {
    $apiInstance->triggerSendOut($capture_id, $order_id, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->triggerSendOut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **capture_id** | **string**| Capture id | |
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
