# eBay\Sell\Metadata\CompatibilitiesApi

All URIs are relative to https://api.ebay.com/sell/metadata/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCompatibilitiesBySpecification()**](CompatibilitiesApi.md#getCompatibilitiesBySpecification) | **POST** /compatibilities/get_compatibilities_by_specification |  |
| [**getCompatibilityPropertyNames()**](CompatibilitiesApi.md#getCompatibilityPropertyNames) | **POST** /compatibilities/get_compatibility_property_names |  |
| [**getCompatibilityPropertyValues()**](CompatibilitiesApi.md#getCompatibilityPropertyValues) | **POST** /compatibilities/get_compatibility_property_values |  |
| [**getMultiCompatibilityPropertyValues()**](CompatibilitiesApi.md#getMultiCompatibilityPropertyValues) | **POST** /compatibilities/get_multi_compatibility_property_values |  |
| [**getProductCompatibilities()**](CompatibilitiesApi.md#getProductCompatibilities) | **POST** /compatibilities/get_product_compatibilities |  |


## `getCompatibilitiesBySpecification()`

```php
getCompatibilitiesBySpecification($x_ebay_c_marketplace_id, $specification_request): \eBay\Sell\Metadata\Model\SpecificationResponse
```



This method is used to retrieve all compatible application name-value pairs for a part based on the provided specification(s).<br><br>The part's relevant dimensions and/or characteristics can be provided through the <b>specifications</b> container. For example, when retrieving compatible application name-value pairs for a tire, the tire's dimensions (such as the section width or rim diameter) should be provided.<br><br>By default, all compatible application name-value pairs for the specifications are returned. You can limit the size of the result set by using the <b>compatibilityPropertyFilters</b> array to specify the properties (such as make, model, year, or trim) you wish to be included in the response.<br><br><span class=\"tablenote\"><b>Note:</b> The <a href=\"/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyNames\" target=\"_blank \">getCompatibilityPropertyNames</a> and <a href=\"/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyValues\" target=\"_blank \">getCompatibilityPropertyValues</a> methods can be used to retrieve valid property names and values that can be used as the name-value pairs to define specifications.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Metadata\Api\CompatibilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This header identifies the seller's eBay marketplace.<br><br>See <a href=\"/api-docs/sell/metadata/overview.html#requirements\" target=\"_blank \">Metadata API requirements and restrictions</a> for supported values.
$specification_request = new \eBay\Sell\Metadata\Model\SpecificationRequest(); // \eBay\Sell\Metadata\Model\SpecificationRequest | This type defines the properties and specifications to use to search for compatibilities.

try {
    $result = $apiInstance->getCompatibilitiesBySpecification($x_ebay_c_marketplace_id, $specification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompatibilitiesApi->getCompatibilitiesBySpecification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_ebay_c_marketplace_id** | **string**| This header identifies the seller&#39;s eBay marketplace.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/metadata/overview.html#requirements\&quot; target&#x3D;\&quot;_blank \&quot;&gt;Metadata API requirements and restrictions&lt;/a&gt; for supported values. | |
| **specification_request** | [**\eBay\Sell\Metadata\Model\SpecificationRequest**](../Model/SpecificationRequest.md)| This type defines the properties and specifications to use to search for compatibilities. | [optional] |

### Return type

[**\eBay\Sell\Metadata\Model\SpecificationResponse**](../Model/SpecificationResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompatibilityPropertyNames()`

```php
getCompatibilityPropertyNames($x_ebay_c_marketplace_id, $property_names_request): \eBay\Sell\Metadata\Model\PropertyNamesResponse
```



This method is used to retrieve product compatibility property names for the specified compatibility-enabled category.<br><br>Compatibility property names can be used alongside the corresponding compatibility property value (retrieved using the <a href=\"/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyValues\" target=\"_blank \">getCompatibilityPropertyValues</a> method) to describe the assembly for which an item is compatible.<br><br>The <b>categoryId</b> of the compatibility-enabled category for which to retrieve compatibility property names is required in the request body.<br><br>By default, all property names within the compatibility category of the specified compatibility-enable category are returned. You can limit the size of the result set by using the <b>dataset</b> array to specify the types of properties you want returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Metadata\Api\CompatibilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This header identifies the seller's eBay marketplace.<br><br>See <a href=\"/api-docs/sell/metadata/overview.html#requirements\" target=\"_blank \">Metadata API requirements and restrictions</a> for supported values.
$property_names_request = new \eBay\Sell\Metadata\Model\PropertyNamesRequest(); // \eBay\Sell\Metadata\Model\PropertyNamesRequest | This type defines the properties used to retrieve compatibility property names.

try {
    $result = $apiInstance->getCompatibilityPropertyNames($x_ebay_c_marketplace_id, $property_names_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompatibilitiesApi->getCompatibilityPropertyNames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_ebay_c_marketplace_id** | **string**| This header identifies the seller&#39;s eBay marketplace.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/metadata/overview.html#requirements\&quot; target&#x3D;\&quot;_blank \&quot;&gt;Metadata API requirements and restrictions&lt;/a&gt; for supported values. | |
| **property_names_request** | [**\eBay\Sell\Metadata\Model\PropertyNamesRequest**](../Model/PropertyNamesRequest.md)| This type defines the properties used to retrieve compatibility property names. | [optional] |

### Return type

[**\eBay\Sell\Metadata\Model\PropertyNamesResponse**](../Model/PropertyNamesResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompatibilityPropertyValues()`

```php
getCompatibilityPropertyValues($x_ebay_c_marketplace_id, $property_values_request): \eBay\Sell\Metadata\Model\PropertyValuesResponse
```



This method is used to retrieve product compatibility property values associated with a single property name, in the specified category.<br><br>Compatibility property values can be used alongside the corresponding compatibility property name (retrieved using the <a href=\"/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyNames\" target=\"_blank \">getCompatibilityPropertyNames</a> method) to describe the assembly for which an item is compatible.<br><br>The <b>categoryId</b> of the compatibility-enabled category for which to retrieve compatibility property values is required in the request body, as well as the <b>propertyName</b> for which you wish to retrieve associated values.<br><br>By default, all property values associated with the specified <b>propertyName</b> are returned. You can limit the size of the result set by using the <b>propertyFilter</b> array. Only property values associated with the specified name-value pairs will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Metadata\Api\CompatibilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This header identifies the seller's eBay marketplace.<br><br>See <a href=\"/api-docs/sell/metadata/overview.html#requirements\" target=\"_blank \">Metadata API requirements and restrictions</a> for supported values.
$property_values_request = new \eBay\Sell\Metadata\Model\PropertyValuesRequest(); // \eBay\Sell\Metadata\Model\PropertyValuesRequest | This type defines the category ID and property name for which to retrieve values.

try {
    $result = $apiInstance->getCompatibilityPropertyValues($x_ebay_c_marketplace_id, $property_values_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompatibilitiesApi->getCompatibilityPropertyValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_ebay_c_marketplace_id** | **string**| This header identifies the seller&#39;s eBay marketplace.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/metadata/overview.html#requirements\&quot; target&#x3D;\&quot;_blank \&quot;&gt;Metadata API requirements and restrictions&lt;/a&gt; for supported values. | |
| **property_values_request** | [**\eBay\Sell\Metadata\Model\PropertyValuesRequest**](../Model/PropertyValuesRequest.md)| This type defines the category ID and property name for which to retrieve values. | [optional] |

### Return type

[**\eBay\Sell\Metadata\Model\PropertyValuesResponse**](../Model/PropertyValuesResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMultiCompatibilityPropertyValues()`

```php
getMultiCompatibilityPropertyValues($x_ebay_c_marketplace_id, $multi_compatibility_property_values_request): \eBay\Sell\Metadata\Model\MultiCompatibilityPropertyValuesResponse
```



This method is used to retrieve product compatibility property values associated with multiple property names, in the specified category.<br><br>Compatibility property values can be used alongside the corresponding compatibility property name (retrieved using the <a href=\"/api-docs/sell/metadata/resources/compatibilities/methods/getCompatibilityPropertyNames\" target=\"_blank \">getCompatibilityPropertyNames</a> method) to describe the assembly for which an item is compatible.<br><br>The <b>categoryId</b> of the compatibility-enabled category for which to retrieve compatibility property values is required in the request body, as well as the <b>propertyNames</b> for which you wish to retrieve associated property values. The <b>propertyFilter</b> array is also required to constrain the output. Only property values associated with the specified name-value pairs will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Metadata\Api\CompatibilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This header identifies the seller's eBay marketplace.<br><br>See <a href=\"/api-docs/sell/metadata/overview.html#requirements\" target=\"_blank \">Metadata API requirements and restrictions</a> for supported values.
$multi_compatibility_property_values_request = new \eBay\Sell\Metadata\Model\MultiCompatibilityPropertyValuesRequest(); // \eBay\Sell\Metadata\Model\MultiCompatibilityPropertyValuesRequest | This type defines the category ID and property names for which to retrieve values.

try {
    $result = $apiInstance->getMultiCompatibilityPropertyValues($x_ebay_c_marketplace_id, $multi_compatibility_property_values_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompatibilitiesApi->getMultiCompatibilityPropertyValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_ebay_c_marketplace_id** | **string**| This header identifies the seller&#39;s eBay marketplace.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/metadata/overview.html#requirements\&quot; target&#x3D;\&quot;_blank \&quot;&gt;Metadata API requirements and restrictions&lt;/a&gt; for supported values. | |
| **multi_compatibility_property_values_request** | [**\eBay\Sell\Metadata\Model\MultiCompatibilityPropertyValuesRequest**](../Model/MultiCompatibilityPropertyValuesRequest.md)| This type defines the category ID and property names for which to retrieve values. | [optional] |

### Return type

[**\eBay\Sell\Metadata\Model\MultiCompatibilityPropertyValuesResponse**](../Model/MultiCompatibilityPropertyValuesResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductCompatibilities()`

```php
getProductCompatibilities($x_ebay_c_marketplace_id, $product_request): \eBay\Sell\Metadata\Model\ProductResponse
```



This method is used to retrieve all available item compatibility details for the specified product.<br><br>Item compatibility details can be used to see the properties for which an item is compatible. For example, if you are searching for a part for a specific vehicle, you can use this method to see the years, engine, and/or trim for which the part is compatible. Item compatibility details are returned as name-value pairs.<br><br>The product for which to retrieve item compatibility details must be provided through the <b>productIdentifier</b> field. This value can be either an eBay specific identifier (such as an ePID) or an external identifier (such as a UPC).<br><br>By default, all available item compatibility details for the specified product are returned. You can limit the size of the result set using the <b>dataset</b> or <b>datasetPropertyName</b> fields to specify the types of properties you want returned in the response. The <b>applicationPropertyFilter</b> array can also be used so that only parts compatible with the specified name-value pairs are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Metadata\Api\CompatibilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This header identifies the seller's eBay marketplace.<br><br>See <a href=\"/api-docs/sell/metadata/overview.html#requirements\" target=\"_blank \">Metadata API requirements and restrictions</a> for supported values.
$product_request = new \eBay\Sell\Metadata\Model\ProductRequest(); // \eBay\Sell\Metadata\Model\ProductRequest | This type defines properties for which to find compatibilities.

try {
    $result = $apiInstance->getProductCompatibilities($x_ebay_c_marketplace_id, $product_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompatibilitiesApi->getProductCompatibilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_ebay_c_marketplace_id** | **string**| This header identifies the seller&#39;s eBay marketplace.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/api-docs/sell/metadata/overview.html#requirements\&quot; target&#x3D;\&quot;_blank \&quot;&gt;Metadata API requirements and restrictions&lt;/a&gt; for supported values. | |
| **product_request** | [**\eBay\Sell\Metadata\Model\ProductRequest**](../Model/ProductRequest.md)| This type defines properties for which to find compatibilities. | [optional] |

### Return type

[**\eBay\Sell\Metadata\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
