# # Refund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**credit_invoice** | **bool** | Only relevant for B2B Orders. If the flag is set to true for an order with B2B_invoice as payment method, the customer will receive the refund as a credit invoice. | [optional]
**description** | **string** | Description of the refund shown to the customer. Max length is 255 characters. | [optional]
**order_lines** | [**\Klarna\OrderManagement\Model\OrderLine[]**](OrderLine.md) | Order lines for the refund shown to the customer. Optional but increases the customer experience. Maximum 1000 order lines. | [optional]
**reference** | **string** | Internal reference to the refund that is also included in the settlement files. Max length is 255 characters. | [optional]
**refund_id** | **string** | The refund id. Generated when the refund is created. | [optional]
**refunded_amount** | **int** | Refunded amount in minor units. | [optional]
**refunded_at** | **\DateTime** | The time of the refund. ISO 8601. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
