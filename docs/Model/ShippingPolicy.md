# ShippingPolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | **string** | The unique identifier of the eBay leaf category for which metadata is being returned. | [optional]
**category_tree_id** | **string** | The unique identifier of the category tree. | [optional]
**global_shipping_enabled** | **bool** | Indicates if the Global Shipping Program (GSP) is supported for the category. | [optional]
**group1_max_flat_shipping_cost** | [**\eBay\Sell\Metadata\Model\Amount**](Amount.md) | Returns the applicable max cap per shipping cost for shipping service group1. | [optional]
**group2_max_flat_shipping_cost** | [**\eBay\Sell\Metadata\Model\Amount**](Amount.md) | Returns the applicable max cap per shipping cost for shipping service group2. | [optional]
**group3_max_flat_shipping_cost** | [**\eBay\Sell\Metadata\Model\Amount**](Amount.md) | Returns the applicable max cap per shipping cost for shipping service group3. | [optional]
**handling_time_enabled** | **bool** | Indicates if a seller&#39;s stated handling time is enabled for a category. A handling time is generally needed for items that are shipped to the buyer, but not necessarily applicable to freight shipping or local pickup. | [optional]
**max_flat_shipping_cost** | [**\eBay\Sell\Metadata\Model\Amount**](Amount.md) | The maximum cost the seller can charge for the first domestic flat-rate shipping service. Mutually exclusive with the GroupNMaxFlatShippingCost elements. | [optional]
**shipping_terms_required** | **bool** | Indicates whether the category requires sellers to specify shipping details at listing time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
