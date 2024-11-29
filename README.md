# OpenAPIClient-php

The Metadata API has operations that retrieve configuration details pertaining to the different eBay marketplaces. In addition to marketplace information, the API also has operations that get information that helps sellers list items on eBay.


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/nogrod/ebay-sell-metadata-php-sdk.git"
    }
  ],
  "require": {
    "nogrod/ebay-sell-metadata-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.ebay.com/sell/metadata/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CountryApi* | [**getSalesTaxJurisdictions**](docs/Api/CountryApi.md#getsalestaxjurisdictions) | **GET** /country/{countryCode}/sales_tax_jurisdiction | 
*MarketplaceApi* | [**getAutomotivePartsCompatibilityPolicies**](docs/Api/MarketplaceApi.md#getautomotivepartscompatibilitypolicies) | **GET** /marketplace/{marketplace_id}/get_automotive_parts_compatibility_policies | 
*MarketplaceApi* | [**getExtendedProducerResponsibilityPolicies**](docs/Api/MarketplaceApi.md#getextendedproducerresponsibilitypolicies) | **GET** /marketplace/{marketplace_id}/get_extended_producer_responsibility_policies | 
*MarketplaceApi* | [**getHazardousMaterialsLabels**](docs/Api/MarketplaceApi.md#gethazardousmaterialslabels) | **GET** /marketplace/{marketplace_id}/get_hazardous_materials_labels | 
*MarketplaceApi* | [**getItemConditionPolicies**](docs/Api/MarketplaceApi.md#getitemconditionpolicies) | **GET** /marketplace/{marketplace_id}/get_item_condition_policies | 
*MarketplaceApi* | [**getListingStructurePolicies**](docs/Api/MarketplaceApi.md#getlistingstructurepolicies) | **GET** /marketplace/{marketplace_id}/get_listing_structure_policies | 
*MarketplaceApi* | [**getNegotiatedPricePolicies**](docs/Api/MarketplaceApi.md#getnegotiatedpricepolicies) | **GET** /marketplace/{marketplace_id}/get_negotiated_price_policies | 
*MarketplaceApi* | [**getProductSafetyLabels**](docs/Api/MarketplaceApi.md#getproductsafetylabels) | **GET** /marketplace/{marketplace_id}/get_product_safety_labels | 
*MarketplaceApi* | [**getRegulatoryPolicies**](docs/Api/MarketplaceApi.md#getregulatorypolicies) | **GET** /marketplace/{marketplace_id}/get_regulatory_policies | 
*MarketplaceApi* | [**getReturnPolicies**](docs/Api/MarketplaceApi.md#getreturnpolicies) | **GET** /marketplace/{marketplace_id}/get_return_policies | 

## Models

- [AutomotivePartsCompatibilityPolicy](docs/Model/AutomotivePartsCompatibilityPolicy.md)
- [AutomotivePartsCompatibilityPolicyResponse](docs/Model/AutomotivePartsCompatibilityPolicyResponse.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [ExtendedProducerResponsibility](docs/Model/ExtendedProducerResponsibility.md)
- [ExtendedProducerResponsibilityPolicy](docs/Model/ExtendedProducerResponsibilityPolicy.md)
- [ExtendedProducerResponsibilityPolicyResponse](docs/Model/ExtendedProducerResponsibilityPolicyResponse.md)
- [HazardStatement](docs/Model/HazardStatement.md)
- [HazardousMaterialDetailsResponse](docs/Model/HazardousMaterialDetailsResponse.md)
- [ItemCondition](docs/Model/ItemCondition.md)
- [ItemConditionDescriptor](docs/Model/ItemConditionDescriptor.md)
- [ItemConditionDescriptorConstraint](docs/Model/ItemConditionDescriptorConstraint.md)
- [ItemConditionDescriptorValue](docs/Model/ItemConditionDescriptorValue.md)
- [ItemConditionDescriptorValueConstraint](docs/Model/ItemConditionDescriptorValueConstraint.md)
- [ItemConditionPolicy](docs/Model/ItemConditionPolicy.md)
- [ItemConditionPolicyResponse](docs/Model/ItemConditionPolicyResponse.md)
- [ListingStructurePolicy](docs/Model/ListingStructurePolicy.md)
- [ListingStructurePolicyResponse](docs/Model/ListingStructurePolicyResponse.md)
- [NegotiatedPricePolicy](docs/Model/NegotiatedPricePolicy.md)
- [NegotiatedPricePolicyResponse](docs/Model/NegotiatedPricePolicyResponse.md)
- [Pictogram](docs/Model/Pictogram.md)
- [ProductSafetyLabelPictogram](docs/Model/ProductSafetyLabelPictogram.md)
- [ProductSafetyLabelStatement](docs/Model/ProductSafetyLabelStatement.md)
- [ProductSafetyLabelsResponse](docs/Model/ProductSafetyLabelsResponse.md)
- [RegulatoryAttribute](docs/Model/RegulatoryAttribute.md)
- [RegulatoryPolicy](docs/Model/RegulatoryPolicy.md)
- [RegulatoryPolicyResponse](docs/Model/RegulatoryPolicyResponse.md)
- [ReturnPolicy](docs/Model/ReturnPolicy.md)
- [ReturnPolicyDetails](docs/Model/ReturnPolicyDetails.md)
- [ReturnPolicyResponse](docs/Model/ReturnPolicyResponse.md)
- [SalesTaxJurisdiction](docs/Model/SalesTaxJurisdiction.md)
- [SalesTaxJurisdictions](docs/Model/SalesTaxJurisdictions.md)
- [SignalWord](docs/Model/SignalWord.md)
- [TimeDuration](docs/Model/TimeDuration.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope**: View public data from eBay


### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.inventory**: View and manage your inventory and offers

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.8.0`
    - Generator version: `7.10.0`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
