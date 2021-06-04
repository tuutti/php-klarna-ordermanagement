# # SelectedShippingOptionDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the selected shipping option as provided by the TMS | [optional]
**name** | **string** | The display name of the selected shipping option | [optional]
**tms_reference** | **string** | The shipment_id provided by the TMS | [optional]
**carrier** | **string** | The carrier for the selected shipping option | [optional]
**type** | **string** | The type of the selected shipping option | [optional]
**method** | **string** | The method of the selected shipping option | [optional]
**price** | **int** | The price of the selected shipping option | [optional]
**tax_amount** | **int** | The tax amount of the selected shipping option | [optional]
**tax_rate** | **int** | The tax rate of the selected shipping option | [optional]
**location** | [**\Klarna\OrderManagement\Model\Location**](Location.md) |  | [optional]
**timeslot** | [**\Klarna\OrderManagement\Model\Timeslot**](Timeslot.md) |  | [optional]
**carrier_product** | [**\Klarna\OrderManagement\Model\CarrierProduct**](CarrierProduct.md) |  | [optional]
**selected_addons** | [**\Klarna\OrderManagement\Model\Addon[]**](Addon.md) | Array consisting of add-ons selected by the consumer, may be empty | [optional]
**class** | **string** | The class of the selected shipping option | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
