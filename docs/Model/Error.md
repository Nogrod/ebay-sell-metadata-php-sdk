# Error

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | The category type for this error or warning. | [optional]
**domain** | **string** | Name for the primary system where the error occurred. This is relevant for application errors. | [optional]
**error_id** | **int** | A unique code associated with this error or warning. | [optional]
**input_ref_ids** | **string[]** | An array of request elements most closely associated to the error. | [optional]
**long_message** | **string** | A more detailed explanation of the error or warning condition. | [optional]
**message** | **string** | Information on how to correct the problem, in the end user&#39;s terms and language where applicable. | [optional]
**output_ref_ids** | **string[]** | An array of request elements most closely associated to the error. | [optional]
**parameters** | [**\eBay\Sell\Metadata\Model\ErrorParameter[]**](ErrorParameter.md) | An array of name/value pairs that provide further details about the error condition. | [optional]
**subdomain** | **string** | The name of the subdomain where the error or warning occurred. | [optional]
**input_ref_infos** | [**\eBay\Sell\Metadata\Model\ErrorParameter[]**](ErrorParameter.md) | An array of reference IDs and associated values that indicate the specific value(s) that caused this error or warning. | [optional]
**severity** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
