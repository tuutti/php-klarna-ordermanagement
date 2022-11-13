<?php
/**
 * UpdateMerchantReferences
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Klarna\OrderManagement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klarna Order Managment API
 *
 * API to handle order lifecycle
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Klarna\OrderManagement\Model;

use \ArrayAccess;
use \Klarna\ObjectSerializer;

/**
 * UpdateMerchantReferences Class Doc Comment
 *
 * @category Class
 * @package  Klarna\OrderManagement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateMerchantReferences implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Update merchant references';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchant_reference1' => 'string',
        'merchant_reference2' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchant_reference1' => null,
        'merchant_reference2' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'merchant_reference1' => 'merchant_reference1',
        'merchant_reference2' => 'merchant_reference2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_reference1' => 'setMerchantReference1',
        'merchant_reference2' => 'setMerchantReference2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_reference1' => 'getMerchantReference1',
        'merchant_reference2' => 'getMerchantReference2'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['merchant_reference1'] = $data['merchant_reference1'] ?? null;
        $this->container['merchant_reference2'] = $data['merchant_reference2'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['merchant_reference1']) && (mb_strlen($this->container['merchant_reference1']) > 255)) {
            $invalidProperties[] = "invalid value for 'merchant_reference1', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['merchant_reference1']) && (mb_strlen($this->container['merchant_reference1']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchant_reference1', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['merchant_reference2']) && (mb_strlen($this->container['merchant_reference2']) > 255)) {
            $invalidProperties[] = "invalid value for 'merchant_reference2', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['merchant_reference2']) && (mb_strlen($this->container['merchant_reference2']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchant_reference2', the character length must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets merchant_reference1
     *
     * @return string|null
     */
    public function getMerchantReference1()
    {
        return $this->container['merchant_reference1'];
    }

    /**
     * Sets merchant_reference1
     *
     * @param string|null $merchant_reference1 New merchant reference 1. Old reference will be overwritten if this field is present.
     *
     * @return self
     */
    public function setMerchantReference1($merchant_reference1)
    {
        if (!is_null($merchant_reference1) && (mb_strlen($merchant_reference1) > 255)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference1 when calling UpdateMerchantReferences., must be smaller than or equal to 255.');
        }
        if (!is_null($merchant_reference1) && (mb_strlen($merchant_reference1) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference1 when calling UpdateMerchantReferences., must be bigger than or equal to 0.');
        }

        $this->container['merchant_reference1'] = $merchant_reference1;

        return $this;
    }

    /**
     * Gets merchant_reference2
     *
     * @return string|null
     */
    public function getMerchantReference2()
    {
        return $this->container['merchant_reference2'];
    }

    /**
     * Sets merchant_reference2
     *
     * @param string|null $merchant_reference2 New merchant reference 2. Old reference will be overwritten if this field is present.
     *
     * @return self
     */
    public function setMerchantReference2($merchant_reference2)
    {
        if (!is_null($merchant_reference2) && (mb_strlen($merchant_reference2) > 255)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference2 when calling UpdateMerchantReferences., must be smaller than or equal to 255.');
        }
        if (!is_null($merchant_reference2) && (mb_strlen($merchant_reference2) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchant_reference2 when calling UpdateMerchantReferences., must be bigger than or equal to 0.');
        }

        $this->container['merchant_reference2'] = $merchant_reference2;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


