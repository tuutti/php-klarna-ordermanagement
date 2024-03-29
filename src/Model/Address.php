<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class
 * @package  Klarna\OrderManagement
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attention' => 'string',
        'city' => 'string',
        'country' => 'string',
        'email' => 'string',
        'family_name' => 'string',
        'given_name' => 'string',
        'organization_name' => 'string',
        'phone' => 'string',
        'postal_code' => 'string',
        'region' => 'string',
        'street_address' => 'string',
        'street_address2' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attention' => null,
        'city' => null,
        'country' => null,
        'email' => null,
        'family_name' => null,
        'given_name' => null,
        'organization_name' => null,
        'phone' => null,
        'postal_code' => null,
        'region' => null,
        'street_address' => null,
        'street_address2' => null,
        'title' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'attention' => false,
        'city' => false,
        'country' => false,
        'email' => false,
        'family_name' => false,
        'given_name' => false,
        'organization_name' => false,
        'phone' => false,
        'postal_code' => false,
        'region' => false,
        'street_address' => false,
        'street_address2' => false,
        'title' => false
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
        'attention' => 'attention',
        'city' => 'city',
        'country' => 'country',
        'email' => 'email',
        'family_name' => 'family_name',
        'given_name' => 'given_name',
        'organization_name' => 'organization_name',
        'phone' => 'phone',
        'postal_code' => 'postal_code',
        'region' => 'region',
        'street_address' => 'street_address',
        'street_address2' => 'street_address2',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attention' => 'setAttention',
        'city' => 'setCity',
        'country' => 'setCountry',
        'email' => 'setEmail',
        'family_name' => 'setFamilyName',
        'given_name' => 'setGivenName',
        'organization_name' => 'setOrganizationName',
        'phone' => 'setPhone',
        'postal_code' => 'setPostalCode',
        'region' => 'setRegion',
        'street_address' => 'setStreetAddress',
        'street_address2' => 'setStreetAddress2',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attention' => 'getAttention',
        'city' => 'getCity',
        'country' => 'getCountry',
        'email' => 'getEmail',
        'family_name' => 'getFamilyName',
        'given_name' => 'getGivenName',
        'organization_name' => 'getOrganizationName',
        'phone' => 'getPhone',
        'postal_code' => 'getPostalCode',
        'region' => 'getRegion',
        'street_address' => 'getStreetAddress',
        'street_address2' => 'getStreetAddress2',
        'title' => 'getTitle'
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
        $this->setIfExists('attention', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('family_name', $data ?? [], null);
        $this->setIfExists('given_name', $data ?? [], null);
        $this->setIfExists('organization_name', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('street_address', $data ?? [], null);
        $this->setIfExists('street_address2', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
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

        if (!is_null($this->container['attention']) && (mb_strlen($this->container['attention']) > 255)) {
            $invalidProperties[] = "invalid value for 'attention', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['attention']) && (mb_strlen($this->container['attention']) < 0)) {
            $invalidProperties[] = "invalid value for 'attention', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 200)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 0)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 100)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 0)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['family_name']) && (mb_strlen($this->container['family_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'family_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['family_name']) && (mb_strlen($this->container['family_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'family_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['given_name']) && (mb_strlen($this->container['given_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'given_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['given_name']) && (mb_strlen($this->container['given_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'given_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['organization_name']) && (mb_strlen($this->container['organization_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'organization_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['organization_name']) && (mb_strlen($this->container['organization_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'organization_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 100)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 0)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 200)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['street_address']) && (mb_strlen($this->container['street_address']) > 100)) {
            $invalidProperties[] = "invalid value for 'street_address', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['street_address']) && (mb_strlen($this->container['street_address']) < 0)) {
            $invalidProperties[] = "invalid value for 'street_address', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['street_address2']) && (mb_strlen($this->container['street_address2']) > 100)) {
            $invalidProperties[] = "invalid value for 'street_address2', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['street_address2']) && (mb_strlen($this->container['street_address2']) < 0)) {
            $invalidProperties[] = "invalid value for 'street_address2', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 20)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
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
     * Gets attention
     *
     * @return string|null
     */
    public function getAttention()
    {
        return $this->container['attention'];
    }

    /**
     * Sets attention
     *
     * @param string|null $attention ‘Attn.’ - optional parameter. Maximum 255 characters.
     *
     * @return self
     */
    public function setAttention($attention)
    {
        if (is_null($attention)) {
            throw new \InvalidArgumentException('non-nullable attention cannot be null');
        }
        if ((mb_strlen($attention) > 255)) {
            throw new \InvalidArgumentException('invalid length for $attention when calling Address., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($attention) < 0)) {
            throw new \InvalidArgumentException('invalid length for $attention when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['attention'] = $attention;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City. Maximum 200 characters.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        if ((mb_strlen($city) > 200)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($city) < 0)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Country. ISO 3166 alpha-2.
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email E-mail address. Maximum 100 characters.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        if ((mb_strlen($email) > 100)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Address., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets family_name
     *
     * @return string|null
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string|null $family_name Family name. Maximum 100 characters.
     *
     * @return self
     */
    public function setFamilyName($family_name)
    {
        if (is_null($family_name)) {
            throw new \InvalidArgumentException('non-nullable family_name cannot be null');
        }
        if ((mb_strlen($family_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $family_name when calling Address., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($family_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $family_name when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['family_name'] = $family_name;

        return $this;
    }

    /**
     * Gets given_name
     *
     * @return string|null
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string|null $given_name Given name. Maximum 100 characters.
     *
     * @return self
     */
    public function setGivenName($given_name)
    {
        if (is_null($given_name)) {
            throw new \InvalidArgumentException('non-nullable given_name cannot be null');
        }
        if ((mb_strlen($given_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $given_name when calling Address., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($given_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $given_name when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets organization_name
     *
     * @return string|null
     */
    public function getOrganizationName()
    {
        return $this->container['organization_name'];
    }

    /**
     * Sets organization_name
     *
     * @param string|null $organization_name Organization name (if applicable). Only applicable for B2B customers. Maximum 255 characters.
     *
     * @return self
     */
    public function setOrganizationName($organization_name)
    {
        if (is_null($organization_name)) {
            throw new \InvalidArgumentException('non-nullable organization_name cannot be null');
        }
        if ((mb_strlen($organization_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $organization_name when calling Address., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($organization_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $organization_name when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['organization_name'] = $organization_name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Phone number. Maximum 100 characters.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        if ((mb_strlen($phone) > 100)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling Address., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($phone) < 0)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code Postcode. Maximum 10 characters.
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        if ((mb_strlen($postal_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling Address., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($postal_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region State/Region. Required for US. Maximum 200 characters.
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }
        if ((mb_strlen($region) > 200)) {
            throw new \InvalidArgumentException('invalid length for $region when calling Address., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($region) < 0)) {
            throw new \InvalidArgumentException('invalid length for $region when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets street_address
     *
     * @return string|null
     */
    public function getStreetAddress()
    {
        return $this->container['street_address'];
    }

    /**
     * Sets street_address
     *
     * @param string|null $street_address First line of street address. Maximum 100 characters.
     *
     * @return self
     */
    public function setStreetAddress($street_address)
    {
        if (is_null($street_address)) {
            throw new \InvalidArgumentException('non-nullable street_address cannot be null');
        }
        if ((mb_strlen($street_address) > 100)) {
            throw new \InvalidArgumentException('invalid length for $street_address when calling Address., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($street_address) < 0)) {
            throw new \InvalidArgumentException('invalid length for $street_address when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['street_address'] = $street_address;

        return $this;
    }

    /**
     * Gets street_address2
     *
     * @return string|null
     */
    public function getStreetAddress2()
    {
        return $this->container['street_address2'];
    }

    /**
     * Sets street_address2
     *
     * @param string|null $street_address2 Second line of street address. Maximum 100 characters.
     *
     * @return self
     */
    public function setStreetAddress2($street_address2)
    {
        if (is_null($street_address2)) {
            throw new \InvalidArgumentException('non-nullable street_address2 cannot be null');
        }
        if ((mb_strlen($street_address2) > 100)) {
            throw new \InvalidArgumentException('invalid length for $street_address2 when calling Address., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($street_address2) < 0)) {
            throw new \InvalidArgumentException('invalid length for $street_address2 when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['street_address2'] = $street_address2;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title. Between 0 and 20 characters.
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        if ((mb_strlen($title) > 20)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Address., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($title) < 0)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['title'] = $title;

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


