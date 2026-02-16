# # ShippingHandlingTime

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The localized description of the maximum handling time. | [optional]
**extended_handling** | **bool** | This field is only returned if its value is &lt;code&gt;true&lt;/code&gt;. If returned, it indicates that the corresponding handling time is considered extended handling for the marketplace. Extended handling times may be used for freight shipping, but should generally be avoided if possible, as they might adversely affect the buying decisions of potential customers. | [optional]
**max_handling_time** | **int** | The integer value returned in this field indicates the maximum number of business days that the eBay site allows as a seller&#39;s handling time measured from when the buyer pays for the order. For example,  if the &lt;b&gt;maxHandlingTime&lt;/b&gt; value is set to 1 and  a buyer pays for the order on a Wednesday, the seller would have to ship the item by the next day (Thursday). &lt;br&gt;&lt;br&gt;A &lt;b&gt;maxHandlingTime&lt;/b&gt; value of &lt;code&gt;0&lt;/code&gt; indicates same day handling for an item. In this case, the seller&#39;s handling time commitment depends on the order cut off time set in the seller&#39;s user preferences. This defaults to 2:00 PM local time on most eBay sites. For orders placed (and cleared payment received) before the local order cut off time, the item must be shipped by the end of the current day. For orders completed on or after the order cut off time, the item must be shipped by the end of the following day (excluding weekends and local holidays). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
