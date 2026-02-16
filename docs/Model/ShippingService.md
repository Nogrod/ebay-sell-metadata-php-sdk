# # ShippingService

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | This field returns the localized name of the shipping service. | [optional]
**international_service** | **bool** | A value of &lt;code&gt;true&lt;/code&gt; indicates that the shipping service is international. An international shipping service option is required if an item is being shipped from one country (origin) to another (destination). | [optional]
**max_shipping_time** | **int** | This value indicates the maximum number of business days that it takes the &lt;b&gt;shippingCarrier&lt;/b&gt; to ship an item using the corresponding &lt;b&gt;shippingService&lt;/b&gt;. | [optional]
**min_shipping_time** | **int** | This value indicates the minimum number of business days that it takes the &lt;b&gt;shippingCarrier&lt;/b&gt; to ship an item using the corresponding &lt;b&gt;shippingService&lt;/b&gt;. | [optional]
**package_limits** | [**\eBay\Sell\Metadata\Model\PackageLimits**](PackageLimits.md) |  | [optional]
**shipping_carrier** | **string** | The code for the shipping carrier returned, for example, &lt;code&gt;UPS&lt;/code&gt;, &lt;code&gt;FedEx&lt;/code&gt;, and &lt;code&gt;USPS&lt;/code&gt;. | [optional]
**shipping_category** | **string** | The shipping category of the shipping service including:  &lt;code&gt;ECONOMY&lt;/code&gt;, &lt;code&gt;STANDARD&lt;/code&gt;, &lt;code&gt;EXPEDITED&lt;/code&gt;, &lt;code&gt;ONE_DAY&lt;/code&gt;, &lt;code&gt;PICKUP&lt;/code&gt;, and other similar categories. | [optional]
**shipping_cost_types** | **string[]** | A list of shipping cost types that this shipping service option supports. For example, &lt;code&gt;FLAT_RATE&lt;/code&gt;, &lt;code&gt;CALCULATED&lt;/code&gt;, and &lt;code&gt;FREIGHT&lt;/code&gt;. | [optional]
**shipping_service** | **string** | The name of the shipping service. The shipping service named here can only be used in listings or in business policies if &lt;b&gt;validForSellingFlow&lt;/b&gt; is &lt;code&gt;true&lt;/code&gt;. The value returned in this field is used in listing APIs and business policies to set the shipping service. | [optional]
**valid_for_selling_flow** | **bool** | A value of &lt;code&gt;true&lt;/code&gt; indicates that the &lt;b&gt;shippingService&lt;/b&gt; can be set as an available shipping service in the listing or through the fulfillment business policy. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
