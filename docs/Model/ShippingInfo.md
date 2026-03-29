# # ShippingInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**return_shipping_company** | **string** | Identifier of the shipping company for the return shipment. The value should be a valid SHIPPING_COMPANY from the [Carrier list](https://docs.klarna.com/payments/after-payments/order-management/more-actions/klarna-carrier-partner-list/). | [optional]
**return_tracking_number** | **string** | Tracking number for the return shipment. Maximum 100 characters. | [optional]
**return_tracking_uri** | **string** | URL where the customer can track the return shipment. Maximum 1024 characters. | [optional]
**shipping_company** | **string** | Identifier of the shipping company. The value should be a valid SHIPPING_COMPANY from the [Carrier list](https://docs.klarna.com/payments/after-payments/order-management/more-actions/klarna-carrier-partner-list/). | [optional]
**shipping_method** | **string** | Shipping method. Allowed values matches (PickUpStore|Home|BoxReg|BoxUnreg|PickUpPoint|Own|Postal|DHLPackstation|Digital|Undefined|PickUpWarehouse|ClickCollect|PalletDelivery) | [optional]
**tracking_number** | **string** | Tracking number for the shipment. Maximum 100 characters. | [optional]
**tracking_uri** | **string** | URI where the customer can track their shipment. Maximum 1024 characters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
