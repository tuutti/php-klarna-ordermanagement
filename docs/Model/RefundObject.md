# # RefundObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**refunded_amount** | **int** | Refunded amount in minor units. | 
**description** | **string** | Description of the refund shown to the customer. Max length is 255 characters. | [optional] 
**reference** | **string** | Internal reference to the refund. This will be included in the settlement files. Max length is 255 characters. | [optional] 
**order_lines** | [**\Klarna\OrderManagement\Model\OrderLine[]**](OrderLine.md) | Order lines for the refund shown to the customer. Optional but increases the customer experience. Maximum 1000 order lines. | [optional] 
**credit_invoice** | **bool** | Optional. Only applicable to B2B Orders. If the flag is set to true for an order with B2B_invoice as payment method, the customer will receive the refund as a credit invoice. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


