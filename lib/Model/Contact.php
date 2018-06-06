<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class Contact
 *
 * @category Class
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Contact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'phone' => 'string',
        'mobilePhone' => 'string',
        'fax' => 'string',
        'email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'phone' => null,
        'mobilePhone' => null,
        'fax' => null,
        'email' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'phone' => 'phone',
        'mobilePhone' => 'mobilePhone',
        'fax' => 'fax',
        'email' => 'email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phone' => 'setPhone',
        'mobilePhone' => 'setMobilePhone',
        'fax' => 'setFax',
        'email' => 'setEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phone' => 'getPhone',
        'mobilePhone' => 'getMobilePhone',
        'fax' => 'getFax',
        'email' => 'getEmail'
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
        return self::$swaggerModelName;
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
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['mobilePhone'] = $data['mobilePhone'] ?? null;
        $this->container['fax'] = $data['fax'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null !== $this->container['phone'] && (mb_strlen($this->container['phone']) > 32)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 32.";
        }

        if (null !== $this->container['mobilePhone'] && (mb_strlen($this->container['mobilePhone']) > 32)) {
            $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be smaller than or equal to 32.";
        }

        if (null !== $this->container['fax'] && (mb_strlen($this->container['fax']) > 32)) {
            $invalidProperties[] = "invalid value for 'fax', the character length must be smaller than or equal to 32.";
        }

        if (null !== $this->container['email'] && (mb_strlen($this->container['email']) > 254)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 254.";
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
        return \count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setPhone($phone)
    {
        if (null !== $phone && (mb_strlen($phone) > 32)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling Contact., must be smaller than or equal to 32.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets mobilePhone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->container['mobilePhone'];
    }

    /**
     * Sets mobilePhone
     *
     * @param string $mobilePhone mobilePhone
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setMobilePhone($mobilePhone)
    {
        if (null !== $mobilePhone && (mb_strlen($mobilePhone) > 32)) {
            throw new \InvalidArgumentException('invalid length for $mobilePhone when calling Contact., must be smaller than or equal to 32.');
        }

        $this->container['mobilePhone'] = $mobilePhone;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax fax
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setFax($fax)
    {
        if (null !== $fax && (mb_strlen($fax) > 32)) {
            throw new \InvalidArgumentException('invalid length for $fax when calling Contact., must be smaller than or equal to 32.');
        }

        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setEmail($email)
    {
        if (null !== $email && (mb_strlen($email) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Contact., must be smaller than or equal to 254.');
        }

        $this->container['email'] = $email;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (null === $offset) {
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (\defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


