# # Capture

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**capture_id** | **string** | The capture id. Generated when the capture is created. | [optional] 
**reference** | **string** | Internal reference to the capture which will be included in the settlement files. Max length is 255 characters. | [optional] 
**klarna_reference** | **string** | Customer friendly reference id, used as a reference when communicating with the customer. | [optional] 
**captured_amount** | **int** | The captured amount in minor units. | [optional] 
**captured_at** | [**\DateTime**](\DateTime.md) | The time of the capture. Specified in ISO 8601. | [optional] 
**description** | **string** | Description of the capture shown to the customer. | [optional] 
**order_lines** | [**\Klarna\OrderManagement\Model\OrderLine[]**](OrderLine.md) | List of order lines for the capture shown to the customer. | [optional] 
**refunded_amount** | **int** | Refunded amount for this capture in minor units. | [optional] 
**billing_address** | [**\Klarna\OrderManagement\Model\Address**](Address.md) |  | [optional] 
**shipping_address** | [**\Klarna\OrderManagement\Model\Address**](Address.md) |  | [optional] 
**shipping_info** | [**\Klarna\OrderManagement\Model\ShippingInfo[]**](ShippingInfo.md) | Shipping information for this capture. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


