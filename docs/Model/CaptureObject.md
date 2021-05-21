# # CaptureObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**captured_amount** | **int** | The captured amount in minor units. |
**description** | **string** | Description of the capture shown to the customer. Maximum 255 characters. | [optional]
**reference** | **string** | Internal reference to the capture. This will be included in the settlement files. Max length is 255 characters. | [optional]
**order_lines** | [**\Klarna\OrderManagement\Model\OrderLine[]**](OrderLine.md) | Order lines for this capture. Maximum 1000 items. | [optional]
**shipping_info** | [**\Klarna\OrderManagement\Model\ShippingInfo[]**](ShippingInfo.md) | Shipping information for this capture. Maximum 500 items. | [optional]
**shipping_delay** | **int** | Delay before the order will be shipped. Use for improving the customer experience regarding payments. This field is currently not returned when reading the order. Minimum: 0. Please note: to be able to submit values larger than 0, this has to be enabled in your merchant account. Please contact Klarna for further information. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
