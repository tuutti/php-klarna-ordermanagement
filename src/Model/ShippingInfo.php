<?php
/**
 * ShippingInfo
 *
 * PHP version 7.2
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
 * OpenAPI Generator version: 5.2.0
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
 * ShippingInfo Class Doc Comment
 *
 * @category Class
 * @package  Klarna\OrderManagement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShippingInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'shipping_info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipping_company' => 'string',
        'shipping_method' => 'string',
        'tracking_number' => 'string',
        'tracking_uri' => 'string',
        'return_shipping_company' => 'string',
        'return_tracking_number' => 'string',
        'return_tracking_uri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipping_company' => null,
        'shipping_method' => null,
        'tracking_number' => null,
        'tracking_uri' => null,
        'return_shipping_company' => null,
        'return_tracking_number' => null,
        'return_tracking_uri' => null
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
        'shipping_company' => 'shipping_company',
        'shipping_method' => 'shipping_method',
        'tracking_number' => 'tracking_number',
        'tracking_uri' => 'tracking_uri',
        'return_shipping_company' => 'return_shipping_company',
        'return_tracking_number' => 'return_tracking_number',
        'return_tracking_uri' => 'return_tracking_uri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_company' => 'setShippingCompany',
        'shipping_method' => 'setShippingMethod',
        'tracking_number' => 'setTrackingNumber',
        'tracking_uri' => 'setTrackingUri',
        'return_shipping_company' => 'setReturnShippingCompany',
        'return_tracking_number' => 'setReturnTrackingNumber',
        'return_tracking_uri' => 'setReturnTrackingUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_company' => 'getShippingCompany',
        'shipping_method' => 'getShippingMethod',
        'tracking_number' => 'getTrackingNumber',
        'tracking_uri' => 'getTrackingUri',
        'return_shipping_company' => 'getReturnShippingCompany',
        'return_tracking_number' => 'getReturnTrackingNumber',
        'return_tracking_uri' => 'getReturnTrackingUri'
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
        $this->container['shipping_company'] = $data['shipping_company'] ?? null;
        $this->container['shipping_method'] = $data['shipping_method'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['tracking_uri'] = $data['tracking_uri'] ?? null;
        $this->container['return_shipping_company'] = $data['return_shipping_company'] ?? null;
        $this->container['return_tracking_number'] = $data['return_tracking_number'] ?? null;
        $this->container['return_tracking_uri'] = $data['return_tracking_uri'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['shipping_company']) && (mb_strlen($this->container['shipping_company']) > 100)) {
            $invalidProperties[] = "invalid value for 'shipping_company', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['shipping_company']) && (mb_strlen($this->container['shipping_company']) < 0)) {
            $invalidProperties[] = "invalid value for 'shipping_company', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['shipping_method']) && !preg_match("/(PickUpStore|Home|BoxReg|BoxUnreg|PickUpPoint|Own|Postal|DHLPackstation|Digital|Undefined|PickUpWarehouse|ClickCollect)/", $this->container['shipping_method'])) {
            $invalidProperties[] = "invalid value for 'shipping_method', must be conform to the pattern /(PickUpStore|Home|BoxReg|BoxUnreg|PickUpPoint|Own|Postal|DHLPackstation|Digital|Undefined|PickUpWarehouse|ClickCollect)/.";
        }

        if (!is_null($this->container['tracking_number']) && (mb_strlen($this->container['tracking_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'tracking_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['tracking_number']) && (mb_strlen($this->container['tracking_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'tracking_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['tracking_uri']) && (mb_strlen($this->container['tracking_uri']) > 1024)) {
            $invalidProperties[] = "invalid value for 'tracking_uri', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['tracking_uri']) && (mb_strlen($this->container['tracking_uri']) < 0)) {
            $invalidProperties[] = "invalid value for 'tracking_uri', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['return_shipping_company']) && (mb_strlen($this->container['return_shipping_company']) > 100)) {
            $invalidProperties[] = "invalid value for 'return_shipping_company', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['return_shipping_company']) && (mb_strlen($this->container['return_shipping_company']) < 0)) {
            $invalidProperties[] = "invalid value for 'return_shipping_company', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['return_tracking_number']) && (mb_strlen($this->container['return_tracking_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'return_tracking_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['return_tracking_number']) && (mb_strlen($this->container['return_tracking_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'return_tracking_number', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['return_tracking_uri']) && (mb_strlen($this->container['return_tracking_uri']) > 1024)) {
            $invalidProperties[] = "invalid value for 'return_tracking_uri', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['return_tracking_uri']) && (mb_strlen($this->container['return_tracking_uri']) < 0)) {
            $invalidProperties[] = "invalid value for 'return_tracking_uri', the character length must be bigger than or equal to 0.";
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
     * Gets shipping_company
     *
     * @return string|null
     */
    public function getShippingCompany()
    {
        return $this->container['shipping_company'];
    }

    /**
     * Sets shipping_company
     *
     * @param string|null $shipping_company Name of the shipping company (as specific as possible). Maximum 100 characters. Example: 'DHL US' and not only 'DHL'
     *
     * @return self
     */
    public function setShippingCompany($shipping_company)
    {
        if (!is_null($shipping_company) && (mb_strlen($shipping_company) > 100)) {
            throw new \InvalidArgumentException('invalid length for $shipping_company when calling ShippingInfo., must be smaller than or equal to 100.');
        }
        if (!is_null($shipping_company) && (mb_strlen($shipping_company) < 0)) {
            throw new \InvalidArgumentException('invalid length for $shipping_company when calling ShippingInfo., must be bigger than or equal to 0.');
        }

        $this->container['shipping_company'] = $shipping_company;

        return $this;
    }

    /**
     * Gets shipping_method
     *
     * @return string|null
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param string|null $shipping_method Shipping method. Allowed values matches (PickUpStore|Home|BoxReg|BoxUnreg|PickUpPoint|Own|Postal|DHLPackstation|Digital|Undefined|PickUpWarehouse|ClickCollect)
     *
     * @return self
     */
    public function setShippingMethod($shipping_method)
    {

        if (!is_null($shipping_method) && (!preg_match("/(PickUpStore|Home|BoxReg|BoxUnreg|PickUpPoint|Own|Postal|DHLPackstation|Digital|Undefined|PickUpWarehouse|ClickCollect)/", $shipping_method))) {
            throw new \InvalidArgumentException("invalid value for $shipping_method when calling ShippingInfo., must conform to the pattern /(PickUpStore|Home|BoxReg|BoxUnreg|PickUpPoint|Own|Postal|DHLPackstation|Digital|Undefined|PickUpWarehouse|ClickCollect)/.");
        }

        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number Tracking number for the shipment. Maximum 100 characters.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        if (!is_null($tracking_number) && (mb_strlen($tracking_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $tracking_number when calling ShippingInfo., must be smaller than or equal to 100.');
        }
        if (!is_null($tracking_number) && (mb_strlen($tracking_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $tracking_number when calling ShippingInfo., must be bigger than or equal to 0.');
        }

        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets tracking_uri
     *
     * @return string|null
     */
    public function getTrackingUri()
    {
        return $this->container['tracking_uri'];
    }

    /**
     * Sets tracking_uri
     *
     * @param string|null $tracking_uri URI where the customer can track their shipment. Maximum 1024 characters.
     *
     * @return self
     */
    public function setTrackingUri($tracking_uri)
    {
        if (!is_null($tracking_uri) && (mb_strlen($tracking_uri) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $tracking_uri when calling ShippingInfo., must be smaller than or equal to 1024.');
        }
        if (!is_null($tracking_uri) && (mb_strlen($tracking_uri) < 0)) {
            throw new \InvalidArgumentException('invalid length for $tracking_uri when calling ShippingInfo., must be bigger than or equal to 0.');
        }

        $this->container['tracking_uri'] = $tracking_uri;

        return $this;
    }

    /**
     * Gets return_shipping_company
     *
     * @return string|null
     */
    public function getReturnShippingCompany()
    {
        return $this->container['return_shipping_company'];
    }

    /**
     * Sets return_shipping_company
     *
     * @param string|null $return_shipping_company Name of the shipping company for the return shipment (as specific as possible). Maximum 100 characters. Example: 'DHL US' and not only 'DHL'
     *
     * @return self
     */
    public function setReturnShippingCompany($return_shipping_company)
    {
        if (!is_null($return_shipping_company) && (mb_strlen($return_shipping_company) > 100)) {
            throw new \InvalidArgumentException('invalid length for $return_shipping_company when calling ShippingInfo., must be smaller than or equal to 100.');
        }
        if (!is_null($return_shipping_company) && (mb_strlen($return_shipping_company) < 0)) {
            throw new \InvalidArgumentException('invalid length for $return_shipping_company when calling ShippingInfo., must be bigger than or equal to 0.');
        }

        $this->container['return_shipping_company'] = $return_shipping_company;

        return $this;
    }

    /**
     * Gets return_tracking_number
     *
     * @return string|null
     */
    public function getReturnTrackingNumber()
    {
        return $this->container['return_tracking_number'];
    }

    /**
     * Sets return_tracking_number
     *
     * @param string|null $return_tracking_number Tracking number for the return shipment. Maximum 100 characters.
     *
     * @return self
     */
    public function setReturnTrackingNumber($return_tracking_number)
    {
        if (!is_null($return_tracking_number) && (mb_strlen($return_tracking_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $return_tracking_number when calling ShippingInfo., must be smaller than or equal to 100.');
        }
        if (!is_null($return_tracking_number) && (mb_strlen($return_tracking_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $return_tracking_number when calling ShippingInfo., must be bigger than or equal to 0.');
        }

        $this->container['return_tracking_number'] = $return_tracking_number;

        return $this;
    }

    /**
     * Gets return_tracking_uri
     *
     * @return string|null
     */
    public function getReturnTrackingUri()
    {
        return $this->container['return_tracking_uri'];
    }

    /**
     * Sets return_tracking_uri
     *
     * @param string|null $return_tracking_uri URL where the customer can track the return shipment. Maximum 1024 characters.
     *
     * @return self
     */
    public function setReturnTrackingUri($return_tracking_uri)
    {
        if (!is_null($return_tracking_uri) && (mb_strlen($return_tracking_uri) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $return_tracking_uri when calling ShippingInfo., must be smaller than or equal to 1024.');
        }
        if (!is_null($return_tracking_uri) && (mb_strlen($return_tracking_uri) < 0)) {
            throw new \InvalidArgumentException('invalid length for $return_tracking_uri when calling ShippingInfo., must be bigger than or equal to 0.');
        }

        $this->container['return_tracking_uri'] = $return_tracking_uri;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
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
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
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


