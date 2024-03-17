<?php
/**
 * Capture
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Klarna\OrderManagement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klarna Order Management API
 *
 * The Order Management API is used for handling an order after the customer has completed the purchase. It is used for all actions you need to manage your orders. Examples being: updating, capturing, reading and refunding an order.  Read more on the [Order management](https://docs.klarna.com/order-management/) process.  # Authentication  <!-- ReDoc-Inject: <security-definitions> -->
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
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
 * Capture Class Doc Comment
 *
 * @category Class
 * @package  Klarna\OrderManagement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Capture implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Capture';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'billing_address' => '\Klarna\OrderManagement\Model\Address',
        'capture_id' => 'string',
        'captured_amount' => 'int',
        'captured_at' => '\DateTime',
        'description' => 'string',
        'klarna_reference' => 'string',
        'order_lines' => '\Klarna\OrderManagement\Model\OrderLine[]',
        'reference' => 'string',
        'refunded_amount' => 'int',
        'shipping_address' => '\Klarna\OrderManagement\Model\Address',
        'shipping_info' => '\Klarna\OrderManagement\Model\ShippingInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'billing_address' => null,
        'capture_id' => null,
        'captured_amount' => 'int64',
        'captured_at' => 'date-time',
        'description' => null,
        'klarna_reference' => null,
        'order_lines' => null,
        'reference' => null,
        'refunded_amount' => 'int64',
        'shipping_address' => null,
        'shipping_info' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'billing_address' => false,
        'capture_id' => false,
        'captured_amount' => false,
        'captured_at' => false,
        'description' => false,
        'klarna_reference' => false,
        'order_lines' => false,
        'reference' => false,
        'refunded_amount' => false,
        'shipping_address' => false,
        'shipping_info' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
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
     * @var string[]
     */
    protected static $attributeMap = [
        'billing_address' => 'billing_address',
        'capture_id' => 'capture_id',
        'captured_amount' => 'captured_amount',
        'captured_at' => 'captured_at',
        'description' => 'description',
        'klarna_reference' => 'klarna_reference',
        'order_lines' => 'order_lines',
        'reference' => 'reference',
        'refunded_amount' => 'refunded_amount',
        'shipping_address' => 'shipping_address',
        'shipping_info' => 'shipping_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_address' => 'setBillingAddress',
        'capture_id' => 'setCaptureId',
        'captured_amount' => 'setCapturedAmount',
        'captured_at' => 'setCapturedAt',
        'description' => 'setDescription',
        'klarna_reference' => 'setKlarnaReference',
        'order_lines' => 'setOrderLines',
        'reference' => 'setReference',
        'refunded_amount' => 'setRefundedAmount',
        'shipping_address' => 'setShippingAddress',
        'shipping_info' => 'setShippingInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_address' => 'getBillingAddress',
        'capture_id' => 'getCaptureId',
        'captured_amount' => 'getCapturedAmount',
        'captured_at' => 'getCapturedAt',
        'description' => 'getDescription',
        'klarna_reference' => 'getKlarnaReference',
        'order_lines' => 'getOrderLines',
        'reference' => 'getReference',
        'refunded_amount' => 'getRefundedAmount',
        'shipping_address' => 'getShippingAddress',
        'shipping_info' => 'getShippingInfo'
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
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('capture_id', $data ?? [], null);
        $this->setIfExists('captured_amount', $data ?? [], null);
        $this->setIfExists('captured_at', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('klarna_reference', $data ?? [], null);
        $this->setIfExists('order_lines', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('refunded_amount', $data ?? [], null);
        $this->setIfExists('shipping_address', $data ?? [], null);
        $this->setIfExists('shipping_info', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['captured_amount']) && ($this->container['captured_amount'] < 1)) {
            $invalidProperties[] = "invalid value for 'captured_amount', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) < 0)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 0.";
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
     * Gets billing_address
     *
     * @return \Klarna\OrderManagement\Model\Address|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Klarna\OrderManagement\Model\Address|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        if (is_null($billing_address)) {
            throw new \InvalidArgumentException('non-nullable billing_address cannot be null');
        }
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets capture_id
     *
     * @return string|null
     */
    public function getCaptureId()
    {
        return $this->container['capture_id'];
    }

    /**
     * Sets capture_id
     *
     * @param string|null $capture_id The capture id. Generated when the capture is created.
     *
     * @return self
     */
    public function setCaptureId($capture_id)
    {
        if (is_null($capture_id)) {
            throw new \InvalidArgumentException('non-nullable capture_id cannot be null');
        }
        $this->container['capture_id'] = $capture_id;

        return $this;
    }

    /**
     * Gets captured_amount
     *
     * @return int|null
     */
    public function getCapturedAmount()
    {
        return $this->container['captured_amount'];
    }

    /**
     * Sets captured_amount
     *
     * @param int|null $captured_amount The captured amount in minor units.
     *
     * @return self
     */
    public function setCapturedAmount($captured_amount)
    {
        if (is_null($captured_amount)) {
            throw new \InvalidArgumentException('non-nullable captured_amount cannot be null');
        }

        if (($captured_amount < 1)) {
            throw new \InvalidArgumentException('invalid value for $captured_amount when calling Capture., must be bigger than or equal to 1.');
        }

        $this->container['captured_amount'] = $captured_amount;

        return $this;
    }

    /**
     * Gets captured_at
     *
     * @return \DateTime|null
     */
    public function getCapturedAt()
    {
        return $this->container['captured_at'];
    }

    /**
     * Sets captured_at
     *
     * @param \DateTime|null $captured_at The time of the capture. Specified in ISO 8601.
     *
     * @return self
     */
    public function setCapturedAt($captured_at)
    {
        if (is_null($captured_at)) {
            throw new \InvalidArgumentException('non-nullable captured_at cannot be null');
        }
        $this->container['captured_at'] = $captured_at;

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
     * @param string|null $description Description of the capture shown to the customer.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets klarna_reference
     *
     * @return string|null
     */
    public function getKlarnaReference()
    {
        return $this->container['klarna_reference'];
    }

    /**
     * Sets klarna_reference
     *
     * @param string|null $klarna_reference Customer friendly reference id, used as a reference when communicating with the customer.
     *
     * @return self
     */
    public function setKlarnaReference($klarna_reference)
    {
        if (is_null($klarna_reference)) {
            throw new \InvalidArgumentException('non-nullable klarna_reference cannot be null');
        }
        $this->container['klarna_reference'] = $klarna_reference;

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
     * @param \Klarna\OrderManagement\Model\OrderLine[]|null $order_lines List of order lines for the capture shown to the customer.
     *
     * @return self
     */
    public function setOrderLines($order_lines)
    {
        if (is_null($order_lines)) {
            throw new \InvalidArgumentException('non-nullable order_lines cannot be null');
        }
        $this->container['order_lines'] = $order_lines;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference Internal reference to the capture which will be included in the settlement files. Max length is 255 characters.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        if ((mb_strlen($reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling Capture., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($reference) < 0)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling Capture., must be bigger than or equal to 0.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets refunded_amount
     *
     * @return int|null
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     *
     * @param int|null $refunded_amount Refunded amount for this capture in minor units.
     *
     * @return self
     */
    public function setRefundedAmount($refunded_amount)
    {
        if (is_null($refunded_amount)) {
            throw new \InvalidArgumentException('non-nullable refunded_amount cannot be null');
        }
        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \Klarna\OrderManagement\Model\Address|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \Klarna\OrderManagement\Model\Address|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        if (is_null($shipping_address)) {
            throw new \InvalidArgumentException('non-nullable shipping_address cannot be null');
        }
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets shipping_info
     *
     * @return \Klarna\OrderManagement\Model\ShippingInfo[]|null
     */
    public function getShippingInfo()
    {
        return $this->container['shipping_info'];
    }

    /**
     * Sets shipping_info
     *
     * @param \Klarna\OrderManagement\Model\ShippingInfo[]|null $shipping_info Shipping information for this capture.
     *
     * @return self
     */
    public function setShippingInfo($shipping_info)
    {
        if (is_null($shipping_info)) {
            throw new \InvalidArgumentException('non-nullable shipping_info cannot be null');
        }
        $this->container['shipping_info'] = $shipping_info;

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


