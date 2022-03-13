# # RefundObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Description of the refund shown to the customer. Max length is 255 characters. | [optional]
**order_lines** | [**\Klarna\OrderManagement\Model\OrderLine[]**](OrderLine.md) | Order lines for the refund shown to the customer. Optional but increases the customer experience. Maximum 1000 order lines. | [optional]
**reference** | **string** | Internal reference to the refund. This will be included in the settlement files. Max length is 255 characters. | [optional]
**refunded_amount** | **int** | Refunded amount in minor units. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
