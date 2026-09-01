# eBay\Sell\Metadata\ShippingMarketplaceApi

All URIs are relative to https://api.ebay.com/sell/metadata/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getExcludeShippingLocations()**](ShippingMarketplaceApi.md#getExcludeShippingLocations) | **GET** /shipping/marketplace/{marketplace_id}/get_exclude_shipping_locations |  |
| [**getHandlingTimes()**](ShippingMarketplaceApi.md#getHandlingTimes) | **GET** /shipping/marketplace/{marketplace_id}/get_handling_times |  |
| [**getShippingCarriers()**](ShippingMarketplaceApi.md#getShippingCarriers) | **GET** /shipping/marketplace/{marketplace_id}/get_shipping_carriers |  |
| [**getShippingLocations()**](ShippingMarketplaceApi.md#getShippingLocations) | **GET** /shipping/marketplace/{marketplace_id}/get_shipping_locations |  |
| [**getShippingServices()**](ShippingMarketplaceApi.md#getShippingServices) | **GET** /shipping/marketplace/{marketplace_id}/get_shipping_services |  |


## `getExcludeShippingLocations()`

```php
getExcludeShippingLocations($marketplace_id, $accept_language): \eBay\Sell\Metadata\Model\ShippingExcludeLocationResponse
```



This method retrieves a list of locations that the seller can use as excluded shipping locations within their listings or in their fulfillment business policies for the specified marketplace. These are locations that a seller designates as areas where they will not ship items. <p>Excluded shipping locations and ship-to locations are used in tandem at the listing level and in fulfillment business policies. Excluded shipping locations and ship-to locations share a lot of the same values and they should not contradict each other.<p>Manage excluded shipping locations using business policies through the <b>fulfillment_policy</b> resource of the <b>Account v1 API</b>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Metadata\Api\ShippingMarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This path parameter specifies the eBay marketplace for which excluded shipping locations information is retrieved.<br><br>See <a href=\"/develop/api/sell/request_headers#marketplace-id-values\" target=\"_blank\">Marketplace ID values</a> for supported eBay marketplace ID values. <p><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note: </strong> When listing the items on the French Canada, French Belgium, and Dutch Belgium marketplaces, also set the <b>Accept-Language</b> header as needed.</span></p>
$accept_language = 'accept_language_example'; // string | This header is required to retrieve metadata for the French Canada, French Belgium, and Dutch Belgium marketplaces.<br><br>Follow the instructions below to retrieve metadata for these three marketplaces:<ul><li><b>French Belgium</b>: Set the <b>marketplace_id</b> path parameter value to <code>EBAY_BE</code>, and include the <b>Accept-Language</b> header with a value of <code>fr-BE</code>.</li><li><b>Dutch Belgium</b>: Set the <b>marketplace_id</b> path parameter value to <code>EBAY_BE</code>, and include the <b>Accept-Language</b> header with a value of <code>nl-BE</code>.</li><li><b>French Canada</b>: Set the <b>marketplace_id</b> path parameter value to <code>EBAY_CA</code>, and include the <b>Accept-Language</b> header with a value of <code>fr-CA</code>.</li></ul><span class=\"tablenote\"><b>Note:</b> If <code>EBAY_CA</code> is set as the <b>marketplace_id</b> path parameter and the <b>Accept-Language</b> header is not used, the marketplace will default to the English Canada marketplace.</span>

try {
    $result = $apiInstance->getExcludeShippingLocations($marketplace_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMarketplaceApi->getExcludeShippingLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketplace_id** | **string**| This path parameter specifies the eBay marketplace for which excluded shipping locations information is retrieved.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/develop/api/sell/request_headers#marketplace-id-values\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Marketplace ID values&lt;/a&gt; for supported eBay marketplace ID values. &lt;p&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note: &lt;/strong&gt; When listing the items on the French Canada, French Belgium, and Dutch Belgium marketplaces, also set the &lt;b&gt;Accept-Language&lt;/b&gt; header as needed.&lt;/span&gt;&lt;/p&gt; | |
| **accept_language** | **string**| This header is required to retrieve metadata for the French Canada, French Belgium, and Dutch Belgium marketplaces.&lt;br&gt;&lt;br&gt;Follow the instructions below to retrieve metadata for these three marketplaces:&lt;ul&gt;&lt;li&gt;&lt;b&gt;French Belgium&lt;/b&gt;: Set the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter value to &lt;code&gt;EBAY_BE&lt;/code&gt;, and include the &lt;b&gt;Accept-Language&lt;/b&gt; header with a value of &lt;code&gt;fr-BE&lt;/code&gt;.&lt;/li&gt;&lt;li&gt;&lt;b&gt;Dutch Belgium&lt;/b&gt;: Set the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter value to &lt;code&gt;EBAY_BE&lt;/code&gt;, and include the &lt;b&gt;Accept-Language&lt;/b&gt; header with a value of &lt;code&gt;nl-BE&lt;/code&gt;.&lt;/li&gt;&lt;li&gt;&lt;b&gt;French Canada&lt;/b&gt;: Set the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter value to &lt;code&gt;EBAY_CA&lt;/code&gt;, and include the &lt;b&gt;Accept-Language&lt;/b&gt; header with a value of &lt;code&gt;fr-CA&lt;/code&gt;.&lt;/li&gt;&lt;/ul&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; If &lt;code&gt;EBAY_CA&lt;/code&gt; is set as the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter and the &lt;b&gt;Accept-Language&lt;/b&gt; header is not used, the marketplace will default to the English Canada marketplace.&lt;/span&gt; | [optional] |

### Return type

[**\eBay\Sell\Metadata\Model\ShippingExcludeLocationResponse**](../Model/ShippingExcludeLocationResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHandlingTimes()`

```php
getHandlingTimes($marketplace_id, $accept_language): \eBay\Sell\Metadata\Model\ShippingHandlingTimeResponse
```



This method retrieves a list of supported handling times for the specified marketplace. The handling time returned specifies the maximum number of business days the eBay site allows for shipping an item to domestic buyers after receiving a cleared payment. Handling times apply to both domestic and international orders. If the handling time is 1 day, the seller commits to dropping the item off for shipment one business day after payment clears. <p>Manage handing times using business policies through the <b>fulfillment_policy</b> resource of the <b>Account v1 API</b>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Metadata\Api\ShippingMarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This path parameter specifies the eBay marketplace for which handling times information is retrieved.<br><br>See <a href=\"/develop/api/sell/request_headers#marketplace-id-values\" target=\"_blank\">Marketplace ID values</a> for supported eBay marketplace ID values. <p><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note: </strong> When listing the items on the French Canada, French Belgium, and Dutch Belgium marketplaces, also set the <b>Accept-Language</b> header as needed.</span></p>
$accept_language = 'accept_language_example'; // string | This header is required to retrieve metadata for the French Canada, French Belgium, and Dutch Belgium marketplaces.<br><br>Follow the instructions below to retrieve metadata for these three marketplaces:<ul><li><b>French Belgium</b>: Set the <b>marketplace_id</b> path parameter value to <code>EBAY_BE</code>, and include the <b>Accept-Language</b> header with a value of <code>fr-BE</code>.</li><li><b>Dutch Belgium</b>: Set the <b>marketplace_id</b> path parameter value to <code>EBAY_BE</code>, and include the <b>Accept-Language</b> header with a value of <code>nl-BE</code>.</li><li><b>French Canada</b>: Set the <b>marketplace_id</b> path parameter value to <code>EBAY_CA</code>, and include the <b>Accept-Language</b> header with a value of <code>fr-CA</code>.</li></ul><span class=\"tablenote\"><b>Note:</b> If <code>EBAY_CA</code> is set as the <b>marketplace_id</b> path parameter and the <b>Accept-Language</b> header is not used, the marketplace will default to the English Canada marketplace.</span>

try {
    $result = $apiInstance->getHandlingTimes($marketplace_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMarketplaceApi->getHandlingTimes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketplace_id** | **string**| This path parameter specifies the eBay marketplace for which handling times information is retrieved.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/develop/api/sell/request_headers#marketplace-id-values\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Marketplace ID values&lt;/a&gt; for supported eBay marketplace ID values. &lt;p&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note: &lt;/strong&gt; When listing the items on the French Canada, French Belgium, and Dutch Belgium marketplaces, also set the &lt;b&gt;Accept-Language&lt;/b&gt; header as needed.&lt;/span&gt;&lt;/p&gt; | |
| **accept_language** | **string**| This header is required to retrieve metadata for the French Canada, French Belgium, and Dutch Belgium marketplaces.&lt;br&gt;&lt;br&gt;Follow the instructions below to retrieve metadata for these three marketplaces:&lt;ul&gt;&lt;li&gt;&lt;b&gt;French Belgium&lt;/b&gt;: Set the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter value to &lt;code&gt;EBAY_BE&lt;/code&gt;, and include the &lt;b&gt;Accept-Language&lt;/b&gt; header with a value of &lt;code&gt;fr-BE&lt;/code&gt;.&lt;/li&gt;&lt;li&gt;&lt;b&gt;Dutch Belgium&lt;/b&gt;: Set the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter value to &lt;code&gt;EBAY_BE&lt;/code&gt;, and include the &lt;b&gt;Accept-Language&lt;/b&gt; header with a value of &lt;code&gt;nl-BE&lt;/code&gt;.&lt;/li&gt;&lt;li&gt;&lt;b&gt;French Canada&lt;/b&gt;: Set the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter value to &lt;code&gt;EBAY_CA&lt;/code&gt;, and include the &lt;b&gt;Accept-Language&lt;/b&gt; header with a value of &lt;code&gt;fr-CA&lt;/code&gt;.&lt;/li&gt;&lt;/ul&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; If &lt;code&gt;EBAY_CA&lt;/code&gt; is set as the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter and the &lt;b&gt;Accept-Language&lt;/b&gt; header is not used, the marketplace will default to the English Canada marketplace.&lt;/span&gt; | [optional] |

### Return type

[**\eBay\Sell\Metadata\Model\ShippingHandlingTimeResponse**](../Model/ShippingHandlingTimeResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingCarriers()`

```php
getShippingCarriers($marketplace_id, $accept_language): \eBay\Sell\Metadata\Model\ShippingCarrierResponse
```



This method retrieves a list of supported shipping carriers for the specified marketplace. It provides essential information for sellers to understand which shipping carriers are available for use when listing items on that eBay marketplace. Knowing the supported carriers can help sellers optimize their shipping options and ensure efficient delivery to buyers.<p>The value returned in the <b>shippingCarrier</b> field is the enumerated value required when providing shipment tracking information for that carrier.</p><p><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Tip: </strong> Use the <a href=\"/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getshippingservices\">getShippingServices</a> method to explore available shipping services for each carrier.</span></p><p>Manage shipping carriers using business policies through the <b>fulfillment_policy</b> resource of the <b>Account v1 API</b>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Metadata\Api\ShippingMarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This path parameter specifies the eBay marketplace for which shipping carriers information is retrieved.<br><br>See <a href=\"/develop/api/sell/request_headers#marketplace-id-values\" target=\"_blank\">Marketplace ID values</a> for supported eBay marketplace ID values. <p><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note: </strong> When listing the items on the French Canada, French Belgium, and Dutch Belgium marketplaces, also set the <b>Accept-Language</b> header as needed.</span></p>
$accept_language = 'accept_language_example'; // string | This header is required to retrieve metadata for the French Canada, French Belgium, and Dutch Belgium marketplaces.<br><br>Follow the instructions below to retrieve metadata for these three marketplaces:<ul><li><b>French Belgium</b>: Set the <b>marketplace_id</b> path parameter value to <code>EBAY_BE</code>, and include the <b>Accept-Language</b> header with a value of <code>fr-BE</code>.</li><li><b>Dutch Belgium</b>: Set the <b>marketplace_id</b> path parameter value to <code>EBAY_BE</code>, and include the <b>Accept-Language</b> header with a value of <code>nl-BE</code>.</li><li><b>French Canada</b>: Set the <b>marketplace_id</b> path parameter value to <code>EBAY_CA</code>, and include the <b>Accept-Language</b> header with a value of <code>fr-CA</code>.</li></ul><span class=\"tablenote\"><b>Note:</b> If <code>EBAY_CA</code> is set as the <b>marketplace_id</b> path parameter and the <b>Accept-Language</b> header is not used, the marketplace will default to the English Canada marketplace.</span>

try {
    $result = $apiInstance->getShippingCarriers($marketplace_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMarketplaceApi->getShippingCarriers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketplace_id** | **string**| This path parameter specifies the eBay marketplace for which shipping carriers information is retrieved.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/develop/api/sell/request_headers#marketplace-id-values\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Marketplace ID values&lt;/a&gt; for supported eBay marketplace ID values. &lt;p&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note: &lt;/strong&gt; When listing the items on the French Canada, French Belgium, and Dutch Belgium marketplaces, also set the &lt;b&gt;Accept-Language&lt;/b&gt; header as needed.&lt;/span&gt;&lt;/p&gt; | |
| **accept_language** | **string**| This header is required to retrieve metadata for the French Canada, French Belgium, and Dutch Belgium marketplaces.&lt;br&gt;&lt;br&gt;Follow the instructions below to retrieve metadata for these three marketplaces:&lt;ul&gt;&lt;li&gt;&lt;b&gt;French Belgium&lt;/b&gt;: Set the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter value to &lt;code&gt;EBAY_BE&lt;/code&gt;, and include the &lt;b&gt;Accept-Language&lt;/b&gt; header with a value of &lt;code&gt;fr-BE&lt;/code&gt;.&lt;/li&gt;&lt;li&gt;&lt;b&gt;Dutch Belgium&lt;/b&gt;: Set the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter value to &lt;code&gt;EBAY_BE&lt;/code&gt;, and include the &lt;b&gt;Accept-Language&lt;/b&gt; header with a value of &lt;code&gt;nl-BE&lt;/code&gt;.&lt;/li&gt;&lt;li&gt;&lt;b&gt;French Canada&lt;/b&gt;: Set the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter value to &lt;code&gt;EBAY_CA&lt;/code&gt;, and include the &lt;b&gt;Accept-Language&lt;/b&gt; header with a value of &lt;code&gt;fr-CA&lt;/code&gt;.&lt;/li&gt;&lt;/ul&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; If &lt;code&gt;EBAY_CA&lt;/code&gt; is set as the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter and the &lt;b&gt;Accept-Language&lt;/b&gt; header is not used, the marketplace will default to the English Canada marketplace.&lt;/span&gt; | [optional] |

### Return type

[**\eBay\Sell\Metadata\Model\ShippingCarrierResponse**](../Model/ShippingCarrierResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingLocations()`

```php
getShippingLocations($marketplace_id, $accept_language): \eBay\Sell\Metadata\Model\ShippingLocationResponse
```



This method retrieves a list of supported shipping locations for the specified marketplace. It provides sellers with information on where they can ship their items. Sellers can use this information to configure their shipping settings. <p><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Tip: </strong> Use the <a href=\"/develop/api/sell/metadata_api#sell-metadata_api-shipping:marketplace-getexcludeshippinglocations\">getExcludeShippingLocations</a> method to return locations where the seller does not ship.</span></p><p>Manage shipping locations using business policies through the <b>fulfillment_policy</b> resource of the <b>Account v1 API</b>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Metadata\Api\ShippingMarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This path parameter specifies the eBay marketplace for which shipping locations information is retrieved.<br><br>See <a href=\"/develop/api/sell/request_headers#marketplace-id-values\" target=\"_blank\">Marketplace ID values</a> for supported eBay marketplace ID values. <p><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note: </strong> When listing the items on the French Canada, French Belgium, and Dutch Belgium marketplaces, also set the <b>Accept-Language</b> header as needed.</span></p>
$accept_language = 'accept_language_example'; // string | This header is required to retrieve metadata for the French Canada, French Belgium, and Dutch Belgium marketplaces.<br><br>Follow the instructions below to retrieve metadata for these three marketplaces:<ul><li><b>French Belgium</b>: Set the <b>marketplace_id</b> path parameter value to <code>EBAY_BE</code>, and include the <b>Accept-Language</b> header with a value of <code>fr-BE</code>.</li><li><b>Dutch Belgium</b>: Set the <b>marketplace_id</b> path parameter value to <code>EBAY_BE</code>, and include the <b>Accept-Language</b> header with a value of <code>nl-BE</code>.</li><li><b>French Canada</b>: Set the <b>marketplace_id</b> path parameter value to <code>EBAY_CA</code>, and include the <b>Accept-Language</b> header with a value of <code>fr-CA</code>.</li></ul><span class=\"tablenote\"><b>Note:</b> If <code>EBAY_CA</code> is set as the <b>marketplace_id</b> path parameter and the <b>Accept-Language</b> header is not used, the marketplace will default to the English Canada marketplace.</span>

try {
    $result = $apiInstance->getShippingLocations($marketplace_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMarketplaceApi->getShippingLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketplace_id** | **string**| This path parameter specifies the eBay marketplace for which shipping locations information is retrieved.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/develop/api/sell/request_headers#marketplace-id-values\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Marketplace ID values&lt;/a&gt; for supported eBay marketplace ID values. &lt;p&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note: &lt;/strong&gt; When listing the items on the French Canada, French Belgium, and Dutch Belgium marketplaces, also set the &lt;b&gt;Accept-Language&lt;/b&gt; header as needed.&lt;/span&gt;&lt;/p&gt; | |
| **accept_language** | **string**| This header is required to retrieve metadata for the French Canada, French Belgium, and Dutch Belgium marketplaces.&lt;br&gt;&lt;br&gt;Follow the instructions below to retrieve metadata for these three marketplaces:&lt;ul&gt;&lt;li&gt;&lt;b&gt;French Belgium&lt;/b&gt;: Set the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter value to &lt;code&gt;EBAY_BE&lt;/code&gt;, and include the &lt;b&gt;Accept-Language&lt;/b&gt; header with a value of &lt;code&gt;fr-BE&lt;/code&gt;.&lt;/li&gt;&lt;li&gt;&lt;b&gt;Dutch Belgium&lt;/b&gt;: Set the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter value to &lt;code&gt;EBAY_BE&lt;/code&gt;, and include the &lt;b&gt;Accept-Language&lt;/b&gt; header with a value of &lt;code&gt;nl-BE&lt;/code&gt;.&lt;/li&gt;&lt;li&gt;&lt;b&gt;French Canada&lt;/b&gt;: Set the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter value to &lt;code&gt;EBAY_CA&lt;/code&gt;, and include the &lt;b&gt;Accept-Language&lt;/b&gt; header with a value of &lt;code&gt;fr-CA&lt;/code&gt;.&lt;/li&gt;&lt;/ul&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; If &lt;code&gt;EBAY_CA&lt;/code&gt; is set as the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter and the &lt;b&gt;Accept-Language&lt;/b&gt; header is not used, the marketplace will default to the English Canada marketplace.&lt;/span&gt; | [optional] |

### Return type

[**\eBay\Sell\Metadata\Model\ShippingLocationResponse**](../Model/ShippingLocationResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingServices()`

```php
getShippingServices($marketplace_id, $accept_language): \eBay\Sell\Metadata\Model\ShippingServiceResponse
```



This method retrieves a list of shipping services supported for the specified marketplace, including valid shipping services, shipping times, and package constraints such as size and weight.<p>Manage shipping services using business policies through the <b>fulfillment_policy</b> resource of the <b>Account v1 API</b>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Metadata\Api\ShippingMarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This path parameter specifies the eBay marketplace for which shipping services information is retrieved.<br><br>See <a href=\"/develop/api/sell/request_headers#marketplace-id-values\" target=\"_blank\">Marketplace ID values</a> for supported eBay marketplace ID values. <p><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note: </strong> When listing the items on the French Canada, French Belgium, and Dutch Belgium marketplaces, also set the <b>Accept-Language</b> header as needed.</span></p>
$accept_language = 'accept_language_example'; // string | This header is required to retrieve metadata for the French Canada, French Belgium, and Dutch Belgium marketplaces.<br><br>Follow the instructions below to retrieve metadata for these three marketplaces:<ul><li><b>French Belgium</b>: Set the <b>marketplace_id</b> path parameter value to <code>EBAY_BE</code>, and include the <b>Accept-Language</b> header with a value of <code>fr-BE</code>.</li><li><b>Dutch Belgium</b>: Set the <b>marketplace_id</b> path parameter value to <code>EBAY_BE</code>, and include the <b>Accept-Language</b> header with a value of <code>nl-BE</code>.</li><li><b>French Canada</b>: Set the <b>marketplace_id</b> path parameter value to <code>EBAY_CA</code>, and include the <b>Accept-Language</b> header with a value of <code>fr-CA</code>.</li></ul><span class=\"tablenote\"><b>Note:</b> If <code>EBAY_CA</code> is set as the <b>marketplace_id</b> path parameter and the <b>Accept-Language</b> header is not used, the marketplace will default to the English Canada marketplace.</span>

try {
    $result = $apiInstance->getShippingServices($marketplace_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMarketplaceApi->getShippingServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketplace_id** | **string**| This path parameter specifies the eBay marketplace for which shipping services information is retrieved.&lt;br&gt;&lt;br&gt;See &lt;a href&#x3D;\&quot;/develop/api/sell/request_headers#marketplace-id-values\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Marketplace ID values&lt;/a&gt; for supported eBay marketplace ID values. &lt;p&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note: &lt;/strong&gt; When listing the items on the French Canada, French Belgium, and Dutch Belgium marketplaces, also set the &lt;b&gt;Accept-Language&lt;/b&gt; header as needed.&lt;/span&gt;&lt;/p&gt; | |
| **accept_language** | **string**| This header is required to retrieve metadata for the French Canada, French Belgium, and Dutch Belgium marketplaces.&lt;br&gt;&lt;br&gt;Follow the instructions below to retrieve metadata for these three marketplaces:&lt;ul&gt;&lt;li&gt;&lt;b&gt;French Belgium&lt;/b&gt;: Set the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter value to &lt;code&gt;EBAY_BE&lt;/code&gt;, and include the &lt;b&gt;Accept-Language&lt;/b&gt; header with a value of &lt;code&gt;fr-BE&lt;/code&gt;.&lt;/li&gt;&lt;li&gt;&lt;b&gt;Dutch Belgium&lt;/b&gt;: Set the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter value to &lt;code&gt;EBAY_BE&lt;/code&gt;, and include the &lt;b&gt;Accept-Language&lt;/b&gt; header with a value of &lt;code&gt;nl-BE&lt;/code&gt;.&lt;/li&gt;&lt;li&gt;&lt;b&gt;French Canada&lt;/b&gt;: Set the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter value to &lt;code&gt;EBAY_CA&lt;/code&gt;, and include the &lt;b&gt;Accept-Language&lt;/b&gt; header with a value of &lt;code&gt;fr-CA&lt;/code&gt;.&lt;/li&gt;&lt;/ul&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; If &lt;code&gt;EBAY_CA&lt;/code&gt; is set as the &lt;b&gt;marketplace_id&lt;/b&gt; path parameter and the &lt;b&gt;Accept-Language&lt;/b&gt; header is not used, the marketplace will default to the English Canada marketplace.&lt;/span&gt; | [optional] |

### Return type

[**\eBay\Sell\Metadata\Model\ShippingServiceResponse**](../Model/ShippingServiceResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
