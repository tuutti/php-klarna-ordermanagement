<?php
/**
 * SelectedShippingOptionDto
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
 * SelectedShippingOptionDto Class Doc Comment
 *
 * @category Class
 * @package  Klarna\OrderManagement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SelectedShippingOptionDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SelectedShippingOptionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'tms_reference' => 'string',
        'carrier' => 'string',
        'type' => 'string',
        'method' => 'string',
        'price' => 'int',
        'tax_amount' => 'int',
        'tax_rate' => 'int',
        'location' => '\Klarna\OrderManagement\Model\Location',
        'timeslot' => '\Klarna\OrderManagement\Model\Timeslot',
        'carrier_product' => '\Klarna\OrderManagement\Model\CarrierProduct',
        'selected_addons' => '\Klarna\OrderManagement\Model\Addon[]',
        'class' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'tms_reference' => null,
        'carrier' => null,
        'type' => null,
        'method' => null,
        'price' => 'int64',
        'tax_amount' => 'int64',
        'tax_rate' => 'int64',
        'location' => null,
        'timeslot' => null,
        'carrier_product' => null,
        'selected_addons' => null,
        'class' => null
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
        'id' => 'id',
        'name' => 'name',
        'tms_reference' => 'tms_reference',
        'carrier' => 'carrier',
        'type' => 'type',
        'method' => 'method',
        'price' => 'price',
        'tax_amount' => 'tax_amount',
        'tax_rate' => 'tax_rate',
        'location' => 'location',
        'timeslot' => 'timeslot',
        'carrier_product' => 'carrier_product',
        'selected_addons' => 'selected_addons',
        'class' => 'class'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'tms_reference' => 'setTmsReference',
        'carrier' => 'setCarrier',
        'type' => 'setType',
        'method' => 'setMethod',
        'price' => 'setPrice',
        'tax_amount' => 'setTaxAmount',
        'tax_rate' => 'setTaxRate',
        'location' => 'setLocation',
        'timeslot' => 'setTimeslot',
        'carrier_product' => 'setCarrierProduct',
        'selected_addons' => 'setSelectedAddons',
        'class' => 'setClass'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'tms_reference' => 'getTmsReference',
        'carrier' => 'getCarrier',
        'type' => 'getType',
        'method' => 'getMethod',
        'price' => 'getPrice',
        'tax_amount' => 'getTaxAmount',
        'tax_rate' => 'getTaxRate',
        'location' => 'getLocation',
        'timeslot' => 'getTimeslot',
        'carrier_product' => 'getCarrierProduct',
        'selected_addons' => 'getSelectedAddons',
        'class' => 'getClass'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['tms_reference'] = $data['tms_reference'] ?? null;
        $this->container['carrier'] = $data['carrier'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['method'] = $data['method'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['tax_rate'] = $data['tax_rate'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['timeslot'] = $data['timeslot'] ?? null;
        $this->container['carrier_product'] = $data['carrier_product'] ?? null;
        $this->container['selected_addons'] = $data['selected_addons'] ?? null;
        $this->container['class'] = $data['class'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['price']) && ($this->container['price'] < 0)) {
            $invalidProperties[] = "invalid value for 'price', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['tax_amount']) && ($this->container['tax_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'tax_amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['tax_rate']) && ($this->container['tax_rate'] < 0)) {
            $invalidProperties[] = "invalid value for 'tax_rate', must be bigger than or equal to 0.";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The id of the selected shipping option as provided by the TMS
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The display name of the selected shipping option
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets tms_reference
     *
     * @return string|null
     */
    public function getTmsReference()
    {
        return $this->container['tms_reference'];
    }

    /**
     * Sets tms_reference
     *
     * @param string|null $tms_reference The shipment_id provided by the TMS
     *
     * @return self
     */
    public function setTmsReference($tms_reference)
    {
        $this->container['tms_reference'] = $tms_reference;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string|null $carrier The carrier for the selected shipping option
     *
     * @return self
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of the selected shipping option
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string|null $method The method of the selected shipping option
     *
     * @return self
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int|null $price The price of the selected shipping option
     *
     * @return self
     */
    public function setPrice($price)
    {

        if (!is_null($price) && ($price < 0)) {
            throw new \InvalidArgumentException('invalid value for $price when calling SelectedShippingOptionDto., must be bigger than or equal to 0.');
        }

        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return int|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param int|null $tax_amount The tax amount of the selected shipping option
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {

        if (!is_null($tax_amount) && ($tax_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $tax_amount when calling SelectedShippingOptionDto., must be bigger than or equal to 0.');
        }

        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return int|null
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param int|null $tax_rate The tax rate of the selected shipping option
     *
     * @return self
     */
    public function setTaxRate($tax_rate)
    {

        if (!is_null($tax_rate) && ($tax_rate < 0)) {
            throw new \InvalidArgumentException('invalid value for $tax_rate when calling SelectedShippingOptionDto., must be bigger than or equal to 0.');
        }

        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Klarna\OrderManagement\Model\Location|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Klarna\OrderManagement\Model\Location|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets timeslot
     *
     * @return \Klarna\OrderManagement\Model\Timeslot|null
     */
    public function getTimeslot()
    {
        return $this->container['timeslot'];
    }

    /**
     * Sets timeslot
     *
     * @param \Klarna\OrderManagement\Model\Timeslot|null $timeslot timeslot
     *
     * @return self
     */
    public function setTimeslot($timeslot)
    {
        $this->container['timeslot'] = $timeslot;

        return $this;
    }

    /**
     * Gets carrier_product
     *
     * @return \Klarna\OrderManagement\Model\CarrierProduct|null
     */
    public function getCarrierProduct()
    {
        return $this->container['carrier_product'];
    }

    /**
     * Sets carrier_product
     *
     * @param \Klarna\OrderManagement\Model\CarrierProduct|null $carrier_product carrier_product
     *
     * @return self
     */
    public function setCarrierProduct($carrier_product)
    {
        $this->container['carrier_product'] = $carrier_product;

        return $this;
    }

    /**
     * Gets selected_addons
     *
     * @return \Klarna\OrderManagement\Model\Addon[]|null
     */
    public function getSelectedAddons()
    {
        return $this->container['selected_addons'];
    }

    /**
     * Sets selected_addons
     *
     * @param \Klarna\OrderManagement\Model\Addon[]|null $selected_addons Array consisting of add-ons selected by the consumer, may be empty
     *
     * @return self
     */
    public function setSelectedAddons($selected_addons)
    {
        $this->container['selected_addons'] = $selected_addons;

        return $this;
    }

    /**
     * Gets class
     *
     * @return string|null
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string|null $class The class of the selected shipping option
     *
     * @return self
     */
    public function setClass($class)
    {
        $this->container['class'] = $class;

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


