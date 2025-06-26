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

## API Endpoints

All URIs are relative to *https://api.ebay.com/sell/metadata/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CompatibilitiesApi* | [**getCompatibilitiesBySpecification**](docs/Api/CompatibilitiesApi.md#getcompatibilitiesbyspecification) | **POST** /compatibilities/get_compatibilities_by_specification | 
*CompatibilitiesApi* | [**getCompatibilityPropertyNames**](docs/Api/CompatibilitiesApi.md#getcompatibilitypropertynames) | **POST** /compatibilities/get_compatibility_property_names | 
*CompatibilitiesApi* | [**getCompatibilityPropertyValues**](docs/Api/CompatibilitiesApi.md#getcompatibilitypropertyvalues) | **POST** /compatibilities/get_compatibility_property_values | 
*CompatibilitiesApi* | [**getMultiCompatibilityPropertyValues**](docs/Api/CompatibilitiesApi.md#getmulticompatibilitypropertyvalues) | **POST** /compatibilities/get_multi_compatibility_property_values | 
*CompatibilitiesApi* | [**getProductCompatibilities**](docs/Api/CompatibilitiesApi.md#getproductcompatibilities) | **POST** /compatibilities/get_product_compatibilities | 
*CountryApi* | [**getSalesTaxJurisdictions**](docs/Api/CountryApi.md#getsalestaxjurisdictions) | **GET** /country/{countryCode}/sales_tax_jurisdiction | 
*MarketplaceApi* | [**getAutomotivePartsCompatibilityPolicies**](docs/Api/MarketplaceApi.md#getautomotivepartscompatibilitypolicies) | **GET** /marketplace/{marketplace_id}/get_automotive_parts_compatibility_policies | 
*MarketplaceApi* | [**getCategoryPolicies**](docs/Api/MarketplaceApi.md#getcategorypolicies) | **GET** /marketplace/{marketplace_id}/get_category_policies | 
*MarketplaceApi* | [**getClassifiedAdPolicies**](docs/Api/MarketplaceApi.md#getclassifiedadpolicies) | **GET** /marketplace/{marketplace_id}/get_classified_ad_policies | 
*MarketplaceApi* | [**getCurrencies**](docs/Api/MarketplaceApi.md#getcurrencies) | **GET** /marketplace/{marketplace_id}/get_currencies | 
*MarketplaceApi* | [**getExtendedProducerResponsibilityPolicies**](docs/Api/MarketplaceApi.md#getextendedproducerresponsibilitypolicies) | **GET** /marketplace/{marketplace_id}/get_extended_producer_responsibility_policies | 
*MarketplaceApi* | [**getHazardousMaterialsLabels**](docs/Api/MarketplaceApi.md#gethazardousmaterialslabels) | **GET** /marketplace/{marketplace_id}/get_hazardous_materials_labels | 
*MarketplaceApi* | [**getItemConditionPolicies**](docs/Api/MarketplaceApi.md#getitemconditionpolicies) | **GET** /marketplace/{marketplace_id}/get_item_condition_policies | 
*MarketplaceApi* | [**getListingStructurePolicies**](docs/Api/MarketplaceApi.md#getlistingstructurepolicies) | **GET** /marketplace/{marketplace_id}/get_listing_structure_policies | 
*MarketplaceApi* | [**getListingTypePolicies**](docs/Api/MarketplaceApi.md#getlistingtypepolicies) | **GET** /marketplace/{marketplace_id}/get_listing_type_policies | 
*MarketplaceApi* | [**getMotorsListingPolicies**](docs/Api/MarketplaceApi.md#getmotorslistingpolicies) | **GET** /marketplace/{marketplace_id}/get_motors_listing_policies | 
*MarketplaceApi* | [**getNegotiatedPricePolicies**](docs/Api/MarketplaceApi.md#getnegotiatedpricepolicies) | **GET** /marketplace/{marketplace_id}/get_negotiated_price_policies | 
*MarketplaceApi* | [**getProductSafetyLabels**](docs/Api/MarketplaceApi.md#getproductsafetylabels) | **GET** /marketplace/{marketplace_id}/get_product_safety_labels | 
*MarketplaceApi* | [**getRegulatoryPolicies**](docs/Api/MarketplaceApi.md#getregulatorypolicies) | **GET** /marketplace/{marketplace_id}/get_regulatory_policies | 
*MarketplaceApi* | [**getReturnPolicies**](docs/Api/MarketplaceApi.md#getreturnpolicies) | **GET** /marketplace/{marketplace_id}/get_return_policies | 
*MarketplaceApi* | [**getShippingPolicies**](docs/Api/MarketplaceApi.md#getshippingpolicies) | **GET** /marketplace/{marketplace_id}/get_shipping_policies | 
*MarketplaceApi* | [**getSiteVisibilityPolicies**](docs/Api/MarketplaceApi.md#getsitevisibilitypolicies) | **GET** /marketplace/{marketplace_id}/get_site_visibility_policies | 

## Models

- [Amount](docs/Model/Amount.md)
- [AutomotivePartsCompatibilityPolicy](docs/Model/AutomotivePartsCompatibilityPolicy.md)
- [AutomotivePartsCompatibilityPolicyResponse](docs/Model/AutomotivePartsCompatibilityPolicyResponse.md)
- [CategoryPolicy](docs/Model/CategoryPolicy.md)
- [CategoryPolicyResponse](docs/Model/CategoryPolicyResponse.md)
- [ClassifiedAdPolicy](docs/Model/ClassifiedAdPolicy.md)
- [ClassifiedAdPolicyResponse](docs/Model/ClassifiedAdPolicyResponse.md)
- [Compatibility](docs/Model/Compatibility.md)
- [CompatibilityDetails](docs/Model/CompatibilityDetails.md)
- [Currency](docs/Model/Currency.md)
- [DisabledProductFilter](docs/Model/DisabledProductFilter.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [ExtendedProducerResponsibility](docs/Model/ExtendedProducerResponsibility.md)
- [ExtendedProducerResponsibilityPolicy](docs/Model/ExtendedProducerResponsibilityPolicy.md)
- [ExtendedProducerResponsibilityPolicyResponse](docs/Model/ExtendedProducerResponsibilityPolicyResponse.md)
- [GetCurrenciesResponse](docs/Model/GetCurrenciesResponse.md)
- [HazardStatement](docs/Model/HazardStatement.md)
- [HazardousMaterialDetailsResponse](docs/Model/HazardousMaterialDetailsResponse.md)
- [ItemCondition](docs/Model/ItemCondition.md)
- [ItemConditionDescriptor](docs/Model/ItemConditionDescriptor.md)
- [ItemConditionDescriptorConstraint](docs/Model/ItemConditionDescriptorConstraint.md)
- [ItemConditionDescriptorValue](docs/Model/ItemConditionDescriptorValue.md)
- [ItemConditionDescriptorValueConstraint](docs/Model/ItemConditionDescriptorValueConstraint.md)
- [ItemConditionPolicy](docs/Model/ItemConditionPolicy.md)
- [ItemConditionPolicyResponse](docs/Model/ItemConditionPolicyResponse.md)
- [ListingDuration](docs/Model/ListingDuration.md)
- [ListingStructurePolicy](docs/Model/ListingStructurePolicy.md)
- [ListingStructurePolicyResponse](docs/Model/ListingStructurePolicyResponse.md)
- [ListingTypePoliciesResponse](docs/Model/ListingTypePoliciesResponse.md)
- [ListingTypePolicy](docs/Model/ListingTypePolicy.md)
- [LocalListingDistance](docs/Model/LocalListingDistance.md)
- [MotorsListingPoliciesResponse](docs/Model/MotorsListingPoliciesResponse.md)
- [MotorsListingPolicy](docs/Model/MotorsListingPolicy.md)
- [MultiCompatibilityPropertyValuesRequest](docs/Model/MultiCompatibilityPropertyValuesRequest.md)
- [MultiCompatibilityPropertyValuesResponse](docs/Model/MultiCompatibilityPropertyValuesResponse.md)
- [NegotiatedPricePolicy](docs/Model/NegotiatedPricePolicy.md)
- [NegotiatedPricePolicyResponse](docs/Model/NegotiatedPricePolicyResponse.md)
- [Pagination](docs/Model/Pagination.md)
- [PaginationInput](docs/Model/PaginationInput.md)
- [Pictogram](docs/Model/Pictogram.md)
- [ProductIdentifier](docs/Model/ProductIdentifier.md)
- [ProductRequest](docs/Model/ProductRequest.md)
- [ProductResponse](docs/Model/ProductResponse.md)
- [ProductResponseCompatibilityDetails](docs/Model/ProductResponseCompatibilityDetails.md)
- [ProductSafetyLabelPictogram](docs/Model/ProductSafetyLabelPictogram.md)
- [ProductSafetyLabelStatement](docs/Model/ProductSafetyLabelStatement.md)
- [ProductSafetyLabelsResponse](docs/Model/ProductSafetyLabelsResponse.md)
- [PropertyFilterInner](docs/Model/PropertyFilterInner.md)
- [PropertyNamesRequest](docs/Model/PropertyNamesRequest.md)
- [PropertyNamesResponse](docs/Model/PropertyNamesResponse.md)
- [PropertyNamesResponseProperties](docs/Model/PropertyNamesResponseProperties.md)
- [PropertyNamesResponsePropertyNameMetadata](docs/Model/PropertyNamesResponsePropertyNameMetadata.md)
- [PropertyNamesResponsePropertyNames](docs/Model/PropertyNamesResponsePropertyNames.md)
- [PropertyValues](docs/Model/PropertyValues.md)
- [PropertyValuesRequest](docs/Model/PropertyValuesRequest.md)
- [PropertyValuesResponse](docs/Model/PropertyValuesResponse.md)
- [RegulatoryAttribute](docs/Model/RegulatoryAttribute.md)
- [RegulatoryPolicy](docs/Model/RegulatoryPolicy.md)
- [RegulatoryPolicyResponse](docs/Model/RegulatoryPolicyResponse.md)
- [ReturnPolicy](docs/Model/ReturnPolicy.md)
- [ReturnPolicyDetails](docs/Model/ReturnPolicyDetails.md)
- [ReturnPolicyResponse](docs/Model/ReturnPolicyResponse.md)
- [SalesTaxJurisdiction](docs/Model/SalesTaxJurisdiction.md)
- [SalesTaxJurisdictions](docs/Model/SalesTaxJurisdictions.md)
- [ShippingPoliciesResponse](docs/Model/ShippingPoliciesResponse.md)
- [ShippingPolicy](docs/Model/ShippingPolicy.md)
- [SignalWord](docs/Model/SignalWord.md)
- [SiteVisibilityPoliciesResponse](docs/Model/SiteVisibilityPoliciesResponse.md)
- [SiteVisibilityPolicy](docs/Model/SiteVisibilityPolicy.md)
- [SortOrderInner](docs/Model/SortOrderInner.md)
- [SortOrderProperties](docs/Model/SortOrderProperties.md)
- [SpecificationRequest](docs/Model/SpecificationRequest.md)
- [SpecificationResponse](docs/Model/SpecificationResponse.md)
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

- API version: `v1.11.0`
    - Generator version: `7.14.0`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
