<?php

/**
 * MultiCompatibilityPropertyValuesRequest
 *
 * PHP version 8.1
 *
 * @package  eBay\Sell\Metadata
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Metadata API
 *
 * The Metadata API has operations that retrieve configuration details pertaining to the different eBay marketplaces. In addition to marketplace information, the API also has operations that get information that helps sellers list items on eBay.
 *
 * The version of the OpenAPI document: v1.11.0
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eBay\Sell\Metadata\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use eBay\Sell\Metadata\ObjectSerializer;

/**
 * MultiCompatibilityPropertyValuesRequest Class Doc Comment
 *
 * @description This type defines the request fields used in the &lt;b&gt;getMultiCompatibilityPropertyValues&lt;/b&gt; method.
 * @package  eBay\Sell\Metadata
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class MultiCompatibilityPropertyValuesRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'MultiCompatibilityPropertyValuesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'category_id' => 'string',
        'property_filters' => '\eBay\Sell\Metadata\Model\PropertyFilterInner[]',
        'property_names' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'category_id' => null,
        'property_filters' => null,
        'property_names' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'category_id' => false,
        'property_filters' => false,
        'property_names' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'category_id' => 'categoryId',
        'property_filters' => 'propertyFilters',
        'property_names' => 'propertyNames'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'category_id' => 'setCategoryId',
        'property_filters' => 'setPropertyFilters',
        'property_names' => 'setPropertyNames'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'category_id' => 'getCategoryId',
        'property_filters' => 'getPropertyFilters',
        'property_names' => 'getPropertyNames'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('category_id', $data ?? [], null);
        $this->setIfExists('property_filters', $data ?? [], null);
        $this->setIfExists('property_names', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets category_id
     *
     * @return string|null
     */
    public function getCategoryId(): ?string
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string|null $category_id The unique identifier of the eBay leaf category for which to retrieve property values.<br><br>Use the <a href=\"/api-docs/sell/metadata/resources/marketplace/methods/getAutomotivePartsCompatibilityPolicies\" target=\"_blank \">getAutomotivePartsCompatibilityPolicies</a> method to retrieve a list of categories that support parts compatibility.
     *
     * @return $this
     */
    public function setCategoryId(?string $category_id): static
    {
        if (is_null($category_id)) {
            throw new InvalidArgumentException('non-nullable category_id cannot be null');
        }
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets property_filters
     *
     * @return \eBay\Sell\Metadata\Model\PropertyFilterInner[]|null
     */
    public function getPropertyFilters(): ?array
    {
        return $this->container['property_filters'];
    }

    /**
     * Sets property_filters
     *
     * @param \eBay\Sell\Metadata\Model\PropertyFilterInner[]|null $property_filters This array can be used to specify the compatibility properties used to limit the result set. Only values associated with the specified name-value pairs will be returned in the response.<br><br>For example, if the <b>propertyName</b> is set to <code>Year</code> and the <b>propertyValue</b> is set to <code>2022</code>, only compatible vehicles from 2022 will be returned.<br><br>At least one property name-value pair must be used.
     *
     * @return $this
     */
    public function setPropertyFilters(?array $property_filters): static
    {
        if (is_null($property_filters)) {
            throw new InvalidArgumentException('non-nullable property_filters cannot be null');
        }
        $this->container['property_filters'] = $property_filters;

        return $this;
    }

    /**
     * Gets property_names
     *
     * @return string[]|null
     */
    public function getPropertyNames(): ?array
    {
        return $this->container['property_names'];
    }

    /**
     * Sets property_names
     *
     * @param string[]|null $property_names This comma-delimited array specifies the names of the properties for which to retrieve associated property values.<br><br>For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category.
     *
     * @return $this
     */
    public function setPropertyNames(?array $property_names): static
    {
        if (is_null($property_names)) {
            throw new InvalidArgumentException('non-nullable property_names cannot be null');
        }
        $this->container['property_names'] = $property_names;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


