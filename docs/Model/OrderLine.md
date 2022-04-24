# # OrderLine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image_url** | **string** | URL to an image that can be embedded in communications between Klarna and the customer. Maximum 1024 characters. | [optional]
**merchant_data** | **string** | Data about the order line. Set at creation or update and returned when fetching the order through the API. Maximum 1024 characters. | [optional]
**name** | **string** | Descriptive item name. Maximum 255 characters. |
**product_identifiers** | [**\Klarna\OrderManagement\Model\ProductIdentifiers**](ProductIdentifiers.md) |  | [optional]
**product_url** | **string** | URL to the product that can be used in communications between Klarna and the customer. Maximum 1024 characters. | [optional]
**quantity** | **int** | Item quantity. Non-negative. |
**quantity_unit** | **string** | Unit used to describe the quantity. Maximum 10 characters. | [optional]
**reference** | **string** | Article number, SKU or similar identifier on the product variant level. | [optional]
**subscription** | [**\Klarna\OrderManagement\Model\Subscription**](Subscription.md) |  | [optional]
**tax_rate** | **int** | The tax rate in percent with two implicit decimals. Non-negative. Example: 2500 &#x3D; 25%. | [optional]
**total_amount** | **int** | Total amount including tax and discounts (&#x60;quantity * unit_price - total_discount_amount&#x60;). |
**total_discount_amount** | **int** | The discount amount in minor units. Includes tax. Example: 1200 &#x3D; $12. Max value: 100000000 | [optional]
**total_tax_amount** | **int** | The total tax amount in minor units. Negative if the order line type is discount. Example: 500 &#x3D; $5. | [optional]
**type** | **string** | Order line type. Matches: physical|discount|shipping_fee|sales_tax|store_credit|gift_card|digital|surcharge|return_fee | [optional]
**unit_price** | **int** | Unit price including tax without applying discounts in minor units. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
