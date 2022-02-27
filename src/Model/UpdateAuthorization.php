<?php
/**
 * UpdateAuthorization
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
 * UpdateAuthorization Class Doc Comment
 *
 * @category Class
 * @package  Klarna\OrderManagement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateAuthorization implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Update authorization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_amount' => 'int',
        'description' => 'string',
        'order_lines' => '\Klarna\OrderManagement\Model\OrderLine[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_amount' => 'int64',
        'description' => null,
        'order_lines' => null
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
        'order_amount' => 'order_amount',
        'description' => 'description',
        'order_lines' => 'order_lines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_amount' => 'setOrderAmount',
        'description' => 'setDescription',
        'order_lines' => 'setOrderLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_amount' => 'getOrderAmount',
        'description' => 'getDescription',
        'order_lines' => 'getOrderLines'
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
        $this->container['order_amount'] = $data['order_amount'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['order_lines'] = $data['order_lines'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order_amount'] === null) {
            $invalidProperties[] = "'order_amount' can't be null";
        }
        if (($this->container['order_amount'] > 100000000)) {
            $invalidProperties[] = "invalid value for 'order_amount', must be smaller than or equal to 100000000.";
        }

        if (($this->container['order_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'order_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['order_lines']) && (count($this->container['order_lines']) > 1000)) {
            $invalidProperties[] = "invalid value for 'order_lines', number of items must be less than or equal to 1000.";
        }

        if (!is_null($this->container['order_lines']) && (count($this->container['order_lines']) < 0)) {
            $invalidProperties[] = "invalid value for 'order_lines', number of items must be greater than or equal to 0.";
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
     * Gets order_amount
     *
     * @return int
     */
    public function getOrderAmount()
    {
        return $this->container['order_amount'];
    }

    /**
     * Sets order_amount
     *
     * @param int $order_amount The new total order amount. Minor units.
     *
     * @return self
     */
    public function setOrderAmount($order_amount)
    {

        if (($order_amount > 100000000)) {
            throw new \InvalidArgumentException('invalid value for $order_amount when calling UpdateAuthorization., must be smaller than or equal to 100000000.');
        }
        if (($order_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $order_amount when calling UpdateAuthorization., must be bigger than or equal to 0.');
        }

        $this->container['order_amount'] = $order_amount;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the change.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling UpdateAuthorization., must be smaller than or equal to 255.');
        }
        if (!is_null($description) && (mb_strlen($description) < 0)) {
            throw new \InvalidArgumentException('invalid length for $description when calling UpdateAuthorization., must be bigger than or equal to 0.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets order_lines
     *
     * @return \Klarna\OrderManagement\Model\OrderLine[]|null
     */
    public function getOrderLines()
    {
        return $this->container['order_lines'];
    }

    /**
     * Sets order_lines
     *
     * @param \Klarna\OrderManagement\Model\OrderLine[]|null $order_lines New set of order lines for the order.
     *
     * @return self
     */
    public function setOrderLines($order_lines)
    {

        if (!is_null($order_lines) && (count($order_lines) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $order_lines when calling UpdateAuthorization., number of items must be less than or equal to 1000.');
        }
        if (!is_null($order_lines) && (count($order_lines) < 0)) {
            throw new \InvalidArgumentException('invalid length for $order_lines when calling UpdateAuthorization., number of items must be greater than or equal to 0.');
        }
        $this->container['order_lines'] = $order_lines;

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


