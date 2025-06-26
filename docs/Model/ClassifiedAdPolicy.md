# # ClassifiedAdPolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_format_enabled** | **string** | This enumerated value indicates the type or status of available Classified Ad formats for this category. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/metadata/types/sel:AdFormatEnabledEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**category_id** | **string** | The unique identifier of the eBay leaf category for which metadata is being returned. | [optional]
**category_tree_id** | **string** | The unique identifier of the category tree. | [optional]
**classified_ad_auto_accept_enabled** | **bool** | Indicates whether the category supports the Best Offer Automatic Accept feature for Classified Ad listings. | [optional]
**classified_ad_auto_decline_enabled** | **bool** | Indicates whether the category supports the Best Offer Automatic Reject feature for Classified Ad listings. | [optional]
**classified_ad_best_offer_enabled** | **string** | This enumerated value indicates if Best Offer is enabled, disabled, or required for Classified Ad listings in this category. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/metadata/types/sel:ClassifiedAdBestOfferEnabledEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**classified_ad_company_name_enabled** | **bool** | Indicates whether this category supports including a company name in the seller&#39;s contact information. This element is for &lt;b&gt;For Sale By Owner&lt;/b&gt; listings. | [optional]
**classified_ad_contact_by_address_enabled** | **bool** | Indicates whether this category supports including an address in the seller&#39;s contact information. This element is for &lt;b&gt;For Sale By Owner&lt;/b&gt; listings. | [optional]
**classified_ad_contact_by_email_enabled** | **bool** | Indicates whether most categories support including an email address in the seller&#39;s contact information. | [optional]
**classified_ad_contact_by_phone_enabled** | **bool** | Indicates whether most categories support including a phone number in the seller&#39;s contact information. | [optional]
**classified_ad_counter_offer_enabled** | **bool** | Indicates whether counter offers are allowed on Best offers for the category. | [optional]
**classified_ad_payment_method_enabled** | **string** | This enumerated value indicates support for the payment method being displayed to the user for the category. Even if enabled, checkout may or may not be enabled. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/metadata/types/sel:ClassifiedAdPaymentMethodEnabledEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**classified_ad_phone_count** | **int** | Indicates how many contact phone numbers can be specified in contact information for the category. This element is for &lt;b&gt;For Sale By Owner&lt;/b&gt; listings. | [optional]
**classified_ad_shipping_method_enabled** | **bool** | Indicates if shipping methods can be specified and displayed in the &lt;b&gt;View Item&lt;/b&gt; page for the category. | [optional]
**classified_ad_street_count** | **int** | Indicates how many street addresses can be specified in contact information for the category. This element is for &lt;b&gt;For Sale By Owner&lt;/b&gt; listings. | [optional]
**seller_contact_details_enabled** | **bool** | Indicates whether this category supports seller-level contact information for Classified Ad listings. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
