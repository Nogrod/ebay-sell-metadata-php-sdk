# eBay\Sell\Metadata\CountryApi

All URIs are relative to https://api.ebay.com/sell/metadata/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSalesTaxJurisdictions()**](CountryApi.md#getSalesTaxJurisdictions) | **GET** /country/{countryCode}/sales_tax_jurisdiction |  |


## `getSalesTaxJurisdictions()`

```php
getSalesTaxJurisdictions($country_code): \eBay\Sell\Metadata\Model\SalesTaxJurisdictions
```



This method retrieves all sales-tax jurisdictions for the country specified in the <b>countryCode</b> path parameter. Countries with valid sales-tax jurisdictions are Canada and the US.<br><br>The response from this call tells you the jurisdictions for which a seller can configure tax tables. Although setting up tax tables is optional, you can use the <b>createOrReplaceSalesTax</b> method in the <b>Account API</b> call to configure the tax tables for the jurisdictions into which you sell.<br><br><span class=\"tablenote\"><b>Note:</b> Sales-tax tables are only available for the US (EBAY_US) and Canada (EBAY_CA) marketplaces.</span><br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> In the US, eBay now calculates, collects, and remits sales tax to the proper taxing authorities in all 50 states and Washington, DC. Sellers can no longer specify sales-tax rates for these jurisdictions using a tax table.<br><br>However, sellers may continue to use a sales-tax table to set rates for the following US territories:<ul><li>American Samoa (AS)</li><li>Guam (GU)</li><li>Northern Mariana Islands (MP)</li><li>Palau (PW)</li><li>US Virgin Islands (VI)</li></ul>For additional information, refer to <a href=\"https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121 \" target=\"_blank\">Taxes and import charges</a>.</p></div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Sell\Metadata\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Sell\Metadata\Api\CountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | This path parameter specifies the two-letter <a href=\"https://www.iso.org/iso-3166-country-codes.html \" title=\"https://www.iso.org \" target=\"_blank\">ISO 3166</a> country code for the country whose jurisdictions you want to retrieve.<br><br><span class=\"tablenote\"><b>Note:</b> Sales-tax tables are available only for the US and Canada marketplaces. Therefore, the only supported values are:<ul><li><code>US</code></li><li><code>CA</code></li></ul></span>

try {
    $result = $apiInstance->getSalesTaxJurisdictions($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryApi->getSalesTaxJurisdictions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| This path parameter specifies the two-letter &lt;a href&#x3D;\&quot;https://www.iso.org/iso-3166-country-codes.html \&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 3166&lt;/a&gt; country code for the country whose jurisdictions you want to retrieve.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Sales-tax tables are available only for the US and Canada marketplaces. Therefore, the only supported values are:&lt;ul&gt;&lt;li&gt;&lt;code&gt;US&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;CA&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/span&gt; | |

### Return type

[**\eBay\Sell\Metadata\Model\SalesTaxJurisdictions**](../Model/SalesTaxJurisdictions.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
