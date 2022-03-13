# Klarna\OrderManagement\CapturesApi

All URIs are relative to https://api.klarna.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**appendShippingInfo()**](CapturesApi.md#appendShippingInfo) | **POST** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/shipping-info | Add shipping info to a capture
[**captureOrder()**](CapturesApi.md#captureOrder) | **POST** /ordermanagement/v1/orders/{order_id}/captures | Create capture
[**extendDueDate()**](CapturesApi.md#extendDueDate) | **PATCH** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/extend-due-date | Extend the customer&#39;s payment due date
[**getCapture()**](CapturesApi.md#getCapture) | **GET** /ordermanagement/v1/orders/{order_id}/captures/{capture_id} | Get capture
[**getCaptures()**](CapturesApi.md#getCaptures) | **GET** /ordermanagement/v1/orders/{order_id}/captures | Get all captures for one order
[**getOptionsForExtendDueDate()**](CapturesApi.md#getOptionsForExtendDueDate) | **GET** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/extend-due-date-options | Get available options for extension of the customer&#39;s payment due date
[**triggerSendOut()**](CapturesApi.md#triggerSendOut) | **POST** /ordermanagement/v1/orders/{order_id}/captures/{capture_id}/trigger-send-out | Trigger resend of customer communication


## `appendShippingInfo()`

```php
appendShippingInfo($capture_id, $order_id, $klarna_idempotency_key, $body)
```

Add shipping info to a capture

Add shipping info to a capture

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
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.
$body = new \Klarna\OrderManagement\Model\UpdateShippingInfo(); // \Klarna\OrderManagement\Model\UpdateShippingInfo

try {
    $apiInstance->appendShippingInfo($capture_id, $order_id, $klarna_idempotency_key, $body);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->appendShippingInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capture_id** | **string**| Capture id |
 **order_id** | **string**| Order id |
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]
 **body** | [**\Klarna\OrderManagement\Model\UpdateShippingInfo**](../Model/UpdateShippingInfo.md)|  | [optional]

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
captureOrder($order_id, $body, $klarna_idempotency_key)
```

Create capture

Create capture

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
$body = new \Klarna\OrderManagement\Model\CaptureObject(); // \Klarna\OrderManagement\Model\CaptureObject | Capture request data
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.

try {
    $apiInstance->captureOrder($order_id, $body, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->captureOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |
 **body** | [**\Klarna\OrderManagement\Model\CaptureObject**](../Model/CaptureObject.md)| Capture request data |
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]

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
extendDueDate($capture_id, $order_id, $klarna_idempotency_key, $body)
```

Extend the customer's payment due date

Extend the customer's payment due date

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
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.
$body = new \Klarna\OrderManagement\Model\ExtendDueDateRequest(); // \Klarna\OrderManagement\Model\ExtendDueDateRequest

try {
    $apiInstance->extendDueDate($capture_id, $order_id, $klarna_idempotency_key, $body);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->extendDueDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capture_id** | **string**| Capture id |
 **order_id** | **string**| Order id |
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]
 **body** | [**\Klarna\OrderManagement\Model\ExtendDueDateRequest**](../Model/ExtendDueDateRequest.md)|  | [optional]

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

Get capture

Get capture

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capture_id** | **string**| Capture id |
 **order_id** | **string**| Order id |

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

Get all captures for one order

Get all captures for one order

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order id |

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

Get available options for extension of the customer's payment due date

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capture_id** | **string**| Capture id |
 **order_id** | **string**| Order id |

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

Trigger resend of customer communication

Trigger resend of customer communication

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
$klarna_idempotency_key = 'klarna_idempotency_key_example'; // string | This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts.

try {
    $apiInstance->triggerSendOut($capture_id, $order_id, $klarna_idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->triggerSendOut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capture_id** | **string**| Capture id |
 **order_id** | **string**| Order id |
 **klarna_idempotency_key** | **string**| This header will guarantee the idempotency of the operation. The key should be unique and is recommended to be a UUID version 4. Retries of requests are safe to be applied in case of errors such as network errors, socket errors and timeouts. | [optional]

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
