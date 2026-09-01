# CategoryPolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_pay_enabled** | **bool** | If this field is returned as true, the corresponding category supports immediate payment for listings. The immediate payment feature is applicable to fixed-price listings, to auction listings with the Buy It Now option enabled, and for a motor vehicle listing that requires an initial deposit. If the immediate payment feature is enabled for a listing, the buyer must pay immediately after clicking the &#39;Buy it Now&#39; button. This field is only returned when true. | [optional]
**b2b_vat_enabled** | **bool** | If this field is returned as true, the corresponding category supports business-to-business (B2B) VAT listings. If this field is not present, the category does not B2B VAT listings. This field is not returned when false. This feature is applicable to the eBay Germany (DE), Austria (AT), and Switzerland (CH) sites only. | [optional]
**category_id** | **string** | The unique identifier of the eBay leaf category for which metadata is being returned. | [optional]
**category_tree_id** | **string** | The unique identifier of the category tree. | [optional]
**ean_support** | **string** | This enumerated value indicates whether or not European Article Numbers (EANs) are supported/required when listing products in the category. | [optional]
**expired** | **bool** | If this field is returned as true, the corresponding category is no longer a valid eBay category on the site, and items may not be listed in this category. This field is not returned when false. | [optional]
**intangible_enabled** | **bool** | If this field is returned as true, the category supports the listing of intangible goods or services. | [optional]
**isbn_support** | **string** | This enumerated value indicates whether or not International Standard Book Numbers (ISBNs) are supported/required when listing products in the specified category. | [optional]
**lsd** | **bool** | If this field (Lot Size Disabled) is returned as &lt;code&gt;true&lt;/code&gt;, the corresponding category does not support lot listings. A lot listing is a listing that features multiple related items that must be purchased by one buyer in one transaction. &lt;p&gt;This field is only returned when &lt;code&gt;true&lt;/code&gt; (not returned when false).&lt;/p&gt; | [optional]
**minimum_reserve_price** | **float** | Indicates the Minimum Reserve Price for an auction listing in this category. If there is no Minimum Reserve Price, a value of 0.0 is returned in this field. | [optional]
**orpa** | **bool** | This field (Override Reserve Price Allowed) is returned as true if the eBay marketplace&#39;s default policy is to allow reserve prices for auction listings, but the corresponding category does not allow a reserve price. This field is not returned if the marketplace does not permit reserve prices. | [optional]
**orra** | **bool** | If this field (Override Reduce Reserve Allowed) is returned as &lt;code&gt;true&lt;/code&gt;, the seller can reduce or remove a reserve price that had already been reduced for an active auction listing. | [optional]
**payment_methods** | **string[]** | An array that indicates the acceptable offline payment methods that can be used when listing an item for sale in the corresponding category. | [optional]
**reduce_reserve_allowed** | **bool** | If true, ReduceReserveAllowed indicates that all categories on the site allow the seller to reduce an item&#39;s reserve price. If false, this field is not returned in the response and all categories on the site do not normally allow sellers to reduce an item&#39;s reserve price. The Category ORRA (override reduce reserve price) field can override (or toggle) the reserve price reduction setting for a given category. | [optional]
**reserve_price_allowed** | **bool** | This field indicates whether reserve prices are allowed for auction listings in this category. This field returns as true when the category supports reserve prices, or false if the eBay marketplace does not permit reserve prices or the category override blocks reserve prices (orpa is true). | [optional]
**upc_support** | **string** | This enumerated value indicates whether or not the category on the specified eBay site supports the use of Universal Product Codes (UPCs) to help create a listing. | [optional]
**value_category** | **bool** | When returned as &lt;code&gt;true&lt;/code&gt;, this boolean indicates that the leaf category for the specified site is designated by eBay as a value category. Value categories can be used as a secondary category for a listing at no extra charge. | [optional]
**virtual** | **bool** | If this field is returned as true, the corresponding category is an eBay virtual category, a category in which items may not be listed. This field is not returned when false. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
