# MinimumListingPricePoliciesType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the listing type for which the pricing data is intended. | [optional]
**listing_type** | [**\eBay\Sell\Metadata\Model\ListingTypeEnum**](ListingTypeEnum.md) | This enum value indicates the listing type for which minimum starting price policies are being returned.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; The only applicable values for this method are &lt;code&gt;AUCTION&lt;/code&gt; and &lt;code&gt;FIXED_PRICE_ITEM&lt;/code&gt;.&lt;/span&gt; | [optional]
**min_buy_it_now_price_percent** | **string** | The minimum percentage value that a Buy It Now price for an auction listing must be above the starting bid price. | [optional]
**start_price** | [**\eBay\Sell\Metadata\Model\Amount**](Amount.md) | For auction listings, this field indicates the lowest dollar value that can be set for the item&#39;s starting bid.&lt;br&gt;&lt;br&gt;For fixed-price listings, this field indicates the lower dollar value that can be set for the item&#39;s sale price. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
