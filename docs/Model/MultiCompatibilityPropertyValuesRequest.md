# # MultiCompatibilityPropertyValuesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | **string** | The unique identifier of the eBay leaf category for which to retrieve property values.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/metadata/resources/marketplace/methods/getAutomotivePartsCompatibilityPolicies\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getAutomotivePartsCompatibilityPolicies&lt;/a&gt; method to retrieve a list of categories that support parts compatibility. | [optional]
**property_filters** | [**\eBay\Sell\Metadata\Model\PropertyFilterInner[]**](PropertyFilterInner.md) | This array can be used to specify the compatibility properties used to limit the result set. Only values associated with the specified name-value pairs will be returned in the response.&lt;br&gt;&lt;br&gt;For example, if the &lt;b&gt;propertyName&lt;/b&gt; is set to &lt;code&gt;Year&lt;/code&gt; and the &lt;b&gt;propertyValue&lt;/b&gt; is set to &lt;code&gt;2022&lt;/code&gt;, only compatible vehicles from 2022 will be returned.&lt;br&gt;&lt;br&gt;At least one property name-value pair must be used. | [optional]
**property_names** | **string[]** | This comma-delimited array specifies the names of the properties for which to retrieve associated property values.&lt;br&gt;&lt;br&gt;For example, typical vehicle property names are &#39;Make&#39;, &#39;Model&#39;, &#39;Year&#39;, &#39;Engine&#39;, and &#39;Trim&#39;, but will vary based on the eBay marketplace and the eBay category. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
