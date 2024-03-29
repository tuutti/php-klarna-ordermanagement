<?php
/**
 * Refund
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
 * Refund Class Doc Comment
 *
 * @category Class
 * @package  Klarna\OrderManagement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Refund implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Refund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'credit_invoice' => 'bool',
        'description' => 'string',
        'order_lines' => '\Klarna\OrderManagement\Model\OrderLine[]',
        'reference' => 'string',
        'refund_id' => 'string',
        'refunded_amount' => 'int',
        'refunded_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'credit_invoice' => null,
        'description' => null,
        'order_lines' => null,
        'reference' => null,
        'refund_id' => null,
        'refunded_amount' => 'int64',
        'refunded_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'credit_invoice' => false,
        'description' => false,
        'order_lines' => false,
        'reference' => false,
        'refund_id' => false,
        'refunded_amount' => false,
        'refunded_at' => false
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
        'credit_invoice' => 'credit_invoice',
        'description' => 'description',
        'order_lines' => 'order_lines',
        'reference' => 'reference',
        'refund_id' => 'refund_id',
        'refunded_amount' => 'refunded_amount',
        'refunded_at' => 'refunded_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'credit_invoice' => 'setCreditInvoice',
        'description' => 'setDescription',
        'order_lines' => 'setOrderLines',
        'reference' => 'setReference',
        'refund_id' => 'setRefundId',
        'refunded_amount' => 'setRefundedAmount',
        'refunded_at' => 'setRefundedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'credit_invoice' => 'getCreditInvoice',
        'description' => 'getDescription',
        'order_lines' => 'getOrderLines',
        'reference' => 'getReference',
        'refund_id' => 'getRefundId',
        'refunded_amount' => 'getRefundedAmount',
        'refunded_at' => 'getRefundedAt'
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
        $this->setIfExists('credit_invoice', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('order_lines', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('refund_id', $data ?? [], null);
        $this->setIfExists('refunded_amount', $data ?? [], null);
        $this->setIfExists('refunded_at', $data ?? [], null);
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
     * Gets credit_invoice
     *
     * @return bool|null
     */
    public function getCreditInvoice()
    {
        return $this->container['credit_invoice'];
    }

    /**
     * Sets credit_invoice
     *
     * @param bool|null $credit_invoice Only relevant for B2B Orders. If the flag is set to true for an order with B2B_invoice as payment method, the customer will receive the refund as a credit invoice.
     *
     * @return self
     */
    public function setCreditInvoice($credit_invoice)
    {
        if (is_null($credit_invoice)) {
            throw new \InvalidArgumentException('non-nullable credit_invoice cannot be null');
        }
        $this->container['credit_invoice'] = $credit_invoice;

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
     * @param string|null $description Description of the refund shown to the customer. Max length is 255 characters.
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
     * @param \Klarna\OrderManagement\Model\OrderLine[]|null $order_lines Order lines for the refund shown to the customer. Optional but increases the customer experience. Maximum 1000 order lines.
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
     * @param string|null $reference Internal reference to the refund that is also included in the settlement files. Max length is 255 characters.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets refund_id
     *
     * @return string|null
     */
    public function getRefundId()
    {
        return $this->container['refund_id'];
    }

    /**
     * Sets refund_id
     *
     * @param string|null $refund_id The refund id. Generated when the refund is created.
     *
     * @return self
     */
    public function setRefundId($refund_id)
    {
        if (is_null($refund_id)) {
            throw new \InvalidArgumentException('non-nullable refund_id cannot be null');
        }
        $this->container['refund_id'] = $refund_id;

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
     * @param int|null $refunded_amount Refunded amount in minor units.
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
     * Gets refunded_at
     *
     * @return \DateTime|null
     */
    public function getRefundedAt()
    {
        return $this->container['refunded_at'];
    }

    /**
     * Sets refunded_at
     *
     * @param \DateTime|null $refunded_at The time of the refund. ISO 8601.
     *
     * @return self
     */
    public function setRefundedAt($refunded_at)
    {
        if (is_null($refunded_at)) {
            throw new \InvalidArgumentException('non-nullable refunded_at cannot be null');
        }
        $this->container['refunded_at'] = $refunded_at;

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


