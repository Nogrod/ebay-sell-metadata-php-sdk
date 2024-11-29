# # ItemConditionDescriptorConstraint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applicable_to_condition_descriptor_ids** | **string[]** | This array is returned if the corresponding condition descriptor requires that one or more other associated condition descriptors must also be specified in a listing. The condition descriptor IDs for the associated condition descriptors are returned here.&lt;br&gt;&lt;br&gt;For example, the &lt;code&gt;Grade&lt;/code&gt; and &lt;code&gt;Grader&lt;/code&gt; condition descriptors must always be specified together in a listing for Graded cards. | [optional]
**cardinality** | **string** | The value returned in this field indicates whether a condition descriptor can have a single value or multiple values. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/metadata/types/sel:CardinalityEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**default_condition_descriptor_value_id** | **string** | The default condition descriptor value that will be set if there are multiple values. | [optional]
**max_length** | **int** | The maximum characters allowed for a condition descriptor. This field is only returned/applicable for condition descriptors that allow free text for condition descriptor values. | [optional]
**mode** | **string** | The value returned in this field indicates whether the supported values for a condition descriptor are predefined or if the seller manually specified the value.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; &lt;code&gt;FREE_TEXT&lt;/code&gt; is currently only applicable to the Certification Number condition descriptor.&lt;/span&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/metadata/types/sel:ModeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**usage** | **string** | This value indicates whether or not the condition descriptor is required for the item condition. Currently, this field is only returned if the condition descriptor is required for the item condition. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/metadata/types/sel:DescriptorUsageEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
