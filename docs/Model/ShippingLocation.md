# # ShippingLocation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The localized location name. | [optional]
**shipping_location** | **string** | The name or abbreviation of the shipping location or region. Countries are returned through &lt;a href&#x3D;\&quot;https://www.iso.org/iso-3166-country-codes.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 3166 codes&lt;/a&gt;. This field may also include continents and other larger geographical regions (for example, the Middle East, Southeast Asia), as well as domestic/special locations (like APO/FPO, PO Box, Alaska/Hawaii). The values returned in this field are used in fulfillment business policies (such as in &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/fulfillment_policy/methods/createFulfillmentPolicy#request.shippingOptions.shippingServices.shipToLocations.regionExcluded.regionName\&quot; target&#x3D;\&quot;_blank\&quot;&gt;regionName&lt;/a&gt;) or through the &lt;a href&#x3D;\&quot;/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ShippingDetails.ExcludeShipToLocation\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ExcludeShipToLocation&lt;/a&gt; field in an &lt;b&gt;AddItem&lt;/b&gt; call. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
